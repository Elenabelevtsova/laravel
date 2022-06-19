@extends('layout')
@extends('layouts.app')
@section('title')
Portfolio
@endsection

@section('main_content')
<div class="jumbotron bg-warning">
    <div class="container">
        <h1 class="display-3">Portfolio</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
        <p><a class="btn btn-danger btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
</div>
<h1>Load Portfolio Item</h1>
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="post" action="/portfolio/check">
    @csrf
    <input type="text" name="cover_item" id="cover_item" placeholder="Input Cover URL" class="form-control"><br>
    <input type="text" name="link_item" id="link_item" placeholder="Input Portfolio Item URL" class="form-control"><br>
    <textarea name="description_item" id="description_item" class="form-control"
        placeholder="Input Description"></textarea><br>
    <button type="submit" class="btn btn-danger">Load</button>
</form>
<br>

@endsection
