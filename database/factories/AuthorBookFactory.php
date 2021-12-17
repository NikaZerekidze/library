<?php

namespace Database\Factories;

use App\Models\Authors;
use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;
use DB;

class AuthorBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        DB::table('author_book')->insert(
            [
                'author_id' => Authors::select('id')->orderByRaw("RAND(1,30)")->first()->id,
                'book_id' => Books::select('id')->orderByRaw("RAND(1,30)")->first()->id,
            ]
        );

    }
}
