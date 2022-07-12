<div class="titulo">Olá PHP</div>

<?php
    echo 'Olá';
    echo 'Mundo!';
?>

<h2>Exemplo B</h2> <!-- eh possivel misturar html e php sem problemas -->

<?= "Outra forma de me 'expressar'!" ?>
<br> <!-- quebra de linha tem q ser em html para sair no servidor WEB -->
<?= 6 * 10 + 3 * 3 ?>
<!-- usado diretamente para ecoar algo na tela -->

<?php
phpinfo();