<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class BhwController extends Controller
{
    // Homepage 
    public function index() {
        return view('front.index');
    }


    // Who We Are 
    public function who_we_are() {
        return view('front.who.who-we-are');
    }


    // Who We Are - Background
    public function background() {
        return view('front.who.background');
    }


    // Who We Are - Working Group
    public function working_group() {
        return view('front.who.working-group');
    }


    // Who We Are - Advisory Group
    public function advisory_group() {
        return view('front.who.advisory-group');
    }


    // Who We Are - Thematic Group
    public function thematic_group() {
        return view('front.who.thematic-group');
    }


    // Who We Are - Secretariat Group
    public function secretariat_group() {
        return view('front.who.secretariat-group');
    }


    // What We Do
    public function what_we_do() {
        return view('front.what-we-do');
    }


    // BHW Reports
    public function bhw_reports() {
        return view('front.reports.bhw-reports');
    }


    // BHW Bulletin
    public function bhw_bulletin() {
        return view('front.reports.bhw-bulletin');
    }


    // BHW Photo Gallery
    public function photo_gallery() {
        return view('front.photo-gallery');
    }


    // BHW Blogs
    public function blogs() {
        return view('front.blogs');
    }

    // BHW Events
    public function events() {
        return view('front.events');
    }

    // BHW Contact
    public function contact() {
        return view('front.contact');
    }


}
