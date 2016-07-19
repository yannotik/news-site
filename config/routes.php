<?php

return array(
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',
    'category' => 'category/index',
    'register' => 'user/register',
    'login' => 'user/login',
    'logout' => 'site/index',
    'contacts' => 'site/contacts',
    'about' => 'site/about',
    '' => 'site/index',


);
