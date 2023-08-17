<?php

namespace App\Repositories\Contracts;

use App\DTO\Consultancies\CreateConsultancyDTO; 
use stdClass;

interface ConsultancyRepositoryInterface
{
  public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface;
  // public function getAll(string $filter = null): array;
  public function findOne(string $id): stdClass|null;

  public function new(CreateConsultancyDTO $dto): stdClass;
  /*public function delete(string $id): void;
   ;*/
  //   public function update(UpdateSupportDTO $dto): stdClass|null;
  // public function updateStatus(string $id, RecordStatus $status): void;


}
