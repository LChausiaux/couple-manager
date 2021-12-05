<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property int $position
 * @property int $lunch_id
 * @property string|null $lunch_type
 * @property int|null $dinner_id
 * @property string $dinner_type
 * @property int|null $parent_id
 * @property string|null $parent_type
 * @method static Builder current()
 */
class Menu extends Authenticatable {
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'week' => 'string',
        'year' => 'string',
        'family_id' => 'integer',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'week' => 'string',
        'year' => 'string',
        'family_id' => 'integer',
    ];

    protected static $rules = [
        'week' => ['string'],
        'year' => ['string'],
        'family_id' => ['integer'],
    ];

    /***** RELATIONS *****/
    public function family(): BelongsTo {
        return $this->belongsTo(Family::class);
    }

    public function days(): MorphMany {
        return $this->morphMany(Day::class, 'parent');
    }

    /***** SCOPES *****/
    public function scopeCurrent(Builder $query): Builder {
        return $query->where('week', date('W'));
    }
}
