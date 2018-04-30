@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Item</div>
                <div class="card-body">
                    {{ Form::open(array('url'=>'items')) }}

                    {{ Form::label('name','Item Name',array('id'=>'','class'=>'')) }}
                    {{ Form::text('name','',array('id'=>'','class'=>'')) }} <br>

                    {{ Form::label('description','Item Description',array('id'=>'','class'=>'')) }} <br>
                    {{ Form::textarea('description','',array('id'=>'','class'=>'')) }} <br>

                    {{ Form::label('price','Item Price',array('id'=>'','class'=>'')) }}
                    {{ Form::number('price','',array('id'=>'','class'=>'')) }}

                    {{ Form::label('stock','Total Stock',array('id'=>'','class'=>'')) }}
                    {{ Form::number('stock','',array('id'=>'','class'=>'')) }} <br>

                    <div float="right" align="right">
                    	{{ Form::submit('Add Item!') }}
                    </div>
  
  					{{ Form::close() }}
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection