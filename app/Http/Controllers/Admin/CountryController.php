<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\DataTables\CountryDataTable;
use App\Requests\CountryCreateRequest;
use App\Requests\CountryUpdateRequest;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CountryDataTable $dataTable)
    {
        // dd("hello");
        return $dataTable->render('admin.country.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::all();
        return view('admin.country.create', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $flag = "null";
        if ($request->flag){
            $image = new ImageController;
            $flag = $image->index($request->flag);
        }
        $country = new Country;
        $country->name = $request->name;
        $country->slug = $request->slug;
        $country->continent = $request->continent;
        $country->description = $request->description;
        $country->sortdescription = $request->sortdescription;
        $country->image =  $myimage;
        $country->flag =  $logo;
        $country->meta_title = $request->meta_title;
        $country->meta_description = $request->meta_description;
        $country->meta_keywords = $request->meta_keywords;
        $country->save();
        return redirect()->route('admin.country.index')->with('success','Country Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $country = Country::find($id);
        if (!is_null($country)) {
            return view('admin.country.show', compact('country'));
        } else {
            return redirect()->route('admin.country.index')->with('error','Country not Exists');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $country = Country::find($id);
        if (!is_null($country)){
            //  $country = Country::all();
            return view('admin.country.edit', compact('country'))->with('warning','Country Created Successfully');
        } else {
            return redirect()->route('admin.country.index')->with('error','Country not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $flag = "null";
        if ($request->flag){
            $image = new ImageController;
            $flag = $image->flag($request);
        }
        $country = Country::find($id);
        $country->name = $request->name;
        $country->slug = $request->slug;
        $country->continent = $request->continent;
        $country->description = $request->description;
        $country->sortdescription = $request->sortdescription;
        if($myimage != "null"){
            $country->image =  $myimage;
        }
        if($flag != "null"){
            // $country->image =  $myimage;
            $country->flag =  $flag;
        }
        $country->meta_title = $request->meta_title;
        $country->meta_description = $request->meta_description;
        $country->meta_keywords = $request->meta_keywords;
        // $category->status = ($request->status == '1')? true : false;
        // dd($country);
        $country->save();
        return redirect()->route('admin.country.index')->with('success','Country Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        if (!is_null($country)) {
            $country->delete();
            return redirect()->route('admin.country.index')->with('warning','Country Deleted Successfully');
        } else {
            return redirect()->route('admin.country.index')->with('error','Country not Exists');
        }
    }
}
