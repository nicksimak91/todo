<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator',
        'description',
        'complete_to',
        'status'
    ];

    public function getActionDelete()
    {
        return route('tasks.destroy', $this->id);
    }

    public function getActionEdit(): string
    {
        return route('tasks.edit', $this->id);
    }

    public function getStatus($status)
    {
        echo match( $status ) {
            '1' => "Ожидает",
            '2' => "Выполнена",
            '3' => "Просрочена",
            };
    }

    static public function getStatusColor($status)
    {
        echo match( $status ) {
            '1' => "white",
            '2' => "#20B2AA",
            '3' => "#CD5C5C",
            };
    }
}
