<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::orderBy('id' ,'asc')->paginate(5);

        return response()->view('cms.year.index' , compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.year.create');

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
                $years = new Year();
                $years->year = $request->get('year');


                $isSaved = $years->save();
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
        $years = Year::findOrFail($id);
        return response()->view('cms.year.edit' , compact('years'));
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
          $years =  Year::findOrFail($id);
          $years->year = $request->get('year');



            $isUpdated = $years->save();
            return['redirect' => route ('years.index')];
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
        $years = Year::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}