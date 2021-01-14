<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts();
$context['works'] = Timber::get_posts('category_name=work');

Timber::render('views/frontpage.twig', $context);