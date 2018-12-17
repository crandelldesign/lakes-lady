<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
    public function firstPost()
    {
        $first_posts = get_posts([
            'posts_per_page'=>'1'
        ]);

        return $first_posts;

        /*return array_map(function ($post) {
            return apply_filters('the_content', $post->post_content);
        }, $first_posts);*/
    }

    public function otherPosts()
    {
        $the_others = get_posts([
            'offset'=>'1'
        ]);

        return array_map(function ($post) {
            return apply_filters('the_content', $post->post_content);
        }, $the_others);
    }
}
