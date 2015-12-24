<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description','how_to_apply','level','job_type','location','country','city','company'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get Place
     * @return
     */
    public function getPlace()
    {
        return $this->city == 'anywhere' ? "Remote / Anywhere" : $this->city .', '. $this->country;
    }
}
