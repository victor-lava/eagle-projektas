<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        // compact() funkcija sukuria asociatyvinį masyvą
        // compact('categories') sukuria ['categories' => $categories]

        return view('admin/categories/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categories/create');
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
        'title' => 'required|max:100'
      ]);

      Category::create(['title' => $request->title]);

      return redirect()->route('categories.index')->with('message', 'Jūsų įrašas sėkmingai sukurtas.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
          return view('admin/categories/show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin/categories/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      $request->validate([
        'title' => 'required|max:100'
      ]);

      $category->title = $request->title;
      $category->save();

      return redirect()->route('categories.show', $category->id)->with('message', 'Jūsų įrašas sėkmingai sukurtas.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

      $category->delete();

      Project::where('kategorija', $category->id)->update(['kategorija' => null]);
      /* UPDATE projects SET kategorija = null
         WHERE kategorija = 5 */

      return redirect()->route('categories.index')
                       ->with('message', "Įrašas #$category->id sėkmingai ištrintas.");
    }
}
