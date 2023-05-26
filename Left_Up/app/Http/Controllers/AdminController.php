<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::orderBy('id' ,'asc')->paginate(5);

        return response()->view('cms.admin.index' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.admin.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'username' => 'unique:admins'
         ] );

         if(! $validator->fails()){
             $admins = new Admin();

             $admins->first_name = $request->get('first_name');
             $admins->last_name = $request->get('last_name');
             $admins->mobile = $request->get('mobile');
             $admins->username = $request->get('username');
             $admins->password = Hash::make($request->get('password'));


             $isSaved = $admins->save();
             if($isSaved){
                 return response()->json(['icon'=>'success' , 'title'=>"Created is successfully"],200);
             }else {
                 return response()->json(['icon'=>'Failed' , 'title'=>"Created is Failed"],400);
             }
         }else{
             return response()->json(['icon'=>'error' , 'title' => $validator->getMessageBag()->first()],400);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::findOrFail($id);
        return response()->view('cms.admin.edit' , compact('admins'));
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
        $validator = Validator($request->all() , [
            // 'username' => 'unique:admins'
          ]);

          if(! $validator->fails()){
            $admins =  Admin::findOrFail($id);

          $admins->first_name = $request->get('first_name');
          $admins->last_name = $request->get('last_name');
          $admins->mobile = $request->get('mobile');
        //   $admins->username = $request->get('username');
        //   $admins->password = Hash::make($request->get('password'));

              $isUpdated = $admins->save();
              return['redirect' => route ('admins.index')];
              if($isUpdated){
                  return response()->json(['icon'=>'success' , 'title'=>"Created is successfully"],200);
              }else {
                  return response()->json(['icon'=>'Failed' , 'title'=>"Created is Failed"],400);
              }
          }else{
              return response()->json(['icon'=>'error' , 'title' => $validator->getMessageBag()->first()],400);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);

    }
}