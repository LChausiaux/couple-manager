<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
 */

class Day extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'menu_days';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position' => 'integer',
        'lunch_id' => 'integer',
        'lunch_type' => 'string',
        'dinner_id' => 'integer',
        'dinner_type' => 'string',
        'parent_id' => 'integer',
        'parent_type' => 'string',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'position' => 'integer',
        'lunch_id' => 'integer',
        'lunch_type' => 'string',
        'dinner_id' => 'integer',
        'dinner_type' => 'string',
        'parent_id' => 'integer',
        'parent_type' => 'string',
    ];

    protected static $rules = [
        'position' => ['integer'],
        'lunch_id' => ['integer'],
        'lunch_type' => ['string'],
        'dinner_id' => ['integer'],
        'dinner_type' => ['string'],
        'parent_id' => ['integer'],
        'parent_type' => ['string'],
    ];

    /***** RELATIONS *****/
    public function lunch(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'lunch_type', 'lunch_id');
    }

    public function dinner(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'dinner_type', 'dinner_id');
    }

    public function parent(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'parent_type', 'parent_id');
    }
}
