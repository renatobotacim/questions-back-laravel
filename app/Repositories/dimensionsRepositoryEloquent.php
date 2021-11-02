<?php

namespace App\Repositories;

use App\Models\dimensions;

class dimensionsRepositoryEloquent implements dimensionsRepositoryInterface {

    private $model;

    public function __construct(dimensions $data) {
        $this->model = $data;
    }

    public function getAll() {
        return $this->model
                ->whereNull('deleted')
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
