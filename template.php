<?php

/**
 * Implements hook_preprocess_HOOK() for HTML document templates.
 *
 * Adds body classes if certain regions have content.
 */
function fidanzata_preprocess_html(&$variables) {
  if (!empty($variables['page']['content_right'])) {
    $variables['classes_array'][] = 'has-content-right';
  }
}

/**
 * Override or insert variables into the page template.
 */
function fidanzata_preprocess_page(&$vars) {
	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__type__'.$vars['node']->type;
	}
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function fidanzata_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function fidanzata_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

