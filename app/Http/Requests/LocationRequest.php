<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class LocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'photo' => [File::types(['jpg', 'jpeg', 'png'])]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama lokasi tidak boleh kosong',
            'address.required' => 'Alamat lokasi tidak boleh kosong',
            'photo' => 'File harus bertipe JPG,JPEG, PNG'
        ];
    }
}
