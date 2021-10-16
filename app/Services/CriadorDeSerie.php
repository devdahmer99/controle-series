<?php
namespace App\Services;

use App\Serie;

class CriadorDeSerie
{

    public function criarSerie(?string $nomeSerie, int $qtdTemporada, int $epPorTemporada): Serie
    {
        $serie = Serie::create(['nome' => $request->$nomeSerie]);
        $qtdTemporadas = $qtd_temporadas;
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            for ($j = 1; $j <= $ep_por_temporada; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }

        return $serie;

    }
}

