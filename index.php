<?php
include "data/produk.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap5/css/bootstrap.min.css">
</head>

<body>
    <section>
        <style>
            .card img {
                width: 100%;
                height: 220px;
                object-fit: cover;
            }
        </style>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2">
                <?php foreach ($produk as $p) : ?>
                    <div class="col my-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/img/produk/<?= $p['foto']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $p['nama']; ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script src="./assets/vendor/bootstrap5/js/bootstrap.min.js"></script>

    <script>
        alert('Berhasil');
    </script>
</body>

</html>