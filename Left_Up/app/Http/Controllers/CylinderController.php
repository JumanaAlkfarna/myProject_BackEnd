<?php

namespace App\Http\Controllers;

use App\Models\Cylinder;
use Illuminate\Http\Request;

class CylinderController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cylinders = Cylinder::orderBy('id' ,'asc')->paginate(5);

        return response()->view('cms.cylinder.index' , compact('cylinders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.cylinder.create');

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
            ] );

            if(! $validator->fails()){
                $cylinders = new Cylinder();
                $cylinders->num = $request->get('num');


                $isSaved = $cylinders->save();
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
        $cylinders = Cylinder::findOrFail($id);
        return response()->view('cms.cylinder.edit' , compact('cylinders'));
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
        ]);

        if(! $validator->fails()){
          $cylinders =  Cylinder::findOrFail($id);
          $cylinders->num = $request->get('num');



            $isUpdated = $cylinders->save();
            return['redirect' => route ('cylinders.index')];
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
        $cylinders = Cylinder::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}