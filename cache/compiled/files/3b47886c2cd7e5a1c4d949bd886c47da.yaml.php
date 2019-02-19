<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/gondola/user/themes/bootstrap/blueprints/modular/header_slide.yaml',
    'modified' => 1534495330,
    'data' => [
        'title' => 'Header Slider',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'infos' => [
                            'type' => 'tab',
                            'title' => 'Slide',
                            'fields' => [
                                'header.slides' => [
                                    'name' => 'Slide',
                                    'type' => 'list',
                                    'label' => 'Slide',
                                    'fields' => [
                                        '.content' => [
                                            'type' => 'editor',
                                            'label' => 'Content'
                                        ],
                                        '.content_color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'Content color'
                                        ],
                                        '.background' => [
                                            'type' => 'filepicker',
                                            'folder' => 'self@',
                                            'label' => 'Select background image',
                                            'preview_images' => true,
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
                                            ]
                                        ],
                                        '.color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'Background color'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
