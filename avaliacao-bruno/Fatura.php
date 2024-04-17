<?php

class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;

    // Construtor da classe Fatura
    public function __construct($numero, $descricao, $quantidade, $precoPorItem) {
        $this->setNumero($numero);
        $this->setDescricao($descricao);
        $this->setQuantidade($quantidade);
        $this->setPrecoPorItem($precoPorItem);
    }

    // Métodos getters e setters para cada atributo
    public function getNumero() {
        return $this->numero;

    }
    
    }
?>
