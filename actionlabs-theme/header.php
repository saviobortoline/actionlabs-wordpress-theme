<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

<div class="container header-inner">

<div class="logo">
LOGO CLIENTE
</div>

<button class="menu-toggle" type="button">
<i class="fa-solid fa-bars"></i>
</button>

<nav class="menu">
<a href="<?php echo home_url('/'); ?>">INÍCIO</a>
<a href="<?php echo home_url('/about'); ?>">SOBRE NÓS</a>
</nav>

</div>

</header>