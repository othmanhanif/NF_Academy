<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Tere Liye'],
            ['id' => 2, 'name' => 'Eka Kurniawan'],
            ['id' => 3, 'name' => 'Pidi Baiq'],
            ['id' => 4, 'name' => 'Dewi Lestari'],
            ['id' => 5, 'name' => 'Stephen King'],
        ];
    }
}