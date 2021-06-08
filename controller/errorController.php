 <?php

    function render($er)
    {
        extract($datas);

        ob_start();
        require dirname(__DIR__) . '/view/error/' . $er->getMessage() . ".php";
        $content = ob_get_clean();

        require dirname(__DIR__) . '/view/base.php';
    }
