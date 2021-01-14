<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\PieceJoint;
use App\Models\TexteArticle;
use App\Models\ImageArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $article = DB::table('articles')->get();
        return view('article', ['articles' => $article]);
    }

    public function indexCreation(){
        return view('creationArticle');
    }

    public function indexGestion(){
        $article = DB::table('articles')->get();
        return view('gestionArticle', ['articles' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $article = new Article();
        $article->titre = $request->input('titre');
        $article->accroche = $request->input('accroche');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->extension();
            $filename = time() . '.' . $extension;
            $image->move(public_path('imageArticle/Principale'), $filename);
            $article->pathImagePrincipale = $filename;
        }
        
        $saved = $article->save();

        $texte = new TexteArticle();
        $texte->textHTML = $request->input('texte');
        $texte->idArticle = $article->id;

        $saved = $texte->save();

        if($request->hasFile('image2')){
            $imageSecondaire2 = new ImageArticle;

            $image = $request->file('image2');
            $extension = $image->extension();
            $filename = time() . '.' . $extension;
            $image->move(public_path('imageArticle/Secondaire'), $filename);
            $imageSecondaire2->pathImage = $filename;
            $imageSecondaire2->idArticle = $article->id;
            $saved = $imageSecondaire2->save();
        }

        if($request->hasFile('image3')){
            $imageSecondaire3 = new ImageArticle;

            $image = $request->file('image3');
            $extension = $image->extension();
            $filename = time() . '.' . $extension;
            $image->move(public_path('imageArticle/Secondaire'), $filename);
            $imageSecondaire3->pathImage = $filename;
            $imageSecondaire3->idArticle = $article->id;
            $saved = $imageSecondaire3->save();
        }

        if($request->hasFile('filename')){

            $fichier = $request->file('filename');

            for($i = 0; $i<count($fichier);$i++){
                
                $piece = new PieceJoint;
                $element = $fichier[$i];
                $extension = $element->extension();
                $filename = time() . '.' . $extension;
                $element->move(public_path('imageArticle/PieceJointe'), $filename);
                $piece->pathPiece = $filename;
                $piece->idArticle = $article->id;
                $saved = $piece->save();
            }
        }
        
        return view('creationArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
