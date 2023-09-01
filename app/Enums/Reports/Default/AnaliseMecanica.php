<?php

namespace App\Enums\Reports\Default;


enum AnaliseMecanica: int
{

    case REPROVADO = 0;
    case APROVADO = 1;

    case PRIMEIRA_LINHA = 2;
    case SEGUNDA_LINHA = 3;
    case MENOR_5_ANOS = 4;
    case MAIOR_5_ANOS = 5;
    case ORIGINAL = 6;
    case NAO_ORIGINAL = 7;
    case NA = 8;
    case DE_76_100 = 9;
    case DE_51_75 = 10;
    case DE_26_50 = 11;
    case DE_1_25 = 12;



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
