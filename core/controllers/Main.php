<?php

namespace core\controllers;

use core\models\Blog;

class Main
{

    /**
     * PAGINAS =========================================================================
     */

    // ======= HOME ==========
    public function index()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'home',
            'partials/_footer'
        ]);
    }

    // ======= VIEW ==========
    public function view()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'view',
            'partials/_footer'
        ]);
    }
    // ======= CONTACT ==========
    public function contact()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'contact',
            'partials/_footer'
        ]);
    }
    // ======= ARTICLE ==========
    public function article()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'article',
            'partials/_footer'
        ]);
    }
    // ======= NEWSLETTER ==========
    public function newsletter()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'newsletter',
            'partials/_footer'
        ]);
    }
    // ======= WORK ==========
    public function work()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'work',
            'partials/_footer'
        ]);
    }
    // ======= ABOUT ==========
    public function about()
    {

        // 2 - apresenta o layout (views) e envia os dados para as view
        Blog::layout([
            'partials/_header',
            'about',
            'partials/_footer'
        ]);
    }
}
