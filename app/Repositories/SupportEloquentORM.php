<?php

namespace App\Repositories;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Repositories\SupportRepositoryInterface;
use stdClass;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function getAll(string | int $filter = null): array
    {
        return [];
    }
    public function getOne(string | int $id): stdClass | null
    {
        return null;
    }
    public function new(CreateSupportDTO $dto): stdClass
    {
        return new stdClass();
    }
    public function update(UpdateSupportDTO $dto): stdClass | null
    {
        return null;
    }
    public function delete(string | int $id): void
    {
        
    }
}