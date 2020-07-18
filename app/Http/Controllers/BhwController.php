<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group_member;
use App\Region;
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
        $members = DB::table('group_members')->where('member_group', '=', 'working-group')->orderBy('member_position')->get();
        return view('front.who.working-group', compact(
            'members',
        ));
    }


    // Who We Are - Advisory Group
    public function advisory_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'advisory-group')->orderBy('member_position')->get();
        return view('front.who.advisory-group', compact(
            'members',
        ));
    }


    // Who We Are - Thematic Group
    public function thematic_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'thematic-group')->orderBy('member_position')->get();
        return view('front.who.thematic-group', compact(
            'members',
        ));
    }


    // Who We Are - Secretariat Group
    public function secretariat_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'secretariat-group')->orderBy('member_position')->get();
        return view('front.who.secretariat-group', compact(
            'members',
        ));
    }


    public function single_member($id) {
        $single_member = Group_member::find($id);

        $other_members = DB::table('group_members')->where('member_group', '=', $single_member->member_group)->orderBy('member_position')->get();

        return view('front.who.single-member', compact(
            'single_member',
            'other_members',
        ));
    }


    // What We Do
    public function what_we_do() {
        return view('front.what-we-do');
    }

    // What We Do - Regions
    public function regions() {
        $regions = DB::table('regions')->get();
        return view('front.regions.regions', compact(
            'regions',
        ));
    }

    // What We Do - Single Regions
    public function single_region($id) {
        $region = Region::find($id);
        $regions = DB::table('regions')->get();
        return view('front.regions.single-region', compact(
            'region',
            'regions',
        ));
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
