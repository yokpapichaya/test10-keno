<?php
/* Template Name: Slot */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-slot.twig', $context);

