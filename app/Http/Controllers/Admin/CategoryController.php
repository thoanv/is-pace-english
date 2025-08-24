<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    protected $title = 'danh mục';
    protected $route = 'categories';
    protected $view = 'admin.categories';

    protected CategoryService $service;

    public function __construct(
        CategoryService $service,
    )
    {
        $this->categoryService = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Category $category)
    {
        $this->authorize('viewAny', $category);
        $lists = $this->categoryService->getListTreeCategories();

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
    public function create(Category $category)
    {
        $this->authorize('create', $category);
        $categories = $this->categoryService->getListTreeCategoryLocales();
        return view($this->view.'.create', [
            'data' => $category,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request, Category $category)
    {
        $this->authorize('create', $category);
        try {
            $this->categoryService->createData($request);
            return redirect()->route($this->route . '.index')->with('success', 'Thêm mới thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $this->authorize('view', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $this->authorize('update', $category);
        $categories = $this->categoryService->getListTreeCategoryLocales();

        return view($this->view . '.update', [
            'data' => $category,
            'route' => $this->route,
            'title' => $this->title,
            'view' => $this->view,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->authorize('update', $category);
        try {
            // Gọi phương thức cập nhật dữ liệu
            $this->categoryService->updateData($request, $category);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            // Ghi log lỗi để theo dõi
            Log::error('Update category error: ' . $error->getMessage());
            return redirect()->route($this->route . '.index')->with('error', 'Đã xảy ra lỗi, vui lòng thử lại sau.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);
        try {
            $result = $this->categoryService->deleteData($category);
            if(!$result){
                return redirect()->route($this->route . '.index')->with('error', 'Xóa không thành công. Lý do danh mục của bạn đang chứa những danh mục con khác');
            }
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
