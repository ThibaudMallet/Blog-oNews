<?php

// Retourne un article à partir de son identifiant
// $postId : l'identifiant de l'article à récupérer
// retour : l'article d'indentifiant $postId
//
// exemple $post = getPostById(1); 
//         récupère l'article d'identifiant 1
function getPostById($postId)
{
    include __DIR__ . '/../data/data.php';

    if (isset($posts[$postId])) {
        $post = $posts[$postId];
    } else {
        $post = [
            'title' => 'Article erreur 404',
            'author' => 'Trevor Bayne',
            'text' => 'L\'article demandé n\'existe pas !',
            'category' => 'work',
            'datetimePub' => '2018-10-25',
            'datetimeText' => '25 octobre 2018',
            'avatar' => 'icon-tre.png'
        ];
    }
    return $post;
}