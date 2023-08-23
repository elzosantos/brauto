<?php

namespace App\Enums\Reports\Default;

enum TypeConsultancy: int
{

        case APRESENTACAO = 1;
        case HISTORICO_DADOS = 2;
        case ANALISE_EXTERIOR = 3;
        case BOAT = 4;
        case MOTORBIKE = 5;
        case OTHER = 6;

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
