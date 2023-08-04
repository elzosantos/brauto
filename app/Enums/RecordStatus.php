<?php

namespace App\Enums;

enum RecordStatus: string
{
    case A =  "Active";
    case I = "Inactive"; 

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
