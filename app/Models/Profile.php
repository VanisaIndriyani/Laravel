<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    public function getById($id)
    {
        return Profile::where('id', $id)->first();
    }

    public function getWithPagination()
    {
        return Profile::paginate(10);
    }

    public function saveData($data)
    {
        $profile = new Profile();
        $profile->name = $data['name'];
        $profile->save();
    }

    public function updateData($id, $data)
    {
        $profile = Profile::find($id);
        if($profile) {
            $profile->name = $data['name'];
            $profile->save();
        }
    }
}
