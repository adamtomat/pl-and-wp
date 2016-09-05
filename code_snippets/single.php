<?php
// single.php
$context = Timber::get_context();
$context['foo'] = 'Bar!';
$context['post'] = new Timber/Post();
Timber::render('single.twig', $context);
