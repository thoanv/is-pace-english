<?php

namespace App\Http\Controllers\Admin\Systems;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateGeneralRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\General;
use App\Models\Systems\UserRole;
use App\Models\User;
use App\Services\Systems\UserService;
use App\Services\Systems\RoleService;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $title = 'Quản trị viên';
    protected $route = 'users';
    protected $view = 'admin.systems.users';

    protected UserService $userService;
    protected RoleService $roleService;

    public function __construct(UserService $userService, RoleService $roleService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $authLogin = Auth::user();
        $this->authorize('viewAny', $authLogin);
        $lists = $this->userService->getData($request);
        return view($this->view.'.index', [
            'lists' => $lists,
            'title' => $this->title,
            'route' => $this->route,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $authLogin = Auth::user();
        $this->authorize('create', $authLogin);
        $roles = $this->roleService->getAll();
        $selected = 0;
        return view($this->view.'.create', [
            'data' => $user,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'roles' => $roles,
            'selected' => $selected,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $authLogin = Auth::user();
        $this->authorize('create', $authLogin);
        try {
            $this->userService->createData($request);
            return redirect()->route($this->route . '.index')->with('success', 'Thêm mới thành công');
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $authLogin = Auth::user();
        $this->authorize('update', $authLogin);
        $roles = $this->roleService->getAll();
        $roleUser = UserRole::where('user_id', $user['id'])->first();
        $selected = 0;
        if ($roleUser)
            $selected = (int)$roleUser['role_id'];
        return view($this->view.'.update', [
            'data' => $user,
            'route' => $this->route,
            'title' => $this->title,
            'view' => $this->view,
            'roles' => $roles,
            'selected' => $selected
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $authLogin = Auth::user();
        $this->authorize('update', $authLogin);
        if(!$user)
            return abort('404');

        try {
            $this->userService->updateData($request, $user);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }

        return back()->with('success', 'Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $authLogin = Auth::user();
        $this->authorize('delete', $authLogin);
        try {
            $this->userService->deleteData($user);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }

    public function changePassword()
    {
        return view($this->view.'.change-password');
    }
    public function changePasswordPost(ChangePasswordRequest $request)
    {
        $user = Auth::user();

        // Cập nhật mật khẩu mới
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Đổi mật khẩu thành công');
    }
}
