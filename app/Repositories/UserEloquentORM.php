<?php

namespace App\Repositories;

use App\Enums\RecordStatus;
use App\Models\User;
use App\Repositories\Contracts\PaginationInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\PaginationPresenter;
use Illuminate\Support\Facades\Gate;
use stdClass;

class UserEloquentORM implements UserRepositoryInterface
{

    public function __construct(
        protected User $model
    ) {
    }

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {
        $result =  $this->model

            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->where('nome', $filter);
                    $query->orWhere('cpf', 'like', "%{$filter}%");
                }
            })
            ->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }


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
    }
    public function findOne(string $id): stdClass|null
    {

        $support = $this->model->with('user')->find($id);

        if (!$support) {
            return null;
        }
        return (object) $support->toArray();
    }
    public function delete(string $id): void
    {
        $support = $this->model->findOrFail($id);
        if (Gate::denies('owner', $support->user->id)) {
            abort(403, 'Not authorized');
        }

        $support->delete();
    }
   /* public function new(CreateSupportDTO  $dto): stdClass
    {
        $support = $this->model->create((array) $dto);
        return (object) $support->toArray();
    }
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
    }*/

    public function updateStatus(string $id, RecordStatus $status): void
    {
        $this->model->where('id', $id)->update(
            ['status' => $status->name]

        );
    }
}
