<?php
require_once('moudle.php');
require_once("../wp-load.php");
?>
<a href='tem.php'>mian page</a>
<div id="content" class="widecolumn">
 <?php 
 $id = $_GET[id]; 
$title = get_post($cid)->post_title;


?>
<a href="tem-cou?id=<?php echo $cid;?>"><?php echo $title;?></a>
<br>
<?php
//$id = the_id();
//draw_sessions_front($cid);
draw_assginments_front($id);
draw_announcement_front($id);
draw_discussion_front($id);
draw_resource_front($id);
?>
<br>
</div>
