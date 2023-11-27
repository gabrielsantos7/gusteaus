<?php

function css(string $arquivo) :string
{
    return BASE_URL . "public/css/{$arquivo}.css";
}

function componente(string $componente)
{
    require VIEW_PATH . "componentes/{$componente}.view.php";
}

function linkrota($rota = "")
{
    return BASE_URL . "{$rota}";
}