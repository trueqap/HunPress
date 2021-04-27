<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$modules_dir = new DirectoryIterator(HP_MODULES);
foreach ($modules_dir as $fileinfo) {
    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
        require HP_MODULES.$fileinfo->getFilename().'/'.$fileinfo->getFilename().'.php';
    }
}
