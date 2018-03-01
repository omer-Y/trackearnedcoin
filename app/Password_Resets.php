<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $token
 * @property string $created_at
 */
class Password_Resets extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'password_resets';

    /**
     * @var array
     */
    protected $fillable = ['email', 'token', 'created_at'];

}
