<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $fillable = ['id', 'brand', 'rent', 'image', 'description'];

    public function getAllCycles()
    {
        return $this->all();
    }

    public function getCycleById($id)
    {
        return $this->find($id);
    }

    public function createCycle(array $attributes)
    {
        return $this->create($attributes);
    }

    public function updateCycle($id, array $attributes)
    {
        return $this->find($id)->update($attributes);
    }

    public function deleteCycle($id)
    {
        return $this->find($id)->delete();
    }
}