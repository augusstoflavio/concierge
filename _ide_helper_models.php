<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Log
 *
 * @property int $id
 * @property string $email
 * @property string $url
 * @property string $method
 * @property string|null $data
 * @property int $system_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $date
 * @method static \Illuminate\Database\Eloquent\Builder|Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereSystemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Log withoutTrashed()
 */
	class Log extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\System
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|System newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|System newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|System onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|System query()
 * @method static \Illuminate\Database\Eloquent\Builder|System whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|System whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|System whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|System whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|System whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|System withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|System withoutTrashed()
 */
	class System extends \Eloquent {}
}

namespace App\Models{use Illuminate\Database\Eloquent\Collection;use Illuminate\Notifications\DatabaseNotificationCollection;use Illuminate\Support\Carbon;
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

