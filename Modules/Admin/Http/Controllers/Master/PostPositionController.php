<?php

namespace Modules\Admin\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobPosition;

class PostPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $all_job_positions = JobPosition::all();
        return view('admin::master/post_position',compact('all_job_positions'));
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
        JobPosition::create($request->all());
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

    public function master_post_position_update(Request $request)
    {
        $id = $request->id;
        $job_position_details = JobPosition::find($id);
        //return $job_position_details;
        $job_position_details->name = $request->name;
        // if ($request->staus=='Active') {
        //     $job_position_details->status = '1';
        // } else {
        //     $job_position_details->status = '0';
        // }
        $job_position_details->status = $request->status;
        $job_position_details->save();
        return redirect()->back()->with('message','Updated Successfully');
    }
}
