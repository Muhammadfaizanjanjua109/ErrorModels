<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    
    public function editblog($id)
    { 
    
        $blogs=blogs::find($id);
        return view('updateblog',compact('blogs'));

    }
    public function delteblog($id)
    { 
    
        $blogs=blogs::find($id);
       $blogs->delete();
       return redirect('/dashboard');

    }  
    public function index()
    {
        $blogs=blogs::all();
        return view('show' ,compact('blogs'));
    }
    public function createBlogs(Request $request)
    {
      $f1=new blogs();
      $f1->tittle=$request->tittle;
      $f1->body=$request->body;
      $f1->save();
      return redirect('/dashboard');
    }



    public function show($id)
    { 
    
        $blog=blogs::find($id);
        return view('fullpage',compact('blog'));

    } 
 
    public function update(request $request,$id)
    { 

       // $input=$request->all();
        $f=blogs::find($id);
        $f->tittle=$request->tittle;
        $f->body=$request->body;
        $f->save();
        return redirect('/dashboard');

    } 
    public function trash()
    { 
        $blog=blogs::onlyTrashed()->get();
        return view('trash',compact('blog'));

    } 
    public function admin()
    { 
        return view('layouts.admin.admin');

    } 


    public function restore($id)
    { 
        $blog=blogs::onlyTrashed()->findOrFail($id);
        $blog->restore($blog);
        return view('/dashboard');

    } 
 
    public function delete($id)
    { 
        $blog=blogs::onlyTrashed()->findOrFail($id);
        $blog->forceDelete($blog);
        return view('/dashboard');

    } 
}
