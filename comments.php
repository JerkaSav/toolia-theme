<?php

$id = get_the_ID();
$args = array(
    'status' => 'approve',
    'comment_notes_after' => '',
    'title_reply' => 'Have something to say?',
    'post__in' => $id, //Retrieves comments for an array of posts
    'post_id' => $post_ID, // Post's ID you can make sure only comments related to that post appear.
    'category__not_in' => 'cases'
);

// The comment query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query($args);
