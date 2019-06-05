<?php

$dark = array('black','dark-gray','med-gray','green','blue','red');
$light = array('white', 'light-gray');

?>


<section class="section-texte-primaire center-content <?php if( $data->bgcolorsection()->isNotEmpty()) { ?> <?= $data->bgcolorsection() ?>-bg <?php } else { ?>white-bg <?php } ?> <?php if( in_array($data->bgcolorsection(),$dark)) { ?>white-txt<?php }?>">
  <div class="<?php if($data->centertxt()->bool()) { ?>align-text<?php } ?> en-col m-t-b-m">
      <h1 class="m-b-xs"><?= $data->titre() ?></h1>
      <?= $data->texte()->kt() ?>
  </div>
</section>
