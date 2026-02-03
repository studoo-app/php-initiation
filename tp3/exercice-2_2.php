<?php

$produits = [
    ["nom" => "Clavier",    "prix" => 45,  "stock" => 12],
    ["nom" => "Souris",     "prix" => 25,  "stock" => 8],
    ["nom" => "Écran",      "prix" => 350, "stock" => 3]
];

$total = 0;
foreach($produits as $produit) {
    $totalProduct = $produit["prix"] * $produit["stock"];
    $total += $totalProduct;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title text-center">Total Stock en euros</h5>
                    <p class="card-text text-center display-5"><?php echo $total ?>€</p>
                </div>
            </div>
        </div>
<!--        <div class="col">-->
<!--            <div class="card bg-danger text-white">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Note Minimale</h5>-->
<!--                    <p class="card-text">--><?php //echo $minNote ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="card bg-primary text-white">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Moyenne</h5>-->
<!--                    <p class="card-text">--><?php //echo $averageNote ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="card bg-warning text-white">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Notes supérieur à 10</h5>-->
<!--                    <p class="card-text">--><?php //echo $notesUpper10 ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <hr>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="text-center">
                <th>Nom</th>
                <th>Prix</th>
                <th>Stock</th>
            </tr>
            </thead>
            <tbody>
            <!-- Vos lignes ici -->
            <?php
                foreach ($produits as $produit) {
                    $nom = $produit["nom"];
                    $prix = $produit["prix"];
                    $stock = $produit["stock"];

                    echo "<tr class='text-center'><td>$nom</td><td>$prix</td><td class='stock'>$stock</td></tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
<script>
    let stockCells = document.querySelectorAll('.stock');
    stockCells.forEach(cell => {
        let stockValue = parseInt(cell.textContent);
        if (stockValue < 5) {
            cell.classList.add('bg-danger', 'text-white');
        } else if (stockValue >= 5 && stockValue <= 10) {
            cell.classList.add('bg-warning', 'text-dark');
        } else {
            cell.classList.add('bg-success', 'text-white');
        }
    });
</script>
</body>
</html>