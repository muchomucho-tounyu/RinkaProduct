<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class PostRequest extends FormRequest
{

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
            'work_id'    => 'nullable|exists:works,id',
            'song_id'    => 'nullable|exists:songs,id',
            'person_id'  => 'nullable|exists:people,id',
            'location'   => 'nullable|string|max:255',
            'image'      => 'nullable|image|max:5120', // 最大5MB
            'body'       => 'nullable|string|max:2000', //
        ];
    }

    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $workName = $this->input('work_name');
            $songName = $this->input('song_name');

            if (empty($workName) && empty($songName)) {
                $validator->errors()->add('work_Name', '作品名または楽曲名のいずれかを入力してください。');
            }
        });
    }
    public function messages(): array
    {
        return [
            'work_name.exists'   => '入力された作品が存在しません。',
            'song_name.exists'   => '入力された楽曲が存在しません。',
            'person_id.exists' => '入力された人物が存在しません。',
            'image.image'      => 'アップロードできるのは画像ファイルのみです。',
            'image.max'        => '画像サイズは5MB以下にしてください。',
        ];
    }
}
