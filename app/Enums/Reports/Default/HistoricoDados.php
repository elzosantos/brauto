<?php

namespace App\Enums\Reports\Default;
 

enum HistoricoDados:int
{ 
    case REPROVADO = 0; 
    case APROVADO = 1;
    case APONTAMENTO_C_SOLUCAO = 2; 
    case FISICA = 3; 
    case JURIDICA = 4; 
    case SEM_NECESSIDADE = 5; 



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
 