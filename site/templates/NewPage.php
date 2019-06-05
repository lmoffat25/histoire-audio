<?= snippet('header') ?>

<main>
  <div class="">
    <h1><?php echo $page->titre() ?></h1>
    <p><?php echo $page->contenu()->kt() ?></p>
  </div>
  <div class="">
    <?php
  foreach($page->builder()->toBuilderBlocks() as $block):
    snippet('sections/' . $block->_key(), array('data' => $block));
  endforeach;
  ?>
  </div>
</main>

<?= snippet('footer') ?>
