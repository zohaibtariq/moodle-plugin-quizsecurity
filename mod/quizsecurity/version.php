<?php

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019111800;
$plugin->requires  = 2019111200;
$plugin->component = 'mod_quizsecurity';
$plugin->cron      = 0;
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.0';
$plugin->dependencies = [
    'mod_quiz' => ANY_VERSION,
];