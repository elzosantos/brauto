<?php

namespace App\Repositories\Contracts;
 
use stdClass;

interface FipeRepositoryInterface
{
  public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface;
  public function findOne(string $id): stdClass|null;
}
