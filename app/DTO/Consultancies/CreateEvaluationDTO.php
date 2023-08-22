<?php

namespace App\DTO\Consultancies;

use App\Enums\ConsultancyStatus;
use App\Enums\GeneralStatus;
use App\Enums\RecordStatus;  
use App\Http\Requests\StoreUpdateEvaluation;

class CreateEvaluationDTO
{
    public function __construct(
        public string $consultancy_id,
        public string $type_consultancy,
        public string $value,
        public GeneralStatus $status

    ) {
    }

    public static function makeFromRequest(StoreUpdateEvaluation $request): self
    {
         
        return new self(
            $request->consultancy_id,
            $request->type_consultancy,
            json_encode($request->all()),
            GeneralStatus::ATIVO
        );
    }
}
