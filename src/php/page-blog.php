<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts('category_name=environmental_issues');

Timber::render('views/page-list.twig', $context);
