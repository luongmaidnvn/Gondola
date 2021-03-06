<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/mowede/user/plugins/file-content/blueprints.yaml',
    'modified' => 1534495330,
    'data' => [
        'name' => 'File Content',
        'version' => '1.0.0',
        'description' => '**FileContent** is a simple plugin that adds a Twig extension to allow you to include a file into your template',
        'icon' => 'paperclip',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-file-content',
        'keywords' => 'inject, embed, include',
        'bugs' => 'https://github.com/getgrav/grav-plugin-file-content/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'allow_in_page' => [
                    'type' => 'toggle',
                    'label' => 'Allow in page',
                    'help' => 'Allow no path, just a filename of a file in the current folder',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'allow_in_grav' => [
                    'type' => 'toggle',
                    'label' => 'Allow in Grav',
                    'help' => 'Allow paths relative to Grav root directory',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'allow_in_filesystem' => [
                    'type' => 'toggle',
                    'label' => 'Allow in filesystem',
                    'help' => 'Allow full paths for any file on the filesystem',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'allowed_extensions' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'Allowed extensions',
                    'help' => 'A list of file extensions that should be allowed',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ]
            ]
        ]
    ]
];
