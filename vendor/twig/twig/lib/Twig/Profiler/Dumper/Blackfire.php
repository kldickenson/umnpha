<?php

use Twig\Profiler\Dumper\BlackfireDumper;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class Twig_Profiler_Dumper_Blackfire
{
    public function dump(Twig_Profiler_Profile $profile)
    {
        $data = array();
        $this->dumpProfile('main()', $profile, $data);
        $this->dumpChildren('main()', $profile, $data);

        $start = sprintf('%f', microtime(true));
        $str = <<<EOF
file-format: BlackfireProbe
cost-dimensions: wt mu pmu
request-start: {$start}


EOF;

        foreach ($data as $name => $values) {
            $str .= "{$name}//{$values['ct']} {$values['wt']} {$values['mu']} {$values['pmu']}\n";
        }

        return $str;
    }

    private function dumpChildren($parent, Twig_Profiler_Profile $profile, &$data)
    {
        foreach ($profile as $p) {
            if ($p->isTemplate()) {
                $name = $p->getTemplate();
            } else {
                $name = sprintf('%s::%s(%s)', $p->getTemplate(), $p->getType(), $p->getName());
            }
            $this->dumpProfile(sprintf('%s==>%s', $parent, $name), $p, $data);
            $this->dumpChildren($name, $p, $data);
        }
    }

if (\false) {
    class Twig_Profiler_Dumper_Blackfire extends BlackfireDumper
    {
    }
}

class_alias('Twig_Profiler_Dumper_Blackfire', 'Twig\Profiler\Dumper\BlackfireDumper', false);
