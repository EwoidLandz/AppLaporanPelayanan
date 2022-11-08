<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaints';

    protected $fillable = [
        'nik', 'text_complaint','location', 'image', 'status', 'user_id', 'roles_id'
    ];
}
