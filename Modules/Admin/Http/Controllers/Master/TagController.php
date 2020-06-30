<?php

namespace Modules\Admin\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\Tag;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $all_tags = Tag::all();
        return view('admin::master/tag_keyword',compact('all_tags'));
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
        Tag::create($request->all());
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

    public function master_tag_keyword_update(Request $request)
    {
        $id = $request->id;
        $tag_keyword_details = Tag::find($id);
        //return $tag_keyword_details;
        $tag_keyword_details->name = $request->name;
        // if ($request->staus=='Active') {
        //     $tag_keyword_details->status = '1';
        // } else {
        //     $tag_keyword_details->status = '0';
        // }
        $tag_keyword_details->status = $request->status;
        $tag_keyword_details->save();
        return redirect()->back()->with('message','Updated Successfully');
    }
}
