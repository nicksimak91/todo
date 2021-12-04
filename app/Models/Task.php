<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

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

    public function getStatus($value)
    {
        $status = new Status();
        return $status->statusTask($value);
    }

    static public function getStatusColor($status)
    {
        $color = new Status();
        return $color->colorTask($status);
    }
}
