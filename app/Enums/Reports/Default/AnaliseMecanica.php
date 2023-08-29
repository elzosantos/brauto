<?php

namespace App\Enums\Reports\Default;


enum AnaliseMecanica: int
{

    case PRIMEIRA_LINHA = 1;
    case SEGUNDA_LINHA = 2;
    case MENOR_5_ANOS = 3;
    case MAIOR_5_ANOS = 4;
    case ORIGINAL = 5;
    case NAO_ORIGINAL = 6;
    case NA = 7;
    case APROVADO = 8;
    case REPROVADO = 9;
    case DE_76_100 = 10;
    case DE_51_75 = 11;
    case DE_26_50 = 12;
    case DE_1_25 = 13;



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
