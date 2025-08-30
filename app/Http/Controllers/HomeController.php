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
use Illuminate\Support\Str;

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
            if($slug){
                $post = $this->postService->getPostBySlug($slug);
                if(!$post){ return abort(404); }
                $listPostSameCategories = $this->postService->getListPostSameCategories($post);
                $listNewPosts = $this->postService->getNewPostOtherSlug($post);
                $result  = $this->generateTOC($post['content']);
                return view('pages.news.detail', [
                    'cate' => $cate,
                    'lists' => $lists,
                    'post' => $post,
                    'toc' => $result['toc'],
                    'content' => $result['content'],
                    'listNewPosts' => $listNewPosts,
                    'listPostSameCategories' => $listPostSameCategories
                ]);
            }
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
                if($course['id'] == 2){
                    $view = "pages.courses.tieng_anh_mam_non";
                }
                elseif($course['id'] == 4){
                    $view = "pages.courses.tieng_anh_tieu_hoc";
                }
                elseif($course['id'] == 5){
                    $view = "pages.courses.tieng_anh_thieu_nien";
                }
                elseif ($course['id'] == 6){
                    $view = "pages.courses.luyen_thi_ielts";
                }
                return view($view, [
                    'cate' => $cate,
                    'course' => $course,
                    'courses' => $courses
                ]);
            }
            return redirect()->route('home');
        }

    }

    public function generateTOC($content)
    {
        preg_match_all('/<h([1-6])[^>]*>(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER);

        $toc = '<div class="toc"><ul>';

        $usedIds = []; // tránh trùng id

        foreach ($matches as $match) {
            $level = $match[1];
            $title = strip_tags($match[2]);

            // Tạo id từ tiêu đề
            $id = Str::slug($title);

            // Nếu id đã tồn tại thì thêm số đằng sau
            $originalId = $id;
            $i = 1;
            while (in_array($id, $usedIds)) {
                $id = $originalId . '-' . $i;
                $i++;
            }
            $usedIds[] = $id;

            // Gắn id vào heading
            $content = str_replace(
                $match[0],
                '<h'.$level.' id="'.$id.'">'.$title.'</h'.$level.'>',
                $content
            );

            // Thêm vào mục lục
            $toc .= '<li class="level-'.$level.'"><a href="#'.$id.'">'.$title.'</a></li>';
        }

        $toc .= '</ul></div>';

        return [
            'toc' => $toc,
            'content' => $content
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function formRegister(Request $request)
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
