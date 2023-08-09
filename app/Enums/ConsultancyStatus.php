<?php

namespace App\Enums;

enum ConsultancyStatus: string
{
    case A =  "Aprovada";
    case P = "Pendente";
    case C = "Em atendimento";
    case R = "Reprovado";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $consultancy) {
            if ($name == $consultancy->name) {
                return $consultancy->value;
            }
        }
        throw new \ValueError("$name is not valid");
    }
}
