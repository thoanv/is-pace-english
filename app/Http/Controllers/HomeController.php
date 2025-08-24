<?php

namespace App\Http\Controllers;

use App\Enums\CategoryEnum;
use App\Models\General;
use App\Models\Teacher;
use App\Services\MenuService;
use Illuminate\Http\Request;
use App\Services\CourseService;
use App\Services\SlideService;
use App\Services\TeacherService;
use App\Services\PostService;
use App\Services\ActivityService;
use App\Services\CategoryService;

class HomeController extends Controller
{
    public function __construct(
        CourseService  $courseService,
        SlideService  $slideService,
        TeacherService  $teacherService,
        PostService  $postService,
        ActivityService  $activityService,
        CategoryService  $categoryService,
    )
    {
        $this->courseService = $courseService;
        $this->slideService = $slideService;
        $this->teacherService = $teacherService;
        $this->postService = $postService;
        $this->activityService = $activityService;
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $general = General::first();
        $courses = $this->courseService->courses();
        $slides = $this->slideService->slides();
        $teachers = $this->teacherService->teachers();
        $posts = $this->postService->posts();
        $activities = $this->activityService->activities();
        return view('home',[
            'general' => $general,
            'courses' => $courses,
            'slides' => $slides,
            'teachers' => $teachers,
            'posts' => $posts,
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function page(Request $request, $cate_slug, $slug = null)
    {
        $cate = $this->categoryService->getCategoryBySlug($cate_slug);
        if(!$cate){ return abort(404); }
        $lists = [];
        if($cate['type'] == CategoryEnum::TIN_TUC){
            $lists =$this->postService->getListPosts($request);
            return view('pages.news.list', [
                'cate' => $cate,
                'lists' => $lists
            ]);
        }elseif ($cate['type'] == CategoryEnum::GIOI_THIEU){
            $teachers = $this->teacherService->showPageAboutteachers();
            return view('pages.about', [
                'cate' => $cate,
                'teachers' => $teachers
            ]);
        }elseif ($cate['type'] == CategoryEnum::KHOA_HOC){
            if($slug){
                $course = $this->courseService->getCourseBySlug($slug);
                if(!$course){ return abort(404); }
                $courses = $this->courseService->getCourseOthers($course);

                return view('pages.courses.detail', [
                    'cate' => $cate,
                    'course' => $course,
                    'courses' => $courses
                ]);
            }
            return redirect()->route('home');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
