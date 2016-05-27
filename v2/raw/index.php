<?php
    $title = "Home";
    include('includes/header.php');
?>

  <header class="c-header">
    <figure class="c-header__image" style="background-image: url(../assets/images/header.jpg);"></figure>
    <div class="c-header__flex">
      <div class="l-container">
        <div class="l-full">
          <h1>Festival travel styleguide</h1>
          <h2 class="is-h4">Alle stijl elementen, dit word steeds verder uitgebouwd.</h2>
        </div>
      </div>
    </div>
  </header>

  <div class="l-container l-container--full-width">

    <div class="l-one-fourth">
      <ul class="c-pattern-library__navigation">
        <li><a href="#colors">Colors</a></li>
        <li><a href="#headings">Headings</a></li>
        <li><a href="#copy">Copy</a></li>
        <li><a href="#icons">Icons</a></li>
        <li><a href="#lists">Lists</a></li>
        <li><a href="#buttons">Buttons</a></li>
        <li><a href="#labels">Labels</a></li>
        <li><a href="#messages">Messages</a></li>
        <li><a href="#tabs">Tabs</a></li>
        <li><a href="#pagination">Pagination</a></li>
        <li><a href="#tables">Tables</a></li>
        <li><a href="#forms">Forms</a></li>
        <li><a href="#cards">Panels</a></li>
      </ul>
    </div>

    <div class="l-three-fourth">
      <h2>Alle pagina's</h2>
      <p>Goed om te weten, ik werk volgens de <a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/">BEM methode</a>. Dit is een html en css naming technique.</p>

      <h3 class="c-pattern-library__h3">Bestelstraat</h3>
      <ul class="o-list">
        <li class="o-list__item"><a href="/v2/raw/01-dashboard.php">01-dashboard</a></li>
        <li class="o-list__item"><a href="/v2/raw/04-ft-bestelstraat-gegevens.php">04-ft-bestelstraat-gegevens</a></li>
        <li class="o-list__item"><a href="/v2/raw/05-ft-bestelstraat-overzicht.php">05-ft-bestelstraat-overzicht</a></li>
        <li class="o-list__item"><a href="/v2/raw/06-kluisje-toevoegen.php">06-kluisje-toevoegen</a></li>
        <li class="o-list__item"><a href="/v2/raw/09-ft-bestelstraat-betalen-zonder.php">09-ft-bestelstraat-betalen-zonder</a></li>
        <li class="o-list__item"><a href="/v2/raw/12-ft-bestelstraat-gelukt.php">12-ft-bestelstraat-gelukt</a></li>
        <li class="o-list__item"><a href="/v2/raw/12-ft-bestelstraat-verlopen.php">12-ft-bestelstraat-verlopen</a></li>
        <li class="o-list__item"><a href="/v2/raw/16-ft-account-dashboard.php">16-ft-account-dashboard.php</a></li>
      </ul>

      <h3 class="c-pattern-library__h3">Account</h3>
      <ul class="o-list">
        <li class="o-list__item"><a href="/v2/raw/13-account-inloggen.php">13-account-inloggen.php</a></li>
        <li class="o-list__item"><a href="/v2/raw/14-account-registreren.php">14-account-registreren</a></li>
        <li class="o-list__item"><a href="/v2/raw/15-ft-account-wachtwoord-vergeten.php">15-ft-account-wachtwoord-vergeten</a></li>
        <li class="o-list__item"><a href="/v2/raw/16-ft-account-dashboard.php">16-ft-account-dashboard</a></li>
        <li class="o-list__item"><a href="/v2/raw/17-account-mijn-boekingen.php">17-account-mijn-boekingen</a></li>
        <li class="o-list__item"><a href="/v2/raw/18-account-festivals-details.php">18-account-festivals-details</a></li>
        <li class="o-list__item"><a href="/v2/raw/19-account-festivals-medereiziger.php">19-account-festivals-medereiziger</a></li>
        <li class="o-list__item"><a href="/v2/raw/20-ft-festival-detail-downloads.php">20-ft-festival-detail-downloads</a></li>
        <li class="o-list__item"><a href="/v2/raw/21-ft-festival-detail-medereiziger.php">21-ft-festival-detail-medereiziger</a></li>
        <li class="o-list__item"><a href="/v2/raw/22-ft-festival-detail-medereiziger-toevoegen.php">22-ft-festival-detail-medereiziger-toevoegen</a></li>
      </ul>


      <h2 class="c-pattern-library__h2" >JS hulp &amp; aandachtpunten voor Gravytrain</h1>
      <ul class="o-list">
        <li class="o-list__item">Op <a href="/v2/raw/09-ft-bestelstraat-betalen-zonder.php">09-ft-bestelstraat-betalen-zonder</a> heb ik nog niet een toggle gemaakt voor bijvoorbeeld de keuze van een bank. Het is een formulier, denk dat we hier even moeten afstemmen wat handig is.</a></li>
      </ul>

      <h2 class="c-pattern-library__h2">TODO design</h1>
      <ul class="o-list">
        <li class="o-list__item">Aanleveren iconen footer</li>
      </ul>

      <h2 class="c-pattern-library__h2" id="colors">Colors</h2>
      <h3 class="c-pattern-library__h3">Primary</h3>
      <div class="colors is-color-primary">
        <ul class="colors__element">
          <li>$color-primary-10</li>
          <li>$color-primary-20</li>
          <li>$color-primary-30</li>
          <li>$color-primary-40</li>
          <li>$color-primary-50</li>
          <li>$color-primary-70</li>
        </ul>
      </div>

      <h3 class="c-pattern-library__h3">Secondary</h3>
      <div class="colors is-color-secondary">
        <ul class="colors__element">
          <li>$color-secondary-10</li>
          <li>$color-secondary-20</li>
          <li>$color-secondary-30</li>
          <li>$color-secondary-40</li>
          <li>$color-secondary-50</li>
          <li>$color-secondary-70</li>
        </ul>
      </div>

      <h3 class="c-pattern-library__h3">Neutral</h3>
      <div class="colors is-color-neutral">
        <ul class="colors__element">
          <li>$color-neutral-10</li>
          <li>$color-neutral-20</li>
          <li>$color-neutral-30</li>
          <li>$color-neutral-40</li>
          <li>$color-neutral-45</li>
          <li>$color-neutral-50</li>
          <li>$color-neutral-70</li>
          <li>$color-neutral-90</li>
        </ul>
      </div>

      <h3 class="c-pattern-library__h3">Tint</h3>
      <div class="colors is-color-tint">
        <ul class="colors__element">
          <li>$color-tint-10</li>
          <li>$color-tint-30</li>
        </ul>
      </div>

      <h3 class="c-pattern-library__h3">Alert</h3>
      <div class="colors is-color-alert">
        <ul class="colors__element">
          <li>$color-alert-50</li>
          <li>$color-alert-70</li>
        </ul>
      </div>

      <h2 class="c-pattern-library__h2" id="headings">Headings</h2>
      <h3 class="c-pattern-library__h3">Standard</h3>
      <h1>H1 Taiga Boilerplate</h1>
      <h2><a href="">H2 Taiga Boilerplate</a></h2>
      <h3>H3 Taiga Boilerplate</h3>
      <h4>H4 Taiga Boilerplate</h4>
      <h5>H5 Taiga Boilerplate</h5>
      <h6>H6 Taiga Boilerplate</h6>

      <h2 class="c-pattern-library__h2" id="copy">Copy</h2>
      <h3 class="c-pattern-library__h3">Mixed</h3>
      <p>As an <strong>interface designer</strong> and <em>engineer</em> I wanted to create an <abbr>HTML5/CSS3</abbr> environment that easily sets up the basics of a <a href="">responsive</a> web application or website. It needed a grid that is <mark>flexible and fluid</mark>. Also some basic types like forms en tables would really speed up my workflow in combination with simple mixins. That's why I created Taiga, an <small>environment</small> to love.</p>

      <h2 class="c-pattern-library__h2" id="icons">Icons</h2>
      <h3 class="c-pattern-library__h3">Inline</h3>
      <svg class="o-icon o-icon--inline"><use xlink:href="../images/sprite.svg#icon-coffee" /></svg> Let's grab a coffee.

      <h2 class="c-pattern-library__h2" id="lists">Lists</h2>
      <h3 class="c-pattern-library__h3">Unordered</h3>
      <ul class="o-list">
        <li class="o-list__item">Nice warm brown bread from the big oven</li>
        <li class="o-list__item">Some candy</li>
        <li class="o-list__item">Dinner with salmon and spinach</li>
        <li class="o-list__item">And I love ice cream</li>
      </ul>

      <h3 class="c-pattern-library__h3">Ordered</h3>
      <ol class="o-list">
        <li class="o-list__item">I need chocolate</li>
        <li class="o-list__item">Chewing gum</li>
        <li class="o-list__item">Nice lollypop</li>
      </ol>

      <h3 class="c-pattern-library__h3">Definition list</h3>
      <?php include('includes/panel-helpdesk.php'); ?>

      <h2 class="c-pattern-library__h2" id="buttons">Buttons</h2>
      <h3 class="c-pattern-library__h3">Mixed</h3>

      <button class="o-button" type="submit">Buy</button>
      <a class="o-button--neutral" href="">Learn more</a>
      <a class="o-button--alert" href="">Delete</a>

      <h2 class="c-pattern-library__h2" id="labels">Labels</h2>
      <h3 class="c-pattern-library__h3">Mixed</h3>
      <span class="o-label">Label</span>
      <span class="o-label--neutral">Label</span>
      <span class="o-label--alert">Label</span>
      <br /><br />
      <h2 class="o-panel__title is-h4 o-panel__title--no-spacing">
        Earlybird: 5 DAYS PASS <span class="o-label o-label--alert o-label--arrow">-10%</span>
      </h2>

      <h2 class="c-pattern-library__h2" id="messages">Messages</h2>
      <h3 class="c-pattern-library__h3">Mixed</h3>
      <ul class="o-messages">
        <li class="o-messages__item">Don't forget to check your tasks</li>
        <?php include('includes/delen-facebook.php'); ?>
        <li class="o-messages__item--neutral">Did you know about our recent changes?</li>
        <li class="o-messages__item--success">Wow, that's great, you finished your tasks</li>
        <li class="o-messages__item--alert">Hmm, it's not possible to delete your task</li>
        <li class="o-messages__item--warning o-messages__item--warning--has-button">Een festival kluisje is altijd handig, €25 euro <a class="o-button">Toevoegen</a></li>
        <li class="o-messages__item--contrast">Geweldig je betaling is geslaagd</li>
      </ul>

      <h2 class="c-pattern-library__h2" id="pagination">Pagination</h2>
      <h3 class="c-pattern-library__h3">Standard</h3>
      <ul class="o-pagination">
        <li class="o-pagination__item"><a href="">Previous</a></li>
        <li class="o-pagination__item o-pagination__item--selected"><a href="">3</a></li>
        <li class="o-pagination__item"><a href="">4</a></li>
        <li class="o-pagination__item o-pagination__item--gap">...</li>
        <li class="o-pagination__item"><a href="">11</a></li>
        <li class="o-pagination__item"><a href="">12</a></li>
        <li class="o-pagination__item"><a href="">Next</a></li>
      </ul>

      <h2 class="c-pattern-library__h2" id="tables">Tables</h2>
      <h3 class="c-pattern-library__h3">Standard</h3>
      <?php include('includes/table-order-history.php'); ?>

      <div class="l-two-third">
        <h2 class="c-pattern-library__h2" id="forms">Forms</h2>
        <h3 class="c-pattern-library__h3">Met meldingen</h3>
        <?php include('includes/gegevens.php'); ?>
      </div>

      <div class="l-full">
        <h2 class="c-pattern-library__h2" id="cards">Panels</h2>
        <h3 class="c-pattern-library__h3">Met uitklap</h3>
        <h2>Tickets</h2>
      </div>

      <div class="l-two-third" style="clear: both;">
        <?php include('includes/accordion-ticket.php'); ?>
        <?php include('includes/accordion-ticket.php'); ?>
      </div>

      <div class="l-two-third" style="clear: both;">
        <?php include('includes/accomodatie.php'); ?>
      </div>

      <div class="l-one-third" style="clear: left;">
        <?php include('includes/order-history.php'); ?>
      </div>

      <div class="l-one-third">
        <div class="o-panel">
          <div class="o-panel__body">
          <h4 class="o-panel__title is-h4">Beschikbare producten</h4>
          <p class="u-small-spacing is-small">Verdeel de producten en wijs deze toe aan de bijbehorende personen.</p>
          <?php include('includes/products.php'); ?>
          </div>
        </div>
      </div>

      <div class="l-two-third" style="clear: both;">
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
      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
<?php include('includes/modal.php'); ?>