<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Yoast SEO for TYPO3',
    'description' => 'Optimise your website for search engines with Yoast SEO for TYPO3. With this extension you get all the technical SEO stuff you need and will help editors to write high quality content.',
    'category' => 'misc',
    'author' => 'MaxServ / Yoast',
    'author_company' => 'MaxServ B.V., Yoast',
    'author_email' => '',
    'clearCacheOnLoad' => 0,
    'state' => 'stable',
    'uploadfolder' => 0,
    'version' => '9.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'seo' => '10.4.0-11.5.99',
        ]
    ],
    'autoload' => [
        'psr-4' => ['YoastSeoForTypo3\\YoastSeo\\' => 'Classes']
    ],
];
