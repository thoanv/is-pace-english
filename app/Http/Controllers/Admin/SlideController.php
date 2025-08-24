<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Services\SlideService as Service;
class SlideController extends Controller
{
    protected $title = 'slide';
    protected $route = 'slides';
    protected $view = 'admin.slides';

    protected Service $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Slide $slide)
    {
        $this->authorize('viewAny', $slide);
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
    public function create(Slide $slide)
    {
        $this->authorize('create', $slide);
        return view($this->view.'.create', [
            'data' => $slide,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSlideRequest $request, Slide $slide)
    {
        $this->authorize('create', $slide);
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
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        $this->authorize('update', $slide);
        return view($this->view.'.update', [
            'data' => $slide,
            'title' => $this->title,
            'route' => $this->route,
            'view' => $this->view,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSlideRequest $request, Slide $slide)
    {
        $this->authorize('update', $slide);
        try {
            $this->service->updateData($request, $slide);
            return redirect()->route($this->route . '.index')->with('success', 'Cập nhật thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        $this->authorize('delete', $slide);
        try {
            $this->service->deleteData($slide);
            return redirect()->route($this->route . '.index')->with('success', 'Xóa thành công');
        } catch (\Exception $error) {
            return redirect()->route($this->route . '.index')->with('error', 'Đã sảy ra lỗi: ');
        }
    }
}
