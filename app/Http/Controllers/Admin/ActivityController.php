<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Models\Activity;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Services\ActivityService as Service;
use App\Services\UnitService;
class ActivityController extends Controller
{
    protected $title = 'Hoạt động tại cơ sở';
    protected $route = 'activities';
    protected $view = 'admin.activities';

    protected Service $service;
    protected UnitService $unitService;
    public function __construct(Service $service, UnitService $unitService)
    {
        $this->service = $service;
        $this->unitService = $unitService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Activity $activity)
    {
        $this->authorize('viewAny', $activity);
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
    public function create(Activity $activity)
    {
        $this->authorize('create', $activity);
        $units = $this->unitService->getUnitByStatus();
        return view($this->view.'.create', [
            'data' => $activity,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'units' => $units,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request, Activity $activity)
    {
        $this->authorize('create', $activity);
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
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        $this->authorize('update', $activity);
        $units = $this->unitService->getUnitByStatus();
        return view($this->view.'.update', [
            'data' => $activity,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
            'units' => $units,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $this->authorize('update', $activity);
        try {
            $this->service->updateData($request, $activity);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $this->authorize('delete', $activity);
        try {
            $this->service->deleteData($activity);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
