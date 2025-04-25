
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>descripcion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('codigo') }}</label>
    <div>
        {{ Form::text('codigo', $producto->codigo, ['class' => 'form-control' .
        ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
        {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>codigo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio') }}</label>
    <div>
        {{ Form::text('precio', $producto->precio, ['class' => 'form-control' .
        ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>precio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad_inicial') }}</label>
    <div>
        {{ Form::text('cantidad_inicial', $producto->cantidad_inicial, ['class' => 'form-control' .
        ($errors->has('cantidad_inicial') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Inicial']) }}
        {!! $errors->first('cantidad_inicial', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>cantidad_inicial</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock_actual') }}</label>
    <div>
        {{ Form::text('stock_actual', $producto->stock_actual, ['class' => 'form-control' .
        ($errors->has('stock_actual') ? ' is-invalid' : ''), 'placeholder' => 'Stock Actual']) }}
        {!! $errors->first('stock_actual', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>stock_actual</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock_minimo') }}</label>
    <div>
        {{ Form::text('stock_minimo', $producto->stock_minimo, ['class' => 'form-control' .
        ($errors->has('stock_minimo') ? ' is-invalid' : ''), 'placeholder' => 'Stock Minimo']) }}
        {!! $errors->first('stock_minimo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>stock_minimo</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('productos.index') }}" class="btn btn-dark">Cancelar</a>
                <button type="submit" class="btn btn-warning ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
