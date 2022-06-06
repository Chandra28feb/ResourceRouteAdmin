<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class CompanyController extends Controller
{

    public function index(Request $request)
    {
        $search = null;

        $company = Company::paginate(15);
        if($request->search !=null) {
           $company = Company::where('name', 'LIKE', "%{$request->search}%")
           ->orWhere('email', 'LIKE', "%{$request->search}%")->paginate(15);
            $search = $request->search;
        }
        $count = Company::all()->count();
        return view('backend.company.index')->with(['company'=>$company,'search'=>$search,'count'=>$count]);
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'name'=>'required|max:25',
            'email'=>'required|unique:companies|max:35',
            'logo'=>'required|file|max:1000000',
        ]);
        if($request->hasFile('logo')) {
            $logo = Image::make($request->file('logo'))
            ->resize(100, null, function ($constraint) { $constraint->aspectRatio(); } )
            ->encode('jpg',80);
          $path = time().'.jpg';
          Storage::disk('public')->put($path, $logo);
          $input['logo']='storage/'.$path;
        }
        Company::create($input);
        return redirect()->back()->with(['status'=>'success','message'=>'New Company Added successfully']);
    }

    public function edit($id)
    {
        $company = Company::where('id',$id)->first();
        return view('backend.company.edit',['company'=>$company]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->validate($request,[
            'name'=>'required|max:25',
            'email'=>"unique:companies,email,$id,id",
        ]);
        if($request->hasFile('logo')) {
            $logo = Image::make($request->file('logo'))
            ->resize(100, null, function ($constraint) { $constraint->aspectRatio(); } )
            ->encode('jpg',80);
          $path = time().'.jpg';
          Storage::disk('public')->put($path, $logo);
          $input['logo']='storage/'.$path;
        }
        $company = Company::find($id);
       $company->update($input);
       return redirect()->route('company.index')->with(['status'=>'success','message'=>'Company updated sucesfully']);
    }

    public function destroy($id)
    {
       
        $company = Company::find($id);
        $company->delete();
        return redirect()->back()->with(['status'=>'success','message'=>'Company Deleted successfully']);
    }
}
