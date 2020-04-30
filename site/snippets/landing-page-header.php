<nav>
  <div class="menu">

    <div class="lp-img">
      <?= $page->image('menu-image.png') ?>
    </div>
    <div class='lp-menu'>
      <?php foreach ($site->children()->listed() as $subpage) : ?>
        <a href="<?= $subpage->url() ?>"> <?= $subpage->menutext() ?> </a>
      <?php endforeach ?>
    </div>
  </div>

</nav>