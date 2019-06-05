<?php
  // Blocks Loop
  $bi = 0;
  foreach($page->builder()->toBuilderBlocks() as $block){
    $bi++;

      snippet('sections/' . $block->_key(), array('data' => $block, 'pg' => $page, 'site' => $site, 'bi' => $bi));

	}
?>
