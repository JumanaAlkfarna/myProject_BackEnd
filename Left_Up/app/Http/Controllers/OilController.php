<?php

namespace App\Http\Controllers;

use App\Models\Oilcar;
use Illuminate\Http\Request;

class OilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oils = Oilcar::orderBy('id' ,'asc')->paginate(5);

        return response()->view('cms.oil.index' , compact('oils'));
    }

    public function indexFive()
    {
        $oils = Oilcar::where('status' ,'five')->paginate(5);

        return response()->view('website.oil' , compact('oils'));
    }
    public function indexTen()
    {
        $oilTens = Oilcar::where('status' ,'ten')->paginate(5);

        return response()->view('website.oil' , compact('oils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.oil.create');

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
                $oils = new Oilcar();
                $oils->nameEn = $request->get('nameEn');
                $oils->nameAr = $request->get('nameAr');
                $oils->price = $request->get('price');
                $oils->status = $request->get('status');

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/oil', $imageName);

                    $oils->image = $imageName;
                    }

                $isSaved = $oils->save();
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
        $oils = Oilcar::findOrFail($id);
        return response()->view('cms.oil.edit' , compact('oils'));
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
          $oils =  Oilcar::findOrFail($id);
          $oils->nameEn = $request->get('nameEn');
          $oils->nameAr = $request->get('nameAr');
          $oils->price = $request->get('price');
        //   $oils->status = $request->get('status');

          if (request()->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . 'image.' . $image->getClientOriginalExtension();

            $image->move('storage/images/oil', $imageName);

            $oils->image = $imageName;
            }


            $isUpdated = $oils->save();
            return['redirect' => route ('oils.index')];
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
        $oils = Oilcar::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}