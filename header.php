<?php
/**
 * The template for displaying the Header.
 *
 * @package Integrity Radiance
 * @subpackage Theme
 * @since 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>