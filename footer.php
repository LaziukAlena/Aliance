    <section class="cta">
      <div class="bg-grey section-cta">
        <picture class="cta-image">
          <source type="image/webp" srcset="img/cta.webp">
          <source type="image/jpg" srcset="img/cta.png">
          <img src="img/cta.png" alt="call to action" loading="lazy">
        </picture>
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с&nbsp;Вами
              в&nbsp;ближайшее время ответит на&nbsp;все интересующие вопросы
              и&nbsp;поможем даже в&nbsp;самых сложных случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  name="username"
                  class="input"
                  placeholder=""
                  maxlength="50"
                  required
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  name="userphone"
                  class="input phone-mask"
                  placeholder=""
                  maxlength="18"
                  required
                />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#notify"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к&nbsp;нам вы&nbsp;получаете не&nbsp;только
                  профессиональную работу, но&nbsp;и&nbsp;абсолютную
                  конфиденциальность информации!
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <?php if (empty($hide_footer_logo)): ?>
            <svg class="logo-svg footer-logo">
              <use href="img/sprite.svg#logo"></use>
            </svg>
          <?php endif; ?>
          <?php include_once('./template-parts/contact-info-block.php'); ?>
        </div>
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="./avtohim.php" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./ag-tech.php" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-menu-list-bold">
              <li class="footer-menu-item">
                <a href="./about.php" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./blog.php" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./contacts.php" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="./politics.php" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="52" height="11">
              <use href="img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с&nbsp;Вами в&nbsp;ближайшее
          время ответит на&nbsp;все интересующие вопросы и&nbsp;поможем даже
          в&nbsp;самых сложных случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
           <div class="input-group-wrapper input-group-vertical">
              <div class="input-group modal-input-group">
                <input
                  id="modal-user-name"
                  type="text"
                  class="input modal-input"
                  placeholder=""
                  name="username"
                />
                <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
              </div>
              <div class="input-group modal-input-group">
                <input
                  id="modal-user-phone"
                  type="tel"
                  class="input modal-input phone-mask"
                  placeholder=""
                  name="userphone"
                />
                <label class="input-group-label modal-input-label" for="modal-user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <div class="modal-form-footer">
              <button type="submit" class="button modal-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#notify"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к&nbsp;нам вы&nbsp;получаете не&nbsp;только
                  профессиональную работу, но&nbsp;и&nbsp;абсолютную
                  конфиденциальность информации!
                </p>
              </div>
            </div>
        </form>
      </div>
    </div>
    <div class="modal modal-thanks" id="alert-modal">
      <div class="modal-dialog modal-dialog-thanks">
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <picture class="modal-thanks-image">
          <source type="image/webp" srcset="img/thanks.webp">
          <source type="image/jpg" srcset="img/thanks.png">
          <img src="img/thanks.png" alt="thanks" loading="lazy">
        </picture>
        <h2 class="modal-title">Спасибо за заявку!</h2>
        <p class="modal-text">
          Наш менеджер свяжется с&nbsp;Вами в&nbsp;ближайшее время ответит на&nbsp;все интересующие вопросы и&nbsp;поможем даже в&nbsp;самых сложных случаях!
        </p>
        <div class="modal-form-footer">
          <a href="index.php" class="button modal-form-button">
            Вернуться на главную
          </a>         
        </div>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>