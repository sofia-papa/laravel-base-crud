<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fumetti;

class FumettiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fumetties = Fumetti::all();
        $title = "I fumetti";

       /*  $search = $request->query('search');

        if($search != null){
            $fumetties = Fumetti::where('title', 'LIKE', '$search%');
        }
         */

        return view('fumetties.index', compact('fumetties', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        /* dd($data); */

        //Metodo manuale//

        $fumetti = new Fumetti();
        /* $fumetti->title = $data['title'];
        $fumetti->author = $data['author'];
        $fumetti->description = $data['description'];
        $fumetti->url = $data['url'];  */

        //Metodo create//
        /* $fumetti = Fumetti::create($data);
        anche qui servono i fillables */

        //Metodo fill//

        $fumetti->fill($data);

        $fumetti->save();

        return redirect()->route('fumetties.show', $fumetti);
        /* dd($fumetti); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fumetti $fumetti)
    {
        return view('fumetties.show', compact('fumetti'));
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
