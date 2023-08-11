<?php

namespace App\Enums;

enum Role: string
{
    case A =  "Administrador";
    case U = "Cliente";
    case C = "Consultor";
    case D = "Default";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $role) {
            if ($name == $role->name) {
                return $role->value;
            }
        }
        throw new \ValueError("$name is not valid");
    }
}
