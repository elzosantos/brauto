<?php

namespace App\Repositories\Contracts;

use App\DTO\Vehicles\CreateVehicleDTO;
use stdClass;

interface VehicleRepositoryInterface
{
  public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface;
  // public function getAll(string $filter = null): array;
  public function findOne(string $id): stdClass|null;
  public function findByUserId(string $id): stdClass|null;
  // public function delete(string $id): void;
  public function new(CreateVehicleDTO $dto): stdClass;
  /*//   public function update(UpdateSupportDTO $dto): stdClass|null;
   // public function updateStatus(string $id, RecordStatus $status): void;*/
}
