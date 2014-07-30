<?php

/*
  Plugin Name: admin tool new
  Plugin URI: http://wp.tutsplus.com/
  Description: Declares a plugin that will create a custom post type displaying movie reviews.
  Version: 1.0
  Author: Soumitra Chakraborty
  Author URI: http://wp.tutsplus.com/
  License: GPLv2
 */
require_once dirname(__FILE__) . '/vendor/autoload.php';

use \ePals\Activity;
//use \ePals\Course;
use \ePals\Project;
use \ePals\Assignment;
use \ePals\Session;
use \ePals\Resource;
//use \ePals\Gallery;
//use \ePals\Tool;
use \ePals\Group;
use \ePals\Discussion;
use \ePals\Announcement;

function create_admin_tool() {
    register_post_type('epals_course', array(
        'labels' => array(
            'name' => 'epals course',
            'singular_name' => 'epals course',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Course',
            'edit' => 'Edit',
            'edit_item' => 'Edit Movie Review',
            'new_item' => 'New Movie Review',
            'view' => 'View',
            'view_item' => 'View Movie Review',
            'search_items' => 'Search Movie Reviews',
            'not_found' => 'No Movie Reviews found',
            'not_found_in_trash' => 'No Movie Reviews found in Trash',
            'parent' => 'Parent Movie Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );




    register_post_type('epals_session', array(
        'labels' => array(
            'name' => 'epals session',
            'singular_name' => 'epals session',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New session',
            'edit' => 'Edit',
            'edit_item' => 'Edit session Review',
            'new_item' => 'New session Review',
            'view' => 'View',
            'view_item' => 'View session Review',
            'search_items' => 'Search session Reviews',
            'not_found' => 'No session Reviews found',
            'not_found_in_trash' => 'No session Reviews found in Trash',
            'parent' => 'Parent session Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_assignment_', array(
        'labels' => array(
            'name' => 'epals assignment',
            'singular_name' => 'epals assignment',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New assignment',
            'edit' => 'Edit',
            'edit_item' => 'Edit assignment Review',
            'new_item' => 'New assignment Review',
            'view' => 'View',
            'view_item' => 'View assignment Review',
            'search_items' => 'Search assignment Reviews',
            'not_found' => 'No assignment Reviews found',
            'not_found_in_trash' => 'No assignment Reviews found in Trash',
            'parent' => 'Parent assignment Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_activity', array(
        'labels' => array(
            'name' => 'epals activity',
            'singular_name' => 'epals activity',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New activity',
            'edit' => 'Edit',
            'edit_item' => 'Edit activity Review',
            'new_item' => 'New aactivity Review',
            'view' => 'View',
            'view_item' => 'View activity Review',
            'search_items' => 'Search activity Reviews',
            'not_found' => 'No activity Reviews found',
            'not_found_in_trash' => 'No activity Reviews found in Trash',
            'parent' => 'Parent activity Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_group_', array(
        'labels' => array(
            'name' => 'epals group',
            'singular_name' => 'epals group',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New group',
            'edit' => 'Edit',
            'edit_item' => 'Edit group Review',
            'new_item' => 'New group Review',
            'view' => 'View',
            'view_item' => 'View group Review',
            'search_items' => 'Search group Reviews',
            'not_found' => 'No group Reviews found',
            'not_found_in_trash' => 'No group Reviews found in Trash',
            'parent' => 'Parent group Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_resource', array(
        'labels' => array(
            'name' => 'epals resource',
            'singular_name' => 'epals resource',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New resource',
            'edit' => 'Edit',
            'edit_item' => 'Edit resource Review',
            'new_item' => 'New resource Review',
            'view' => 'View',
            'view_item' => 'View resource Review',
            'search_items' => 'Search resource Reviews',
            'not_found' => 'No resource Reviews found',
            'not_found_in_trash' => 'No resource Reviews found in Trash',
            'parent' => 'Parent resource Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_resource', array(
        'labels' => array(
            'name' => 'epals resource',
            'singular_name' => 'epals resource',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New resource',
            'edit' => 'Edit',
            'edit_item' => 'Edit resource Review',
            'new_item' => 'New resource Review',
            'view' => 'View',
            'view_item' => 'View resource Review',
            'search_items' => 'Search resource Reviews',
            'not_found' => 'No resource Reviews found',
            'not_found_in_trash' => 'No resource Reviews found in Trash',
            'parent' => 'Parent resource Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_tool', array(
        'labels' => array(
            'name' => 'epals tool',
            'singular_name' => 'epals tool',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New tool',
            'edit' => 'Edit',
            'edit_item' => 'Edit Movie tool',
            'new_item' => 'New Movie tool',
            'view' => 'View',
            'view_item' => 'View tool Review',
            'search_items' => 'Search tool Reviews',
            'not_found' => 'No tool Reviews found',
            'not_found_in_trash' => 'No tool Reviews found in Trash',
            'parent' => 'Parent tool Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_announcement', array(
        'labels' => array(
            'name' => 'epals announcement',
            'singular_name' => 'epals announcement',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New announcement',
            'edit' => 'Edit',
            'edit_item' => 'Edit announcement Review',
            'new_item' => 'New announcement Review',
            'view' => 'View',
            'view_item' => 'View announcement Review',
            'search_items' => 'Search announcement Reviews',
            'not_found' => 'No announcement Reviews found',
            'not_found_in_trash' => 'No announcement Reviews found in Trash',
            'parent' => 'Parent announcement Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );


    register_post_type('epals_discussion', array(
        'labels' => array(
            'name' => 'epals discussion',
            'singular_name' => 'epals discussion',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New discussion',
            'edit' => 'Edit',
            'edit_item' => 'Edit discussion Review',
            'new_item' => 'New discussion Review',
            'view' => 'View',
            'view_item' => 'View discussion Review',
            'search_items' => 'Search discussion Reviews',
            'not_found' => 'No discussion Reviews found',
            'not_found_in_trash' => 'No discussion Reviews found in Trash',
            'parent' => 'Parent discussion Review'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor'),
        //, 'comments', 'thumbnail', 'custom-fields'
        "public" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => false
            )
    );
}

add_action('init', 'create_admin_tool');




/* iterate sessions of course */

function add_session_list_box() {//添加设置区域的函数
    //add session list in course
    add_meta_box('draw_sessions', 'Sessions', 'draw_sessions', 'epals_course', 'normal', 'high', array('', ''));
    //add assginment list in session
    add_meta_box('draw_assginments', 'Assginment', 'draw_assginments', 'epals_session', 'normal', 'high', array('', ''));
    //add announcement list in session
    add_meta_box('draw_announcement', 'Announcement', 'draw_announcement', 'epals_announcement', 'normal', 'high', array('', ''));
    //add Discussion list in session
    add_meta_box('draw_discussion', 'Discussion', 'draw_discussion', 'epals_session', 'normal', 'high', array('', ''));
    //add assginment list in session
    add_meta_box('draw_resource', 'Resource', 'draw_resource', 'epals_session', 'normal', 'high', array('', ''));
}

function draw_sessions($post, $boxargs) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
   FROM wp_postmeta met,wp_posts po
   WHERE met.meta_key = 'courseID' AND met.meta_value = '" . $post->ID . "' AND po.ID = met.post_id";
    $result = $wpdb->get_results($sql_query_session_in_course);


    show_datagrid($result);


    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_session">Add new</a>';
}

function draw_assginments($post, $boxargs) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
   FROM wp_postmeta met,wp_posts po
   WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $post->ID . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_assignment_'";
    $result = $wpdb->get_results($sql_query_session_in_course);


    show_datagrid($result);


    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_assignment_">Add new</a>';
}

function draw_announcement($post, $boxargs) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
   FROM wp_postmeta met,wp_posts po
   WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $post->ID . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_announcement'";
    $result = $wpdb->get_results($sql_query_session_in_course);


    show_datagrid($result);


    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_announcement">Add new</a>';
}

function draw_discussion($post, $boxargs) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
   FROM wp_postmeta met,wp_posts po
   WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $post->ID . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_discussion'";
    $result = $wpdb->get_results($sql_query_session_in_course);


    show_datagrid($result);


    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_discussion">Add new</a>';
}

function draw_resource($post, $boxargs) {
    global $wpdb;
    $sql_query_session_in_course = "SELECT met.post_id,po.*
   FROM wp_postmeta met,wp_posts po
   WHERE met.meta_key = 'sessionID' AND met.meta_value = '" . $post->ID . "' AND po.ID = met.post_id AND po.`post_type` = 'epals_resource'";
    $result = $wpdb->get_results($sql_query_session_in_course);


    show_datagrid($result);


    echo '<br>&nbsp;<a style="font-color:blue;" href="' . admin_url() . 'post-new.php?post_type=epals_resource">Add new</a>';
}

function show_datagrid($result) {
    if (count($result) == 0) {
        echo "There's no result set";
        return;
    }
    echo '<table>';
    echo '<tr><td width="50%">Name</td><td width="50%">Last Modified</td><td></td></tr>';


    for ($i = 0; $i < count($result); $i++) {
        $editUrl = admin_url() . "post.php?post=" . $result[$i]->ID . "&action=edit";
        echo '<tr><td>' . $result[$i]->post_title . '</td><td>' . $result[$i]->post_modified . '</td><td><a style="font-color:blue;" href="' . $editUrl . '">Edit</a></td></tr>';
    }
    echo '</table>';
}

add_action('add_meta_boxes', 'add_session_list_box');


/*
  ++++++++++++++++++
  ++++++++++++++++++
 */


//elastic search insert (Epals API)
//add_action('save_post', es_save_post);

function es_save_post($para1 = "", $para2 = "", $para3 = "") {
    $title = $_POST['post_title'];
    $content = $_POST['content'];
    $post_info = get_post($para1);
    $post_type = $post_info->post_type;
    if (isset($_POST)) {
        switch ($post_type) {
            case 'epals_course'://1
                //echo "epals_course";
                es_add_course($para1, $title, $content);
                break;
            case 'epals_session'://1
                //echo "epals_session";
                es_add_session($para1, $title, $content);
                break;
            case 'epals_assignment_'://1
                //echo "epals_assignment";
                es_add_assignment($para1, $title, $content);
                break;
            case 'epals_activity'://1 ?
                //echo "epals_activity";
                es_add_activity($para1, $title, $content);
                break;
            case 'epals_group_'://1
                //echo "epals_group";
                es_add_group($para1, $title, $content);
                break;
            case 'epals_resource'://1
                //echo "epals_resource";
                es_add_resource($para1, $title, $content);
                break;
            case 'epals_gallery'://?
                //echo "epals_gallery";
                es_add_gallery($para1, $title, $content);
                break;
            case 'epals_tool'://?
                //echo "epals_tool";
                es_add_tool($para1, $title, $content);
                break;
            case 'epals_announcement'://1
                //echo "epals_announcement";
                es_add_announcement($para1, $title, $content);
                break;
            case 'epals_discussion'://1
                //echo "epals_discussion";
                es_add_discussion($para1, $title, $content);
                break;
            default:
                //var_dump("error:no config type!");
                break;
        }
    }
    //$fields = get_field_objects($para1);
    //print_r($fields[resource]);
}

function es_add_course($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Project();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        //$a->setTitle($_POST['post_title']);
        $a->setProjectname($_POST['post_title']);
        $a->setDescription($_POST['content']);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

//not found this type in Epals API


function es_add_session($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Session();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
        $a->setMetadata('CourseID', $fields[couresID][value]);
        $a->setMetadata('Order', $fields[order][value]);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

function es_add_assignment($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Assignment();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
        $a->setMetadata('sessionid', $fields[relate_to][value]->ID);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

//not found this type in requirement doc 




function es_add_activity($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Activity();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
        $a->setMetadata('type', $fields[type][value]);
        $a->setAssignmentId($fields[relate_to][value]->ID);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

//not found this type in Epals API


function es_add_group($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Group();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
        $a->setMetadata('member', $fields[members][value]);
        $a->setMetadata('parentid', $fields[parent][value]->ID);
        $a->setMetadata('projectid', $fields[project][value]->ID);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

//not found this type in Epals API 


function es_add_resource($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Resource();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
        $a->setDescription($_POST['content']);
        $a->setMetadata('location', $fields[location][value]);
        $a->setMetadata('sessionid', $fields[sessionID][value]->ID);
//$a->setAttachment($_POST['att_url']);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

function es_add_gallery($post_id, $title, $content) {
    
}

function es_add_tool($post_id, $title, $content) {
    
}

//not found this type in Epals API


function es_add_announcement($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Announcement();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
//$a->setAudience('audience_array');
        $a->setDescription($_POST['content']);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

//not found this type in Epals API 


function es_add_discussion($post_id, $title, $content) {
    if ($_POST['post_title']) {
        $ini = parse_ini_file(dirname(dirname(__FILE__)) . '/admin-tool/api.ini', TRUE);
        $fields = get_field_objects($post_id);
        $esid = '';
        if ($flag = get_post_meta($post_id, 'ElasticsearchID')) {
            $esid = $flag[0];
        }
        $a = new Discussion();
        $a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" . $ini['elasticsearch']['port']);
        $a->setName($_POST['post_title']);
        $a->setDescription($_POST['content']);
        $a->setMetadata('groupid', $fields[group_id][value]->ID);
        $a->setMetadata('sessionid', $fields[sessionID][value]->ID);
        if (!empty($esid)) {
            $a->update();
        } else {
            $a->add();
            update_post_meta($post_id, 'ElasticsearchID', $a->id);
        }
    }
}

?>
