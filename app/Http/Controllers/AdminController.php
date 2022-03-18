<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::get();
        $admin =DB::table('admins')->orderBy('created_at', 'desc')->get();
        return view('admin.admin', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {

    $admin = new Admin;
    $admin->title    = $request ->title    ;
    $admin->descripcion = $request->descripcion;

    if($request->file('imagen')){
    $namefile = Carbon::now()->format("dmYHis").".".$request->file('imagen')->getClientOriginalExtension();
    $request->file('imagen')->storeAs('public/admin', $namefile);
    $admin->imagen = $namefile;
    }
    $admin->save();
    return redirect()->route('admin.index')->with('created', 'Se creo exitosamente su Pleicula');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
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
        $admin = Admin::whereId($id)->first();

      return view('admin.edit' , compact('admin'));
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
        $admin = Admin::find($id);

      $admin->title   = $request->title;
      $admin->descripcion = $request->descripcion;

      if($request->file('imagen')){
        $namefile = Carbon::now()->format("dmYHis").".".$request->file('imagen')->getClientOriginalExtension();
        $request->file('imagen')->storeAs('public/admin', $namefile);
        $admin->imagen = $namefile;
      }
      $admin->save();
      return redirect()->route('admin.index')->with('updated' , 'Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::whereId($id)->delete();
        return redirect()->route('admin.index')->with('destroy', 'Eliminado');
    }

    public function updateIsActive (Request $request, $id)
    {
        $newState = $request->state == '1' ? 0 : 1;
        $admin = Admin::find($id);
        $admin->is_active = $newState;
        $admin->save();

        return redirect()->route('admin.index');
    }
}
