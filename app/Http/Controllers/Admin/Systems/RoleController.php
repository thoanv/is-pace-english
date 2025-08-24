<?php

namespace App\Http\Controllers\Admin\Systems;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Systems\Role;
use App\Models\User;
use App\Services\Systems\RoleService;
use Exception;
use Illuminate\Http\Request;
use App\Repositories\Systems\TypePermissionRepository as TypePermissionRepo;
class RoleController extends Controller
{
    protected string $view = 'admin.systems.roles';
    protected string $route = 'roles';
    protected string $title = 'Vai trò';
    protected RoleService $roleService;
    protected TypePermissionRepo $typePermissionRepo;

    public function __construct(RoleService $roleService, TypePermissionRepo $typePermissionRepo)
    {
        $this->roleService = $roleService;
        $this->typePermissionRepo = $typePermissionRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Role $role)
    {
        $this->authorize('viewAny', $role);
        $lists = $this->roleService->getData($request);
        return view($this->view . '.index', [
            'lists' => $lists,
            'route' => $this->route,
            'title' => $this->title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Role $role)
    {
        $this->authorize('create', $role);
        $typePermissions = $this->typePermissionRepo->getData();
        $permissionSelects = [];
        return view($this->view . '.create', [
            'data' => $role,
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
    public function store(StoreRoleRequest $request)
    {
        try {
            $this->roleService->createData($request);
            return redirect()->route($this->route . '.index')->with('success', 'Thêm mới thành công');
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $this->authorize('update', $role);
        $typePermissions = $this->typePermissionRepo->getData();
        $permissionSelects = $this->roleService->getPermission($role);
        return view($this->view . '.update', [
            'data' => $role,
            'route' => $this->route,
            'title' => $this->title,
            'view' => $this->view,
            'typePermissions' => $typePermissions,
            'permissionSelects' => $permissionSelects,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        try {
            $this->roleService->updateData($request, $role);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->authorize('delete', $role);
        try {
            $this->roleService->deleteData($role);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
