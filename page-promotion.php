<?php
/* Template Name: Promotions */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-promotion.twig', $context);

