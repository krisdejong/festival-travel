<?php
    $title = "Home";
    include('includes/header.php');
?>

<header class="c-header">
  <figure class="c-header__image" style="background-image: url(../assets/images/header.jpg);"></figure>
  <div class="c-header__flex">
    <div class="l-container">
      <div class="l-full">
        <h1>Besteloverzicht</h1>
        <h2 class="is-h4">Jouw gekozen festival reizen</h2>
      </div>
    </div>
  </div>
</header>

<div class="l-wrapper l-wrapper--neutral">
  <div class="l-container">
    <div class="l-full">
      <ul class="c-progress">
        <li class="c-progress__item c-progress__item--completed"><span>Pakket samenstellen</span></li>
        <li class="c-progress__item c-progress__item--completed"><span>Gegevens</span></li>
        <li class="c-progress__item c-progress__item--active"><span>Besteloverzicht</span></li>
        <li class="c-progress__item"><span>Betaling</span></li>
        <li class="c-progress__item"><span>Bedankt</span></li>
      </ul>
    </div>

    <div class="l-two-third">
      <div class="o-panel">
        <div class="o-panel--callout">
          <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Sziget Festival 2016</h2>
        </div>
        <ul class="o-panel__list">
          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase">tickets</h3>
            <p class="u-no-spacing is-small">Sziget Festival 12x 7 dayss pass</p>
            <p class="u-no-spacing is-small u-red">Earlybird korting -10%</p>

            <div class="o-price o-panel__list__price">
              <span class="o-price__old">€ 485,-</span>
              <span class="o-price--special">€ 435,-</span>
            </div>
          </li>
          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase u-no-spacing">Accomodatie</h3>
            <ul class="o-panel-inner">
              <li class="o-panel-inner__item">
                <a class="o-panel-inner__link o-panel-inner__link--has-icon">
                  <svg class="o-icon"><use xlink:href="#icon-delete" /></svg>
                  <h3 class="is-h6">Hotel Danubius Health Spa Resort Helia</h3>
                  <p class="u-no-spacing is-small">4x tweepersoonkamers van 4 t/m 11 augustus</p>
                  <div class="o-price o-panel-inner__price">
                    <span class="o-price__regular">€ 850,-</span>
                  </div>
                </a>
              </li>
              <li class="o-panel-inner__item">
                <a class="o-panel-inner__link o-panel-inner__link--has-icon">
                  <svg class="o-icon"><use xlink:href="#icon-delete" /></svg>
                  <h3 class="is-h6">Hotel Danubius Health Spa Resort Helia</h3>
                  <p class="u-no-spacing is-small">4x tweepersoonkamers van 4 t/m 11 augustus</p>
                  <div class="o-price o-panel-inner__price">
                    <span class="o-price__regular">€ 850,-</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase u-no-spacing">Reis</h3>
            <div class="o-price o-panel__list__price">
              <span class="o-price__description">Niet gekozen</span>
            </div>
          </li>
          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase">Services</h3>
            <div class="o-panel u-no-spacing">
              <div class="o-panel--callout">
                <h2 class="o-panel__title is-h5 o-panel__title--no-spacing">Een festival kluisje is altijd handig</h2>
                <a class="o-panel__close"><svg class="o-icon"><use xlink:href="#icon-delete" /></svg></a>
              </div>
              <div class="o-panel__body">
                <figure class="o-media__image"><img src="http://www.reisjunk.nl/wp-content/uploads/2014/01/sziget2.jpg"></figure>

                <p>Zorg dat je ongestoord kunt feesten op Sziget en leg je waardevolle spullen in een kluisje.</p>

                <form action="/" method="post">
                  <fieldset>
                    <ul class="o-form">
                      <li class="o-form__item">
                        <label class="o-form__label" for="#TAG4">Locatie: Op het festival terrein</label>
                        <div class="o-form__fields">
                          <div class="o-form__select">
                            <select>
                              <option value="1 persoon">1 kluisje: €25</option>
                              <option value="2 personen">2 kluisjes €45</option>
                            </select>
                          </div>
                        </div>
                      </li>
                      <li class="o-form__item">
                        <button class="o-button" type="submit">Toevoegen</button>
                      </li>
                    </ul>
                  </fieldset>
                </form>

              </div>
            </div>
          </li>

          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase u-no-spacing">Subtotaal</h3>
            <div class="o-price o-panel__list__price">
              <span class="o-price--regular">€ 1680,00</span>
            </div>
          </li>
        </ul>
      </div>

      <div class="o-panel u-only-visble-on-mobile-and-tablet">
        <ul class="o-panel__list">
          <li class="o-panel__list__item">
            <form class="" action="/" method="post">
              <fieldset>
                <ul class="o-form u-no-spacing">
                  <li class="o-form__item">
                    <div class="o-form__fields o-form__fields--button u-no-spacing">
                      <input type="text" placeholder="Code inwisselen" />
                      <button class="o-button o-button--neutral" type="submit">Toevoegen</button>
                    </div>
                  </li>
                </ul>
              </fieldset>
            </form>
          </li>
        </ul>
      </div>

      <div class="o-panel">
        <ul class="o-panel__list">
          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase u-no-spacing">Coupon Festivalcode</h3>
            <div class="o-price o-panel__list__price">
              <span class="o-price--special">€ -80,00</span>
            </div>
          </li>
        </ul>
      </div>

      <div class="o-panel">
        <ul class="o-panel__list">
          <li class="o-panel__list__item">
            <h3 class="is-h6 u-uppercase u-no-spacing">Totaal</h3>
            <div class="o-price o-panel__list__price">
              <span class="o-price__old">€ 2585,00</span>
              <span class="o-price--special">€ 1680,00</span>
            </div>
          </li>
        </ul>
      </div>

      <div class="o-button-wrapper">
        <a class="o-button o-button--neutral">Terug</a>
        <a class="neutral-link" href="">Voeg nog een festival toe</a>
        <a class="o-button">Doorgaan</a>
      </div>
    </div>

    <div class="l-one-third u-hidden-on-tablet">
      <aside class="">
        <div class="o-panel">
          <div class="o-panel__body">
            <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Bestelling opgeslagen</h4>
          </div>

          <ul class="o-panel__list">

            <li class="o-panel__list__item">
              <p class="u-no-spacing is-small">In het volgende scherm kan je jouw bestelling controleren, wijzigen en afronden.</p>
            </li>

            <li class="o-panel__list__item o-panel__list__item--light">
              <div class="clock"></div>
              <p class="u-no-spacing is-small">Resterende tijd om je bestelling te voltooien</p>
            </li>
            <li class="o-panel__list__item o-panel__list__item--light">
              <form action="/" method="post">
                <fieldset>
                  <ul class="o-form u-no-spacing">
                    <li class="o-form__item">
                      <div class="o-form__fields o-form__fields--button">
                        <input type="text" placeholder="Code inwisselen" />
                        <button class="o-button o-button--neutral" type="submit">Toevoegen</button>
                      </div>
                    </li>
                  </ul>
                </fieldset>
              </form>
            </li>

            <li class="o-panel__list__item o-panel__list__item--neutral">
              <?php include('includes/panel-helpdesk.php'); ?>
            </li>
          </ul>
        </div>
      </aside>

    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>