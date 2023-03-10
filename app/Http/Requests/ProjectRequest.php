<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2|max:150',
            'client_name'=>'required|min:3|max:50',
            'summary'=>'required|min:2|max:2000',
            'cover_image'=>'nullable|image|max:3100'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Il campo nome è obbligatorio',
            'name.min'=>'Il campo nome richiede almeno :min caratteri',
            'name.max'=>'Il campo nome consente al massimo :max caratteri',
            'client_name.required'=>'Il campo cliente è obbligatorio',
            'client_name.min'=>'Il campo cliente richiede almeno :min caratteri',
            'client_name.max'=>'Il campo cliente consente al massimo :max caratteri',
            'summary.required'=>'Il campo riepilogo è obbligatorio',
            'summary.min'=>'Il campo riepilogo richiede almeno :min caratteri',
            'summary.max'=>'Il campo riepilogo consente al massimo :max caratteri',
            'cover_image.image'=>'Il file caricato non è corretto',
            'cover_image.max'=>'Il campo immagine consente il caricamento di un file al massimo di 3 megabyte'
        ];
    }
}
