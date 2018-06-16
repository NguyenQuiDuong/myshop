
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Danh mục sản phẩm</h3></div>
                    <div class="panel-heading">Trang {{ $product_categories->currentPage() }} trong {{ $product_categories->lastPage() }}</div>
                    @foreach ($product_categories as $category)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <span><b>{{ $category->name }}</b><br>
                                    <p class="teaser">
                                        {{  str_limit($category->description, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </span>
                            </li>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {!! $product_categories->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
