 <?php

    function home()
    {
        require dirname(__DIR__) . '/model/model.php';
        $posts = findAll();

        render('home', compact('posts'));   // Les posts
    }

    function show()
    {
        require dirname(__DIR__) . '/model/model.php';
        $post = findOneById($_GET['id']);

        render('show', compact('post'));   // Le post
    }

    function render($view, $datas)
    {
        extract($datas);

        ob_start();
        require dirname(__DIR__) . '/view/post/' . $view . ".php";
        // echo "1 - Je suis dans Render() avant content" . "<br>";
        $content = ob_get_clean();
        echo "2 - Je suis dans Render() après content" . "<br>";
        var_dump($content);
        require dirname(__DIR__) . '/view/base.php';
    }
