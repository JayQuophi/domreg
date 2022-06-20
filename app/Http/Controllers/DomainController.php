<?php

namespace App\Http\Controllers;

use App\Http\Requests\DomainRequest;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomainRequest $request)
    {
        // $data = $request->validate()

        Domain::create([
            'domainname' => $request->domainname,
            'ns1' => $request->ns1,
            'srv1' => $request->srv1,
            'ns2' => $request->ns2,
            'srv2' => $request->srv2,
            'ns3' => $request->ns3,
            'srv3' => $request->srv3,
            'ns4' => $request->ns4,
            'srv4' => $request->srv4,
            'ns5' => $request->ns5,
            'srv5' => $request->srv5,
            'ns6' => $request->ns6,
            'srv6' => $request->srv6,
            'ns7' => $request->ns7,
            'srv7' => $request->srv7,
            'ns8' => $request->ns8,
            'srv8' => $request->srv8,
            
        ]);

        return redirect()->route('register');
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
