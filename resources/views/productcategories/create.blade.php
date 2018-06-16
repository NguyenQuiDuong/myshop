@extends('layouts.app')

@section('title', '| Create New Product Category')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Post</h1>
            <hr>

            {{-- Using the Laravel HTML Form Collective to create our form --}}
            {{ Form::open(array('route' => 'categories.store')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::label('parent_id', 'Parent') }}
                {{ Form::select('parent_id',$product_categories, array('class' => 'form-control')) }}
                <br>

                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::submit('Create category', array('class' => 'btn btn-success btn-lg btn-block')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
