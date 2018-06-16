
@extends('layouts.app')

@section('title', '| Edit Post')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Post</h1>
            <hr>
            {{ Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) }}
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

                {{ Form::submit('Save', array('class' => 'btn btn-success btn-lg btn-block')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
