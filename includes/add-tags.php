<?php

function attal_tags_search( $results, $query ) {

  $s = (isset($query['s']) ? $query['s'] : '');
  $tags = get_tags( );

  foreach ( $tags as $tag ) {
    $title = trim( esc_html( strip_tags( $tag->name ) ) );
    if (strpos($title, $s) !== 0) continue;
    $results[] = array(
      'ID' =>  $tag->term_id,
      'title' => $title,
      'permalink' => $tag_link = get_tag_link( $tag->term_id ),
      'info' => 'tag',
    );
  }

  return $results;
}

add_filter( 'wp_link_query', 'attal_tags_search', 10, 2 );
