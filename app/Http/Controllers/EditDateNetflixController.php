<?php

namespace App\Http\Controllers;

use App\Admin;
use App\EditDateNetflix;
use App\MasVistos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditDateNetflixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::where('is_active',1)->get();
        $view = MasVistos::where('is_active',1)->get();
        $netflix = EditDateNetflix::where('is_active',1)->get();
        // $netflix =DB::table('admins')->orderBy('created_at', 'desc')->get();
        // $netflix = EditDateNetflix::first();
        return view('examen.examen', compact('admin','view', 'netflix'));
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
        $netflix = new EditDateNetflix;
        if($request->file('avatar')){
    $namefile = Carbon::now()->format("dmYHis").".".$request->file('avatar')->getClientOriginalExtension();
    $request->file('avatar')->storeAs('public/netflix', $namefile);
    $netflix->avatar = $namefile;
    }
    $netflix->nick_name = $request->nick_name;
    $netflix->name = $request->name;
    $netflix->last_name = $request->last_name;
    $netflix->phone = $request->phone;
    $netflix->dni = $request->dni;
    $netflix->save();
    return redirect()->route('netflix.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EditDateNetflix  $editDateNetflix
     * @return \Illuminate\Http\Response
     */
    public function show(EditDateNetflix $editDateNetflix)
    {
        $admin = new Admin;
        return redirect()->route('admin.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EditDateNetflix  $editDateNetflix
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $netflix = EditDateNetflix::whereId($id)->first();

      return view('examen.edit' , compact('netflix'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EditDateNetflix  $editDateNetflix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $netflix = EditDateNetflix::find($id);

        if($request->file('avatar')){
          $namefile = Carbon::now()->format("dmYHis").".".$request->file('avatar')->getClientOriginalExtension();
          $request->file('avatar')->storeAs('public/netflix', $namefile);
          $netflix->avatar = $namefile;
        }

        $netflix->nick_name = $request->nick_name;
        $netflix->name = $request->name;
        $netflix->last_name = $request->last_name;
        $netflix->phone = $request->phone;
        $netflix->dni = $request->dni;
        $netflix->save();
        return redirect()->route('netflix.index')->with('updated' , 'Registro Actualizado');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EditDateNetflix  $editDateNetflix
     * @return \Illuminate\Http\Response
     */
    public function destroy(EditDateNetflix $editDateNetflix)
    {
        //
    }
}
