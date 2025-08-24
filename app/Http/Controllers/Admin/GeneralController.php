<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGeneralRequest;
use App\Http\Requests\UpdateGeneralRequest;
use App\Models\General;
use App\Repositories\GeneralRepository as GeneralRepo;
class GeneralController extends Controller
{
    protected $route = 'generals';
    protected $view = 'admin.generals';

    protected $generalRepo;

    public function __construct(GeneralRepo $generalRepo)
    {
        $this->generalRepo = $generalRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGeneralRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(General $general)
    {
        $this->authorize('update', $general);
        $route = $this->route;
        $view = $this->view;
        return view($this->view.'.update', compact('general', 'route', 'view'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralRequest $request, General $general)
    {
        $this->authorize('update', $general);
        if(!$general)
            return abort('404');

        $data = $request->all();
        unset($data['_method']);
        unset($data['_token']);
        $this->generalRepo->update($data, $general['id']);

        return back()->with('success', 'Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(General $general)
    {
        //
    }
}
