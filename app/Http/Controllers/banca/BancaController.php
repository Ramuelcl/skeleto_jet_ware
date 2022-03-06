<?php

namespace App\Http\Controllers\banca;

use App\Http\Controllers\Controller;
use App\Models\BancaLaPost;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // $this->middleware('log')->only('index');
        // restringir el middleware a solo ciertos métodos en la clase de controlador
        // $this->middleware('subscribed')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importar()
    {
        \dd('paso');
        return \view('banca.importar');
    }

    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function index()
    {
        return('listo');
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
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BancaLaPost  $bancaLaPost
     * @return \Illuminate\Http\Response
     */
    public function show(BancaLaPost $bancaLaPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BancaLaPost  $bancaLaPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BancaLaPost $bancaLaPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BancaLaPost  $bancaLaPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BancaLaPost $bancaLaPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BancaLaPost  $bancaLaPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BancaLaPost $bancaLaPost)
    {
        //
    }
}
