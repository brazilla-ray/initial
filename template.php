<?php
/* Purge needless XHTML stuff. */
function initial_process_html_tag(&$vars) {
    $el = &$vars['element'];

    /* Remove type="..." and CDATA prefix/suffix. */
    unset($el['#attributes']['type'], $el['#value_prefix'], $el['#value_suffix']);

    /* Remove media="all" but leave others unaffected. */
    if (isset($el['#attributes']['media']) && $el['#attributes']['media'] === 'all') {
        unset($el['#attributes']['media']);
    }
}

/*  Setting updated jquery library on the front-end, leave back-end alone */
function initial_js_alter(&$javascript) {
    /* set new path for jquery */
    $jquery_path = drupal_get_path('theme','initial') . '/assets/js/jquery/jquery-1.10.2.min.js';
    /* information about jquery from drupal core */
    $javascript[$jquery_path] = $javascript['misc/jquery.js'];
    /* information for new version */
    $javascript[$jquery_path]['version'] = '1.10.2';
    $javascript[$jquery_path]['data'] = $jquery_path;
    /* remove core version */
    unset($javascript['misc/jquery.js']);
}

function initial_preprocess_block(&$vars) {
    $block_id = $vars['block']->module . '-' . $vars['block']->delta;
    $classes = array();
    $title_classes = &$vars['title_attributes_array']['class'];
    $content_classes = &$vars['content_attributes_array']['class'];

    /* Add global classes to all blocks */
    $title_classes[] = 'block-title';
    $content_classes[] = 'block-content';
}

function initial_preprocess_image(&$variables) {
    $attributes = &$variables['attributes'];

    foreach (array('width', 'height') as $key) {
        unset($attributes[$key]);
        unset($variables[$key]);
    }
}

function initial_comment_view_alter(&$build) {
    unset($build['#prefix']);
}
