<?php

namespace App\Enums\Reports\Default;
 

enum AnaliseExterior:int
{ 

    case ORIGINAL = 1;
    case REPINTURA_SIMPLES = 2; 
    case PRESENCA_MASSA = 3; 
    case INCONC_MAT_ADES = 4; 
    case REPROVADO = 5; 
    case APONTAMENTO = 6; 
    case APROVADO = 7; 
    case NA = 8; 
    case ND = 9; 



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
 