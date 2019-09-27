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

    public function services_headline() {
        $services_headline = get_field('services_headline');
        if ($services_headline) {
            return $services_headline;
        }
    }

    public function services_text() {
        $services_text = get_field('services_text');
        if ($services_text) {
            return $services_text;
        }
    }

    public function call_text() {
        $callText = get_field('call_text');
        if ($callText) {
            return $callText;
        }
    }

    public function phone() {
        $phone = get_field('phone_number');
        if ($phone) {
            return $phone;
        }
    }

    public static function service_headline() {
        $service_headline = get_sub_field('service_headline');
        if($service_headline) {
            return $service_headline;
        }
    }

    public static function service_image() {
        $service_image = get_sub_field('service_image');
        if($service_image) {
            return wp_get_attachment_image($service_image, 'icon-sm');
        }
    }

    public static function service_text() {
        $service_text = get_sub_field('service_text');
        if($service_text) {
            return $service_text;
        }
    }

    public static function quote() {
        $quote = get_sub_field('quote_text');
        if($quote) {
            return $quote;
        }
    }

    public static function quote_name() {
        $quote_name = get_sub_field('quote_name');
        if($quote_name) {
            return $quote_name;
        }
    }

    public function contact_headline() {
        $contact_headline = get_field('contact_headline');
        if($contact_headline) {
            return $contact_headline;
        }
    }

    public function contact_text() {
        $contact_text = get_field('contact_text');
        if($contact_text) {
            return $contact_text;
        }
    }

    public function contact_form() {
        $contact_form = get_field('contact_form');
        if($contact_form) {
            return $contact_form;
        }
    }
}
