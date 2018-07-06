@extends('layouts.app')

@section('title', '| Import product')

@push('style-head')
    <link href="{{ asset('plugins/bootstrap/datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endpush
@section('content')

    <h3 class="page-title">Create Product</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::open(array('route' => 'product-import.store', 'class'=>'cmxform')) }}

                    {{ Form::hidden('product_id',null,['id'=>'product_id']) }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="control-group>">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control','id'=>'name_product', 'disabled')) }}
                            </div>

                            <div class="control-group>">
                                {{ Form::label('barcode', 'Barcode') }}
                                {{ Form::text('barcode', null, array('class' => 'form-control', 'id'=>'barcode_product')) }}
                            </div>

                            <div class="control-group>">
                                {{ Form::label('category_id', 'Category') }}
                                {{ Form::text('category_id',null, array('class' => 'form-control')) }}
                            </div>

                            <div class="control-group>">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <div class="control-group">
                                {{ Form::label('import_price', 'Import price') }}
                                {{ Form::number('import_price', null, array('class' => 'form-control')) }}
                                @if($errors->get('import_price'))
                                    <label id="import_price-error" class="error text-danger"
                                           for="import_price">{{$errors->first('import_price')}}</label>
                                @endif
                            </div>

                            <div class="control-group>">
                                {{ Form::label('retail_price', 'Retail price') }}
                                {{ Form::number('retail_price', null, array('class' => 'form-control')) }}
                                @if($errors->get('retail_price'))
                                    <label id="retail_price-error" class="error text-danger"
                                           for="retail_price">{{$errors->first('retail_price')}}</label>
                                @endif
                            </div>

                            <div class="control-group>">
                                {{ Form::label('trade_price', 'Trade price') }}
                                {{ Form::number('trade_price', null, array('class' => 'form-control')) }}
                                @if($errors->get('trade_price'))
                                    <label id="trade_price-error" class="error text-danger"
                                           for="trade_price">{{$errors->first('trade_price')}}</label>
                                @endif
                            </div>

                            <div class="control-group>">
                                {{ Form::label('quantity', 'Quantity') }}
                                {{ Form::number('quantity', null, array('class' => 'form-control')) }}
                                @if($errors->get('quantity'))
                                    <label id="quantity-error" class="error text-danger"
                                           for="quantity">{{$errors->first('quantity')}}</label>
                                @endif
                            </div>

                            <div class="control-group>">
                                {{ Form::label('unit', 'Unit') }}
                                {{ Form::text('unit', null, array('class' => 'form-control')) }}
                                @if($errors->get('unit'))
                                    <label id="unit-error" class="error text-danger"
                                           for="unit">{{$errors->first('unit')}}</label>
                                @endif
                            </div>

                            <div class="control-group>">
                                {{ Form::label('date_import', 'Date import') }}
                                {{ Form::text('date_import',\Carbon\Carbon::today()->format('d/m/Y'),array('class' => 'form-control date datepicker'))}}
                                @if($errors->get('date_import'))
                                    <label id="date_import-error" class="error text-danger"
                                           for="date_import">{{$errors->first('date_import')}}</label>
                                @endif
                            </div>

                        </div>

                    </div>
                    {{ Form::submit('Create Product', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scrip-footer')
    <script src="{{ asset('plugins/bootstrap/datepicker/bootstrap-datepicker.min.js') }}" defer></script>
    <script src="{{ asset('js/product-import/create.js') }}" defer></script>
@endpush
