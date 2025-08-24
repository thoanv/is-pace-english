<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService as Service;
use App\Services\CategoryService;

class PostController extends Controller
{
    protected $title = 'Tin tức & Sự kiện';
    protected $route = 'posts';
    protected $view = 'admin.posts';

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
    public function index(Request $request, Post $post)
    {
        $this->authorize('viewAny', $post);
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
    public function create(Post $post)
    {
        $this->authorize('create', $post);
        $categories = $this->categoryService->getListTreeCategoryByType('news');
        return view($this->view.'.create', [
            'data' => $post,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request, Post $post)
    {
        $this->authorize('create', $post);
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        $categories = $this->categoryService->getListTreeCategoryByType('news');
        return view($this->view.'.update', [
            'data' => $post,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $this->authorize('update', $post);
        try {
            $this->service->updateData($request, $post);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        try {
            $this->service->deleteData($post);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
