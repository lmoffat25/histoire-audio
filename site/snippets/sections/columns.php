<?php

$dark = array('black','dark-gray','med-gray','green','blue','red');
$light = array('white', 'light-gray');

?>

<section class="section-columns grid-x<?php if( $data->bgcolorsection()->isNotEmpty()) { ?> <?= $data->bgcolorsection() ?>-bg <?php } else { ?>white-bg <?php } ?> <?php if( in_array($data->bgcolorsection(),$dark)) { ?>white-txt<?php }?> ">

    <!-- Colonne de gauche -->
    <div class="column cell small-6<?php if( $data->bgcolor1()->isNotEmpty()) { ?> <?= $data->bgcolor1() ?>-bg <?php } ?>  <?php if( in_array($data->bgcolor1(),$light)) { ?>black-txt<?php }?>">
      <div class="sub-column <?php if( $data->invergauche()->bool()) : ?>rev-sens <?php endif; ?> <?php if( $data->centreagauche()->bool()) { ?>vrtcl-algn<?php } ?> <?php if( $data->image1()->isNotEmpty()) { ?> align-text <?php } ?>">
        <div class="page-image <?php if ( $data->marginimagegauche()->isNotEmpty()) { ?><?= $data->marginimagegauche() ?><?php } ?>">
          <?php if ( $data->image1()->isNotEmpty()): ?>
            <img src="<?= $data->image1()->toFile()->url() ?>" alt="">
          <?php endif; ?>
        </div>
        <div class="page-content <?php if ( $data->titre1()->isNotEmpty() || $data->text1()->isNotEmpty()) { ?>p-r-l-m<?php } ?>">
          <?php if ( $data->titre1()->isNotEmpty() || $data->text1()->isNotEmpty()): ?>
            <h2><?= $data->titre1() ?></h2>
            <?= $data->text1()->kt() ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Colonne de droite -->
    <div class="column cell small-6<?php if( $data->bgcolor2()->isNotEmpty()) { ?> <?php echo $data->bgcolor2() ?>-bg <?php } ?> ">
      <div class="sub-column <?php if( $data->centreadroite()->bool()) { ?> vrtcl-algn <?php } ?> <?php if( $data->image2()->isNotEmpty()) { ?>align-text <?php } ?> <?php if( $data->inverdroite()->bool()) : ?>rev-sens<?php endif; ?> ">
        <div class="page-image <?php if ( $data->marginimagedroite()->isNotEmpty()) { ?><?= $data->marginimagedroite() ?><?php } ?> ">
          <?php if ( $data->image2()->isNotEmpty()): ?>
            <img src="<?= $data->image2()->toFile()->url() ?> " class="m-t-b-xs" alt="">
          <?php endif; ?>
        </div>
        <div class="page-content <?php if ( $data->titre2()->isNotEmpty() || $data->text2()->isNotEmpty()) { ?>p-r-l-m<?php } ?>">
          <?php if ( $data->titre2()->isNotEmpty() || $data->text2()->isNotEmpty()): ?>
            <h2><?= $data->titre2() ?></h2>
            <?= $data->text2()->kt() ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

</section>
