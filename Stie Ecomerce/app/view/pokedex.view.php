<main>
    <div class="container pokedex">
        <?php foreach ($pokedex as $pokemon) : ?>
            <div class="pokemon">
                <figure>
                    <a href="">
                        <img src="public/images/pokemon/small/<?= formatNumPokemon($pokemon['num']) ?>.png" alt="<?= $pokemon['nom'] ?>">
                    </a>
                </figure>
                <div class="description">
                    <p class="pokemon-num">No. <?= $pokemon['num'] ?></p>
                    <p class="pokemon-nom"><?= $pokemon['nom'] ?></p>
                    <div class="types">
                        <ul>
                            <?php foreach ($pokemon['types'] as $type) : ?>
                                <li class="type--<?= convertType2Class($type) ?>"><?= $type ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

        <?php if (isset($nbPages) && $nbPages < 1) : ?>
            <nav class="nav-pagination" aria-label="pagination">
                <ul class="pagination">
                    <?php if ($currentPage > 1) : ?>
                        <li><a href="<?= URL ?>pokedex.php?page=<?= ($currentPage - 1) ?>"><span aria-hidden="true">«</span><span class="visuallyhidden">Page précédente</span></a></li>
                    <?php endif ?>
                    <?php for ($i = 1; $i < $nbPages + 1; $i++) : ?>
                        <?php if ($currentPage == $i) : ?>
                            <li <?= ($currentPage == $i) ? 'class="current-page"' : '' ?> <?= ($currentPage == $i) ? 'aria-current="page"' : '' ?>>
                                <span class="visuallyhidden">page </span><?= $i ?>

                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= URL ?>pokedex.php?page=<?= $i ?>">
                                    <span class="visuallyhidden">page </span><?= $i ?>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endfor ?>
                    <?php if ($currentPage < $nbPages) : ?>
                        <li><a href="<?= URL ?>pokedex.php?page=<?= ($currentPage + 1) ?>"><span class="visuallyhidden">Page suivante</span><span aria-hidden="true">»</span></a></li>
                    <?php endif ?>
                </ul>
            </nav>
        <?php endif ?>
    </div>
    
</main>