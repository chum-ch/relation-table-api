<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use GuzzleHttp\Handler\Proxy;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Profile::all();
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
        $profile = new Profile();
        $profile->user_id = $request->user_id;
        $profile->image = $request->image;
        $profile->city = $request->city;

        $profile->save();
        return response()->json(['meaasge'=>'Created']);
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
        return Profile::findOrFail($id);
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
        $profile = Profile::findOrFail($id);
        $profile->user_id = $request->user_id;
        $profile->image = $request->image;
        $profile->city = $request->city;

        $profile->save();
        return response()->json(['meaasge'=>'Updated']);
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
        $is_deleted = Profile::destroy($id);
        if ($is_deleted === 1){
            return response()->json(['message'=>'Deleted']);
        }
        else{
            return response()->json(['message'=>'id not found']);
        }
    }
}
