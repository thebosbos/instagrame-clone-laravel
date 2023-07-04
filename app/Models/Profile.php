<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];
    
   
    public function profileImage(){
        
        return  ($this->image) ? '/storage/'. $this->image : 'profile/EvNzAq3TN6kA46D7WAHfG4lsscTtF7JVuNwqIaJ0.png';
    } 
    
    public function follwers() {
        return $this->belongsToMany(User::class);
    }

    public function user()  
    {
        return $this->belongsTo(User::class);    
    }
}
