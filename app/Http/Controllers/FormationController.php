<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
    public function __construct() {
        $this->middleware(['auth'])->only('create');
    }
    
    public function index () {
         return view('formations.index', [
             'formations' => Formation::all()
         ]);
    }

    public function create() {
        return view('formations.create');
    }

    public function store(Request $request) {
        
        $formation = new Formation();

        $filename = time() . '.' .$request->image->extension();

        $image = $request->file('image')->storeAs(
            'images',
            $filename,
            'public'
        );

        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->image = $image;
        $formation->categorie = $request->categorie;
        $formation->save();

        return redirect()->route('formations.index');
    }

    public function show(Formation  $formation){
         return view('formations.show',[
             'formation' => $formation
            ]);

     }

     public function research(){
        $search = request()->input('search');
        
        $formations = Formation::where('titre', 'like', "%$search%")
                                ->orWhere('description', 'like', "%$search%")
                                ->paginate(6);

        return view('formations.research')->with('formation_Search', $formations);
     }
}
