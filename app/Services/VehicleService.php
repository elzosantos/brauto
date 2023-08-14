<?php


namespace App\Services;

use App\DTO\Vehicles\CreateVehicleDTO;
use App\Enums\RecordStatus;
use App\Repositories\Contracts\PaginationInterface;
use App\Repositories\Contracts\VehicleRepositoryInterface;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Gate;
use stdClass;

class VehicleService
{

    public function __construct(protected VehicleRepositoryInterface $repository)
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
    /*public function getAll(string $filter = null): array
    {
        return  $this->repository->getAll($filter);
    }*/
    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function findByUserId(string $id): stdClass|null
    {
        return $this->repository->findByUserId($id);
    }

    

   public function new(
        CreateVehicleDTO $dto
    ): stdClass {
        return $this->repository->new(
            $dto
        );
    }
    
    /*

    public function update(
        UpdateSupportDTO $dto
    ): stdClass|null {
        return $this->repository->update(
            $dto
        );
    }
    public function delete(string $id): void
    {

        $this->repository->delete($id);
    }

    public function updateStatus(string $id, RecordStatus $status): void
    {

        $this->repository->updateStatus($id, $status);
    }*/
}
