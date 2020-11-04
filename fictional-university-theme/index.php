<?php 

  while(have_posts()) {  // while we still have posts function
    the_post();   // keeps track of posts - like the count function 
    ?> // drop out of php 

    <h2><?php the_title(); ?></h2>

  <?php } 



  }
?>