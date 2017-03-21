<?php

// Import all config changes.
echo "Updating database...\n";
passthru('drush updb -y');
echo "Database update complete.\n";
