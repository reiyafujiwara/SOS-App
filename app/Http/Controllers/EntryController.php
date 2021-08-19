<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{

    public function entry(){
        return view('form.entry');
    }

    public function confirm(Request $request){

        $this->validate($request,[
            'name1' => 'required|regex:/^[ぁ-んァ-ン一-龥]/',
            'name2' => 'required|regex:/^[ぁ-んァ-ン一-龥]/',
            'kana1' => 'required|regex:/^[ァ-ヶー]+$/u',
            'kana2' => 'required|regex:/^[ァ-ヶー]+$/u',
            'sex' => 'required',
            'tel' => 'required|regex:/^(0{1}\d{9,10})$/',
            'zipcode1' => 'required|regex:/^\d{3}$/',
            'zipcode2' => 'required|regex:/^\d{4}$/',
            'address1' => 'required',
            'address2' => 'required|regex:/^[0-9\-]+$/',
            'address3' => '',
            'birthday' => 'required',
            'credit_num' => 'required|digits_between:15,16',
            'credit_name' => 'required|regex:/^[A-Z]+\s[A-Z]+\z/',
            'expiration_date_month' => 'required',
            'expiration_date_year' => 'required'
        ],[
            'name1.required' => '性を入力して下さい。',
            'name1.regex' => '性は全角で正しく入力して下さい。',   
            'name2.required' => '名を入力して下さい。',
            'name2.regex' => '名は全角で正しく入力して下さい。',
            'kana1.required' => 'セイを入力して下さい。',
            'kana1.regex' => 'セイは全角カタカナで入力して下さい。',
            'kana2.required' => 'メイを入力して下さい。',
            'kana2.regex' => 'メイは全角カタカナで入力して下さい。',
            'sex.required' => '性別を選択して下さい。',
            'tel.required' => '電話番号を入力して下さい。',
            'tel.regex' => '電話番号を正しく入力して下さい。',
            'zipcode1.required' => '郵便番号(左)を入力して下さい。',
            'zipcode1.regex' => '郵便番号左枠は半角の3桁で入力して下さい。',
            'zipcode2.required' => '郵便番号(右)を入力して下さい。',
            'zipcode2.regex' => '郵便番号右枠は半角の4桁で入力して下さい。',
            'address1.required' => '住所(市・区・郡及び町村名)を入力して下さい。',
            'address2.required' => '住所（丁目・番地）を入力して下さい。',
            'address2.regex' => '住所（丁目・番地）は半角数字で入力してください。',
            'address3.regex' => '住所（建物名・部屋番号)の英数は半角で入力してください。',
            'birthday.required' => '生年月日を入力して下さい。',
            'credit_num.required' => 'クレジットカード番号を入力して下さい。',
            'credit_num.digits_between' => 'クレジットカード番号の桁数は正しく入力して下さい。',
            'credit_name.required' => 'クレジットカード名義を入力して下さい。',
            'credit_name.regex' => 'クレジットカード名義は半角英数大文字で入力して下さい。',
            'expiration_date_month.required' => 'クレジットカード有効期限(月)を入力して下さい。',
            'expiration_date_year.required' => 'クレジットカード有効期限(年)を入力して下さい。'
        ],[
            'name1' => '性',
            'name2' => '名',
            'kana1' => 'セイ',
            'kana2' => 'メイ',
            'sex' => '性別',
            'tel' => '電話番号',
            'zipcode1' => '郵便番号(左)',
            'zipcode2' => '郵便番号(右)',
            'address1' => '住所(市・区・郡及び町村名)',
            'address2' => '住所（丁目・番地）',
            'address3' => '住所(建物名・部屋番号)',
            'birthday' => '生年月日',
            'credit_num' => 'クレジットカード番号',
            'credit_name' => 'クレジットカード名義',
            'expiration_date_month' => 'クレジットカード有効期限(月)',
            'expiration_date_year' => 'クレジットカード有効期限(年)'
        ]);
        $params = $request->all();
        
        return view('form.confirm')->with($params);
    }

    public function regist(Request $request) {
        // 戻るボタンが押された場合
        if ($request->get('action') === '入力画面に戻る') {
            // 入力画面に戻る
            return redirect()
                ->route('form.entry')
                ->withInput($request->excepr('action'));
        }
    
        // 登録処理・・・・
    
        return;
    }

    public function thanks(Request $request){
        return view('form.thanks');
        
    }
}
