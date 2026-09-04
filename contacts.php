<?php 
$page_title = "Контакты";
$header_style = "header-background";
include_once('header-page.php');
include_once('./template-parts/breadcrumbs-block.php');
?>

<section class="section contacts">
  <div class="container">
    <div class="contacts-info">
      <?php include_once('./template-parts/contact-info-block.php'); ?>
    </div>

    <div class="contacts-map">
      <iframe
        src="https://yandex.ru/map-widget/v1/?ll=37.617700%2C55.755800&z=15"
        width="100%"
        height="470"
        frameborder="0"
        loading="lazy"
      ></iframe>
    </div>
  </div>
</section>

<?php $hide_footer_logo = true; ?>
<?php include_once('footer.php'); ?>

