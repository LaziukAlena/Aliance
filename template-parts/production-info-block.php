<section class="section production-info <?= $production_bg ?? '' ?>">
  <div class="container">
    <div class="production-info-wrapper">
      <div class="production-info-content">
        <div class="separator"></div>
        <h2 class="section-title production-info-title"><?= $production_title ?? 'Наше производство' ?></h2>
        <p class="production-info-text"><?= $production_text ?? '' ?></p>
        <ul class="production-info-list">
          <?php foreach ($production_items as $item): ?>
            <li class="production-info-item">
              <svg width="20" height="20"><use href="img/sprite.svg#<?= $item['icon'] ?>"></use></svg>
              <?= $item['text'] ?>
            </li>
          <?php endforeach; ?>
        </ul>
        <?php if (!empty($production_download_url)) { ?>
          <a href="<?= $production_download_url ?>" class="button production-info-button" download>
            <svg width="20" height="20"><use href="img/sprite.svg#download"></use></svg>
            Скачать каталог
          </a>
        <?php } ?>
      </div>
      <img
        src="img/<?= $production_image?>"
        alt="<?= $production_title  ?>"
        class="production-info-image <?= $production_image_class ?? '' ?>"
      />
    </div>
  </div>
</section>