@extends('layouts.app')

@section('title', '| Create New Product Category')

@section('content')
    <h3 class="page-title">Danh mục sản phẩm</h3>
    <div class="row mb-2">Trang {{ $product_categories->currentPage() }}
        trong {{ $product_categories->lastPage() }}</div>
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
                @foreach ($product_categories as $category)
                    <tr>
                        <td>
                            {{ $category->id }}
                        </td>
                        <td>
                            <a href="{{action("ProductCategoryController@edit",$category->id)}}">{{ $category->name }}</a>
                        </td>
                        <td>
                            {{  str_limit($category->description, 100) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

            </div>
        </div>
    </div>
@endsection
