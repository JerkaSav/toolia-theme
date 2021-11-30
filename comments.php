<?php

$id = get_the_ID();
$args = array(
    'status' => 'approve',
    'include_unapproved' => array(is_user_logged_in() ? get_current_user_id() : wp_get_unapproved_comment_author_email()),
    'comment_notes_after' => '',
    'post__in' => $id, //Retrieves comments for an array of posts
);

// The comment query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query($args);
