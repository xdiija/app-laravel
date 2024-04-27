<?php

namespace App\Repositories;

use App\DTO\Supports\{
    CreateSupportDTO, 
    UpdateSupportDTO 
};
use stdClass;

interface SupportRepositoryInterface
{
    public function paginate(int $page = 1, int $totalPerPage = 15, string | int $filter = null): PaginationInterface;
    public function getAll(string | int $filter = null): array;
    public function getOne(string | int $id): stdClass | null;
    public function new(CreateSupportDTO $dto): stdClass;
    public function update(UpdateSupportDTO $dto): stdClass | null;
    public function delete(string | int $id): void;

}