<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required'],
            'price' => ['required', 'numeric', 'min:0', 'max:10000'],
            'season_id' => ['required'],
            'image' => ['required'],
            'description' => ['required', 'max:120'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'price.required' => '値段を入力してください',
            'price.numeric' => '数値で入力してください',
            'price.min:0' => '0円以上で入力してください',
            'price.max:10000' => '10000円以内で入力してください',
            'season_id.required' => '季節を選択してください',
            'image.required' => '商品画像を登録してください',
            'description.required' => '商品説明を入力してください',
            'description.max:120' => '120文字以内で入力してください'
        ];
    }
}
