<?php

// Données de l'article 1
/*include 'data/data.php';
$post = $posts[1];*/
include 'utils/functions.php';
$post = getPostById(1);

// inclusion du template des articles
include 'inc/article.tpl.php';


