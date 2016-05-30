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
        <li class="o-page-tabs__item">
          <a class="o-page-tabs__link" href="">Producten &amp; tickets</a>
        </li>
        <li class="o-page-tabs__item o-page-tabs__item--active">
          <a class="o-page-tabs__link" href="#">Downloads</a>
        </li>
      </ul>
    </div>

    <div class="l-two-third">

      <div class="o-panel">
        <a class="o-panel__link o-panel__link--neutral">
          <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Alle bestanden downloaden</h2>
          <span class="o-panel__link__absolute">1 openstaande taak</span>
        </a>
        <div class="o-panel__body">
          <p><a class="orange-link orange-link--underline">Wij hebben nog aanvullende informatie nodig</a></p>
        </div>
      </div>
      <div class="o-panel">
        <a class="o-panel__link o-panel__link--tint js-modal">
          <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Alle bestanden downloaden</h2>


          <span class="o-panel__link__absolute">Download</span>
        </a>
      </div>
      <div class="o-panel">
        <a class="o-panel__link">
          <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">7x 7 Days Pass</h2>
          <span class="o-panel__link__absolute u-green">Download</span>
        </a>
      </div>
      <div class="o-panel">
        <a class="o-panel__link">
          <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">7x 7 Days Pass</h2>
          <span class="o-panel__link__absolute u-green">Download</span>
        </a>
      </div>
      <div class="o-panel">
        <a class="o-panel__link">
          <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">7x 7 Days Pass</h2>
          <span class="o-panel__link__absolute u-green">Download</span>
        </a>
      </div>
    </div>

    <div class="l-one-third">
      <aside class="">
        <div class="o-panel">
          <div class="o-panel__body">
            <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Producten &amp; tickets</h4>
          </div>

          <ul class="o-panel__list">
            <li class="o-panel__list__item">
              <p class="u-small-spacing is-small">In dit overzicht vind je alle door jou, of door je reisgenoot gekochtte producten voor het Sziget Festival 2016.</p>
              <p class="u-no-spacing is-small">Zorg ervoor dat alle taken afgerond zijn, eerder kan je de tickets niet downloaden.</p>
            </li>
            <li class="o-panel__list__item o-panel__list__item--light">
              <h4 class="o-panel__title">Tickets per e-mail</h4>
              <p class="u-small-spacing is-small">Ontvang je graag je tickets gebundeld per e-mail? Stuur dan deze e-mail naar een door jouw ingevuld e-mailadres hieronder.</p>

              <form action="/" method="post">
                <fieldset>
                  <ul class="o-form u-no-spacing">
                    <li class="o-form__item">
                      <label class="o-form__label" for="">Emailadres</label>
                      <div class="o-form__fields">
                        <input type="text" />
                      </div>
                    </li>
                    <li class="o-form__item ">
                      <div class="o-form__fields u-no-spacing u-float-right">
                        <input class="o-button o-button--neutral" type="submit" value="verstuur tickets" />
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
<?php include('includes/modal.php'); ?>