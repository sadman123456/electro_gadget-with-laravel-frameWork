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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $imageValidation = 'image|mimes:jpg,png,jpeg,gif';
        switch ($this->method()) {
            case 'POST': {
        return [
            'name' => 'required|unique:products|max:255|min:4',
            'category_id' => 'exists:categories,id',
            'brand_id' => 'exists:brands,id',
            'sale_price'=> 'required|max:7|min:2|digits_between:0,9',
            'Purchase_price'=> 'required|max:7|min:2|digits_between:0,9',
            'category_id' => 'exists:categories,id',

            'quantity'=> 'required|max:9|min:1|digits_between:0,9', 
            'description' => 'required|max:255|min:6',
            'image'=>'required|'. $imageValidation
            
        ];
    }
         case 'PATCH': {

        return [
            // 'name' => 'required|max:255|min:4|unique:products,name,'.$this->id,
            'name' => 'required|max:255|min:4|unique:categories,name'.$this->get('id'),
            'brand_id' => 'exists:brands,id',
            'sale_price'=> 'required|max:7|min:2|digits_between:0,9',
            'category_id' => 'exists:categories,id',
            'Purchase_price'=> 'required|max:7|min:2|digits_between:0,9',
            'category'=> 'required',
            'quantity'=> 'required|max:9|min:1|digits_between:0,9', 
            'description' => 'required|max:255|min:6',
            'image'=> $imageValidation

        ];
    }

}
    }
    public function messages()
    {
        return [
            'name.required'=>'A name must be required',
            'name.unique'=>'A name must be unique',
            'brand.required'=>'A brand must be required',
            'sale_price.required'=>'sale_price must be required',
            'purchase_price.required'=>'A purchase_price must be required',
            'category.required'=>'A category must be selected',
            'quantity.required'=>'A quantity must be required',

        ];
    }
}
