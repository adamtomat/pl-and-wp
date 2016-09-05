<?php
// 404.php
$context = Timber::get_context();

$context['title'] = 'Page not found!';
$context['subTitle'] = 'Error 404';
$context['image'] = 'some/url/404.jpg';
$context['content'] = 'Oops, cannot find this page :(';

Timber::render('single.twig', $context);
