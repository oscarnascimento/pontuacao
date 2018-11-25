<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePremiacaosRequest extends FormRequest
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
            'goal' => 'max:2147483647|required|numeric',
            'start_date' => 'required|date_format:'.config('app.date_format'),
            'finish_date' => 'required|date_format:'.config('app.date_format'),
            'image' => 'nullable|mimes:png,jpg,jpeg,gif',
            'partner_type_id' => 'required',
        ];
    }
}
