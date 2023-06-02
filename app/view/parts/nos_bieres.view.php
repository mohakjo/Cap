<main>
     <h2 id="biere">Nos bières</h2>
        <div class="container" id="bieres">
        <?php foreach ($nos_bieres as $biere) : ?>
            <div class="biere">

                    <a href="biere.php?nom=<?= $biere['Nom']?>">
                        <img src="public/images/<?= $biere['Nom'] ?>.png" alt="<?= $biere['Nom'] ?>">
                    </a>


                    <h4><?= $biere['Nom'] ?></h4>
                    <p><?= $biere['Prix'] ?></p>

            </div>
        <?php endforeach ?>
    </div>
</main>