<?php
// COOKIE
setcookie("user", "João da Silva", time() + 3600);
setcookie("email", "rodrigosantosweb@gmail.com", time() - 3600);
setcookie("ultima_pesquisa", "tenis adidas", time() + 3600);

echo $_COOKIE["ultima_pesquisa"];