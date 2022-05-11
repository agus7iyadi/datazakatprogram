<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programModal extends Model
{
    use HasFactory;
    protected $table = 'tbl_program';
    public $timestamps = false;
    protected $primaryKey = 'id_program';
    
    protected $fillable = [
        'sumber_dana',
        'program',
        'keterangan',
    ];
}
