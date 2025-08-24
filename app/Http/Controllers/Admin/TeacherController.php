<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Services\TeacherService as Service;
class TeacherController extends Controller
{
    protected $title = 'giáo viên';
    protected $route = 'teachers';
    protected $view = 'admin.teachers';

    protected Service $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Teacher $teacher)
    {
        $this->authorize('viewAny', $teacher);
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
    public function create(Teacher $teacher)
    {
        $this->authorize('create', $teacher);
        return view($this->view.'.create', [
            'data' => $teacher,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request, Teacher $teacher)
    {
        $this->authorize('create', $teacher);
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
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $this->authorize('update', $teacher);
        return view($this->view.'.update', [
            'data' => $teacher,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $this->authorize('update', $teacher);
        try {
            $this->service->updateData($request, $teacher);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $this->authorize('delete', $teacher);
        try {
            $this->service->deleteData($teacher);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
