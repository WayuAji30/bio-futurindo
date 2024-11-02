<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tbl_testimoni';

    protected $primaryKey = 'id';

    public $incrementing = true;
}
