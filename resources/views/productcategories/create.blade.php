@extends('layouts.app')

@section('title', '| Create New Product Category')

@section('content')
    <h3 class="page-title">Create Category</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::open(array('route' => 'categories.store', 'class'=>'cmxform')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                        @if($errors->get('name'))
                            <label id="cname-error" class="error text-danger" for="cname">{{$errors->first('name')}}</label>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('parent_id', 'Parent Category') }}
                        {{ Form::select('parent_id',$product_categories,null, array('class' => 'form-control')) }}
                        @if($errors->get('parent_id'))
                            <label id="cparent_id-error" class="error text-danger" for="cparent_id">{{$errors->first('parent_id')}}</label>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                        @if($errors->get('description'))
                            <label id="cdescription-error" class="error text-danger" for="cdescription">{{$errors->first('description')}}</label>
                        @endif
                    </div>
                    {{ Form::submit('Create category', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
