<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "link",
        "url",
        "sort"
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function scopeBySkills($query, $skills_id)
    {
        $works = Work::with('skills')->get();
        $requestLength = count($skills_id);
        $skillsIdsArr = [];
        $worksId = [];
        foreach ($works as $work) {
            foreach ($work->skills as $skill) {
                $skillsIdsArr[$work->id][] = $skill->id;
            }
            $checkArr = array_uintersect($skills_id, $skillsIdsArr[$work->id], "strcasecmp");
            if ($requestLength == count($checkArr)) {
                $worksId[] = $work->id;
            }
        }
        return $query->whereIn('id', $worksId);
    }

}
