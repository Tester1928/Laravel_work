@extends('layout.app')
@section('title','Каталог')
@section('content')
    @include('products.partials.header')
    <div class="container">
        <form action="{{route("product.update",$product->code)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" class="form-control" id="code" value="{{$product->code}}">
            </div>
            <div class="form-group">
                <label for="preview_text">Preview text</label>
                <textarea class="form-control" name="preview_text" id="preview_text" rows="2">{{$product->preview_text}}</textarea>
            </div>
            <div class="form-group">
                <label for="detail_text">Detail text</label>
                <textarea class="form-control" name="detail_text" id="detail_text" rows="4">{{$product->detail_text}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
