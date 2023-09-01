<?php

namespace App\Enums\Reports\Default;
 

enum HistoricoDados:int
{ 

    case APROVADO = 1;
    case REPROVADO = 2; 
    case APONTAMENTO_C_SOLUCAO = 3; 
    case FISICA = 4; 
    case JURIDICA = 5;  



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
 