 <section class="section blog">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">
          <?= !empty($blog_title) ? $blog_title : 'Блог экспертов в области производства' ?>
        </h2>
        <div class="swiper blog-slider">
          <div class="swiper-wrapper">
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog-photo2.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в&nbsp;равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog-photo.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на&nbsp;независимые элементы.
                Безусловно, высокотехнологичная...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog-photo2.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
          <div class="blog-slider-footer">
              <?php if (empty($blog_hide_link)) { ?>
                <a href="./blog.php" class="button-link blog-link">Весь блок</a>
              <?php } ?>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="30" height="20">
                  <use href="img/sprite.svg#steps-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="30" height="20">
                  <use href="img/sprite.svg#steps-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>