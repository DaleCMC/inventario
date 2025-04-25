
<div class="form-group mb-3">
    <label class="form-label" for="producto_id">Producto</label>
    <div>
        <select name="producto_id" id="producto_id" class="form-control{{ $errors->has('producto_id') ? ' is-invalid' : '' }}">
            <option value="">Seleccione un producto</option>
            @foreach ($productos as $producto)
                <option value="{{ $producto->id }}" {{ $movimiento->producto_id == $producto->id ? 'selected' : '' }}>
                    {{ $producto->nombre }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione el <b>producto</b> para este movimiento.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="tipo">Tipo</label>
    <div>
        <select name="tipo" id="tipo" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}">
            <option value="">Seleccione el tipo de movimiento</option>
            <option value="entrada" {{ $movimiento->tipo == 'entrada' ? 'selected' : '' }}>Entrada</option>
            <option value="salida" {{ $movimiento->tipo == 'salida' ? 'selected' : '' }}>Salida</option>
            <option value="ajuste" {{ $movimiento->tipo == 'ajuste' ? 'selected' : '' }}>Ajuste</option>
        </select>
        {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione el <b>tipo</b> de movimiento.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad') }}</label>
    <div>
        {{ Form::text('cantidad', $movimiento->cantidad, ['class' => 'form-control' .
        ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">movimiento <b>cantidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('motivo') }}</label>
    <div>
        {{ Form::text('motivo', $movimiento->motivo, ['class' => 'form-control' .
        ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
        {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">movimiento <b>motivo</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('movimientos.index') }}" class="btn btn-dark">Cancelar</a>
                <button type="submit" class="btn btn-warning ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
