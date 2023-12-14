<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'category', 'special_note'];
    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
    ];

    public static function createFromForm(array $data)
    {
        return self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'category' => $data['category'],
            'special_note' => $data['special_note'],
        ]);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']?? false, function ($query, $search) {
            return $query->where('name', 'like', '%'. $search. '%')
                ->orWhere('email', 'like', '%'. $search. '%')
                ->orWhere('phone', 'like', '%'. $search. '%')
                ->orWhere('category', 'like', '%'. $search. '%')
                ->orWhere('special_note', 'like', '%'. $search. '%');
        });
        return $query;
    }
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
        return $query->where('category', 'like', '%'. $category. '%');
    }

    public function scopeSpecialNote($query, $special_note)
    {
        return $query->where('special_note', $special_note);
        return $query->where('special_note', 'like', '%'. $special_note. '%');
    }

}
