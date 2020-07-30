<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group_member;
use App\Committee_member;
use App\Region;
use App\Selected_institution;
use App\Activity;
use App\Report;
use App\Bulletin;
use App\Blog;
use App\Event;
use App\Publication;
use App\Research;
use App\Course;
use App\Photo;
use DB;
use Session;

class BhwController extends Controller
{
    // Homepage 
    public function index() {
        $events = Event::orderBy('created_at', 'desc')->take(3)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('front.index', compact(
            'events',
            'blogs',
        ));
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
        return view('front.what.what-we-do');
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
        $ngo = DB::table('ngos')->where('region_id', '=', $region->id)->first();
        $regions = DB::table('regions')->get();
        $c_members = DB::table('committee_members')->where('region_id', '=', $region->id)->get();
        $institutions = DB::table('selected_institutions')->where('region_id', '=', $region->id)->get();
        $activities = DB::table('activities')->where('region_id', '=', $region->id)->get();
        return view('front.regions.single-region', compact(
            'region',
            'ngo',
            'regions',
            'c_members',
            'institutions',
            'activities',
        ));
    }




    // BHW Reports
    public function bhw_reports() {
        $reports = Report::orderBy('id', 'DESC')->get();
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        return view('front.reports.bhw-reports', compact(
            'reports',
            'bulletins',
        ));
    }


    // BHW Bulletin
    public function bhw_bulletin() {
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        return view('front.reports.bhw-bulletin', compact(
            'bulletins',
        ));
    }


    // Bhw Research
    public function bhw_research() {
        $research = Research::orderBy('created_at', 'desc')->paginate(8);
        return view('front.what.research.researches', compact(
            'research',
        ));
    }


    // Bhw Research
    public function bhw_single_research($id) {
        $research = Research::find($id);
        return view('front.what.research.single-research', compact(
            'research',
        ));
    }


    // Bhw Research
    public function bhw_short_courses() {
        $courses = Course::orderBy('created_at', 'desc')->paginate(9);;
        return view('front.what.course.short-courses', compact(
            'courses',
        ));
    }


    // Bhw Research
    public function bhw_single_course($id) {
        $course = Course::find($id);
        return view('front.what.course.single-course', compact(
            'course',
        ));
    }


    // Bhw Policy Advocacy
    public function bhw_policy_advocacy() {
        return view('front.what.policy-advocacy');
    }


    // Bhw Networking
    public function bhw_networking() {
        return view('front.what.networking');
    }


    // Bhw Projects
    public function bhw_projects() {
        return view('front.what.projects');
    }


    // Bhw Strategic Plan
    public function bhw_strategic_plan() {
        return view('front.what.strategic-plan');
    }


    // Bhw Publication
    public function bhw_publication() {
        $publications = Publication::orderBy('created_at', 'desc')->paginate(10);
        return view('front.publication.publications', compact(
            'publications',
        ));
    }


    // BHW Photo Gallery
    public function photo_gallery() {
        $photos = Photo::orderBy('created_at', 'desc')->paginate(20);
        return view('front.photo-gallery', compact(
            'photos',
        ));
    }


    // BHW Blogs
    public function blogs() {
        // $blogs = DB::table('blogs')->orderBy('created_at', 'DESC')->paginate(1);
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('front.blog.blogs', compact(
            'blogs',
        ));
    }


    // BHW Single Blog
    public function single_blog($id) {
        $blog = Blog::find($id);
        return view('front.blog.single-blog', compact(
            'blog',
        ));
    }

    // BHW Events
    public function events() {
        $events = Event::orderBy('created_at', 'desc')->paginate(6);
        return view('front.event.events', compact(
            'events',
        ));
    }


    // BHW Single Event
    public function single_event($id) {
        $event = Event::find($id);
        // dd($event);
        return view('front.event.single-event', compact(
            'event',
        ));
    }

    // BHW Contact
    public function contact() {
        return view('front.contact');
    }


}
