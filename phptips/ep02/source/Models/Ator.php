<?php
namespace ep02\source\Models;

use CoffeeCode\DataLayer\DataLayer;

Class Ator extends DataLayer{

    public function __construct()
    {
        parent::__construct(
            "ator",
            ["ator_id", "primeiro_nome", "ultimo_nome", "ultima_atualizacao"],
            "id_ator", true);
    }
}

