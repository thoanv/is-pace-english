<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Services\UnitService as Service;
class UnitController extends Controller
{
    protected $title = 'Cơ sở';
    protected $route = 'units';
    protected $view = 'admin.units';

    protected Service $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Unit $unit)
    {
        $this->authorize('viewAny', $unit);
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
    public function create(Unit $unit)
    {
        $this->authorize('create', $unit);
        return view($this->view.'.create', [
            'data' => $unit,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request, Unit $unit)
    {
        $this->authorize('create', $unit);
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
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        $this->authorize('update', $unit);
        return view($this->view.'.update', [
            'data' => $unit,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $this->authorize('update', $unit);
        try {
            $this->service->updateData($request, $unit);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $this->authorize('delete', $unit);
        try {
            $this->service->deleteData($unit);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
