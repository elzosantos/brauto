<?php

namespace App\Enums;

enum Role: string
{
    case A =  "Admnistrador";
    case U = "Cliente";
    case C = "Consultor";
    case D = "Default";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            if ($name == $status->name) {
                return $status->value;
            }
        }
        throw new \ValueError("$name is not valid");
    }
}
