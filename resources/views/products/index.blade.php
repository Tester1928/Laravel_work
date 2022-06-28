@extends('layout.app')
@section('title','Каталог')
@section('content')
    @include('products.partials.header')
    <div class="container">
        <a href="{{route("product.create")}}" class="btn btn-primary mt-8 mb-4">create product</a>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
            @foreach($products as $product)
                <div>{{$product->id}}. {{$product->name}}</div>
            @endforeach
        </div>
    </div>
@endsection
