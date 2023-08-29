<?php

namespace App\Enums\Reports\Default;


enum AnaliseMecanicaB: int
{

    case APROVADO = 1;
    case REPROVADO = 2;
    case ANALISE_NECE_DESMO_NA = 3;
    case NOVA = 4;
    case ORIGINAL = 5;
    case MEIA_VIDA = 6;
    case TROCA_BREVE = 7;
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
