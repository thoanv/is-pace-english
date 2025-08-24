<?php

namespace App\Http\Controllers\Admin\Systems;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Services\Systems\PartnerService;
use App\Repositories\Systems\TypePermissionRepository as TypePermissionRepo;
use App\Http\Requests\StoreRoleRequest;
use Exception;
class PartnerController extends Controller
{
    protected string $view = 'admin.systems.partners';
    protected string $route = 'partners';
    protected string $title = 'Vai trò';
    protected TypePermissionRepo $typePermissionRepo;
    protected PartnerService $partnerService;

    public function __construct(PartnerService $partnerService, TypePermissionRepo $typePermissionRepo)
    {
        $this->partnerService = $partnerService;
        $this->typePermissionRepo = $typePermissionRepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Partner::class);
        $lists = $this->partnerService->getData($request);
        return view($this->view . '.index', [
            'lists' => $lists,
            'route' => $this->route,
            'title' => $this->title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Partner $partner)
    {
        $this->authorize('viewAny', $partner);
        $typePermissions = $this->typePermissionRepo->getData();
        $permissionSelects = [];
        return view($this->view . '.create', [
            'data' => $partner,
            'route' => $this->route,
            'title' => $this->title,
            'view' => $this->view,
            'typePermissions' => $typePermissions,
            'permissionSelects' => $permissionSelects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerRequest $request)
    {
        try {
            $this->partnerService->createData($request);
            return redirect()->route($this->route . '.index')->with('success', 'Thêm mới vai trò thành công'); 
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    // public function show(Role $role)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Role $role)
    // {
    //     $permissionOfRole = $this->roleService->getPermission($role);
    //     return view($this->view . '.update', [
    //         'data' => $role,
    //         'route' => $this->route,
    //         'permissionRoles' => $permissionOfRole
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateRoleRequest $request, Role $role)
    // {
    //    // chưa xử lý
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Role $role)
    // {
    //     try {
    //         $this->roleService->deleteData($role);
    //         return redirect()->route($this->route . '.index')->with('success', 'Xóa vai trò thành công');
    //     } catch (Exception $error) {
    //         return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
    //     }
    // }
}