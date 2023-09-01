<?php

namespace App\Enums\Reports\Default;


enum AnaliseInterior: int
{

    case REPROVADO = 0;
    case APROVADO = 1;
    case MANUAL = 2;
    case ELETRICO = 3;
    case NA = 4;
    case APROVADO_C_APONTAMENTO = 5;



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
