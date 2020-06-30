<?php

namespace Modules\Admin\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobType;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $all_job_types = JobType::all();
        return view('admin::master/job_type',compact('all_job_types'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //return $request->status;
        JobType::create($request->all());
        return redirect()->back()->with('message','Successfully Added');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function master_job_type_update(Request $request)
    {
        $id = $request->id;
        $job_type_details = JobType::find($id);
        //return $job_type_details;
        $job_type_details->name = $request->name;
        // if ($request->staus=='Active') {
        //     $job_type_details->status = '1';
        // } else {
        //     $job_type_details->status = '0';
        // }
        $job_type_details->status = $request->status;
        $job_type_details->save();
        return redirect()->back()->with('message','Updated Successfully');
    }
}
