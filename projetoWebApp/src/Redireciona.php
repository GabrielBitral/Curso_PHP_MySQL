<?php


function Redireciona($url): void
{
    header('Location: '.$url);
    die();
}
