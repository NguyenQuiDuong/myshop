
@extends('layouts.app')
@section('content')
    <h3 class="page-title">Products</h3>
    <div class="row mb-2">Trang {{ $products->currentPage() }}
        trong {{ $products->lastPage() }}</div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive ps ps--theme_default">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Description
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $product->id }}
                            </td>
                            <td>
                                <a href="{{action("ProductController@edit",$product->id)}}">{{ $product->name }}</a>
                                {{$product->barrcode}}
                            </td>
                            <td>
                                {{  str_limit($product->description, 100) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
