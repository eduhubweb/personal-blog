<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use test\Mockery\MockClassWithMethodOverloadingTest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Authors List';
        $data['authors']=Author::orderBy('id')->get();
        $data['serial']=1;
        return view('admin.author.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Author Create';
        return view('admin.author.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'image'=>'required',

        ]);

        $data=$request->except('_token');
        if ($request->hasFile('image'))
        {
            $file=$request->file('image');
            $file->move('image/author/',$file->getClientOriginalName());
            $data['image']='image/author/'.$file->getClientOriginalName();
        }

        $file=$request->file('image');
        $file=move('image/author/',$file->getClientOriginalName());

        Author::create($data);
        Session()->flash('message','Author Created Successfully');
        return redirect()->route('author.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        $data['title']='Author Edit';
        $data['author']=$author;
        return view('admin.author.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'image'=>'required',
        ]);
        $data=$request->except('_token');
         if($request->hasFile('image')){
             $file=$request->file('image');
             $file->move('image/author/',$file->getClientOriginalName());
             File::delete($author->image);
             $data['image']='image/author/'.$file->getClientOriginalName();
         }

         $author->update($data);
         Session()->flash('message','Author Updated Successfully');
         return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        File::delete($author->image);
        $author->delete();
        Session()->flash('message','Author Deleted Successfully');
        return redirect()->route('author.index');
    }
}
