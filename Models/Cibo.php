<?php
require_once __DIR__.'/Prodotto.php';
    class Cibo extends Prodotto {
        public $scadenza;

        function __construct(string $nome, string $descrizione, float $prezzo, string $immagine, int $quantita, Categoria $categoria, string $scadenza)
        {
            parent::__construct(
                $nome,
                $descrizione,
                $prezzo,
                $quantita,
                $immagine,
                $categoria
            );
            $this->scadenza = $scadenza;
        }
    }
?>