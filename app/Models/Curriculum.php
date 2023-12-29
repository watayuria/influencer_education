<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = 'curriculums';

    protected $guarded = [
        'id'
    ];

    public function deliveryTimes() {
        return $this->hasMany(DeliveryTime::class, 'curriculums_id', 'id');
    }
}
