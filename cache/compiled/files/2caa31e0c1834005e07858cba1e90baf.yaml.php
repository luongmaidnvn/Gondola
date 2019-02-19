<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/gondola/user/themes/bootstrap/blueprints/home-page.yaml',
    'modified' => 1535599272,
    'data' => [
        'title' => 'General',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'header.summary' => [
                                    'type' => 'textarea',
                                    'label' => 'Summary'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
