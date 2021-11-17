<?php include 'header.php'; ?>

<?php


    if(isset($_GET['id'])){
        $idItem = $_GET['id'];
        $url = "https://fakestoreapi.com/products/".$idItem;
        $content = file_get_contents($url);

        if($content !== false){

            $json = json_decode($content, true);
            ?>

            <div class='container text-center'>
                <div class="row">
                    <div class="col-6">
                        <img style="max-width: 50%; height: auto;" src="<?php echo $json['image'] ?>">
                    </div>
                    <div class="col-6">
                        <h2 class='text-capitalize'><?php echo $json['title'] ?></h2>
                    </div>
                </div>
            </div>";


            <?php
        } else {
            header('location: 05-ecommerce.php?errorId=true');
        }
    } else {
        echo 'This is an error';
    }



?>

<?php include 'footer.php'; ?>