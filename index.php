<?php
include_once './products_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

<div class="container my-5">
    <div class="row">

    <?php foreach($products as $product): ?>
        <div class="col-md-3 my-2">
            <div class="card">
                <img style="height: 300px;" src="<?php echo $product['photo']?>" alt="" class="card-img">
                <div class="card-body">
                    <h3 class="card-title text-primary"><?php echo $product['name']?></h3>
                    <p class="badge bg-primary"><?php echo $product['brand']?></p>
                    <h5 class="fw-bold">Sale Price: <?php echo $product['sale_price']?> BDT</h5>
                    <h6 class="text-decoration-line-through">Regular Price: <?php echo $product['regular_price']?> BDT</h6>
                    <div class="card-text">Storage: <?php echo $product['storage']?></div>
                    <div class="card-text">Color: <?php echo $product['color']?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>


</body>
</html>