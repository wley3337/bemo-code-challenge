<?= snippet('header') ?>
<?= snippet('protected') ?>
<?= snippet('landing-page-header') ?>
<div class="contact-us-wrapper">
  <div>
    <?= $page->image('contact-us.png') ?>
  </div>
  <div>
    <h1> BeMo Academic Consulting Inc.</h1>
    <p><span class="contact-text">Toll Free:</span> <?= $page->phone()->kirbytext() ?>
      <p><span class="contact-text">Email:</span> <?= $page->email()->kirbytext() ?>
  </div>
  <p><?= $success ?></p>
  <?php if (isset($alert['error'])) : ?>
    <div><?= $alert['error'] ?></div>
  <?php endif ?>
  <form method="post" action="<?= $page->url() ?>">
    <div>
      <label for="name">NAME<abbr title="required">*</abbr></label>
      <input type="name" id="name" name="name" value="<?= $data['name'] ?? '' ?>">
      <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
    </div>
    <div>
      <label for="email">EMAIL ADDRESS<abbr title="required">*</abbr></label>
      <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>">
      <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
    </div>
    <div>
      <label for="text">HOW CAN WE HELP YOU?<abbr title="required">*</abbr></label>
      <input type="text" id="text" name="text" value="<?= $data['text'] ?? '' ?>">
      <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
    </div>
    <div>
      <input type="reset" name="contact-us" value="RESET">
      <input type="submit" name="contact-us" value="SUBMIT">
    </div>
  </form>
  <p><span class="contact-text">Note:</span>If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)</p>
</div>
<?= snippet('footer') ?>