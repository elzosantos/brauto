<?php

namespace App\DTO\Vehicles;

use App\Enums\RecordStatus;
use App\Enums\VehicleStatus;
use App\Http\Requests\StoreUpdateVehicle;

class CreateVehicleDTO
{
    public function __construct(
        public string $brand_id,
        public string $exemplar_id,
        public string $user_id,
        public int $year,
        public string $color,
        public string $tag,
        public string $renavam,
        public string $km,
        public VehicleStatus $status,

    ) {
    }

    public static function makeFromRequest(StoreUpdateVehicle $request): self
    {
        return new self(
            $request->brand_id,
            $request->exemplar_id,
            $request->user_id,
            $request->year,
            $request->color,
            $request->tag,
            $request->renavam,
            $request->km,
            VehicleStatus::ATIVO
        );
    }
}
