<?php

namespace App\Enums\Reports\Default;
 

enum AnaliseInterior:int
{ 

    case MANUAL = 1;
    case ELETRICO = 2; 
    case APROVADO = 3; 
    case REPROVADO = 4; 
    case NA = 5; 
    case APROVADO_C_APONTAMENTO = 6; 



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
 