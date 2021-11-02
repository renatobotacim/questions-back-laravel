<?php

namespace App\Repositories;

use App\Models\questions;

class questionsRepositoryEloquent implements questionsRepositoryInterface {

    private $model;

    public function __construct(questions $data) {
        $this->model = $data;
    }

    public function getAll() {
        return $this->model
                ->join('dimensions', 'dimensions.id', '=', 'dimension_id')
                ->select('questions.*', 'dimensions.name')
                ->whereNull('questions.deleted')
                ->get();        
    }
    public function getAllFilter($id) {
               return $this->model
                ->join('dimensions', 'dimensions.id', '=', 'dimension_id')
                ->select('questions.*', 'dimensions.name')
                ->where('questions.dimension_id','=',$id)
                ->whereNull('questions.deleted')
                ->get();        
    }

    public function get($id) {
        return $this->model->find($id);
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function update(int $id, array $data) {
        return $this->model->find($id)->update($data);
    }

    public function delete(int $id) {
        return $this->model->find($id)->delete();
    }

}
