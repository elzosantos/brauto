<?php 

namespace App\Repositories\Contracts;

use App\DTO\Supports\CreateUserDTO;
use App\Enums\RecordStatus; 
use stdClass;

interface UserRepositoryInterface
{
    public function paginate(int $page = 1 , int $totalPerPage =15, string $filter = null): PaginationInterface;
    public function getAll(string $filter = null): array;
    public function findOne(string $id): stdClass|null;
    public function delete(string $id): void;
   public function new(CreateUserDTO $dto): stdClass;
 //   public function update(UpdateSupportDTO $dto): stdClass|null;
    public function updateStatus(string $id, RecordStatus $status): void;


}