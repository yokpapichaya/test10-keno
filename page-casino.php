<?php
/* Template Name: Casino */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-casino.twig', $context);

