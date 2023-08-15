<?php

namespace App\Repositories;

use App\DTO\Supports\CreateUserDTO;
use App\Enums\RecordStatus;
use App\Models\Report;
use App\Models\User;
use App\Repositories\Contracts\ConsultancyRepositoryInterface;
use App\Repositories\Contracts\MaintenanceRepositoryInterface;
use App\Repositories\Contracts\PaginationInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\PaginationPresenter;
use Illuminate\Support\Facades\Gate;
use stdClass;

class MaintenanceEloquentORM implements MaintenanceRepositoryInterface 
{

    public function __construct(
        protected Report $model
    ) {
    }

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {

 

        $result =  $this->model->with('consultor')
        ->with('vehicle_user')
        ->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }
/*

    public function getAll(string $filter = null): array
    {
        return $this->model->with('user')
            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->where('subject', $filter);
                    $query->orWhere('body', 'like', "%{$filter}%");
                }
            })
            ->get()
            ->toArray();
    }*/
    public function findOne(string $id): stdClass|null
    {

        $consultant = $this->model->with('consultor')
        ->with('vehicle_user')->find($id);

        if (!$consultant) {
            return null;
        }
        return (object) $consultant->toArray();
    }/*
    public function delete(string $id): void
    {
 
        $user = $this->model->findOrFail($id);
        /*if (Gate::denies('owner', $user->user->id)) {
            abort(403, 'Not authorized');
        }

        $user->delete();
    }
    public function new(CreateUserDTO  $dto): stdClass
    {
        $support = $this->model->create((array) $dto);
        return (object) $support->toArray();
    }/*
    public function update(UpdateSupportDTO  $dto): stdClass|null
    {
        if (!$support = $this->model->find($dto->id)) {
            return null;
        }

        if (Gate::denies('owner', $support->user->id)) {
            abort(403, 'Not authorized');
        }
        $support->update((array) $dto);
        return (object) $support->toArray();
    }

    public function updateStatus(string $id, RecordStatus $status): void
    {
        $this->model->where('id', $id)->update(
            ['status' => $status->name]

        );
    }*/
}
