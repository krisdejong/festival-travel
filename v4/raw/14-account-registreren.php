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

<div class="l-wrapper l-wrapper--neutral">
  <div class="l-container l-container--no-top-spacing-mobile">
    <div class="l-two-third">
      <div class="o-panel">
        <ul class="o-tabs">
          <li class="o-tabs__item ">
            <a class="o-tabs__link" href="#">Nieuw account</a>
          </li>
          <li class="o-tabs__item o-tabs__item--active">
            <a class="o-tabs__link" href="#">Inloggen</a>
          </li>
        </ul>

        <div class="o-panel__body">
          <h2 class="is-h3">Welkom terug bij Festival.travel</h2>
          <p>Log in op het Festival.travel account gedeelte, hier kan je je bestellingen beheren, tickets verdelen en vouchers downloaden.</p>
        </div>
        <hr>
        <div class="o-panel__body">
          <ul class="o-messages">
            <?php include('includes/delen-facebook.php'); ?>
          </ul>

          <form action="/" method="post">
            <fieldset>
              <ul class="o-form">
                <li class="o-form__item o-form__item--half o-form__item--half--multiple">

                  <div class="o-form__item o-form__item--one-third">
                    <label class="o-form__label" for="">Aanhef</label>
                    <div class="o-form__fields">
                      <div class="o-form__select">
                        <select>
                          <option>Dhr.</option>
                          <option>Mevr.</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="o-form__item o-form__item--two-third">
                    <label class="o-form__label" for="">Voornaam</label>
                      <div class="o-form__fields">
                        <input type="text" placeholder="Je voornaam" />
                      </div>
                  </div>
                </li>

                <li class="o-form__item o-form__item--half">
                  <label class="o-form__label" for="">Achternaam</label>
                  <div class="o-form__fields is-completed">
                    <input type="text" value="Piet" />
                  </div>
                </li>

                <li class="o-form__item o-form__item--half">
                  <label class="o-form__label" for="">Emailadres</label>
                  <div class="o-form__fields">
                    <input type="text" />
                  </div>
                  <div class="o-form__fields">
                    <input type="text" placeholder="Nogmaals jouw emailadres">
                  </div>
                </li>

                <li class="o-form__item o-form__item--half">
                  <label class="o-form__label" for="">Kies een wachtwoord</label>
                  <div class="o-form__fields">
                    <input type="password" />
                  </div>
                  <div class="o-form__fields">
                    <input type="password" placeholder="Nogmaals jouw Wachtwoord" />
                  </div>
                </li>

                <li class="o-form__item">
                  <ul class="o-form__checklist">
                    <li>
                      <div class="o-form__fields">
                        <label class="o-form__checkbox">
                          <input name="seedcapital" type="checkbox" class="required" >
                          <span class="checkbox"></span> Houd mij op de hoogte over Sziget en Festival Travel
                        </label>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="o-button-wrapper u-text-left">
        <a class="o-button">Registreren</a>
      </div>
    </div>

    <div class="l-one-third u-hidden-on-tablet">
      <aside class="">
        <div class="o-panel">
          <div class="o-panel__body">
            <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Helpdesk</h4>
          </div>

          <ul class="o-panel__list">

            <li class="o-panel__list__item o-panel__list__item--has-image">
              <figure class="o-media__image"><img src="http://www.sziget.hu/content/_common/images/fesztival/2015/bestof/kedd/kedd15.jpg" /></figure>
              <p class="u-no-spacing is-small">Wij zitten iedere dag voor je klaar. Alle vragen omtrend een festival beantwoorden  we je graag!</p>
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



<?php include('includes/footer-account.php'); ?>