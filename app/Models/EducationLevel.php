<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EducationLevel
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EducationLevel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EducationLevel extends Model {

    public function recipients() {

        return $this -> hasMany('App\Models\Recipient');

    }

}
