<?php

namespace App\Http\Controllers;

use App\UnidadMedida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnidadMedidaController extends Controller
{

    public function index()
    {
        $medidas = UnidadMedida::where('visible','=',true)->orderBy('id', 'asc')->paginate(5);
        return view('medidas.index', ['medidas' => $medidas]);
    }


    public function create()
    {
        return view('medidas.create');
    }


    public function store(Request $request)
    {
        $medida = new UnidadMedida();
        $medida -> nombre = $request['nombre'];
        $medida -> save();

        return redirect('medidas');
    }


    public function show(UnidadMedida $unidadMedida)
    {
        //
    }


    public function edit($id)
    {
        return view('medidas.edit', ['medida' => UnidadMedida::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $medida = UnidadMedida::findOrFail($id);
        $medida -> nombre = $request['nombre'];
        $medida -> save();

        return redirect('medidas');
    }


    public function destroy($id)
    {
        $medida = UnidadMedida::findOrFail($id);
        $medida -> visible = false;
        $medida -> save();

        return redirect('medidas');
    }
}
