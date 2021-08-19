{{-- サービス紹介用テンプレート --}}
@extends('layout.common')

@section('title', '株式会社グッドスタッフ')
@section('keywords', '株式会社グッドスタッフ,（サービス名）,生活のサポート')
@section('description', '（サービス名）のトップページです。')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection

@include('layout.header')

@section('content')
    <p>サービス紹介</p>
@endsection

@include('layout.footer')