<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last-name' => ['required', 'string', 'max:255'],
            'first-name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:120'],
        ];
    }
    public function message()
    {
        return [
            'last-name.required' => '姓を入力してください',
            'first-name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'message.required' => 'お問い合わせ内容を入力してください'
        ];
    }
}
