<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property float $confirmed
 * @property float $unconfirmed
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Miningpoolhub extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'miningpoolhub';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'confirmed', 'unconfirmed', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
