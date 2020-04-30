<?php snippet('header') ?>
<div class="login-wrapper">

  <div class="login-img">
    <?= $site->image('menu-image.png') ?>
  </div>
  <?php if ($error) : ?>

    <div class="alert"> <?= $page->alert()->html() ?>
    </div>
  <?php endif ?>

  <form method="post" action="<?= $page->url() ?>">
    <div>
      <label for="email"><?= $page->username()->html() ?></label>
      <input type="email" id="email" name="email" value="<?= esc(get('email')) ?>">
    </div>
    <div>
      <label for="password"><?= $page->password()->html() ?></label>
      <input type="password" id="password" name="password" value="<?= esc(get('password')) ?>">
    </div>
    <div>
      <input type="submit" name="login" value="<?= $page->button()->html() ?>">
    </div>
  </form>

</div>
<?php snippet('footer') ?>