<nav>
  <div class="menu">

    <div class="lp-img">
      <?= $site->image('menu-image.png') ?>
    </div>
    <div class='lp-menu'>
      <?php foreach ($site->children()->listed()->not('login') as $subpage) : ?>
        <a href="<?= $subpage->url() ?>"> <?= $subpage->menutext() ?> </a>
      <?php endforeach ?>
      <?php if ($user = $kirby->user()) : ?>
        <a href="<?= url('logout') ?>">Logout</a>
      <?php endif ?>
    </div>
  </div>

</nav>