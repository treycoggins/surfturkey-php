<?php include('includes/_head.php'); ?>

<body id="get-started" class="container">
<?php include('includes/_navigation.php'); ?>

  <header class="header">
    <div class="btn-header mt-xl">get started</div>
    <h1 class="heading-1 centered uppercase header__heading">how can we help you?</h1>
  </header>

  <main class="main">
    <form class="form" action="/submit-getstartedform" method="POST">
      <div class="form__control checkbox">
        <input class="form__input" type="checkbox" name="checkboxes[]" value="web design" id="web-design">
        <label for="web-design">Web Design</label>
      </div>
      <div class="form__control checkbox">
        <input class="form__input" type="checkbox" name="checkboxes[]" value="email campaign" id="email-campaign">
        <label for="email-campaign">Email Campaign</label>
      </div>
      <div class="form__control checkbox">
        <input class="form__input" type="checkbox" name="checkboxes[]" value="seo" id="seo">
        <label for="seo">SEO</label>
      </div>
      <div class="form__control checkbox">
        <input class="form__input" type="checkbox" name="checkboxes[]" value="web blog" id="web-blog">
        <label for="web-blog">Web Blog</label>
      </div>
      <div class="form__control">
        <label for="company-size">Company Size</label>
        <select class="form__input" type="text" id="company-size" name="company-size">
          <option value="small">Small Business (1 - 50 employees)</option>
          <option value="medium">Mid-size (50 - 500 employees)</option>
          <option value="large">Enterprise (500+ employees)</option>
          <option value="agency">Agency</option>
          <option value="start-up">Start-up</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form__control">
        <label for="full-name">Full Name*</label>
        <input class="form__input" type="text" id="full-name" name="full-name" required>
      </div>
      <div class="form__control">
        <label for="email">Email*</label>
        <input class="form__input" type="text" id="email" name="email" required>
      </div>
      <div class="form__control">
        <label for="website">Website or Desired Web Address</label>
        <input class="form__input" type="text" id="website" name="website">
      </div>
      <div class="form__control">
        <label for="message">Message</label>
        <textarea class="form__input" type="text" row="5" id="message" name="message"></textarea>
      </div>
      <div class="form__control">
        <button type="submit" class="form__submit uppercase btn">submit</button>
      </div>
    </form>
  </main>

  <?php include('includes/_footer.php'); ?>