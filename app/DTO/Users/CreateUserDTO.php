<?php

namespace App\DTO\Supports;

use App\Enums\SupportStatus; 
use App\Http\Requests\StoreUpdateUser;

class CreateUserDTO
{
    public function __construct(
        public string $subject,
        public SupportStatus $status,
        public string $body

    ) {
    }

    public static function makeFromRequest
    (StoreUpdateUser $request): self
    {
        return new self(
            $request->subject,
            SupportStatus::A,
            $request->body
        );
    }
}
