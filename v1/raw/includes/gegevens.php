<form action="/" method="post">
  <fieldset>
    <ul class="o-form">
      <li class="o-form__item o-form__item--half o-form__item--half--multiple o-form__item--error">

        <div class="o-form__item o-form__item--one-third">
          <label class="o-form__label" for="">Aanhef</label>
          <div class="o-form__fields">
            <div class="o-form__select">
              <select>
                <option>Dhr.</option>
                <option>Mevr.</option>
              </select>
            </div>
            <ul class="o-form__errors">
              <li>Dit is een error</li>
            </ul>
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
        <label class="o-form__label" for="">Naam</label>
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
        <label class="o-form__label" for="">Telefoonnummer</label>
        <div class="o-form__fields">
          <input type="text" />
        </div>
      </li>

      <li class="o-form__item o-form__item--half">
        <label class="o-form__label" for="">Land</label>
        <div class="o-form__fields">
          <div class="o-form__select">
            <select>
              <option>Nederland</option>
            </select>
          </div>
        </div>
      </li>

      <li class="o-form__item o-form__item--half"> <!--Laten staan is een fix--> </li>

      <li class="o-form__item o-form__item--half o-form__item--half--multiple">
        <div class="o-form__item o-form__item--two-third">
          <label class="o-form__label" for="">Postcode</label>
          <div class="o-form__fields">
            <input type="text" placeholder="1234 AA" />
          </div>
        </div>
        <div class="o-form__item o-form__item--one-third">
          <label class="o-form__label" for="">Huisnummer</label>
          <div class="o-form__fields">
            <input type="text" placeholder="" />
          </div>
        </div>
      </li>
      <li class="o-form__item o-form__item--half o-form__item--nolabel">
        <div class="o-form__fields is-completed">
          <div class="o-messages__item--success" />
            KNSM-laan, Amsterdam
          </div>
        </div>
      </li>

      <li class="o-form__item o-form__item--half">
        <label class="o-form__label" for="">Wachtwoord</label>
        <div class="o-form__fields">
          <input type="password" />
        </div>
        <div class="o-form__fields">
          <input type="password" placeholder="Nogmaals jouw Wachtwoord" />
        </div>
      </li>

      <li class="o-form__item">
        <ul class="o-form__checklist u-no-spacing">
          <li class="u-only-top-spacing">
            <div class="o-form__fields u-no-spacing">
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