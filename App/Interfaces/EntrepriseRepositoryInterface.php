<?php

namespace App\Interfaces;
use App\Models\Entrep;
interface EntrepriseRepositoryInterface 
{
    public function getById($id);
    public function store(Array $inputs);
    public function save(Entrep $entrep, Array $inputs);
    public function update($id, Array $inputs);
}
