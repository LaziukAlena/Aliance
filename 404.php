<?php
$page_title = "Страница не найдена";
include_once('header-page.php');
?>

<section class="section error-404">
  <div class="container">
    <div class="error-404-content">
      <div class="error-404-code">404</div>
      <h1 class="error-404-title">Страница не найдена</h1>
      <p class="error-404-text">Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.</p>
      <a href="./" class="button error-404-button">Вернуться на главную</a>
    </div>
  </div>
</section>

<?php include_once('footer.php'); ?>