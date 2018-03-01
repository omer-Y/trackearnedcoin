<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Ahashpool[] $ahashpools
 * @property Hashrafinery[] $hashrafineries
 * @property Miningpoolhub[] $miningpoolhubs
 * @property Nanopool[] $nanopools
 * @property UserInfo[] $userInfos
 * @property Zpool[] $zpools
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ahashpools()
    {
        return $this->hasMany('App\Ahashpool');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hashrafineries()
    {
        return $this->hasMany('App\Hashrafinery');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function miningpoolhubs()
    {
        return $this->hasMany('App\Miningpoolhub');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nanopools()
    {
        return $this->hasMany('App\Nanopool');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userInfos()
    {
        return $this->hasMany('App\UserInfo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zpools()
    {
        return $this->hasMany('App\Zpool');
    }
}
