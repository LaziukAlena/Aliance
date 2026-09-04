<section class="section product-intro">
  <div class="container">
    <div class="product-intro-wrapper">
      <img
        src="img/<?= $product_image ?>"
        alt="<?= $page_title ?>"
        class="product-intro-image"
      />
      <div class="product-intro-content">
        <div class="separator"></div>
        <h2 class="section-title product-intro-title">
          <?= $product_intro__title?>
        </h2>
        <div class="product-intro-text">
          <?= $product_description ?? '' ?>
        </div>
      </div>
    </div>
    <?php include_once('./template-parts/features-slider-block.php'); ?>
  </div>
</section>