<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'criterias';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'weight',
        'unit',
    ];

    // Jika Anda tidak ingin menggunakan fitur auto-increment untuk primary key, tambahkan ini:
    // public $incrementing = false;

    // Jika tipe data primary key Anda bukan integer, tambahkan ini:
    // protected $keyType = 'string';
}
