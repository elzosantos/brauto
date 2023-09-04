<?php

namespace App\Enums\Reports\Default;


enum AvaliacaoMecPrev: int
{


    case REPROVADO = 0;
    case APROVADO = 1;
    case MANUAL_CARIMBADO = 2;
    case NOTA_FISCAL = 3;
    case CVC = 4;
    case EFB = 5;
    case AGM = 6;
    case NA = 7;




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
