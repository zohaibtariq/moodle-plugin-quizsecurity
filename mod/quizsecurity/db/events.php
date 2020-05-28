<?php

$observers = [
    [
        'eventname' => '\mod_quizsecurity\event\attempt_submitted',
        'includefile' => '/mod/quizsecurity/locallib.php',
        'callback' => 'quizsecurity_attempt_submitted_handler',
        'internal' => false,
    ],
];