<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts();
$context['works'] = Timber::get_posts('category_name=work');
<<<<<<< HEAD
$context['donations'] = Timber::get_posts('category_name=donate');
=======
$context['environmentals'] = Timber::get_posts('category_name=environmental_issues');

>>>>>>> 2be27d25c2c7f821cc96d0eaa75b94c5aceb964d
Timber::render('views/frontpage.twig', $context);