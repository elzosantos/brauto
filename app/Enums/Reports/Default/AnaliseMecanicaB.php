<?php

namespace App\Enums\Reports\Default;


enum AnaliseMecanicaB: int
{

    case REPROVADO = 0;
    case APROVADO = 1;
    case ANALISE_NECE_DESMO_NA = 2;
    case NOVA = 3;     
    case MEIA_VIDA = 4;
    case TROCA_BREVE = 5;
    case NA = 6;

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
