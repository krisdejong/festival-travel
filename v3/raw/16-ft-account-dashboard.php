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
          <li class="o-page-tabs__item o-page-tabs__item--active">
            <a class="o-page-tabs__link" href="/v3/raw/16-ft-account-dashboard.php">Dashboard</a>
          </li>
          <li class="o-page-tabs__item">
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

    <div class="l-two-third">
      <div class="o-panel">
        <div class="o-panel__body">
          <h2 class="is-h3">Welkom bij Festival Travel</h2>
          <p>Dit is het persoonlijke account gedeelte van Festival.travel. Vanuit hier kan je jouw boekingen inzien, tickets onderverdelen aan vrienden en je persoonlijke gegevens bewerken.</p>

          <ul class="o-panel__list u-only-visble-on-mobile-and-tablet">

            <li class="o-panel__list__item o-panel__list__item--has-image o-panel__list__item--no-left-spacing">
              <a href="">
                <figure class="o-media__image"><img src="../assets/images/foto-uploaden.png" /></figure>
              </a>
              <h4 class="is-h5">Tomas Loefen</h4>
              <p class="is-small u-small-spacing">tomas@ostfest.com</p>
              <p class="is-small u-no-spacing"><a class="neutral-link neutral-link--underline" href="">Wijzig gegevens</a></p>
            </li>
          </ul>

        </div>
      </div>
      <div class="o-panel o-panel--large-spacing">
        <div class="o-panel__body">
          <h3 class="large-spacing">Persoonlijke to do lijst</h3>
        </div>
        <hr>
        <ul class="o-panel__list">
          <li class="o-panel__list__item">
            <a href="" class="o-panel__list__link">Festival.travel
              <span>Emailadres bevestigen</span>
            </a>
          </li>
          <li class="o-panel__list__item">
            <a href="" class="o-panel__list__link">Festival.travel
              <span>Emailadres bevestigen</span>
            </a>
          </li>
          <li class="o-panel__list__item">
            <a href="" class="o-panel__list__link">Festival.travel
              <span>Emailadres bevestigen</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="l-one-third u-hidden-on-tablet">
      <aside class="">
        <div class="o-panel">

          <ul class="o-panel__list">

            <li class="o-panel__list__item o-panel__list__item--has-image">
              <a href="">
                <figure class="o-media__image"><img src="../assets/images/foto-uploaden.png" /></figure>
              </a>
              <h4 class="is-h5">Tomas Loefen</h4>
              <p class="is-small u-small-spacing">tomas@ostfest.com</p>
              <p class="is-small u-no-spacing"><a class="neutral-link neutral-link--underline" href="">Wijzig gegevens</a></p>
            </li>

            <li class="o-panel__list__item o-panel__list__item--light o-panel__list__item--has-image">
              <figure class="o-media__image"><img src="http://www.sziget.hu/content/_common/images/fesztival/2015/bestof/kedd/kedd15.jpg" /></figure>
              <h4 class="is-h5">Helpdesk</h4>
              <p class="u-no-spacing is-small">Wij zitten iedere dag voor je klaar. Alle vragen omtrend een festival beantwoorden  we je graag!</p>
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