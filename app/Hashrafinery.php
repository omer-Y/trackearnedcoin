<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property float $unsold
 * @property float $balance
 * @property float $unpaid
 * @property float $paid24h
 * @property float $total
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Hashrafinery extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'hashrafinery';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'unsold', 'balance', 'unpaid', 'paid24h', 'total', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
