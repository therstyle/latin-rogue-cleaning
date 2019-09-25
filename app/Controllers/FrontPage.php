<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function top_headline() {
        $top_headline = get_field('top_headline');
        if ($top_headline) {
            return $top_headline;
        }
    }

    public function top_text() {
        $top_text = get_field('top_text');
        if ($top_text) {
            return $top_text;
        }
    }

    public function about_image() {
        $about_image = get_field('about_image');
        if($about_image) {
            return wp_get_attachment_image($about_image, 'full');
          }
    }

    public function about_headline() {
        $about_headline = get_field('about_headline');
        if($about_headline) {
            return $about_headline;
        }
    }

    public function about_text() {
        $about_text = get_field('about_text');
        if ($about_text) {
            return $about_text;
          }
    }
}
