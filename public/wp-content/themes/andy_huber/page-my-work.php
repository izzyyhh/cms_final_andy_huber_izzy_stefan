<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts('category_name=work');

Timber::render('views/page-list.twig', $context);
