<?php
require_once('moudle.php');
require_once("../wp-load.php");
?>
<a href='tem.php'>mian page</a>
<br>
<a href='wp-admin/post-new.php?post_type=epals_course'>add new</a>
<div id="content" class="widecolumn">
 <?php 
$args = array(
    //'post_status' => array('publish', 'pending', 'draft', 'future', 'private', 'trash'),
    //'paged' => $paged
	'post_type' => 'epals_course'
);

query_posts($args);

while(have_posts()): the_post();

?>
<a href="tem-cou.php?id=<?php the_id();?>"><?php the_title();?></a>
<br>
<?php endwhile; ?>
</div>