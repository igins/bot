<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Avatar\Avatar;

/**
 * App\Models\Profile
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $patronymic
 * @property string|null $gender
 * @property string|null $dob
 * @property string|null $avatar
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile wherePatronymic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereUserId($value)
 * @mixin \Eloquent
 */
class Profile extends Model
{
    protected $appends = [
        "full_name"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return null|string
     */
    public function getFullNameAttribute()
    {
        $name = NULL;
        $name .= ( $this->attributes['first_name'] ) ? $this->getAttribute("first_name") . " " : NULL;
        $name .= ( $this->attributes['last_name'] )  ? $this->getAttribute("last_name") : NULL;
        return $name;
    }

    public function getAvatarAttribute()
    {
        return (NULL !== $this->attributes['avatar']) ? $this->getAttribute("avatar") : \Avatar::create($this->getAttribute("full_name"))->toBase64();
    }

}
