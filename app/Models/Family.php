<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\Family
 *
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Dish[] dishes
 * @mixin \Eloquent
 */
class Family extends Authenticatable {
    use HasFactory, Notifiable;

    /***** RELATIONS *****/
    public function dishes(): HasMany {
        return $this->hasMany(Dish::class);
    }
}
