<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecommendedLoadVal
 *
 * @property $id
 * @property $reps
 * @property $rpe
 * @property $val
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RecommendedLoadVal extends Model
{
    
    static $rules = [
		'reps' => 'required',
		'rpe' => 'required',
		'val' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reps','rpe','val'];



}
