{{-- トップページ用テンプレート --}}
@extends('layout.common')

@section('title', '株式会社グッドスタッフ')
@section('keywords', '株式会社グッドスタッフ,（サービス名）,生活のサポート')
@section('description', '（サービス名）のトップページです。')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection

@include('layout.header')

@section('content')
    <main>
        <div class="container clearfix">
                <div class="service_wrap">
                    <div class="row">
                        <div class="panel-headind">
                            <h3 class="panel-title">生活SOSサービス</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="sos_service col-xs-2">
                            <img src="/images/toilet.png" alt="">
                            <p>トイレの詰まり</p>
                        </div>

                        <div class="sos_service col-xs-2">
                            <img src="/images/pc.png" alt="">
                            <p>PCの修理</p>
                        </div>
        
                        <div class="sos_service col-xs-2">
                            <img src="/images/key.png" alt="">
                            <p>鍵のトラブル</p>
                        </div>

                        <div class="sos_service col-xs-2">
                            <img src="/images/mouse.png" alt="">
                            <p>害虫害獣駆除</p>
                        </div>

                        <div class="sos_service col-xs-2">
                            <img src="/images/ac.png" alt="">
                            <p>エアコン修理</p>
                        </div>
                    </div>

                    <div class="row">
                        <img src="/images/load.png" alt="">
                        <p>倉庫管理サービス</p>
                        </div>
                    </div>


                    <p>月額980円(税込)</p>
                    <a href="/terms">お申し込みはこちら</a>
                </div>

            </div>
        </div>






    </main>
@endsection

@include('layout.footer')