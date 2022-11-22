<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'project_content' => 'required',
            'about_us' => 'required',
            'lat' => 'nullable',
            'lon' => 'nullable',
            'hq_address' => 'required',
            'branch_address' => 'required',
            'facebook' => 'required',
            'tiktok' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'call_us_number' => 'required',
            'call_us_email' => 'required',
        ];
    }
}
