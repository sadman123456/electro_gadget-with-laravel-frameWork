<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST': {
        return [
            'name' => 'required|unique:categories|max:255|min:4',
            
            'description' => 'required|max:255|min:6'
        ];
    }
    case 'PATCH': {
        return [
            'name' => 'required|unique:categories,'.$this->get('id').'|max:255|min:4',
            
            'description' => 'required|max:255|min:6'
        ];
    }

}
    }
    public function messages()
    {
        return [
            'name.required'=>'A name must be required',
            'name.unique'=>'A name must be unique',

        ];
    }
}
// {
//     $request->validate([
//         'name' => 'required|unique:categories|max:255|min:4',
//         'description' => 'required|max:255|min:6',

//     ]);
 
//     // The blog post is valid...


//     // $validator = Validator::make($request->all(), [
//     //     'name' => 'required|unique:categories|max:255|min:4',
//     //     'description' => 'required|max:255|min:6',

//     // ]);

//     // if ($validator->fails()) {
//     //     return back()
//     //                 ->withErrors($validator)
//     //                 ->withInput();
//     // }



// }