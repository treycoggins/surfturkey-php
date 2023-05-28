<?php include('includes/_head.php'); ?>

<body id="contact" class="container">
<?php include('includes/_navigation.php'); ?>

  <header class="header">
    <h1 class="heading-1 header__heading">Let's Chat</h1>
    <h4 class="heading-4 header__heading-sub">
      If you are interested in pursuing our services please fill out the form below and someone will reach out to you
      shortly!
    </h4>
  </header>

  <main class="main">
    <form class="form mt-sm" action="src/php/contactform.php" method="POST">
      <div class="form__control">
        <label for="first-name">First Name</label>
        <input class="form__input" type="text" name="first-name" id="first-name" autofocus>
      </div>

      <div class="form__control">
        <label for="last-name">Last Name</label>
        <input class="form__input" type="text" name="last-name" id="last-name">
      </div>

      <div class="form__control">
        <label for="email">E-mail</label>
        <input class="form__input" type="email" name="email" id="email">
      </div>

      <div class="form__control">
        <label for="phone">Mobile Phone</label>
        <input class="form__input" type="text" name="phone" id="phone">
      </div>

      <div class="form__control">
        <label for="business-name">Business Name</label>
        <input class="form__input" type="text" name="business-name" id="business-name">
      </div>

      <div class="form__control">
        <label for="address">Business Address</label>
        <input class="form__input" type="text" name="address" id="address">
      </div>

      <div class="form__control">
        <label for="city">City</label>
        <input class="form__input" type="text" name="city" id="city">
      </div>

      <div class="form__control">
        <label for="state">State</label>
        <select class="form__input" type="text" name="state" id="state" size="1">
          <option value="" selected></option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">Dist of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
      </div>

      <div class="form__control">
        <label for="zip-code">Zip Code</label>
        <input class="form__input" type="text" name="zip-code" id="zip-code">
      </div>

      <div class="form__control">
        <label for="comments">Comments</label>
        <textarea class="form__input" name="comments" id="comments" rows="10" placeholder="Tell us more..."></textarea>
      </div>


      <div class="btn__group">
        <button class="submit form__submit btn" type="submit">Submit</button>
        <input class="reset form__reset btn-outlined" type="reset" value="Clear Form">
      </div>
      <h6 class="disclaimer heading-6">
        By providing the information on the form above, including phone number, and clicking submit, I consent to
        receive email and text messages from SurfTurkey.net regarding services we offer. We will not initiate contact by
        phone call. You can opt out at anytime.
      </h6>
    </form>
  </main>

  <?php include('includes/_footer.php'); ?>