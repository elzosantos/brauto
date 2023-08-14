<?php

namespace App\Enums;
 

enum VehicleStatus:int
{ 

    case ATIVO = 1;
    case INATIVO = 2; 
    public static function fromValue(int $status): string
    {
        foreach (self::cases() as $role) {
            if ($status == $role->value) {
                return $role->name;
            }
        }
        throw new \ValueError("$status is not valid");
    }
}
 