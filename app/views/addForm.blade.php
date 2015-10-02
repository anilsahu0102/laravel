@extends('master')
{{-- Web site Title --}}

@section('title')
	Add Form
@stop

{{-- Content --}}
@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{{ Form::open(array('route' => 'form.add','class' => 'form'))}}

<div class="form-group">
	<div class="row">
	    <div class="col-md-4">
	    	{{ Form::label('Product Name') }}
	    	{{ Form::text('txt-prd-name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Product name')) }}	
	    </div>
	</div>

	<div class="row">
		<div class="col-md-4">
		    {{ Form::label('Quantity in Stock') }}
		    {{ Form::text('txt-qunt', null, array('required', 'class'=>'form-control', 'placeholder'=>'Quantity in Stock')) }}
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
		    {{ Form::label('Price per item') }}
		    {{ Form::text('txt-price', null, array('required', 'class'=>'form-control', 'placeholder'=>'Price per item')) }}
		</div>
	</div>
	<br/>
	<div class="form-group">
	    {{ Form::submit('Add', array('class'=>'btn btn-primary')) }}
	</div>
</div>
{{ Form::close() }}
@stop