<?php
// Lista de usuários (senha já com hash)
// Fazer com que cada usuário cadastrado seja alocado de forma dinâmica como foi feito na parte do mapa 
$usuarios = [
    "Rafael" => password_hash("12345", PASSWORD_DEFAULT),
    "joao"   => password_hash("senha123", PASSWORD_DEFAULT),
    "arthur" => password_hash("54321", PASSWORD_DEFAULT)
];