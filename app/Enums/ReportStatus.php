<?php

namespace App\Enums;

enum ReportStatus: string
{
    case A =  "Aprovado";
    case R = "Reprovado"; 
    
    case E = "Em análise"; 

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            if ($name == $status->name) {
                return $status->value;
            }
        }
        throw new \ValueError("$name is not valid");
    }
}
