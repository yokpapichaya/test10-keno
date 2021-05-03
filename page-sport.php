<?php
/* Template Name: Sport */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-sport.twig', $context);

