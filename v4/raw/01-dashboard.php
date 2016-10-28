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
        <li class="c-progress__item c-progress__item--active"><span>Pakket samenstellen</span></li>
        <li class="c-progress__item"><span>Gegevens</span></li>
        <li class="c-progress__item"><span>Besteloverzicht</span></li>
        <li class="c-progress__item"><span>Betaling</span></li>
        <li class="c-progress__item"><span>Bedankt</span></li>
      </ul>
    </div>

    <section id="tickets">
      <div class="l-two-third">
        <ul class="o-accordion-list">
          <li class="o-accordion-list__item"><?php include('includes/accordion-ticket.php'); ?></li>
          <li class="o-accordion-list__item"><?php include('includes/accordion-ticket.php'); ?></li>
          <li class="o-accordion-list__item"><?php include('includes/accordion-ticket.php'); ?></li>
          <li class="o-accordion-list__item"><?php include('includes/accordion-ticket.php'); ?></li>
        </ul>
      </div>

      <div class="l-one-third">
        <div class="sticky">
          <?php include('includes/panel-bestel-overzicht.php'); ?>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="l-wrapper l-wrapper--light">
  <div class="l-container">
    <section id="accomodatie">
      <div class="l-two-third">
        <?php include('includes/accomodatie.php'); ?>
      </div>
    </section>
  </div>
</div>
<div class="l-wrapper l-wrapper--neutral">
  <div class="l-container">
    <section id="reis">
      <div class="l-two-third">
        <h2 class="o-accordion-list__title">Reis</h2>

        <ul class="o-accordion-list">
          <li class="o-accordion-list__item">
            <?php include('includes/bus.php'); ?>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel  o-accordion js-accordion">
              <a class="o-panel__link o-panel__link--has-icon o-accordion__link">
                <i class="o-icon o-icon--medium">
                  <svg class="icon"><use xlink:href="#icon-train" /></svg>
                </i>
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Festival.travel Sziget Expres</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
              </div>
            </div>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel  o-accordion js-accordion">
              <a class="o-panel__link o-panel__link--has-icon o-accordion__link">
                <i class="o-icon o-icon--medium">
                  <svg class="icon"><use xlink:href="#icon-interrails" /></svg>
                </i>
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Interrails</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
              </div>
            </div>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel o-accordion js-accordion">
              <a class="o-panel__link o-panel__link--has-icon o-accordion__link">
                <i class="o-icon o-icon--medium">
                  <svg class="icon"><use xlink:href="#icon-transfer" /></svg>
                </i>
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Festival transfer</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</div>

<div class="l-wrapper">
  <div class="l-container">
    <section id="services">
      <div class="l-two-third">
        <h2 class="o-accordion-list__title">Services</h2>
        <ul class="o-accordion-list">
          <li class="o-accordion-list__item">
            <?php include('includes/bus.php'); ?>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel  o-accordion js-accordion">
              <a class="o-panel__link o-panel__link--has-icon o-accordion__link">
                <i class="o-icon o-icon--medium">
                  <svg class="icon"><use xlink:href="#icon-train" /></svg>
                </i>
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Festival.travel Sziget Expres</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
              </div>
            </div>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel  o-accordion js-accordion">
              <a class="o-panel__link o-panel__link--has-icon o-accordion__link">
                <i class="o-icon o-icon--medium">
                  <svg class="icon"><use xlink:href="#icon-interrails" /></svg>
                </i>
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Interrails</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
              </div>
            </div>
          </li>
          <li class="o-accordion-list__item">
            <div class="o-panel o-accordion js-accordion">
              <a class="o-panel__link o-panel__link--has-icon o-accordion__link">
                <i class="o-icon o-icon--medium">
                  <svg class="icon"><use xlink:href="#icon-transfer" /></svg>
                </i>
                <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">Festival transfer</h2>
                <i class="o-icon o-accordion__arrow">
                  <svg class="icon"><use xlink:href="#icon-arrow-down" /></svg>
                </i>
              </a>
              <div class="o-accordion__content o-panel__body">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</div>

<?php include('includes/footer.php'); ?>