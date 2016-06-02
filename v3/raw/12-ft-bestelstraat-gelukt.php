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
          <li class="o-messages__item--contrast">Geweldig je betaling is geslaagd</li>
        </ul>

        <div class="o-panel">
          <div class="o-panel__body">
            <p>Spread the word en laat al jouw contacten weten wat jij deze zomer gaat doen!</p>

            <form action="/" method="post">
              <fieldset>
                <ul class="o-form u-small-spacing">
                  <li class="o-form__item">
                    <div class="o-form__fields o-form__fields--textarea-social">
                      <textarea rows="3" cols="50">YES! Ik heb onze reis geboekt naar Sziget Festival 2016. #festivaltravel #sziget #zomervakantie</textarea>
                      <div class="o-form__fields--textarea-social__footer">
                        Nog <strong>20</strong> van de <strong>140</strong> karakters berschikbaar
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="o-button-wrapper o-button-wrapper--left-aligned ">
                  <a class="o-button o-button--facebook"><svg class="o-icon o-icon--inline"><use xlink:href="#facebook-icon" /></svg>Deel op Facebook</a>
                  <a class="o-button o-button--twitter"><svg class="o-icon o-icon--inline"><use xlink:href="#icon-twitter" /></svg>Deel op Twitter</a>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>

      <div class="l-one-third u-order-1">
        <aside class="">
          <div class="o-panel">
            <div class="o-panel__body">
              <h4 class="o-panel__title is-h4 o-panel__title--no-spacing">Festival.Travel account</h4>
            </div>

            <ul class="o-panel__list">
              <li class="o-panel__list__item">
                <p class="is-small">Je vind al je tickets, vouchers, en nog veel meer terug in je festival.travel account omgeving.</p>
                <a class="o-button">Direct inloggen</a>
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
</div>


<?php include('includes/footer.php'); ?>