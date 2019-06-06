<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prueba1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {
        $elem3 = [
          ['elem1' => '3Elemento 1ro'],
          ['elem1' => '3Elemento 2'],
          ['elem1' => '3Elemento 3'],
        //  ['elem1' => 'Elemento 4'],
        //  ['elem1' => 'Elemento 5'],
        //  ['elem1' => 'Elemento 6'],
        ];

        return view('test0', compact('elem3'));
    }

    public function index()
    {
        $elem2 = [
          ['elem1' => '2Elemento 1ro'],
          ['elem1' => '2Elemento 2'],
          ['elem1' => '2Elemento 3'],
        //  ['elem1' => 'Elemento 4'],
        //  ['elem1' => 'Elemento 5'],
        //  ['elem1' => 'Elemento 6'],
        ];

        return view('test0', compact('elem2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     Request $request
     */
    public function store()
    {
        //return "Recibido formulario";
        //$request->name;
        //return $request->email;
        //return request('name');
        request()->validate([
            'name'=>'required'
        ]);

        Mail::to('ingcamiloc@gmail.com')->send();

        return 'Datos validados';
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
