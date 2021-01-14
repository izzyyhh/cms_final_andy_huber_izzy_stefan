<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts();
$context['works'] = Timber::get_posts('category_name=work');
$context['environmentals'] = Timber::get_posts('category_name=environmental_issues');

Timber::render('views/frontpage.twig', $context);