<?php
    require_once __DIR__.'/Prodotto.php';
    class Gioco extends Prodotto {
        public $materiale;

        function __construct(string $nome, string $descrizione, float $prezzo, string $immagine, int $quantita, Categoria $categoria, string $materiale)
        {
            parent::__construct(
                $nome,
                $descrizione,
                $prezzo,
                $quantita,
                $immagine,
                $categoria
            );
            $this->materiale = $materiale;
        }
    }
?>
