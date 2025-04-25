<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Movimientos</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Reporte de Movimientos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movimientos as $mov)
            <tr>
                <td>{{ $mov->id }}</td>
                <td>{{ $mov->producto->nombre ?? 'N/A' }}</td>
                <td>{{ $mov->tipo }}</td>
                <td>{{ $mov->cantidad }}</td>
                <td>{{ $mov->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
