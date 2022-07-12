<div class="titulo">Integração HTML</div>

<h1 center>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>
<!-- Lembrar da boa prática! se é possível fazer sem misturar muito html e php, faça.
Escolher sempre o caminho mais simples. Evitar confusão -->

<br>
<div center><button dobro><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        /*php calculando o parametro do css*/
        background-color: #f4acb7;
        color: white;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: blue;
    }

    [dobro] {
        font-size: <?= 10 - 8 ?>rem;
    }
</style>