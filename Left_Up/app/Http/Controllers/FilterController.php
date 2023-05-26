<?php

namespace App\Http\Controllers;

use App\Models\filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filters = filter::orderBy('id' ,'asc')->paginate(5);

        return response()->view('cms.filter.index' , compact('filters'));
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.filter.create');

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
                $filters = new Filter();
                $filters->nameEn = $request->get('nameEn');
                $filters->nameAr = $request->get('nameAr');
                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/filter', $imageName);

                    $filters->image = $imageName;
                    }


                $isSaved = $filters->save();
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
        $filters = Filter::findOrFail($id);
        return response()->view('cms.filter.edit' , compact('filters'));
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
          $filters =  Filter::findOrFail($id);
          $filters->nameEn = $request->get('nameEn');
          $filters->nameAr = $request->get('nameAr');
          if (request()->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . 'image.' . $image->getClientOriginalExtension();

            $image->move('storage/images/filter', $imageName);

            $filters->image = $imageName;
            }


            $isUpdated = $filters->save();
            return['redirect' => route ('filters.index')];
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
        $filters = Filter::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}