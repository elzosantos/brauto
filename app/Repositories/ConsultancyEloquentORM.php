<?php

namespace App\Repositories;

use App\DTO\Consultancies\CreateConsultancyDTO;
use App\DTO\Consultancies\CreateEvaluationDTO;
use App\Models\Consultancy;
use App\Models\Evaluation;
use App\Repositories\Contracts\ConsultancyRepositoryInterface;
use App\Repositories\Contracts\PaginationInterface;
use App\Repositories\PaginationPresenter;
use Illuminate\Support\Facades\Gate;
use stdClass;

class ConsultancyEloquentORM implements ConsultancyRepositoryInterface
{

    public function __construct(
        protected Consultancy $model,
        protected Evaluation $modelEvaluation,

    ) {
    }

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {



        $result =  $this->model->with('consultor')
            ->with('vehicle_user')
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
    public function findOneEvaluation(string $id): stdClass|null
    {

        $consultant = $this->modelEvaluation->find($id);

        if (!$consultant) {
            return null;
        }
        return (object) $consultant->toArray();
    }


    public function new(CreateConsultancyDTO  $dto): stdClass
    {

        $consultancy = $this->model->create((array) $dto);
        return (object) $consultancy->toArray();
    }
    public function newEvaluation(CreateEvaluationDTO $dto): stdClass
    {

        $evaluation = $this->modelEvaluation->create((array) $dto);
        return (object) $evaluation->toArray();
    }


    /*
    public function delete(string $id): void
    {
 
        $user = $this->model->findOrFail($id);
        /*if (Gate::denies('owner', $user->user->id)) {
            abort(403, 'Not authorized');
        }

        $user->delete();
    }
   /*
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
