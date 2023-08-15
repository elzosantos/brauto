<?php


namespace App\Services;

use App\Repositories\Contracts\FipeRepositoryInterface;
use App\Repositories\Contracts\PaginationInterface;
use stdClass;

class FipeService
{

    public function __construct(protected FipeRepositoryInterface $repository)
    {
    }
    public function paginate(
        int $page = 1,
        int $totalPerPage = 15,
        string $filter = null
    ): PaginationInterface {
        return  $this->repository->paginate(
            page: $page,
            totalPerPage: $totalPerPage,
            filter: $filter
        );
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }
}
