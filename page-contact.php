<?php
/* Template Name: Contact */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-contact.twig', $context);

