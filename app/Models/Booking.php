<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    const PENDING = 'pending';
    const APPROVED = 'approved';
    const COMPLETED = 'completed';
    const DECLINED = 'declined';

    protected $guarded = ['id'];

    public static function statuses(): array
    {
        return [self::APPROVED, self::COMPLETED, self::DECLINED, self::PENDING];
    }

    public function therapist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'therapist_id');
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function massage(): BelongsTo
    {
        return $this->belongsTo(Massage::class);
    }

    public function scopeForTherapist(Builder $builder, User $user)
    {
        $builder->whereBelongsTo($user, 'therapist');
    }

    public function scopeCompleted(Builder $builder)
    {
        $builder->whereStatus(self::COMPLETED);
    }

    public function scopeDeclined(Builder $builder)
    {
        $builder->whereStatus(self::DECLINED);
    }

    public function scopeApproved(Builder $builder)
    {
        $builder->whereStatus(self::APPROVED);
    }

    public function scopePending(Builder $builder)
    {
        $builder->whereStatus(self::PENDING);
    }
}
