<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\Industry;
use Modules\Admin\Entities\JobPosition;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::index');
    }

    public function master()
    {
        return view('admin::master');
    }
    // public function master_job_type()
    // {
    //     return view('admin::master/job_type');
    // }
    // public function master_post_position()
    // {
    //     return view('admin::master/post_position');
    // }

    public function job_manager()
    {
        return view('admin::job_manager_dashboard');
    }
    public function add_job()
    {

        $all_job_types = JobType::where('status','1')->get();
        $all_job_positions = JobPosition::where('status','1')->get();
        $all_industries = Industry::where('status','1')->get();
        return view('admin::job_manager/add_job',compact('all_job_types','all_job_positions','all_industries'));
    }


    public function settings()
    {
        return view('admin::settings');
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
        //
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

}
