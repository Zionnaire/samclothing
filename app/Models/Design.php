<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Design extends Model
{
  use HasFactory;
  protected $casts = [
    'price' => MoneyCast::class,
  ];

  protected $fillable = ['image', 'title', 'price', 'style', 'admin_id', 'description', 'name', 'email', 'phone', 'category', 'color', 'quantity', 'tags', 'material'];

  public function scopeFilter($query, array $filters)
  {

    // Check if a 'tag' filter was passed
    if ($filters['tag'] ?? false) {

      // If so, filter the query to only include listings 
      // whose 'tags' column contains the tag value
      $query->where('tags', 'like', '%' . request('tag') . '%');
    }

    // Check if a 'search' filter was passed
    if ($filters['search'] ?? false) {

      // If so, filter the query to only include listings 
      // whose 'search' column contains the search value
      $query->where('title', 'like', '%' . request('search') . '%')
        ->orwhere('description', 'like', '%' . request('search') . '%')
        ->orwhere('tags', 'like', '%' . request('search') . '%')
        ->orwhere('style', 'like', '%' . request('search') . '%');
    }
  }

  public function admin()
  {
    return $this->belongsTo(Admin::class);
  }
}
