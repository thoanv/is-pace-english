<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Services\CourseService as Service;
use App\Services\CategoryService;

class CourseController extends Controller
{
    protected $title = 'khóa học';
    protected $route = 'courses';
    protected $view = 'admin.courses';

    protected Service $service;
    protected CategoryService $categoryService;
    public function __construct(Service $service, CategoryService $categoryService)
    {
        $this->service = $service;
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Course $course)
    {
        $this->authorize('viewAny', $course);
        $lists = $this->service->getData($request);
        return view($this->view.'.index', [
            'lists' => $lists,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        $this->authorize('create', $course);
        $categories = $this->categoryService->getListTreeCategoryByType();
        return view($this->view.'.create', [
            'data' => $course,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request, Course $course)
    {
        $this->authorize('create', $course);
        try {
            $this->service->createData($request);
            return redirect()->route($this->route . '.index')->with('success', 'Thêm mới thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $this->authorize('update', $course);
        $categories = $this->categoryService->getListTreeCategoryByType();
        return view($this->view.'.update', [
            'data' => $course,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $this->authorize('update', $course);
        try {
            $this->service->updateData($request, $course);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $this->authorize('delete', $course);
        try {
            $this->service->deleteData($course);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
