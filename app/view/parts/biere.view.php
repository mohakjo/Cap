<main>
    <div class = 'gauche'>
        <h1><?= $solobiere['Nom']  ?></h1>
        <img src = "public/images/<?= $solobiere['Nom']?>.png" alt="<?= $solobiere['Nom']?>">
    </div>
    <div class = 'droite'>
        <p><?= $solobiere['Description']?></p>
        <div class = 'cara'>
            <h3>Caractéristiques :</h3>
            <ul>
                <li>
                Type de bière : <?= $solobiere['Type']?>
                </li>
                <li>
                    Arômes : <?= $solobiere['Goût']?>
                </li>
                <li>
                Taux d'alcool : <?= $solobiere['Taux_alcool']?>
                </li>
                <li>
                    <ul class = 'prix'>
                    <li>Piment : <?= $solobiere['Piment']?></li>
                    <li>Prix : <?= $solobiere['Prix']?></li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>

</main>