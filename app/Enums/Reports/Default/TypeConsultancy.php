<?php

namespace App\Enums\Reports\Default;

enum TypeConsultancy: int
{

        case APRESENTACAO = 1;
        case HISTORICO_DADOS = 2;
        case ANALISE_EXTERIOR = 3;
        case ANALISE_INTERIOR = 4;
        case ANALISE_MECANICA  = 5;
        case ANALISE_MECANICA_B = 6;
        case ANALISE_PREVENTIVA = 7;

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
