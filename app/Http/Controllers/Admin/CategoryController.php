<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithPagination;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     use WithPagination;

    protected $paginationTheme = "bootstrap";


    public function index()
    {

        $tags = Tag::paginate(9);

        return view('admin.categories.index', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name' => 'required',
            'descripcion' => 'required',
            'file' => 'required',
        ]);

        // dd($request->file('file')); 

        $category = new Tag();

        $category->name = $request->name;
        $category->slug = Str::slug($request->input('name'), "-");
        $category->descripcion = $request->descripcion;
        $category->color = $request->color[0];
        $category->img_url = Storage::put('tags', $request->file('file'));        


        $category->save();

        return redirect()->route('admin.categories.edit', $category);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $category)
    {

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category->update($request->all());
    
        return redirect()->route('admin.categories.edit', $category)->with('info', 'Se actualizó con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // dd($id);

        // $tag->delete();

        $tag = Tag::findOrFail($id); 

        $tag->delete();

        return redirect()->route('admin.categories.index')->with('info', 'Se elimino con éxito');

    }
}
