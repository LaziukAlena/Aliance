    <header class="header header-breadcrumbs">
      <div class= "<?= $header_style; ?>">
          <div class="container">
            <div class="separator"></div>
            <h1 class="header-title"><?= $page_title?></h1>
            <ul class="breadcrumbs">
              <li class="breadcrumbs-item">
                <a href="./" class="breadcrumbs-link">Главная</a>
              </li>
              <?php if (!empty($parent_title)) { ?>
                <li class="breadcrumbs-item">
                  <a href="<?= $parent_url ?>" class="breadcrumbs-link"><?= $parent_title ?></a>
                </li>
              <?php } ?>
              <li class="breadcrumbs-item active">
                <a href="#" class="breadcrumbs-link"><?= $page_title ?></a>
              </li>
            </ul>
           
          </div>
      </div>
    </header>
   