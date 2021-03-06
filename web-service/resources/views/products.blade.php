@extends('layout')
@section('site_title', 'محصولات')

@section('site_css_files')
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/products.css" />
@endsection

@section('site_content')
    <div class="row gap-15 products_cnt"></div>
@endsection

@section('site_js_files')
    <script src="/js/products.js"></script>
@endsection
