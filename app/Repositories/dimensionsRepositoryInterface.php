<?php

namespace App\Repositories;

use App\Models\dimensions;

interface dimensionsRepositoryInterface {

    public function __construct(dimensions $data);

    public function getAll();

    public function get(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
