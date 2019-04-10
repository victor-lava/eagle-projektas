<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::all();
        $categories = Category::all();

        return view('admin/projects/index', compact('projects', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin/projects/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd($request);

      $request->validate([
        'title' => 'required',
        'description' => 'required',
        'year' => 'required|numeric',
        'client' => 'required',
        'category' => 'required|numeric|exists:projects_category,id',
        'image' => 'required'
      ]);

      $project = new Project();
      $project->title = $request->title;
      $project->description = $request->description;
      $project->year = $request->year;
      $project->client = $request->client;
      $project->kategorija = $request->category;
      $project->image_url = $request->image;

      $project->save();

      return redirect()->route('projects.index')->with('message', 'Jūsų įrašas sėkmingai sukurtas.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        if($project) { // jei projektas rastas
            $category = Category::find($project->kategorija); // Galima naudoti šitą variantą, norint paiimti projektų kategorijas, tačiau geriausias yra su Eloquent Relationship
            // Ref: https://laravel.com/docs/5.8/eloquent-relationships#one-to-one

            return view('admin/projects/show', ['project' => $project, 'category' => $category]);
        } else {

          return redirect()->route('home');
        }
        // dd($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();

        return view('admin/projects/edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
          'title' => 'required',
          'description' => 'required',
          'year' => 'required|numeric',
          'client' => 'required',
          'category' => 'required|numeric|exists:projects_category,id',
          'image' => 'required'
        ]);

        $project->title = $request->title;
        $project->description = $request->description;
        $project->year = $request->year;
        $project->client = $request->client;
        $project->kategorija = $request->category;
        $project->image_url = $request->image;

        $project->save();

        return redirect()->route('projects.show', $project->id)->with('message', 'Jūsų įrašas sėkmingai atnaujintas.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
                         ->with('message', "Įrašas #$project->id sėkmingai ištrintas.");
    }

    public function filter($id) {
      // echo "veikia";

      $projects = Project::where('kategorija', $id)->get(); // gauna duomenis, bet naudojamas daugiau nei vienam įrašui (sudeda įrašus į masyvą)
      // jei gauti vieną rezultatą, tai vietoj ->get naudojam ->first
      $categories = Category::all();

      return view('admin/projects/index', compact('projects', 'categories'));
    }
}
