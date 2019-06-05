<?php

$dark = array('black','dark-gray','med-gray','green','blue','red');
$light = array('white', 'light-gray');

?>

<section class="section-texte <?php if( $data->bgcolorsection()->isNotEmpty()) { ?> <?= $data->bgcolorsection() ?>-bg <?php } else { ?>white-bg <?php } ?> <?php if( in_array($data->bgcolorsection(),$dark)) { ?>white-txt<?php }?>">
  <div class="en-col <?php if( $data->verticalcenter()->bool()) { ?>align-text<?php } ?>">
    <div class="p-t-b-m page-content">
      <div class="m-r-l-xs">
        <?= $data->texte()->kt() ?>
      </div>
    </div>
  </div>
</section>
