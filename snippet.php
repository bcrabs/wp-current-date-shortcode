<?php

function current_time_date(){
  return date('F jS, Y');
}
 
add_shortcode( 'get_current_date', 'current_time_date' );

?>
