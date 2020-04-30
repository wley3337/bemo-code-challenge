<?= snippet('header') ?>
<?= snippet('protected') ?>

<?= snippet('landing-page-header') ?>
<div class="title-wrapper">
  <div class="image">
    <?= $page->image('cover-image.jpg') ?>

  </div>
  <div class="title">
    <?= $page->imagetitle()->kirbytext() ?>
  </div>

</div>
<div class="home-wrapper">
  <div class="blue"><?= $page->title()->kirbytext() ?></div>
  <?= $page->body()->kirbytext() ?>
</div>
<?= snippet('footer') ?>