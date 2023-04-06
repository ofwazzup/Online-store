<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',

            'textname' => 'Required|min:2|max:20',
            'feedbackText' => 'Required|min:5|max:100'
        ];
    }
    public function messages()
    {
        return [
            'textname.required' => 'Поле имя обязательно',
            'textname.min' => 'Поле имя должно содержать минимум 2 символа',
            'textname.max' => 'Поле имя должно содержать максимум 20 символов',
            'feedbackText.required' => 'Поле отзыва обязательно',
            'feedbackText' => 'Поле ввода должно содержать минимум 5 символа',
            'feedbackText' => 'Поле ввода должно содержать максимум 100 символов',
        ];
    }
}
