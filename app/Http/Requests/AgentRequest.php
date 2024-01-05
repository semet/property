<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class AgentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'location_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'photo' => [File::types(['jpg', 'jpeg', 'png'])]
        ];
    }

    public function messages(): array
    {
        return [
            'location_id.required' => 'ID Lokasi tidak boleh kosong',
            'name.required' => 'Nama tidak boleh kosong',
            'phone.required' => 'No. telepon tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Gunakan email yang valid',
            'photo' => 'File harus bertipe JPG,JPEG, PNG'
        ];
    }
}
