<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\MasVistos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasVistosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = MasVistos::get();
        $view =DB::table('mas_vistos')->orderBy('created_at', 'desc')->get();
        return view('view.index', compact('view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('view.created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {

    $view = new MasVistos;
    $view->title = $request ->title;
    $view->descripcion = $request->descripcion;

    if($request->file('imagen')){
    $namefile = Carbon::now()->format("dmYHis").".".$request->file('imagen')->getClientOriginalExtension();
    $request->file('imagen')->storeAs('public/view', $namefile);
    $view->imagen = $namefile;
    }
    $view->save();
    return redirect()->route('view.index')->with('created', 'Se creo exitosamente su Pleicula');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\view  $view
     * @return \Illuminate\Http\Response
     */
    public function show(Request $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $view = MasVistos::whereId($id)->first();

      return view('view.edit' , compact('view'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $view = MasVistos::find($id);

      $view->title   = $request->title    ;
      $view->descripcion = $request->descripcion;

      if($request->file('imagen')){
        $namefile = Carbon::now()->format("dmYHis").".".$request->file('imagen')->getClientOriginalExtension();
        $request->file('imagen')->storeAs('public/view', $namefile);
        $view->imagen = $namefile;
      }
      $view->save();
      return redirect()->route('view.index')->with('updated' , 'Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasVistos::whereId($id)->delete();
        return redirect()->route('view.index')->with('destroy', 'Eliminado');
    }

    public function updateIsActive (Request $request, $id)
    {
        $newState = $request->state == '1' ? 0 : 1;
        $view = MasVistos::find($id);
        $view->is_active = $newState;
        $view->save();

        return redirect()->route('view.index');
    }
}
