<?php
    require_once __DIR__.'/Categoria.php';
    class Prodotto {
        public $nome;
        public $descrizione;
        public $prezzo;
        public $quantita;
        public $immagine;
        public $categoria;

        function __construct(string $nome, string $descrizione, float $prezzo, string $immagine, int $quantita, Categoria $categoria)
        {
            $this->nome = $nome;
            $this->descrizione = $descrizione;
            $this->prezzo= $prezzo;
            $this->immagine = $immagine;
            $this->quantita = $quantita;
            $this->categoria = $categoria;

        }
    }
?>