<?php

namespace App\Enums\Reports\Default;


enum AvaliacaoMecPrev: int
{

    case    MANUAL_CARIMBADO = 1;
    case NOTA_FISCAL = 2;
    case REPROVADO = 3;
    case CVC = 4;
    case EFB = 5;
    case AGM = 6;
    case APROVADO = 7;
    case NA = 8;




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
