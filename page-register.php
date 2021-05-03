<?php
/* Template Name: Register */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-register.twig', $context);

