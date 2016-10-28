<?php
    $title = "Home";
    include('includes/header.php');
?>

<header class="c-header">
  <figure class="c-header__image" style="background-image: url(../assets/images/header.jpg);"></figure>
  <div class="c-header__flex">
    <div class="l-container">
      <div class="l-full">
        <h1>Bestelling betalen</h1>
        <h2 class="is-h4">Betaal veilig online</h2>
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
        <li class="c-progress__item c-progress__item--completed"><span>Besteloverzicht</span></li>
        <li class="c-progress__item c-progress__item--active"><span>Betaling</span></li>
        <li class="c-progress__item"><span>Bedankt</span></li>
      </ul>
    </div>

    <div class="l-two-third">
      <ul class="o-messages">
        <li class="o-messages__item--alert">De betaling via iDEAL is mislukt, je hebt te lang gewacht met betalen.</li>
      </ul>
      <div class="o-panel">
        <form>
          <ul class="o-panel__list js-payment-list">
            <li class="o-panel__list__item">

              <label class="o-form__radio o-form__radio--logo o-form__radio--ideal">
                  <strong class="is-h6 u-uppercase u-no-spacing">iDeal</strong>
                  <small>Gratis</small>
                  <input type="radio" />
                  <figure class="o-media" style="background-image: url(../assets/images/ideal.png);"></figure>
              </label>

              <div class="o-form__radio__form is-open">
                <fieldset>
                  <ul class="o-form u-no-spacing">
                    <li class="o-form__item">
                      <p class="is-small u-small-spacing">Met ideal kan je gemakkelijk betalen met je eigen bank.</p>
                      <div class="o-form__fields">
                        <div class="o-form__select">
                          <select>
                            <option value="1 persoon">Kies je bank</option>
                            <option value="2 personen">ING</option>
                          </select>
                        </div>
                      </div>
                    </li>
                  </ul>
                </fieldset>
              </div>
            </li>
            <li class="o-panel__list__item o-panel__list__item--light">
              <label class="o-form__radio o-form__radio--logo o-form__radio--paypal">
                  <strong class="is-h6 u-uppercase u-no-spacing">PayPal</strong>
                  <small>Gratis</small>
                  <input type="radio" />
                  <figure class="o-media" style="background-image: url(../assets/images/paypal.png);"></figure>
              </label>
            </li>
            <li class="o-panel__list__item">
              <label class="o-form__radio o-form__radio--logo o-form__radio--klarna">
                  <strong class="is-h6 u-uppercase u-no-spacing">Klarna</strong>
                  <small>+2% verwerkingskosten</small>
                  <input type="radio" />
                  <figure class="o-media" style="background-image: url(../assets/images/klarna.png);"></figure>
              </label>
            </li>
          </ul>
        </form>
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
          <li class="o-panel__list__item o-panel__list__item--no-border">
            <h3 class="is-h6 u-uppercase u-no-spacing">Boekingtotaal <span class="o-price">
              <span class="o-price__regular o-price--bold u-float-right">€ 68,-</span>
            </span></h3>
            <ul class="o-form__checklist u-no-spacing">
              <li class="u-only-top-spacing">
                <label class="o-form__checkbox">
                  <input name="seedcapital" type="checkbox" class="required" >
                  <span class="checkbox"></span> Ja ik ga akkoord met de <a class="neutral-link neutral-link--underline">algemene voorwaarden</a> van Festival.Travel
                </label>
              </li>
            </ul>

          </li>
        </ul>
      </div>

      <div class="o-button-wrapper">
        <a class="o-button u-float-right" href="">Doorgaan</a>
        <a class="o-button o-button--neutral" href="">Terug</a>
      </div>

    </div>

    <div class="l-one-third u-hidden-on-tablet">
      <aside class="">
        <div class="o-panel">

          <ul class="o-panel__list">

            <li class="o-panel__list__item">
              <h4 class="o-panel__title is-h4">Bestelling opgeslagen</h4>
              <p class="u-no-spacing is-small">In het volgende scherm kan je jouw bestelling controleren, wijzigen en afronden.</p>
            </li>

            <li class="o-panel__list__item o-panel__list__item--light">
              <div class="clock"></div>
              <p class="u-no-spacing is-small">Resterende tijd om je bestelling te voltooien</p>
            </li>
            <!-- <li class="o-panel__list__item o-panel__list__item--light">
              <form action="/" method="post">
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
            </li> -->

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