<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecruitmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'vi_tri' => 'required|string|max:255',
            'bang_cap' => 'required|string|max:255',
            'thu_nhap' => 'required|string|max:255',
            'hinh_thuc_lam_viec' => 'required|string|max:255',
            'noi_lam_viec' => 'required|string|max:255',
            'kinh_nghiem' => 'required|string|max:255',
            'lam_viec' => 'required|string|max:255',
            'content' => 'required',
        ];
    }
}
