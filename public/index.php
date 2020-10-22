<?php

require_once '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/views');
$twig = new Twig\Environment($loader);
$products = ['Literature', 'Novel', 'Comic', 'Poetry', 'History'];
echo $twig->render('index.html.twig', ['products'=>$products]);

/*
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../src/views');
$twig = new Twig\Environment($loader);
$products = ['panier de basket', 'ballon de basket', 'Equipe 1', 'Equipe 2', 'Arbitres'];
echo $twig->render('index.html.twig', ["products" => $products]);
*/
