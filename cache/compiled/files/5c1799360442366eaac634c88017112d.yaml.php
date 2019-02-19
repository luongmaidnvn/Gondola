<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/mowede/user/plugins/google-tag-manager/blueprints.yaml',
    'modified' => 1534912676,
    'data' => [
        'name' => 'Google Tag Manager',
        'version' => '0.1.0',
        'description' => 'It is plugin to use google tag manager.',
        'icon' => 'google',
        'author' => [
            'name' => 'So Ni',
            'email' => 'bookn.dev@gmail.com'
        ],
        'homepage' => 'https://github.com/so-ni/grav-plugin-google-tag-manager',
        'keywords' => 'grav, plugin, etc',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '>=1.4.2'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_GRAV_GTM.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_GRAV_GTM.ENABLED',
                        0 => 'PLUGIN_GRAV_GTM.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'trackingId' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_GRAV_GTM.TACKING_ID',
                    'help' => 'PLUGIN_GRAV_GTM.TACKING_ID_HELP',
                    'placeholder' => 'GTM-XXXXXX',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'domains' => [
                    'type' => 'array',
                    'size' => 'large',
                    'label' => 'PLUGIN_GRAV_GTM.APPLY_ONLY',
                    'help' => 'PLUGIN_GRAV_GTM.APPLY_ONLY_HELP',
                    'value_only' => true
                ]
            ]
        ]
    ]
];
