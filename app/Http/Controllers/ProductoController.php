<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $productos = Producto::query();
    
        if ($search) {
            $productos->where('nombre', 'like', '%' . $search . '%')
                      ->orWhere('descripcion', 'like', '%' . $search . '%')
                      ->orWhere('codigo', 'like', '%' . $search . '%');
        }
    
        $productos = Producto::paginate(10);
        

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        
        

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
    public function descargarPDF()
{
    // Obtener todos los productos
    $productos = Producto::all();

    // Generar el PDF
    $pdf = PDF::loadView('productos.reporte_pdf', compact('productos'));

    // Descargar el PDF
    return $pdf->download('reporte_productos.pdf');
}

public function descargarPDFConFecha(Request $request)
{
    // Validar las fechas de inicio y fin
    $request->validate([
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    // Obtener las fechas desde el request
    $fechaInicio = $request->input('fecha_inicio');
    $fechaFin = $request->input('fecha_fin');

    // Filtrar los productos en el rango de fechas
    $productos = Producto::whereBetween('created_at', [$fechaInicio, $fechaFin])
                         ->get();

    // Generar el PDF
    $pdf = PDF::loadView('productos.reporte_pdf', compact('productos', 'fechaInicio', 'fechaFin'));

    // Descargar el PDF
    return $pdf->download('reporte_productos_' . $fechaInicio . '_a_' . $fechaFin . '.pdf');
}

}
