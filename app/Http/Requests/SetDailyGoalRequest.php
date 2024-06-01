<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetDailyGoalRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date' => 'required|date',
            'hours' => 'required|numeric|min:0.1',
        ];
    }
}
