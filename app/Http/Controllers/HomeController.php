<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Reiškia, jog į šitą kontrolerį galite patekti, jei esate auth "middleware" grupėje
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all();
        $categories = Category::all();

        return view('pages/home', compact('projects', 'categories'));
    }

    public function testas()
    {
        /* SELECT taisyklės */

        $projects = Project::all(); // paima visus įrašus
        $categories = Category::all();

        $projects = Project::find(5); // paima viena įrašą su ID 5
        $projects = Project::findOrFail(5); // paima vieną įrašą su ID 5 ir jei neranda atvaizduoja 404 puslapį

        $projects = Project::where('id', 5)->first(); // gauna vieną įrašą su ID 5
        $projects = Project::where('title', 'naujas')->first(); // gauna vieną įrašą su ID 5
        $projects = Project::where('kategorija', 5)->get(); // gaus visus įrašus su kategorija 5

        $projects = Project::where('kategorija', 5)->orderBy('date', 'desc')->get();
        $projects = Project::where('kategorija', '>', 5)->get(); // kur kateogijor id yra daugiau nei 5
        $projects = Project::where('kategorija', 5)->take(10)->get(); // duos tik 10 įrašus
        /* SELECT * FROM projects WHERE id = 5 LIMIT 10 */

        /* INSERT */

        // 2.1
        // Reikia nusirodyti fillable laukus Project modelyje pvz. :
        /* protected $fillable = [
            'name', 'email', 'password', 'phone', 'location'
        ]; */
        // Uzpildyti visus privalomus laukus
        Project::create(['title' => 'Antraste', 'description' => 'aprasymas']);

        // 2.2 Nereikia fillable laukų nusirodyti
        $project = new Project();
        $project->title = 'Antraste';
        $project->description = 'Aprasymas';
        $project->save();

        /* DELETE */

        $projects = Project::where('id', 5)->destroy();
        $projects = Project::where('id', 5)->delete();

        /* UPDATE */

        // 2.1 Reikia nusirodyti fillable
        Project::where('id', 5)->update(['title' => 'Nauja title']);

        // 2.2 Nereikia fillable
        $project = Project::where('id', 5);
        $project->title = 'Antraste';
        $project->save();

        return view('pages/home', compact('projects', 'categories'));
    }
}
