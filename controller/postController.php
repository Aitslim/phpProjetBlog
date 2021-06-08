 <?php

    function home()
    {
        require dirname(__DIR__) . '/model/postRepository.php';
        $posts = findAll();

        render('home', compact('posts'));   // Les posts
    }

    function show()
    {
        require dirname(__DIR__) . '/model/postRepository.php';
        $post = findOneById($_GET['id']);

        render('show', compact('post'));   // Le post
    }
    function connect()
    {
        // require dirname(__DIR__) . '/model/postRepository.php';
        // $post = findOneById($_GET['id']);

        // render('show', compact('post'));   // Le post
    }

    function render($view, $datas)
    {
        extract($datas);

        require dirname(__DIR__) . '/view/post/' . $view . ".php";
    }
