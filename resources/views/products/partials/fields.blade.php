<div class="form-group">
{!! Form::label('name', 'Product Name') !!}
<div class="form-group">
{!! Form::label('quantity', 'Quantity') !!}
{!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => 'Escribe la cantidad del producto aqui']) !!}
</div>
<div class="form-group">
{!! Form::label('unit_price', 'Unit Price') !!}
{!! Form::text('unit_price', null, ['class' => 'form-control', 'placeholder' => 'Escribe el precio del producto aqui']) !!}
</div>
<div class="form-group">
{!! Form::label('state', 'State') !!}
{!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Escribe el estado del producto aqui']) !!}
</div>
<div class="form-group">
{!! Form::label('details', 'Details') !!}
{!! Form::text('details', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del producto aqui']) !!}
</div>
<div class="form-group">
{!! Form::label('product_types_id', 'Product Type') !!}
{!! Form::select('product_types_id', $types, null, ['placeholder' => 'Seleccione el tipo del producto aqui']) !!}
</div>