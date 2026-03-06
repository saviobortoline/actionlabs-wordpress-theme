<main class="post-page">

<!-- HERO -->
<section class="post-hero">

    <div class="hero-bg"></div>

</section>


<!-- CONTEÚDO -->
<section class="post-wrapper">

<div class="container">

<article class="post-card">

<!-- IMAGEM DO POST -->
<div class="post-image">
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail('large'); ?>
<?php endif; ?>
</div>


<!-- CATEGORIA -->
<div class="post-category">
<?php the_category(', '); ?>
</div>


<!-- META -->
<div class="post-meta">

<span class="post-date">
<i class="fa-regular fa-calendar"></i>
14 abril, 2023
</span>

<span class="post-categories">
<i class="fa-solid fa-tag"></i>
Ansiedade, Depressão e Estresse
</span>

</div>


<!-- TITULO -->
<h1 class="post-title">
<?php the_title(); ?>
</h1>


<!-- AUTOR -->
<div class="post-author">
Autor: John Smith <?php the_author(); ?>
</div>


<!-- TEXTO -->
<div class="post-content">
<?php the_content(); ?>
</div>



</article>

</div>

</section>

</main>
