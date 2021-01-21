<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts();
$context['donations'] = Timber::get_posts('category_name=donate');
$context['environmentals'] = Timber::get_posts('category_name=environmental_issues');
$context['about_me_post'] = Timber::get_post('category_name=about_me');
$context['welcome'] = Timber::get_post('category_name=welcome');

Timber::render('views/frontpage.twig', $context);