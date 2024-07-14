<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Visa;
use Illuminate\Http\Request;
use App\DataTables\VisaDataTable;
use App\Models\Country;
use App\Http\Requests\VisaCreateRequest;
use App\Http\Requests\VisaUpdateRequest;
use Illuminate\Support\Facades\Auth;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VisaDataTable $dataTable)
    {
           return $dataTable->render('admin.visa.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.visa.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $visa = new Visa;
        $visa->country_id = $request->country_id;
        $visa->title = $request->title;
        $visa->processing_time = $request->processing_time;
        $visa->stay_period = $request->stay_period;
        $visa->validity = $request->validity;
        $visa->visa_category = $request->visa_category;
        $visa->entry = $request->entry;
        if($request->popular == 1){
            $visa->popular = 1;
        }else{
            $visa->popular = 0;

        }
        $visa->save();
        return redirect(route('admin.visa.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visa = Visa::find($id);
        $countries = Country::all();
        if (!is_null($visa)) {
            return view('admin.visa.edit',compact('visa','countries'))->with('warning','Visa Created Successfully');
        } else {
            return redirect()->route('admin.visa.index')->with('error','Visa not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $visa = Visa::find($id);
        $visa->country_id = $request->country_id;
        $visa->title = $request->title;
        $visa->processing_time = $request->processing_time;
        $visa->stay_period = $request->stay_period;
        $visa->validity = $request->validity;
        $visa->visa_category = $request->visa_category;
        $visa->entry = $request->entry;
        if($request->popular == 1){
            $visa->popular = 1;
        }else{
            $visa->popular = 0;

        }
        $visa->save();
        return redirect()->route('admin.visa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $visa = Visa::find($id);
        $visa->delete();
        if(!is_null($visa)){
            return redirect()->route('admin.visa.index');
        }else{
            abort(404);
        }
    }
}
