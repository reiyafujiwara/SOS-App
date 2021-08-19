@extends('layout.common')

@section('title', 'SOSサービス')
@section('keywords', '株式会社グッドスタッフ,（サービス名）,生活のサポート')
@section('description', '（サービス名）の申込情報入力ページです。')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection

@include('layout.header')

@section('content')
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 ">
				<h2>お申込フォーム</h2>
			</div>

            {{-- 進行状況の表示 --}}
            <div class="col-xs-10 col-xs-offset-1  text-center entry_status">
                <p><span class="label label-danger">入力画面</span> -> 確認画面 -> 完了画面</p>
			</div>

            {{-- バリデーションエラー時の処理 --}}
            @if ($errors->any())
                <div class="errors col-xs-10 col-xs-offset-1 ">
                    <h3>入力エラー</h3>
                    <p>
                        下記項目にて、入力内容もしくは入力形式が正しくありません。<br>
                        入力内容をご確認頂き、再度ご入力をお願い致します。
                    </p>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{-- 申し込み用フォーム部分 --}}
    <form action="{{route('form.confirm')}}" id="form" method="post" role="form">
        @csrf

        {{-- 名前入力 --}}
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label class="mark-require" for="name">氏名</label>
            </div>
            <div class="col-xs-2 col-sm-1 padding-none form-lavel-position">姓</div>				
            <div class="col-xs-10 col-sm-4">
                <input type="text" name="name1" class="form-control" placeholder="例)山田" required="required" maxlength="30" id="name1" value="{{ old('name1')}}">
            </div>
            <div class="col-xs-2 col-sm-1 padding-none form-lavel-position">名</div>
            <div class="col-xs-10 col-sm-4">
                <input type="text" name="name2" class="form-control" placeholder="例)太郎" required="required" maxlength="30" id="name2" value="{{ old('name2')}}">
            </div>
        </div>

        {{-- フリガナ入力 --}}
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label class="mark-require" for="kana">フリガナ[カタカナ全角]</label>
            </div>
            <div class="col-xs-2 col-sm-1 padding-none form-lavel-position">セイ</div>				
            <div class="col-xs-10 col-sm-4">
                <input type="text" name="kana1" class="form-control" placeholder="例)ヤマダ" required="required" maxlength="30" id="kana1" value="{{ old('kana1')}}">
            </div>
            <div class="col-xs-2 col-sm-1 padding-none form-lavel-position">メイ</div>
            <div class="col-xs-10 col-sm-4">
                <input type="text" name="kana2" class="form-control" placeholder="例)タロウ" required="required" maxlength="30" id="kana2" value="{{ old('kana2')}}">

            </div>
        </div>

        {{-- 性別選択 --}}
        <div class="form-group col-xs-12 col-sm-6">
            <div class="input select required "><label class="mark-require" for="sex">性別</label>
                <select name="sex" between="<div class=&quot;form-group col-xs-10&quot;>" class="form-control" required="required" id="sex">
                    <option value="" selected="selected">未選択</option>
                    <option value="男性" @if(old('sex')=='男性') selected @endif>男性</option>
                    <option value="女性" @if(old('sex')=='女性') selected @endif>女性</option>
                </select>
            </div>
        </div>

        {{-- 連絡先 --}}
        <div class="form-group col-xs-12">
            <div class="input tel required">
                <label class="mark-require" for="tel">連絡先[半角ハイフンなし]</label>
                <input type="tel" name="tel" class="form-control" placeholder="0312345678" required="required" maxlength="15" pattern="^[0-9]+$" id="tel" value="{{ old('tel')}}">

            </div>
        </div>

        {{-- 住所入力 --}}
        <div class="form-group col-xs-12 col-sm-6">
            <div class="input text required">
                <label class="mark-require" for="zipcode">郵便番号</label>
            </div>
            <div class="col-xs-10 col-sm-3">
                <input type="text" name="zipcode1" class="form-control" placeholder="123" id="zipcode1" pattern="^[0-9]+$" maxlength="3" value="{{ old('zipcode1')}}">
            </div>
            <div class="col-xs-1 form-lavel-position padding-none">-</div>
            <div class="col-xs-10 col-sm-3">
                <input type="text" name="zipcode2" class="form-control" placeholder="4567" id="zipcode2"  pattern="^[0-9]+$" maxlength="4"  onKeyUp="AjaxZip3.zip2addr('zipcode1','zipcode2','address1','address1');" value="{{ old('zipcode2')}}">
            </div>
        </div>
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label class="mark-require" for="address">住所(市・区・郡及び町村名)</label>
                <input type="text" name="address1" class="form-control" placeholder="東京都新宿区〇〇" required="required" maxlength="100" id="address" value="{{ old('address1')}}">
                @if($errors->has('zipcode2'))
                    <span class="text-danger">{{ $errors->first('zipcode2') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label class="mark-require" for="address">住所（丁目・番地）[半角]</label>
                <input type="text" name="address2" class="form-control" placeholder="1−1−1" required="required" maxlength="100" id="address" value="{{ old('address2')}}">
            </div>
        </div>
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label class="" for="address">住所(建物名・部屋番号)</label>
                <input type="text" name="address3" class="form-control" placeholder="マンション名1" maxlength="100" id="address" value="{{ old('address3')}}">
            </div>
        </div>

        {{-- 生年月日入力 --}}
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label for="birthday">生年月日</label>
                <input type="date" name="birthday" class="form-control" id="birthday" value="{{ old('birthday')}}">
            </div>
        </div>

        {{-- カード情報入力 --}}
        <div class="form-group col-xs-12">
            <div class="">
                <label for="credit">利用可能なクレジットカード</label>
            </div>
            <p>
            VISA、JCB、MasterCard、AMEX、Diners<br />
            <span style="font-size:0.9em;">※デビットカードはご利用いただけません</span>
            <p>
        </div>

        <div class="form-group col-xs-12">
            <div class="input text required">
                    <label class="mark-require" for="credit_num">クレジットカード番号</label>
                        <input type="text" name="credit_num" class="form-control" required="required" minlength="14" maxlength="16" id="credit-num"  pattern="^[0-9]+$" value="{{ old('credit_num')}}">
                </div>
            </div>
        <div class="form-group col-xs-12">
            <div class="input text required">
                <label class="mark-require" for="credit_name">クレジットカード名義(半角英数字)</label>
                    <input type="text" name="credit_name" placeholder="例)TARO YAMADA"  class="form-control" required="required" maxlength="100" id="credit-name" pattern="^[0-9A-Za-z| ]+$" value="{{ old('credit_name')}}">
            </div>
        </div>
        <div class="form-group col-xs-12">
            <div class="required mark-require">
                <label for="expiration-date">クレジットカード有効期限</label>
                </div>
            <div class="col-xs-10 col-sm-2">
                    <select name="expiration_date_month" id="expiration_date_month" class="form-control">
                        <option value="" selected="selected">未選択</option>
                        <option value="01" @if(old('expiration_date_month')=='01') selected @endif>01</option>
                        <option value="02" @if(old('expiration_date_month')=='02') selected @endif>02</option>
                        <option value="03" @if(old('expiration_date_month')=='03') selected @endif>03</option>
                        <option value="04" @if(old('expiration_date_month')=='04') selected @endif>04</option>
                        <option value="05" @if(old('expiration_date_month')=='05') selected @endif>05</option>
                        <option value="06" @if(old('expiration_date_month')=='06') selected @endif>06</option>
                        <option value="07" @if(old('expiration_date_month')=='07') selected @endif>07</option>
                        <option value="08" @if(old('expiration_date_month')=='08') selected @endif>08</option>
                        <option value="09" @if(old('expiration_date_month')=='09') selected @endif>09</option>
                        <option value="10" @if(old('expiration_date_month')=='10') selected @endif>10</option>
                        <option value="11" @if(old('expiration_date_month')=='11') selected @endif>11</option>
                        <option value="12" @if(old('expiration_date_month')=='12') selected @endif>12</option>
                    </select>
                </div>
            <div class="col-xs-1 padding-none form-lavel-position">
                月
            </div>
            <div class="col-xs-10 col-sm-2">
                <select name="expiration_date_year" id="expiration_date_year" class="form-control">
                    <option value="" selected="selected">未選択</option>
                    <option value="28" @if(old('expiration_date_year')=='28') selected @endif>28</option>
                    <option value="27" @if(old('expiration_date_year')=='27') selected @endif>27</option>
                    <option value="26" @if(old('expiration_date_year')=='26') selected @endif>26</option>
                    <option value="25" @if(old('expiration_date_year')=='25') selected @endif>25</option>
                    <option value="24" @if(old('expiration_date_year')=='24') selected @endif>24</option>
                    <option value="23" @if(old('expiration_date_year')=='23') selected @endif>23</option>
                    <option value="22" @if(old('expiration_date_year')=='22') selected @endif>22</option>
                    <option value="21" @if(old('expiration_date_year')=='21') selected @endif>21</option>
                    <option value="20" @if(old('expiration_date_year')=='20') selected @endif>20</option>
                    <option value="19" @if(old('expiration_date_year')=='19') selected @endif>19</option>
                    <option value="18" @if(old('expiration_date_year')=='18') selected @endif>18</option>
                </select>
            </div>
            <div class="col-xs-1 padding-none form-lavel-position">
                年
            </div>
        </div>
        <div class="form-group col-xs-6 col-xs-offset-3" style="overflow:hidden;">
            <button class="btn btn-design" type="submit">登録する</button> 
        </div>
    </form>
@endsection

@include('layout.footer')