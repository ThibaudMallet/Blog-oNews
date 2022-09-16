<?php

// Données de l'article 1
/*include 'data/data.php';
$post = $posts[1];*/
include 'utils/functions.php';

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $post = getPostById($postId);
} else {
    $post = [
        'title' => 'Article erreur 404',
        'author' => 'Trevor Bayne',
        'text' => 'Vous n\'avez pas demandé d\'article !',
        'category' => 'work',
        'datetimePub' => '2018-10-25',
        'datetimeText' => '25 octobre 2018',
        'avatar' => 'icon-tre.png'
    ];
}

    // inclusion du template des articles
include __DIR__ . '/inc/article.tpl.php';