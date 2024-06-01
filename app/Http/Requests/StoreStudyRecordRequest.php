<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudyRecordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'subject' => 'required|exists:subjects,id',
            'date' => 'required|date',
            'hours' => 'required|numeric|min:0.1',
        ];
    }
}
