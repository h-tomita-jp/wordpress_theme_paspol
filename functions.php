<?php
function my_change_title_separator( $sep ) {
	// WordPress 4.4 以上でのタイトルセパレーターの設定
	$sep = '|';
	return $sep;
}
add_filter( 'document_title_separator', 'my_change_title_separator' );

add_theme_support( 'title-tag' );

add_theme_support('post-thumbnails');

function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&lt;',
    'next_text'    => '&gt;',
    'type'         => 'plain',
    'end_size'     => 1,
    'mid_size'     => 2
  ) );
}

function my_add_columns($columns) {
  $columns['list-order'] = '一覧表示順';
  return $columns;
}
add_filter( 'manage_edit-product_columns', 'my_add_columns' );

function my_add_columns_content($column_name, $post_id) {
  if ( $column_name == 'list-order' ) {
    $cf_listOrder = get_post_meta( $post_id , 'list-order' , true );
    echo ( $cf_listOrder ) ? $cf_listOrder : '－';
  }
}
add_action( 'manage_product_posts_custom_column', 'my_add_columns_content', 10, 2 );

function my_add_sort($columns){
  $columns['list-order'] = '一覧表示順';
  return $columns;
}
function my_add_sort_by_meta( $query ) {
  if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {
    switch( $orderby ) {
      case '一覧表示順':
        $query->set( 'meta_key', 'list-order' );
        $query->set( 'orderby', 'meta_value_num' );
        break;
    }
  }
}
add_filter( 'manage_edit-product_sortable_columns', 'my_add_sort');
add_action( 'pre_get_posts', 'my_add_sort_by_meta', 1 );

?>
