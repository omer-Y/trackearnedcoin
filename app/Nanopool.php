<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property float $balance
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Nanopool extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nanopool';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'balance', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
