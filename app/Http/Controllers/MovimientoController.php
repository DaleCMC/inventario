<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Movimiento;
use Illuminate\Http\Request;
use App\Models\Producto;

/**
 * Class MovimientoController
 * @package App\Http\Controllers
 */
class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movimiento::paginate(10);
        $productos =Producto::all();
        return view('movimiento.index', compact('movimientos', 'productos'))
            ->with('i', (request()->input('page', 1) - 1) * $movimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimiento = new Movimiento();
        $productos =Producto::all();
        return view('movimiento.create', compact('movimiento','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Movimiento::$rules);

        $movimiento = Movimiento::create($request->all());
        $producto = Producto::find($request->producto_id);

        if ($request->tipo == 'entrada') {
            $producto->stock_actual += $request->cantidad;
        } elseif ($request->tipo == 'salida') {
            $producto->stock_actual -= $request->cantidad;
        } else {
            $producto->stock_actual = $request->cantidad;
        }
    
        $producto->save();
        return redirect()->route('movimientos.index')
            ->with('success', 'Movimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movimiento = Movimiento::find($id);
        $productos =Producto::all();

        return view('movimiento.show', compact('movimiento','productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimiento = Movimiento::find($id);
        $productos =Producto::all();

        return view('movimiento.edit', compact('movimiento', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Movimiento $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        request()->validate(Movimiento::$rules);

        $movimiento->update($request->all());
        

        return redirect()->route('movimientos.index')
            ->with('success', 'Movimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movimiento = Movimiento::find($id)->delete();

        return redirect()->route('movimientos.index')
            ->with('success', 'Movimiento deleted successfully');
    }
    public function descargarPDF()
{
    $movimientos = Movimiento::with('producto')->get();
    $pdf = Pdf::loadView('movimiento.reporte_pdf', compact('movimientos'));

    return $pdf->download('reporte_movimientos.pdf');
}
}
