<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property float $unsold
 * @property float $balance
 * @property float $total_unpaid
 * @property float $total_paid
 * @property float $total_earned
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Ahashpool extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ahashpool';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'unsold', 'balance', 'total_unpaid', 'total_paid', 'total_earned', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
