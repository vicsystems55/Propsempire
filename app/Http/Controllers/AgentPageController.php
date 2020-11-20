<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "#", 'name' => "Dashboard"], ['name' => "Home"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true];

            return view('agents.dashboard',[
                'pageConfigs' => $pageConfigs,
                'breadcrumbs' => $breadcrumbs
            ]);
    }

    public function all_listings()
    {
        //
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "#", 'name' => "Dashboard"], ['name' => "Home"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true];

            return view('agents.all_listings',[
                'pageConfigs' => $pageConfigs,
                'breadcrumbs' => $breadcrumbs
            ]);
    }

    public function add_prop()
    {
        //
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "#", 'name' => "Dashboard"], ['name' => "Add Property"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true];

            return view('agents.add_prop',[
                'pageConfigs' => $pageConfigs,
                'breadcrumbs' => $breadcrumbs
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
