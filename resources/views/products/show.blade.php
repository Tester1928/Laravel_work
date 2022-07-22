@extends('layout.app')
@section('title','Каталог')
@section('content')
    @include('products.partials.header')
    <div class="container">
        <a href="{{route("product.create")}}" class="btn btn-primary mt-8 mb-4">create product</a>
        <a href="{{route("product.edit",$product->code)}}" class="btn btn-primary mt-8 mb-4">edit product</a>
        <form action="{{route("product.destroy",$product->code)}}" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value="{{$product->id}}">
            <input type="submit" class="btn btn-primary mt-8 mb-4" value="Delete">
        </form>
        <div class="grid grid-cols-1 gap-10 mt-10 mb-20">
                <div>id: {{$product->id}}</div>
                <div>name: {{$product->name}}</div>
                <div>code: {{$product->code}}</div>
                <div>detail_text: {{$product->detail_text}}</div>
                <div>price: {{$product->price}}</div>
        </div>
    </div>
@endsection
