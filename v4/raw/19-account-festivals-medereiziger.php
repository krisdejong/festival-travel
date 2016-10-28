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
        <li class="o-page-tabs__item">
          <a class="o-page-tabs__link" href="">Reizigers</a>
        </li>
        <li class="o-page-tabs__item o-page-tabs__item--active">
          <a class="o-page-tabs__link" href="">Producten &amp; tickets</a>
        </li>
        <li class="o-page-tabs__item">
          <a class="o-page-tabs__link" href="#">Downloads</a>
        </li>
      </ul>
    </div>

    <div class="u-flex-mobile">
      <div class="l-two-third u-order-2">

        <ul class="o-accordion-list">
          <li class="o-accordion-list__item">
            <div class="o-panel o-accordion js-accordion">
              <a class="o-panel__link o-accordion__link">
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">7 days pass tickets</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
                <p>Content</p>
              </div>
            </div>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel o-accordion js-accordion is-open">
              <a class="o-panel__link o-accordion__link">
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Camping alternativa</h2>
                <div class="o-accordion__price o-price">
                  <span class="o-price__regular o-price--special">2 openstaande taken</span>
                </div>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
                <form action="/" method="post">
                  <fieldset>
                    <ul class="o-form">

                      <li class="o-form__item o-form__item--half o-form__item--error">
                        <label class="o-form__label" for="">Kenteken</label>
                        <div class="o-form__fields">
                          <input type="text" />
                        </div>
                      </li>

                      <li class="o-form__item o-form__item--half o-form__item--error">
                        <label class="o-form__label" for="">Opstapplaats</label>
                        <div class="o-form__fields">
                          <div class="o-form__select">
                            <select>
                              <option>Kies een opstapplaats</option>
                            </select>
                          </div>
                        </div>
                      </li>
                      <li class="o-form__item o-form__item--half">
                        <label class="o-form__label" for="">Aankomst datum</label>
                        <div class="o-form__fields">
                          <div class="o-form__select">
                            <select class="disable" disabled>
                              <option>17 augustus 2016</option>
                            </select>
                          </div>
                        </div>
                      </li>
                      <li class="o-form__item o-form__item--half">
                        <label class="o-form__label" for="">Vertrek datum</label>
                        <div class="o-form__fields">
                          <div class="o-form__select">
                            <select class="disable" disabled>
                              <option>17 augustus 2016</option>
                            </select>
                          </div>
                        </div>
                      </li>
                    </ul>

                    <div class="o-button-wrapper">
                      <a class="o-button o-button--neutral">Wijzigingen opslaan</a>
                    </div>

                  </fieldset>
                </form>
              </div>
            </div>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel o-accordion js-accordion">
              <a class="o-panel__link o-accordion__link">
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Kluisje</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
                <p>Content</p>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="l-one-third u-order-1">
        <aside class="">
          <div class="o-panel">
            <div class="o-panel__body">
              <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Jouw producten voor Sziget Festival 2016</h4>
            </div>

            <ul class="o-panel__list">
              <li class="o-panel__list__item">
                <p class="u-small-spacing is-small">In dit overzicht vind je alle door jou, of door je reisgenoot gekochtte producten voor het Sziget Festival 2016.</p>
                <p class="u-no-spacing is-small">Zorg ervoor dat alle taken afgerond zijn, eerder kan je de tickets niet downloaden.</p>
              </li>
              <li class="o-panel__list__item o-panel__list__item--neutral u-hidden-on-tablet">
                <?php include('includes/panel-helpdesk.php'); ?>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer-account.php'); ?>