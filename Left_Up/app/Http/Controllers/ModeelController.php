<?php

namespace App\Http\Controllers;

use App\Models\Modeel;
use Illuminate\Http\Request;

class ModeelController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeels = Modeel::orderBy('id' ,'asc')->paginate(5);

        return response()->view('cms.modeel.index' , compact('modeels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.modeel.create');

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
                $modeels = new Modeel();
                $modeels->nameEn = $request->get('nameEn');
                $modeels->nameAr = $request->get('nameAr');


                $isSaved = $modeels->save();
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
        $modeels = Modeel::findOrFail($id);
        return response()->view('cms.modeel.edit' , compact('modeels'));
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
          $modeels =  Modeel::findOrFail($id);
          $modeels->nameEn = $request->get('nameEn');
          $modeels->nameAr = $request->get('nameAr');



            $isUpdated = $modeels->save();
            return['redirect' => route ('modeels.index')];
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
        $modeels = Modeel::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}