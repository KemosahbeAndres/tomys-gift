@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h3 class="text-center">Productos Destacados</h3>
        @if(empty($featuredproducts))
            <div class="alert alert-warning mt-4 shadow-sm" role="alert">
                No se encontraron productos para mostrar!
            </div>
        @else
            <div class="row row-cols-3 gx-2">
                @foreach($featuredproducts as $product)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-header">{{$product->name}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="container my-4">
        <h3 class="text-center">Categorias</h3>
        @if(empty($categories))
            <div class="alert alert-warning mt-4 shadow-sm" role="alert">
                No se encontraron categorias para mostrar!
            </div>
        @else
            {{--<div class="row row-cols-3 gx-2">--}}
            <div class="btn-group gap-2" role="group">
                @foreach($categories as $category)
                    <button type="button" class="btn btn-primary shadow-sm">{{$category->name}}</button>
                @endforeach
            </div>
            {{--</div>--}}
        @endif
    </div>
@endsection
