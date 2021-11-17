<?php
    include 'header.php';
    include '05-ecommerce-database.php';
?>
    <div class="container">
        <div class="row d-flex justify-content-center">
    <?php
    foreach ($json as $item){
    ?>

        <div class="card mx-3 my-3" style="width: 18rem;">
            <img src="<?php echo $item['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?php echo $item['title'] ?></h5>
<!--                <p class="card-text">--><?php //echo $item['description'] ?><!--</p>-->
                <a href="05-ecommerce-item.php?id=<?php echo $item['id'] ?>" class="btn btn-primary mt-auto">More Details</a>
            </div>
        </div>

    <?php
    }
    ?>

        </div>
    </div>

<?php include 'footer.php'; ?>