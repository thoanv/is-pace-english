<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Category;
use App\Models\Menu;
use App\Services\CategoryService;
use App\Services\MenuService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CategoryRepository as CategoryRepo;

class MenuController extends Controller
{
    protected $title = 'Menu';
    protected $route = 'menus';
    protected $view = 'admin.menus';

    protected CategoryService $categoryService;
    protected MenuService $menuService;
    protected CategoryRepo $categoryRepo;

    public function __construct(
        CategoryService            $categoryService,
        MenuService            $menuService,
        CategoryRepo $categoryRepo
    )
    {
        $this->categoryService = $categoryService;
        $this->menuService = $menuService;
        $this->categoryRepo = $categoryRepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Menu $menu)
    {
        $this->authorize('viewAny', $menu);
        $lists = $this->menuService->getAll();
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
    public function create(Request $request, Menu $menu)
    {
        $this->authorize('create', $menu);
        $categories = $this->categoryService->getListTreeCategories();
        $list_categories = [];
        $menuSetup = [];
        return view($this->view.'.create', [
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'data' => $menu,
            'categories' => $categories,
            'list_categories' => $list_categories,
            'menuSetup' => $menuSetup,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request, Menu $menu)
    {
        $this->authorize('create', $menu);
        try {
            $this->menuService->createData($request);
            return redirect()->route($this->route . '.index')->with('success', 'Thêm mới thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $this->authorize('update', $menu);
        $categories = $this->categoryService->getListTreeCategories();
        // những cái đã chọn
        $list_categories = [];
        $menuSetup = $menu->content;
        if($menuSetup){
        foreach ($menuSetup as $item) {
            $list_categories[] = $item['id']; // Thêm id của mục cha vào mảng

            // Kiểm tra nếu có children và thêm id của chúng vào mảng
            if (isset($item['children'])) {
                foreach ($item['children'] as $child) {
                    $list_categories[] = $child['id']; // Thêm id của mục con vào mảng
                }
            }
        }
        }
        return view($this->view.'.update', [
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'data' => $menu,
            'categories' => $categories,
            'list_categories' => $list_categories,
            'menuSetup' => $menuSetup,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $this->authorize('create', $menu);
        try {
            $this->menuService->updateData($request,$menu);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function setup(Menu $menu)
    {
        $menuSetup = [];
        if($menu['content']){
            $menuSetup = $menu['content'];
        }
        $list_categories = [];
        if($menu['list_id_category']){
            $list_categories =  explode(',', $menu['list_id_category']);
        }
        $categories = $this->getCategories(true);
        return view($this->view.'.setup', [
            'menu' => $menu,
            'categories' => $categories,
            'menuSetup' => $menuSetup,
            'list_categories' => $list_categories,
            'view' => $this->view
        ]);
    }
    public function setupStore(Request $request, Menu $menu)
    {
        $data['list_id_category'] =  $request['list_id_cate_checked'];
        $data['created_by'] = Auth::id();
        $array_menus = [];
        foreach (json_decode($request['data']) as $dat){
            $array_menus[] = json_decode(json_encode($dat),true);
        }
        $data['data'] = serialize($array_menus);
        $this->categoryRepo->update($data, $menu['id']);
        return back()->with('success',  'Cài đặt thành công');
    }

    private function getCategories($status)
    {
        $categories = $this->categoryRepo->getLists();
        $listCategory = [];
        Category::recursive($categories, $parents = 0, $level = 1, $listCategory);
        return $listCategory;
    }
}
