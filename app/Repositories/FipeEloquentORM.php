<?php

namespace App\Repositories;

use App\Models\Fipe; 
use App\Repositories\Contracts\FipeRepositoryInterface;
use App\Repositories\Contracts\PaginationInterface;
use App\Repositories\PaginationPresenter;
use Illuminate\Support\Facades\Gate;
use stdClass;

class FipeEloquentORM implements FipeRepositoryInterface
{

    public function __construct(
        protected Fipe $model
    ) {
    }

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {
        $result =  $this->model
            ->paginate($totalPerPage, ['*'], 'page', $page);
        return new PaginationPresenter($result);
    }

    public function findOne(string $id): stdClass|null
    {
        $consultant = $this->model->with('consultor')
            ->with('vehicle_user')->find($id);

        if (!$consultant) {
            return null;
        }
        return (object) $consultant->toArray();
    }
}
