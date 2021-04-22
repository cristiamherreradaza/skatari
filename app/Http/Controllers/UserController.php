<?php

namespace App\Http\Controllers;

use App\User;
use App\Sector;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listado()
    {
        return view('user.listado');
    }

    public function ajax_listado()
    {
        $usuarios = User::all();
        return Datatables::of($usuarios)
                ->addColumn('action', function($usuarios){
                    return '<a href="#" class="btn btn-icon btn-warning btn-sm mr-2" onclick="edita('.$usuarios->id.')">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-danger btn-sm mr-2" onclick="elimina('.$usuarios->id.', \''.$usuarios->name.'\')">
                                    <i class="flaticon2-delete"></i>
                                </a>';
                })->make(true);
    }

    public function nuevo()
    {
        return view('user.nuevo');        			
    }

    public function guarda(Request $request)
    {
        // dd($request->all());
        $persona                   = new User();

        $persona->name             = $request->name;
        $persona->email            = $request->email;
        $persona->password         = Hash::make($request->password);
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->direccion        = $request->direccion;
        $persona->celulares        = $request->celulares;
        $persona->perfil           = $request->perfil;
        $persona->estado_civil     = $request->estado_civil;
        $persona->ciudad           = $request->ciudad;
        $persona->genero           = $request->genero;
        $persona->carnet           = $request->carnet;
        $persona->ap_paterno       = $request->ap_paterno;
        $persona->ap_materno       = $request->ap_materno;

        $persona->save();

        return redirect('User/listado');

    }

    public function edita(Request $request, $id)
    {
        $datosUsuario = User::findOrfail($id);
        return view('user.nuevo')->with(compact('datosUsuario'));                   
    }
}