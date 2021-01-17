<?php
$context = Timber::context();

$context['post'] = Timber::get_post();
$context['posts'] = Timber::get_posts('category_name=work');

Timber::render('views/page-list.twig', $context);
