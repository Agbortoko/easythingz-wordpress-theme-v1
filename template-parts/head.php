<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo('name') ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <?php wp_head(); ?>

</head>
<body <?= body_class(); ?>>