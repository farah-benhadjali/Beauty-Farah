<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('admin.admin.index', compact('produits'));
    }

    public function index1()
    {
       //select * from offres
        $produits = Produit::all();
        return view('user.pages.home', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.admin.create',compact('categories'));
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
            'photo' => 'required|max:5048|mimes:jpg,png,jpeg',
            'nom_de_produit' => 'required',
            'prix' => 'required',
            'description_produit' => 'required',
            'category_type'=> 'required',

        ]);
        
        $photo = $request->file('photo');
        $profile_photo_pathName = time() . '.' . $photo->extension();
        $photo->move('images', $profile_photo_pathName);
        Produit::create($request->all());

        return redirect()->route('produit.index')
            ->with('success', 'Produit créée avec succès.');
    }

    public function store1(Request $request)
    {
        $request->validate([
            'photo' => 'required|max:5048|mimes:jpg,png,jpeg',
            'nom_de_produit' => 'required',
            'prix' => 'required',
            'description_produit' => 'required',
            'category_type'=> 'required',

        ]);

        Produit::create($request->all());

        return redirect()->route('pages.home')
            ->with('success', 'Produit created successfully.');

            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        $categories=Category::all();
        return view('admin.admin.show',compact('produit','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('admin.admin.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'photo' => 'required|max:5048|mimes:jpg,png,jpeg',
            'nom_de_produit' => 'required',
            'prix' => 'required',
            'description_produit' => 'required',
            'category_type'=> 'required',

        ]);

       

        $produit->update([
            'photo' => $request->photo,
            'nom_de_produit' => $request->nom_de_produit,
            'prix' => $request->prix,
            'description_produit' => $request->description_produit,
            'category_type'=> $request->category_type,
        ]);

        return redirect()->route('produit.index')
            ->with('success', 'Produit modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produit.index')
            ->with('success', 'Produit supprimer avec succès');
    }
}
