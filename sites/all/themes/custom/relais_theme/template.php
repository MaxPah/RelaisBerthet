<?php

/**
 * Implements theme_preprocess_page().
 */
function relais_theme_preprocess_page(&$vars) {
  global $base_url, $base_path;
  $main_menu = menu_tree_all_data('main-menu');

  $site_frontpage = variable_get('site_frontpage', 'node');

  $vars['relais_main_menu'][] = array(
    'title' => t('Accueil'),
    'href' => $base_url . $base_path .$site_frontpage,
  );

  if ($main_menu && !empty($main_menu)) {
    foreach ($main_menu as $key => $item) {
      if (isset($item['link']['link_title']) && isset($item['link']['link_path'])) {
        if (empty($item['below'])) {
          $vars['relais_main_menu'][] = array(
            'title' => $item['link']['link_title'],
            'href' => $item['link']['link_path'],
          );
        }
        else {
          foreach ($item['below'] as $subkey => $subitem) {
            if (isset($subitem['link']['link_title']) && isset($subitem['link']['link_path'])) {
              if (empty($subitem['below'])) {
                $vars['relais_main_menu'][] = array(
                  'title' => $subitem['link']['link_title'],
                  'href' => $subitem['link']['link_path'],
                );
              }
            }
          }
        }
      }
    }
  }
}
