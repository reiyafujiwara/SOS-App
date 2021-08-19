{{-- 利用規約用テンプレート --}}

@extends('layout.common')

@section('title', '株式会社グッドスタッフ')
@section('keywords', '株式会社グッドスタッフ,（サービス名）,生活のサポート')
@section('description', '（サービス名）のトップページです。')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection

@include('layout.header')

@section('content')
    <p>利用規約ビュー</p>
    <a href="/entry">上記の同意してお申し込み</a>
@endsection

@include('layout.footer')