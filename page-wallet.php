<?php
/* Template Name: Wallet */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;

Timber::render('templates/page-wallet.twig', $context);

