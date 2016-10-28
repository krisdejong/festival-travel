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
          <li class="o-page-tabs__item">
            <a class="o-page-tabs__link" href="/v3/raw/17-account-mijn-boekingen.php">Mijn boekingen</a>
          </li>
          <li class="o-page-tabs__item o-page-tabs__item--active">
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

<div class="l-wrapper l-wrapper--neutral">
  <div class="l-container l-container--no-top-spacing-mobile">
    <div class="l-two-third">
      <div class="o-panel">
        <div class="o-panel__header">
          <h2 class="is-h3 large-spacing">Persoons- en adresgegevens</h2>
        </div>
        <section class="o-panel__body">
          <div class="l-one-fourth">
            <figure class="o-media__image"><img src="http://www.sziget.hu/content/_common/images/fesztival/2015/bestof/kedd/kedd15.jpg"></figure>
          </div>

          <ul class="o-list l-three-fourth u-no-spacing">
            <li><strong>Dhr. Ruud bongaerts</strong></li>
            <li>Amsterdamsestraatplein 21</li>
            <li>1111AA Haarlem, Nederland</li>
            <li>06 123 456 78</li>
          </ul>
          <span class="o-button-wrapper">
            <a href="#" class="o-panel-inner__link neutral-link">Wijzig gegevens</a>
          </span>
          
        </section>
      </div>

      <div class="o-panel">
        <div class="o-panel__header">
          <h2 class="is-h3 large-spacing">Adresgegevens</h2>
        </div>
        <div class="o-panel__body">
          <ul class="o-list u-no-spacing">
            <li>ruud@osfest.nl</li>
            <li>********</li>
          </ul>
          
          <span class="o-button-wrapper">
            <a href="#" class="o-panel-inner__link neutral-link">Wijzig inloggegevens</a>
          </span>
        </div>
      </div>

      <div class="o-panel">
        <div class="o-panel__header">
          <h2 class="is-h3 large-spacing">Notificatie voorkeuren</h2>
        </div>
        <div class="o-panel__body">
          <dl class="is-advanced u-no-spacing">
            <dt>Nieuwsbrief</dt>
            <dd>Ja, wekelijks ontvangen</dd>
            <dt>Festival Updates</dt>
            <dd>Ja, ontvangen</dd>
            <dt>Systeem notificaties</dt>
            <dd>Ja, ontvangen</dd>
          </dl>
          <span class="o-button-wrapper">
            <a href="#" class="o-panel-inner__link neutral-link">Wijzig voorkeuren</a>
          </span>
        </div>
      </div>
    </div>

    <div class="l-one-third l-one-third u-hidden-on-tablet">
      <aside class="">
        <div class="o-panel">
          <div class="o-panel__body">
            <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Helpdesk</h4>
          </div>

          <ul class="o-panel__list">

            <li class="o-panel__list__item o-panel__list__item--has-image">
              <figure class="o-media__image"><img src="http://www.sziget.hu/content/_common/images/fesztival/2015/bestof/kedd/kedd15.jpg"></figure>
              <p class="u-no-spacing is-small">Wij zitten iedere dag voor je klaar. Alle vragen omtrend een festival beantwoorden  we je graag!</p>
            </li>

            <li class="o-panel__list__item o-panel__list__item--neutral">
              <dl class="is-advanced u-no-spacing">
                <dt>Helpdesk:</dt>
                <dd><a href="tel:0203080854" class="neutral-link">020 - 308 08 54</a></dd>

                <dt class="u-no-spacing">Mail versturen:</dt>
                <dd class="u-no-spacing"><a href="tel:0203080854" class="neutral-link">Mail versturen</a></dd>
              </dl>
            </li>
          </ul>
        </div>
      </aside>
    </div>



  </div>
</div>
<footer class="c-footer">
  <div class="l-wrapper l-wrapper--contrast">
    <div class="l-container">
      <div class="l-one-third c-footer__icon-box">
        <i class="o-icon o-icon--medium">
          <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-customer-service"></use></svg>
        </i>
        <h5 class="c-footer__title">Klantenservice</h5>
        <p>Door onze overzichtelijke bestelstraat kun je in enkele stappen jouw festivalreis regelen</p>
      </div>
      <div class="l-one-third c-footer__icon-box">
        <i class="o-icon o-icon--medium">
          <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-safe"></use></svg>
        </i>
        <h5 class="c-footer__title">Veilig online betalen</h5>
        <p>Door onze overzichtelijke bestelstraat kun je in enkele stappen jouw festivalreis regelen</p>
      </div>
      <div class="l-one-third c-footer__icon-box">
        <i class="o-icon o-icon--medium">
          <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-offical"></use></svg>
        </i>
        <h5 class="c-footer__title">Officeel ticket partner</h5>
        <p>Door onze overzichtelijke bestelstraat kun je in enkele stappen jouw festivalreis regelen</p>
      </div>
    </div>
  </div>

</footer>
<?php include('includes/footer-account.php'); ?>
