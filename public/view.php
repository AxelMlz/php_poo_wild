<!-- ⛔ DO NOT MODIFY THIS FILE ⛔-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome to the Wild Zoo</title>
</head>

<body>
    <header>
        <h1>Welcome to the Wild Zoo</h1>
    </header>
    <main>
        <div class="animals">
            <?php foreach ($animals ?? [] as $key => $animal) : ?>
                <article>
                    <?php if (method_exists($animal, 'speak')) : ?>
                        <div class="hello">
                            <?= $animal->speak() ?>
                        </div>
                    <?php endif; ?>
                    <div></div>
                    <img class="animal-img" width="100 : '100' . '%' ?>" src="assets/images/animals/<?= method_exists($animal, 'getName') ? $animal->getName() : 'undefined' . $key % 3 ?>.png" alt="">
                    <div class="notice">
                        <div class="title">
                            <h1>
                                <?= method_exists($animal, 'getName') ? $animal->getName() : 'Undefined animal #' . ($key + 1) ?>
                            </h1>
                            <?php if (method_exists($animal, 'isCarnivorous')) : ?>
                                <div class="<?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>"></div>
                            <?php endif ?>
                        </div>
                        <hr />
                        <h2>
                            Size (image) :
                            <?= method_exists($animal, 'getSizeWithUnit') ? $animal->getSizeWithUnit() : 'Undefined size' ?>
                        </h2>
                        <h2>
                            Number of limbs :
                            <?= method_exists($animal, 'getPaws') ? $animal->getPaws() : 'Undefined number of paws' ?>
                        </h2>
                        <h2>
                            is Carnivorous :
                            <?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>
                        </h2>
                        <h2>
                            is Dangerous :
                            <?= $animal->isDangerous() ? 'yes' : 'no' ?>
                        </h2>
                        <h2>
                            is Threatened :
                            <?= method_exists($animal, 'getThreatenedLevel') ? $animal->getThreatenedLevel() : 'Unknown endangerement status' ?>
                        </h2>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>