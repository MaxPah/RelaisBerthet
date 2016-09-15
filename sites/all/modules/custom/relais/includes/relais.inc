<?php

/**
 * Callback for relais_menu
 */
function relais_prepare_relais_menu() {
  $out = '';

  $menu = menu_tree_output(menu_tree_all_data('main-menu'));
  if (!empty($menu)) {
    $out = theme('main_relais_menu', array('menu_items' => $menu));
  }

  return $out;
}