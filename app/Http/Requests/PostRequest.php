<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'work_id'    => 'nullable|exists:works,id',
            'song_id'    => 'nullable|exists:songs,id',
            'person_id'  => 'nullable|exists:people,id',
            'location'   => 'nullable|string|max:255',
            'image'      => 'nullable|image|max:5120', // 最大5MB
            'body'       => 'nullable|string|max:2000', //
        ];
    }

    public function Validator($validator)
    {
        $validator->after(function ($validator) {
            $workId = $this->input('work_id');
            $songId = $this->input('song_id');

            if (empty($workId) && empty($songId)) {
                $validator->errors()->add('work_id', '作品名または楽曲名のいずれかを選択してください。');
            }
        });
    }
    public function messages(): array
    {
        return [
            'work_id.exists'   => '選択された作品が存在しません。',
            'song_id.exists'   => '選択された楽曲が存在しません。',
            'person_id.exists' => '選択された人物が存在しません。',
            'image.image'      => 'アップロードできるのは画像ファイルのみです。',
            'image.max'        => '画像サイズは5MB以下にしてください。',
        ];
    }
}
