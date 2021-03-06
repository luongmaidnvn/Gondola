<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/blueprints/general.yaml',
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
                        'general' => [
                            'type' => 'tab',
                            'title' => 'Header Image',
                            'fields' => [
                                'modular_title' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_ADMIN.MODULAR_SETUP'
                                ],
                                'header.content.items' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ITEMS',
                                    'default' => '@self.modular',
                                    'size' => 'medium'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ORDER_BY',
                                    'placeholder' => 'date',
                                    'help' => NULL,
                                    'size' => 'small'
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ORDER',
                                    'help' => '"desc" or "asc" are valid values',
                                    'placeholder' => 'desc',
                                    'size' => 'small'
                                ],
                                'header_image' => [
                                    'type' => 'section',
                                    'title' => 'Header Image'
                                ],
                                'header.header_image' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Header Image',
                                    'help' => 'Enabled displaying of a header image',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'header.min_height' => [
                                    'type' => 'number',
                                    'label' => 'Min-height'
                                ],
                                'header.header_image_file' => [
                                    'type' => 'filepicker',
                                    'folder' => 'self@',
                                    'label' => 'Image File',
                                    'preview_images' => true,
                                    'toggleable' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.header_main_text' => [
                                    'type' => 'text',
                                    'label' => 'Heading Main Text'
                                ],
                                'header.header_sub_text' => [
                                    'type' => 'text',
                                    'label' => 'Heading Sub Text'
                                ],
                                'header.color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Color'
                                ]
                            ]
                        ],
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
