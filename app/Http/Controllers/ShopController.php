<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        return array();
    }

    public function index( $page = 'home' )
    {
        $publicUrl = asset('client');
        if( View::exists('client.pages.'.$page) ):
            $slideShow  =   ( $page === 'home' ? true : false );
            $data = [
                'title'     =>  ucfirst($page),
                'slide'     =>  $slideShow,
                'url'       =>  $publicUrl
            ];
            return view( 'client.pages.'.$page, compact('data') );
        else:
            return abort( 404 );
        endif;
    }

    public function activeMenu( $nameUrl , $moreUrl = [] ) {
        $isActive = Request::is('contact*') ? 'menu-active' : '';
        return $isActive;
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
