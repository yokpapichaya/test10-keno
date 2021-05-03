<?php
/* Template Name: Log in */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-login.twig', $context);

