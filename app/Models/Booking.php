<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    const PENDING = 'pending';
    const APPROVED = 'approved';
    const DECLINED = 'declined';

    protected $guarded = ['id'];

    public static function statuses(): array
    {
        return [self::APPROVED, self::DECLINED, self::PENDING];
    }
}
