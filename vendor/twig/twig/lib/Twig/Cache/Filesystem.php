<?php

use Twig\Cache\FilesystemCache;

class_exists('Twig\Cache\FilesystemCache');

if (\false) {
    class Twig_Cache_Filesystem extends FilesystemCache
    {
        if (file_exists($key)) {
            @include_once $key;
        }
    }

    public function write($key, $content)
    {
        $dir = dirname($key);
        if (!is_dir($dir)) {
            if (false === @mkdir($dir, 0777, true)) {
                if (PHP_VERSION_ID >= 50300) {
                    clearstatcache(true, $dir);
                }
                if (!is_dir($dir)) {
                    throw new RuntimeException(sprintf('Unable to create the cache directory (%s).', $dir));
                }
            }
        } elseif (!is_writable($dir)) {
            throw new RuntimeException(sprintf('Unable to write in the cache directory (%s).', $dir));
        }

        $tmpFile = tempnam($dir, basename($key));
        if (false !== @file_put_contents($tmpFile, $content) && @rename($tmpFile, $key)) {
            @chmod($key, 0666 & ~umask());

            if (self::FORCE_BYTECODE_INVALIDATION == ($this->options & self::FORCE_BYTECODE_INVALIDATION)) {
                // Compile cached file into bytecode cache
                if (function_exists('opcache_invalidate')) {
                    opcache_invalidate($key, true);
                } elseif (function_exists('apc_compile_file')) {
                    apc_compile_file($key);
                }
            }

            return;
        }

        throw new RuntimeException(sprintf('Failed to write cache file "%s".', $key));
    }

    public function getTimestamp($key)
    {
        if (!file_exists($key)) {
            return 0;
        }

        return (int) @filemtime($key);
    }
}

class_alias('Twig_Cache_Filesystem', 'Twig\Cache\FilesystemCache', false);
