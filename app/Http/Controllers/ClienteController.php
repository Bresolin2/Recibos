<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Permissao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('index', compact('clientes'));
    }

    public function show($id)
    {
        //$clientes = Cliente::where('id', $id)->get();
        if (!$clientes = Cliente::find($id))
            return redirect()->route('index');

        return view('show', compact('clientes'));
    }

    public function licenca(Request $request)
    {
        if (Permissao::updateOrInsert(
            ['id_client' => $request->input('id_client')],
            [
                'ativo' => $request->input('ativo'),
                'function' => 'premium_maxi'
            ]
        )) {
            return true;
        } else {
            return false;
        }
    }

    public function search(Request $request)
    {
        $paginacao = 10;
        $selectFiltro = $request->input("select_filtro");
        $filtro = $request->input("filtro");

        switch ($selectFiltro) {
            case 1:
                $clientes = Cliente::where('id', $filtro)->paginate($paginacao);
                break;
            case 2:
                $clientes = Cliente::where('nome', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
            case 3:
                $clientes = Cliente::where('documento', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
            case 4:
                $clientes = Cliente::where('email', 'LIKE', "%{$filtro}%")->orWhere('email_fatura', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
            case 5:
                $clientes = DB::table('maxirecibo_clientes')
                    ->leftJoin('maxirecibo_permissions', 'maxirecibo_permissions.id_client', '=', 'maxirecibo_clientes.id')
                    ->where('maxirecibo_permissions.ativo', $filtro)
                    ->paginate($paginacao);
                break;
        }
        return view('index', compact('clientes'));
    }
}