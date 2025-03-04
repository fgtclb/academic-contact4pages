<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title' => 'Contacts for Pages',
    'description' => 'Role based relations between profiles and pages',
    'category' => 'fe',
    'state' => 'beta',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'academic_persons' => '0.1.0-2.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
