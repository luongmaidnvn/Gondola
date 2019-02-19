<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/mowede/user/plugins/cookieconsent/blueprints.yaml',
    'modified' => 1546941630,
    'data' => [
        'name' => 'Cookie Consent',
        'version' => '0.4.0',
        'description' => 'This grav plugin is to alert users about the use of cookies on your website. The plugin integrates the popular js lib cookie consent by insites.',
        'icon' => 'gavel',
        'author' => [
            'name' => 'naucon'
        ],
        'homepage' => 'https://github.com/naucon/grav-plugin-cookieconsent',
        'keywords' => 'grav, plugin, cookie, consent, eu, law, policy, insites',
        'bugs' => 'https://github.com/naucon/grav-plugin-cookieconsent/issues',
        'docs' => 'https://github.com/naucon/grav-plugin-cookieconsent/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => true
                ],
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
                'cdn' => [
                    'type' => 'toggle',
                    'label' => 'CDN',
                    'help' => 'Include JavaScript and CSS files from official CDN or local.',
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
                'content' => [
                    'type' => 'section',
                    'title' => 'Content',
                    'underline' => true
                ],
                'content_message' => [
                    'type' => 'text',
                    'label' => 'Message',
                    'help' => 'Message on the banner',
                    'placeholder' => 'This website uses cookies to ensure you get the best experience on our website.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'content_dismiss' => [
                    'type' => 'text',
                    'label' => 'Dismiss button text',
                    'placeholder' => 'Got it!',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'content_link' => [
                    'type' => 'text',
                    'label' => 'Policy link text',
                    'placeholder' => 'Learn more',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'content_href' => [
                    'type' => 'text',
                    'label' => 'Link to policy',
                    'placeholder' => 'https://cookiesandyou.com',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'colors' => [
                    'type' => 'section',
                    'title' => 'Colors',
                    'underline' => true
                ],
                'popup_background_color' => [
                    'type' => 'colorpicker',
                    'label' => 'Banner background',
                    'help' => 'Color of banner background',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'popup_text_color' => [
                    'type' => 'colorpicker',
                    'label' => 'Banner Text',
                    'help' => 'Color of banner text',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'button_background_color' => [
                    'type' => 'colorpicker',
                    'label' => 'Button background',
                    'help' => 'Color of button background',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'button_text_color' => [
                    'type' => 'colorpicker',
                    'label' => 'Button text',
                    'help' => 'Color of button text',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'button_border_color' => [
                    'type' => 'colorpicker',
                    'label' => 'Button border',
                    'help' => 'Color of button border',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'style' => [
                    'type' => 'section',
                    'title' => 'Position & Style',
                    'underline' => true
                ],
                'position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Position',
                    'default' => 'bottom',
                    'help' => 'Position on the website, where the banner will be displayed.',
                    'options' => [
                        'top' => 'Top',
                        'top-pushdown' => 'Top (Pushdown)',
                        'bottom' => 'Bottom',
                        'bottom-left' => 'Bottom Left',
                        'bottom-right' => 'Bottom Right'
                    ]
                ],
                'theme' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Layout',
                    'default' => 'block',
                    'help' => 'Button layout',
                    'options' => [
                        'block' => 'Block (angled corners)',
                        'classic' => 'Classic (round corners)',
                        'edgeless' => 'Edgeless'
                    ]
                ]
            ]
        ]
    ]
];
