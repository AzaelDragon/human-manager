<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RecipientType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RecipientType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RecipientType extends Model {

    public function recipients() {

        return $this -> hasMany('App\Models\Recipient');

    }

}
