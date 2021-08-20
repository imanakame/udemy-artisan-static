<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisanstatic.netlify.app',
    'site' => [
        'title' => 'Udemy講師のなり方',
        'description' => 'Udemy講師のなり方',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => '今中みのる',
        'twitter' => 'imanakame',
        'github' => 'imanakame',
        'udemy' => 'jin-zhong-ren',
    ],
    'services' => [
        'cmsVersion' => '2.10.156',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'imanakame',
            'apiKey' => '642993542972666',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => false,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'Y/m/d') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
