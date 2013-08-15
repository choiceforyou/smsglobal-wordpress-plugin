<?php
$smsglobal_files = array(
    'Smsglobal.php',
    'SettingsPage.php',
);

// For PHP < 5.3, we can't use __DIR__
$smsglobal_dir = dirname(__FILE__);

foreach ($smsglobal_files as $smsglobal_file) {
    require sprintf('%s/%s', $smsglobal_dir, $smsglobal_file);
}

// Clean up the global namespace
unset($smsglobal_files, $smsglobal_file, $smsglobal_dir);
