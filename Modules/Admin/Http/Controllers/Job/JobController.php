<?php

namespace Modules\Admin\Http\Controllers\Job;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\PostMeta;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::index');
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
        $request->validate([
        'title' => 'required',
        'job_type' => 'required',
        'job_position' => 'required',
        'job_industry' => 'required',
    ]);
            try {
                    $post = new Post;
                    $post->post_type = "Add Job";
                    $post->post_title = $request->title;
                    $post->description = $request->description;
                    $post->save();
                    $insertedId = $post->id;


                    $post_meta_content = array(
                        'job_type' => $request->job_type,
                        'job_position' => $request->job_position,
                        'job_industry' => $request->job_industry,
                        'job_skills' => $request->skills,
                        'min_salary' => $request->min_salary,
                        'max_salary' => $request->max_salary,
                        'experiance' => $request->experiance,
                        'experiance_unit' => $request->experiance_unit
                    );
                    $post_meta_content = json_encode($post_meta_content);


                    $post_meta = new PostMeta;
                    $post_meta->post_id = $insertedId;
                    $post_meta->meta_content = $post_meta_content;
                    $post_meta->save();
                    return redirect()->back()->with('message','Job Insterted Successfully');
            } catch (\Throwable $th) {
                //return $th;
            }


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
