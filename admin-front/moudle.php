<?php
function draw_sessions_front($id) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
	    FROM wp_postmeta met,wp_posts po
	    WHERE met.meta_key = 'courseID' AND met.meta_value = '" . $id . "' AND po.ID = met.post_id";
    $result = $wpdb->get_results($sql_query_session_in_course);

    show_datagrid_front($result,1);

    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_session">Add new</a><br>';
}

function draw_assginments_front($id) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
	    FROM wp_postmeta met,wp_posts po
	    WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $id . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_assignment_'";
    $result = $wpdb->get_results($sql_query_session_in_course);

    show_datagrid_front($result,0);

    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_assignment_">Add new</a><br>';
}

function draw_announcement_front($id) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
	    FROM wp_postmeta met,wp_posts po
	    WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $id . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_announcement'";
    $result = $wpdb->get_results($sql_query_session_in_course);

    show_datagrid_front($result,0);

    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_announcement">Add new</a><br>';
}

function draw_discussion_front($id) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
	    FROM wp_postmeta met,wp_posts po
	    WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $id . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_discussion'";
    $result = $wpdb->get_results($sql_query_session_in_course);

    show_datagrid_front($result,0);

    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_discussion">Add new</a><br>';
}

function draw_resource_front($id) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
	    FROM wp_postmeta met,wp_posts po
	    WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $id . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_resource'";
    $result = $wpdb->get_results($sql_query_session_in_course);

    show_datagrid_front($result,0);

    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_resource">Add new</a><br>';
}

function show_datagrid_front($result, $flag) {
    if (count($result) == 0) {
        echo "There's no result set";
        return;
    }
    echo '<table>';
    echo '<tr><td width="50%">Name</td><td width="50%">Last Modified</td><td></td></tr>';

    for ($i = 0; $i < count($result); $i++) {
        $editUrl = admin_url() . "post.php?post=" . $result[$i]->ID . "&action=edit";
		if($flag==1)
		{
        echo '<tr><td><a href="tem-se.php?id='.$result[$i]->ID.'">' . $result[$i]->post_title . '</a></td><td>' . $result[$i]->post_modified . '</td><td><a style="font-color:blue;" href="' . $editUrl . '">Edit</a></td></tr>';
		}
		else
		{
		echo '<tr><td>' . $result[$i]->post_title . '</td><td>' . $result[$i]->post_modified . '</td><td><a style="font-color:blue;" href="' . $editUrl . '">Edit</a></td></tr>';
		}    
	}
    echo '</table>';
}
