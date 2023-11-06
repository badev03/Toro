<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::select('id','name','description','status')->get();
   
        return view('back-end.page.brand.index',compact('brands'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:brands|max:255',
        ],[
            'name.required' => 'Tên thương hiệu không được để trống',
            'name.unique' => 'Tên thương hiệu đã tồn tại',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $request->merge(['slug' => Str::slug($request->name)]);
        Brand::create($request->all());
    
        return redirect()->route('brands.index')->with('success', 'Thêm mới thành công');
    }
    
    
    public function destroy($id){
        Brand::find($id)->delete();
        return redirect()->route('brands.index');
    }
    
}
