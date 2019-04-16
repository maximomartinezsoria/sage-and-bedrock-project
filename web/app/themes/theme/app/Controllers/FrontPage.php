<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public static function posts(){
        $args = [
            'numberposts'   =>  6 
        ];

        return $posts = get_posts($args);

        // add_filter('sage/template/FrontPage/data', function(array $data){
        //     $data['posts'] = $posts;
        //     $data['key'] = 'Hello World!';
        //     return $data;
        // });
    }
}