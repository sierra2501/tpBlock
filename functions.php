<?php
function tpblock_support(){
  add_theme_support('wp-block-styles');
  add_editor_style('style.css');
}
add_action('after_setup_theme', 'tpblock_support');

function tpblock_enqueue(){
  wp_enqueue_style(
    'tpblock-style',
    get_stylesheet_directory_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );
}
add_action('wp_enqueue_scripts', 'tpblock_enqueue');

register_block_style(
    'core/heading',
    array(
        'name'         => 'underline-solid',
        'label'        => '下線（実線）',
        'inline_style' => '.is-style-underline-solid {
          border-bottom: solid 1px #363636;
        }'
    )
);
register_block_style(
  'core/heading',
  array(
      'name'         => 'underline-dotted',
      'label'        => '下線（点線）',
      'inline_style' => '.is-style-underline-dotted {
        border-bottom: dotted 1px #363636;
      }'
  )
);