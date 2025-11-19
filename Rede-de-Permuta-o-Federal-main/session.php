<?php
session_start();

function mostrarUsuarioLogado(): void {
    if (isset($_SESSION['user'])) {
        echo "<p style='color: black;'>Usuário <strong>" . htmlspecialchars($_SESSION['user']) . "</strong> está logado.</p>";
    }
}