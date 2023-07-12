<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\Auth;
class booksController extends Controller
{
    public function liste_books()
    {

        $books  = books::all();
        return view('books.liste' , compact('books'));
    }



    public function update($id)
    {
        $books = books::find($id);
        return view('books.update' , compact('books'));
    }

    public function ajouter()
    {
        return view('books.ajouter');
    }

    public function ajouter_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'age'=>'required',
        ]);
        $books = new books();
        $books->title = $request->nom;
        $books->author = $request->author;
        $books->published_date = $request->published_date;
        $books->description = $request->description;
        $books->published_date = $request->published_date;
        $books -> save();
        return redirect('/ajouter')->with('status','books a bien ajouter ');
    }



    public function update_traitement(Request $request){
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'published_date'=>'required',
            'description'=>'required',
            'cover_image'=>'required'
        ]);

        $books = books::find($request->id);
        $books->title = $request->nom;
        $books->author = $request->author;
        $books->published_date = $request->published_date;
        $books->description = $request->description;
        $books->published_date = $request->published_date;

        $books -> update();
        return redirect('/books')->with('status','books a bien update ');
    }

    public function delete($id ){

        $books = books::find($id);
    if (!$books) {
        return back()->withErrors('book not found.');
    }
    $books->delete();
        return redirect('/books')->with('status','book a bien supprimer');

    }


}
