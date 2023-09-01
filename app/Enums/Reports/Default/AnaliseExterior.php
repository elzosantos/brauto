<?php

namespace App\Enums\Reports\Default;


enum AnaliseExterior: int
{

    case REPROVADO = 0;
    case APROVADO = 1;
    case ORIGINAL = 2;
    case REPINTURA_SIMPLES = 3;
    case PRESENCA_MASSA = 4;
    case INCONC_MAT_ADES = 5;
    case APONTAMENTO = 6;
    case NA = 7;
    case ND = 8;



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
