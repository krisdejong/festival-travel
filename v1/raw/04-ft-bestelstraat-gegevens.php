<?php
    $title = "Home";
    include('includes/header.php');
?>

<header class="c-header">
  <figure class="c-header__image" style="background-image: url(../assets/images/header.jpg);"></figure>
  <div class="c-header__flex">
    <div class="l-container">
      <div class="l-full">
        <h1>Jouw gegevens</h1>
        <h2 class="is-h4">Bestelling afronden</h2>
      </div>
    </div>
  </div>
</header>

<div class="l-wrapper l-wrapper--neutral">
  <div class="l-container">
    <div class="l-full">
      <ul class="c-progress">
        <li class="c-progress__item c-progress__item--completed"><span>Pakket samenstellen</span></li>
        <li class="c-progress__item c-progress__item--active"><span>Gegevens</span></li>
        <li class="c-progress__item"><span>Besteloverzicht</span></li>
        <li class="c-progress__item"><span>Betaling</span></li>
        <li class="c-progress__item"><span>Bedankt</span></li>
      </ul>
    </div>

    <div class="l-full">
      <h2>Tickets</h2>
    </div>

    <div class="l-two-third">
      <div class="o-panel">
        <ul class="o-tabs">
          <li class="o-tabs__item o-tabs__item--active">
            <a class="o-tabs__link" href="#">Nieuw account</a>
          </li>
          <li class="o-tabs__item">
            <a class="o-tabs__link" href="#">Inloggen</a>
          </li>
        </ul>

        <div class="o-panel__body">
          <p>We hebben een aantal van jouw gegevens nodig om de boeking af te ronden. Hierbij een account aan, daarmee kan je jouw boeking beheren.</p>
        </div>
        <hr>
        <div class="o-panel__body">
          <ul class="o-messages">
            <?php include('includes/delen-facebook.php'); ?>
          </ul>

          <?php include('includes/gegevens.php'); ?>
        </div>
        <hr>
        <div class="o-panel__body">
          <fieldset>
            <ul class="o-form">
              <li class="o-form__item o-form__item--half">
                <label class="o-form__label" for="">Kledingmaat</label>
                <p class="is-small u-small-spacing">Vanwege de Earlybird actie ontvang je een gratis t-shirt, wat is jouw kledingmaat?</p>
                <div class="o-form__fields">
                  <div class="o-form__select">
                    <select>
                      <option>M</option>
                      <option>L</option>
                    </select>
                  </div>
                </div>
              </li>
            </ul>
          </fieldset>
        </div>
      </div>
      <div class="o-button-wrapper">
        <a class="o-button u-float-right" href="/v1/raw/05-ft-bestelstraat-overzicht.php">Doorgaan</a>
      </div>
    </div>

    <div class="l-one-third">
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