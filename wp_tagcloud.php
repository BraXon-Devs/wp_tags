<?php
      wp_tag_cloud( array(
         'smallest' => 8, // size of least used tag
         'largest'  => 22, // size of most used tag
         'unit'     => 'px', // unit for sizing the tags
         'number'   => 45, // displays at most 45 tags
         'orderby'  => 'name', // order tags alphabetically
         'order'    => 'ASC', // order tags by ascending order
         'taxonomy' => 'post_tag' // you can even make tags for custom taxonomies
      ) );
?>
