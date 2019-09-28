<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function top() {
        $top = [
            'headline' => get_field('top_headline'),
            'text' => get_field('top_text')
        ];
        return $top;
    }

    public function about() {
        $about = [
            'image' => wp_get_attachment_image(get_field('about_image'), 'full'),
            'headline' => get_field('about_headline'),
            'text' => get_field('about_text')
        ];
        return $about;
    }

    public function services() {
        $services = [
            'headline' => get_field('services_headline'),
            'text' => get_field('services_text')
        ];
        return $services;
    }

    public function phone() {
        $phone = [
            'number' => get_field('phone_number'),
            'text' => get_field('call_text')
        ];
        return $phone;
    }

    public static function service() {
        $service = [
            'headline' => get_sub_field('service_headline'),
            'image' =>  wp_get_attachment_image(get_sub_field('service_image'), 'icon-sm'),
            'text' => get_sub_field('service_text')
        ];
        return $service;
    }

    public static function quote() {
        $quote = [
            'text' => get_sub_field('quote_text'),
            'name' => get_sub_field('quote_name')
        ];
        return $quote;
    }

    public function contact() {
        $contact = [
            'headline' => get_field('contact_headline'),
            'text' => get_field('contact_text'),
            'form' => get_field('contact_form')
        ];
        return $contact;
    }
}
