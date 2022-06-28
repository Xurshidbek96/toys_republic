<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'title_uz',
        'title_ru',
        'title_en',
        'price',
        'articul',
        'qr',
        'size_toy',
        'case_uz',
        'case_ru',
        'case_en',
        'size_case',
        'casegroup_uz',
        'casegroup_ru',
        'casegroup_en',
        'weight',
        'count',
        'file',
        'img1',
        'img2',
        'img3'
    ];
}
