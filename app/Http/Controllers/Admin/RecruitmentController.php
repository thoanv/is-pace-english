<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecruitmentRequest;
use App\Http\Requests\UpdateRecruitmentRequest;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Services\RecruitmentService as Service;
use App\Services\CategoryService;

class RecruitmentController extends Controller
{
    protected $title = 'Tuyển dụng';
    protected $route = 'recruitments';
    protected $view = 'admin.recruitments';

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
    public function index(Request $request, Recruitment $recruitment)
    {
        $this->authorize('viewAny', $recruitment);
        $lists = $this->service->getData($request);
        $categories = $this->categoryService->getListTreeCategoryByType('news');
        return view($this->view.'.index', [
            'lists' => $lists,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Recruitment $recruitment)
    {
        $this->authorize('create', $recruitment);
        $categories = $this->categoryService->getListTreeCategoryByType('recruitment');
        return view($this->view.'.create', [
            'data' => $recruitment,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecruitmentRequest $request, Recruitment $recruitment)
    {
        $this->authorize('create', $recruitment);
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
    public function show(Recruitment $recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recruitment $recruitment)
    {
        $this->authorize('update', $recruitment);
        $categories = $this->categoryService->getListTreeCategoryByType('recruitment');
        return view($this->view.'.update', [
            'data' => $recruitment,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecruitmentRequest $request, Recruitment $recruitment)
    {
        $this->authorize('update', $recruitment);
        try {
            $this->service->updateData($request, $recruitment);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recruitment $recruitment)
    {
        $this->authorize('delete', $recruitment);
        try {
            $this->service->deleteData($recruitment);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
