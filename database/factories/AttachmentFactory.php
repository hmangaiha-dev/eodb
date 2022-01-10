<?php

namespace Database\Factories;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Attachment::class;
    public function definition()
    {
        return [
            'original_name' => 'Signature',
            'mime' => 'jpg',
            'label' => 'Signature of the Applicant',
            'size' => '2',
            'path' => 'uploads'
        ];
    }
}
