<?php

namespace App\DTO\Consultancies;

use App\Enums\ConsultancyStatus;
use App\Enums\RecordStatus;
use App\Enums\ReportStatus;
use App\Http\Requests\StoreUpdateConsultancy;

class CreateConsultancyDTO
{
    public function __construct(
        public string $consultant_id,
        public string $vehicle_id,
        public ConsultancyStatus $report_status,
        public string $observation,
        public RecordStatus $status

    ) {
    }

    public static function makeFromRequest(StoreUpdateConsultancy $request): self
    {

 
        return new self(
            $request->consultant_id,
            $request->vehicle_id,
            ConsultancyStatus::C,
            "NA",
            RecordStatus::A
        );
    }
}
