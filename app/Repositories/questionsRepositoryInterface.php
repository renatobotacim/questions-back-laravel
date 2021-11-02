<?php

namespace App\Repositories;

use App\Models\questions;

interface questionsRepositoryInterface {

    public function __construct(questions $data);

    public function getAll();
    
    public function getAllFilter(int $id);

    public function get(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
    
}
