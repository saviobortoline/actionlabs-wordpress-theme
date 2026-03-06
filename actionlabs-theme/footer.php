<footer class="site-footer">

<div class="container footer-top">

<div class="footer-logo">
LOGO CLIENTE
</div>

</div>

<div class="container footer-bottom">

<p class="footer-copy">
© <?php echo date('Y'); ?>. Todos os direitos reservados.
</p>

</div>

</footer>

<?php wp_footer(); ?>

<script>

document.addEventListener("DOMContentLoaded", function(){

  const toggle = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".menu");

  if(toggle && menu){
    toggle.addEventListener("click", function(){
      menu.classList.toggle("active");
    });
  }

});

</script>

</body>
</html>