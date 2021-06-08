<?php

$path = dirname(__DIR__);

ob_start();
try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

    if ($page === 'post.home') {

        require dirname(__DIR__) . '/controller/postController.php';
        home();
    } elseif ($page === 'post.show') {

        require dirname(__DIR__) . '/controller/postController.php';
        show();
    } elseif ($page === 'user.connect') {

        require dirname(__DIR__) . '/user/connectionForm.php';
        // connect();
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require dirname(__DIR__) . '/view/error/error' . $e->getMessage() . '.php';
}
$content = ob_get_clean();

require dirname(__DIR__) . '/view/base.php';
