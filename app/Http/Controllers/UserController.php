<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')
        ->select(['users.name','user_domicilios.domicilio','user_domicilios.numero_exterior','user_domicilios.colonia'
        ,'user_domicilios.cp','user_domicilios.ciudad','users.fecha_nacimiento'])
        ->join('user_domicilios', 'users.id', '=', 'user_domicilios.user_id')
        ->get();

        for($i = 0; $i < count($users); ++$i){
            $now = new DateTime("now");
            $fecha_nac = new DateTime($users[$i]->fecha_nacimiento);
            $users[$i]->edad = $fecha_nac->diff($now)->y;
        }

        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
