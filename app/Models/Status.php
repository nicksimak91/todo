<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function colorTask($status)
    {
        echo match ($status) {
            '1' => "white",
            '2' => "#20B2AA",
            '3' => "#CD5C5C",
        };
    }

    public function statusTask($value)
    {
        echo match ($value) {
            '1' => "Ожидает",
            '2' => "Выполнена",
            '3' => "Просрочена",
        };
    }
}
