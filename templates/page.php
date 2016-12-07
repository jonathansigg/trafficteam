<?php
  get_template( 'header' );
  $page = get_maintemplate();
  if( isset( $_GET['page'] ) ) :
    $page = $_GET['page'];
  endif;
  get_template( $page );
  get_template( 'footer' );
?>
