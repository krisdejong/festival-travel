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
        <li class="c-progress__item c-progress__item--completed"><span>Betaling</span></li>
        <li class="c-progress__item c-progress__item--active"><span>Bedankt</span></li>
      </ul>
    </div>

    <div class="u-flex-mobile">
      <div class="l-two-third u-order-2">
        <ul class="o-messages">
          <li class="o-messages__item--alert">De bestelling is geannuleerd, tijd is verstreken.</li>
        </ul>

        <div class="o-panel">
          <div class="o-panel__body">
            <h2>Je hebt te lang gewacht met betalen Tomas!</h2>
            <p>Het heeft helaas te lang geduurd voor je jouw bestelling hebt afgerond. De maximale duur is 24 uur en is verstreken</p>
            <h3>Waarom gebeurd dit?</h3>
            <p>Festival Travel heeft te maken met een maximale beschikbaarheid bij de tickets, accommodaties en reizen. We willen je niet teleur stellen en daarom zorgen we ervoor dat onze website up-2-date blijft.</p>
            <p>Bestellingen die 24 uur open staan sluiten we af, er van uitgaande dat je die bewust niet afgerond hebt. Op die manier zorgen we ervoor dat onze informatie omtrend de voorraad actueel blijft.</p>
          </div>
        </div>

        <div class="o-panel">
          <a class="o-panel__link o-panel__link--has-image">
            <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Sziget Festival 2016</h2>
            <p>Boedapest, Hongarije</p>
            <span class="o-button o-panel__link__absolute">Nog een keer</span>
            <figure class="o-media__image" style="background-image: url(http://www.fashionengadgets.nl/wp-content/uploads/2014/11/intercontinental-mar-menor-hotel-night-493.jpg);"></figure>
          </a>
        </div>

        <div class="o-panel">
          <a class="o-panel__link o-panel__link--has-image">
            <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Sziget Festival 2016</h2>
            <p>Boedapest, Hongarije</p>
            <p class="u-no-spacing">Festival Travel heeft te maken met een maximale beschikbaarheid bij de tickets, accommodaties en reizen. We willen je niet teleur stellen en daarom zorgen we ervoor dat onze website up-2-date blijft.</p>
            <span class="o-button o-panel__link__absolute">Nog een keer</span>
            <figure class="o-media__image" style="background-image: url(http://www.fashionengadgets.nl/wp-content/uploads/2014/11/intercontinental-mar-menor-hotel-night-493.jpg);"></figure>
          </a>
        </div>

      </div>

      <div class="l-one-third u-order-1">
        <aside class="">
          <div class="o-panel">
            <div class="o-panel__body">
              <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Controleer je bestelling</h4>
            </div>

            <ul class="o-panel__list">
              <li class="o-panel__list__item">
                <p class="is-small u-small-spacing">We willen je vragen jouw bestelling goed te controleren, hierbij helpen we je graag een handje. Zo zie je in het overzicht suggesties als het nodig is.</p>
                <a class="o-button">Direct inloggen</a>
              </li>

              <li class="o-panel__list__item o-panel__list__item--neutral  o-panel__list__item--is-half">
                <?php include('includes/panel-helpdesk.php'); ?>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>