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
            'title' => 'required',
            'text' => 'required|string',
            'mid_reward' => 'required|integer',
            'mid_reward' => 'required|integer',
            'max_reward' => 'required|integer',
            //    'subject' =>'required|min:5|max:50',
            //    'message' =>'required|min:15|max:500'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'имя'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле имя является обязательным',
            'text.required' => 'Поле email является обязательным',
            // 'subject.required' =>'Поле темы является обязательным',
            // 'message.required' =>'Поле сообщение является обязательным'
        ];
    }
}
