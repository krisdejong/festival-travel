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
  <div class="l-container">
    <div class="l-two-third">
      <div class="o-panel">

        <div class="o-panel__body">
          <h2 class="is-h3">Wachtwoord vergeten</h2>
          <p>Kan gebeuren, geen probleem. Jouw account is gelinkt aan een emailadres, waarschijnlijk die je gebruikt hebt tijdens het plaatsen van een bestelling. Weet je ook deze niet meer? Bel of mail dan met onze helpdesk.</p>
        </div>
        <hr>
        <div class="o-panel__body">

          <form action="/" method="post">
            <fieldset>
              <ul class="o-form">
                <li class="o-form__item o-form__item--half">
                  <label class="o-form__label" for="">Emailadres</label>
                  <div class="o-form__fields">
                    <input type="text" />
                  </div>
                </li>
              </ul>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="o-button-wrapper u-text-left">
        <a class="neutral-link" href="">Terug</a>
        <a class="o-button">Reset wachtwoord</a>
      </div>
    </div>

    <div class="l-one-third">
      <aside class="">
        <div class="o-panel">
          <ul class="o-panel__list">

            <li class="o-panel__list__item o-panel__list__item--has-image">
              <h4 class="is-h5">Helpdesk</h4>
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


<?php include('includes/footer.php'); ?>