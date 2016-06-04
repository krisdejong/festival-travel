<?php
    $title = "Home";
    include('includes/header.php');
?>

<header class="c-header">
  <figure class="c-header__image" style="background-image: url(../assets/images/header.jpg);"></figure>
  <div class="c-header__flex">
    <div class="l-container">
      <div class="l-full">
        <h1>Festival.travel account</h1>
        <h2 class="is-h4">Zelf je festival reis regelen</h2>
      </div>
    </div>
  </div>
</header>

<div class="l-wrapper l-wrapper--white">
  <div class="o-page-tabs-wrapper">
    <div class="l-container l-container--no-spacing">
      <div class="l-full">
        <ul class="o-page-tabs">
          <li class="o-page-tabs__item">
            <a class="o-page-tabs__link" href="/v3/raw/16-ft-account-dashboard.php">Dashboard</a>
          </li>
          <li class="o-page-tabs__item o-page-tabs__item--active">
            <a class="o-page-tabs__link" href="/v3/raw/17-account-mijn-boekingen.php">Mijn boekingen</a>
          </li>
          <li class="o-page-tabs__item">
            <a class="o-page-tabs__link" href="#">Mijn gegevens</a>
          </li>
          <li class="o-page-tabs__item">
            <a class="o-page-tabs__link" href="/v3/raw/13-account-inloggen.php">Uitloggen</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="l-wrapper l-wrapper--neutral l-wrapper--spacing">
  <div class="l-container l-container--no-spacing">

    <div class="l-full">
      <ul class="o-page-tabs o-page-tabs--in-container">
        <li class="o-page-tabs__item o-page-tabs__item--active">
          <a class="o-page-tabs__link" href="">Reizigers</a>
        </li>
        <li class="o-page-tabs__item">
          <a class="o-page-tabs__link" href="">Producten &amp; tickets</a>
        </li>
        <li class="o-page-tabs__item">
          <a class="o-page-tabs__link" href="#">Downloads</a>
        </li>
      </ul>
    </div>

    <div class="u-flex-mobile">
      <div class="l-two-third u-order-2">

        <div class="o-panel o-accordion js-accordion is-open">
          <a class="o-panel__link o-accordion__link">
            <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Tomas Loeffen</h2>
            <i class="o-icon o-accordion__arrow">
              <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
            </i>
          </a>
          <div class="o-accordion__content o-panel__body">
            <form action="/" method="post">
              <fieldset>
                <ul class="o-form u-no-spacing">
                  <li class="o-form__item">
                    Wil je jezelf toevoegen als eerste reiziger?

                    <ul class="o-form__radio-list">
                      <li class="o-form__radio-list__item">
                        <label class="o-form__radio o-form__radio--inline">
                          Ja
                          <input type="radio" />
                        </label>
                      </li>
                      <li class="o-form__radio-list__item">
                        <label class="o-form__radio o-form__radio--inline">
                          Nee
                          <input type="radio" checked />
                        </label>
                      </li>
                    </ul>
                  </li>
                </ul>
              </fieldset>
            </form>
          </div>
          <div class="o-accordion__content o-panel__body">
            <div class="o-button-wrapper o-button-wrapper--no-top-spacing">
             <button class="o-button o-button--neutral" type="submit">Wijzigingen opslaan</button>
            </div>
          </div>
        </div>

        <div class="o-panel o-accordion js-accordion is-open">
          <a class="o-panel__link o-accordion__link">
            <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Ruud Bongers</h2>
            <i class="o-icon o-accordion__arrow">
              <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
            </i>
            <div class="o-accordion__price o-price">
              <span class="o-price__regular o-price--special">1 openstaande taak</span>
            </div>
          </a>
          <div class="o-accordion__content o-panel__body">
            <ul class="c-products">
              <li class="c-products__item">
                <strong class="c-products__title">1 x 7 Days pass ticket</strong>
                <p class="u-no-spacing is-small">12 juli 2016 t/m 21 juli 2016</p>
                <a class="c-products__delete">
                  <svg class="icon"><use xlink:href="#icon-x" /></svg>
                </a>
              </li>
              <li class="c-products__item">
                <strong class="c-products__title">1 x 7 Days pass ticket</strong>
                <p class="u-no-spacing is-small">12 juli 2016 t/m 21 juli 2016</p>
                <a class="c-products__delete">
                  <svg class="icon"><use xlink:href="#icon-x" /></svg>
                </a>
              </li>
              <li class="c-products__item">
                <strong class="c-products__title">1 x 7 Days pass ticket</strong>
                <p class="u-no-spacing is-small">12 juli 2016 t/m 21 juli 2016</p>
                <a class="c-products__delete">
                  <svg class="icon"><use xlink:href="#icon-x" /></svg>
                </a>
              </li>
            </ul>

            <div class="c-products__add">
              <div class="o-form__select">
                <select>
                  <option>Voeg een product toe</option>
                </select>
              </div>
              <button class="o-button"><svg class="o-icon o-icon--inline u-no-spacing"><use xlink:href="#icon-plus" /></svg></button>
            </div>

            <div class="o-button-wrapper o-button-wrapper--no-top-spacing">
              <a class="o-button o-button--neutral o-button--neutral--margin-right">Wijzigingen opslaan</a>
              <a class="o-button o-button--neutral">Persoonsgegevens</a>
            </div>
          </div>
        </div>

        <div class="o-button-wrapper">
          <button class="o-button" type="submit">Reizigers toevoegen</button>
        </div>
      </div>

      <div class="l-one-third u-hidden-on-tablet">
        <aside class="">
          <div class="o-panel">
            <div class="o-panel__body">
            <h4 class="o-panel__title is-h4">Beschikbare producten</h4>
            <p class="u-small-spacing is-small">Verdeel de producten en wijs deze toe aan de bijbehorende personen.</p>
            <?php include('includes/products.php'); ?>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
<?php include('includes/modal.php'); ?>