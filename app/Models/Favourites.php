<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    use HasFactory;
    public function userfavaccommodations() { // FK relationship
    return $this->belongsTo(User::class);
 }
    public function favaccommodations() { // FK relationship
    return $this->belongsTo(Accommodation::class);
 }
 public function favvacations() { // FK relationship
    return $this->belongsTo(VacationPackages::class);
 }
}
