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
            <a class="o-page-tabs__link" href="/v2/raw/16-ft-account-dashboard.php">Dashboard</a>
          </li>
          <li class="o-page-tabs__item o-page-tabs__item--active">
            <a class="o-page-tabs__link" href="/v2/raw/17-account-mijn-boekingen.php">Mijn boekingen</a>
          </li>
          <li class="o-page-tabs__item">
            <a class="o-page-tabs__link" href="#">Mijn gegevens</a>
          </li>
          <li class="o-page-tabs__item">
            <a class="o-page-tabs__link" href="/v2/raw/13-account-inloggen.php">Uitloggen</a>
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
          <h2 class="is-h3 large-spacing">Aankomende festivals</h2>
        </div>
        <hr>
        <a class="o-panel__link o-panel__link--has-image">
          <h2 class="o-panel__title is-h4">Sziget Festival 2016 (reisleider)</h2>
          <p class="u-no-spacing is-small">Budapest, Hongarije</p>
          <p class="u-no-spacing is-small">6 t/m 10 juli 2016</p>
          <figure class="o-media__image" style="background-image: url(http://fiftypairsofshoes.com/wp-content/uploads/2014/07/2048.jpg);"></figure>
          <p class="u-no-spacing is-small o-panel__link__absolute "><strong class="u-red">7 openstaande taken</strong></p>
        </a>

        <hr>
        <a class="o-panel__link o-panel__link--has-image">
          <h2 class="o-panel__title is-h4">MELT! 2016</h2>
          <p class="u-no-spacing is-small">Gräfenhainichen, Duitsland</p>
          <p class="u-no-spacing is-small">6 t/m 10 juli 2016</p>
          <figure class="o-media__image" style="background-image: url(https://www.residentadvisor.net/images/reviews/2010/melt2010-01.jpg);"></figure>
          <p class="u-no-spacing is-small o-panel__link__absolute "><strong class="u-red">7 openstaande taken</strong></p>
        </a>
      </div>

      <div class="o-panel">
        <div class="o-panel__body">
          <h2 class="is-h3 large-spacing">Jouw festival historie</h2>
        </div>
        <hr>
        <a class="o-panel__link o-panel__link--has-image o-panel__link--small-image">
          <h2 class="o-panel__title is-h4">Ballaton Sound 2015</h2>
          <figure class="o-media__image" style="background-image: url(http://fiftypairsofshoes.com/wp-content/uploads/2014/07/2048.jpg);"></figure>
        </a>
        <hr>
        <a class="o-panel__link o-panel__link--has-image o-panel__link--small-image">
          <h2 class="o-panel__title is-h4">Ballaton Sound 2015</h2>
          <figure class="o-media__image" style="background-image: url(http://fiftypairsofshoes.com/wp-content/uploads/2014/07/2048.jpg);"></figure>
        </a>
      </div>
    </div>

    <div class="l-one-third">
      <aside class="">
        <?php include('includes/order-history.php'); ?>
      </aside>

    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>