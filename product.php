<?php
include "config/dao.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/productt.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>

  <?php
   include "header.php";
   ?>

<div class="container">
    <div class="a"></div>
    <div class="b">
        <h6>product</h6>
        <h2>Everything</h2>
        <div class="filtering">
            <form action="product.php" class="search-bar"  method="post">
                <input type="search" id="search" name="search" pattern=".*\S.*" >
                <button class="search-btn" type="submit">
                    <span>Search</span>
                </button>
            </form>
            <h6 id="filterr">Filter</h6>
        </div>

    </div>
</div>
<div class="container-product">
    <?php
    $conn = new Database();
    $query1='select COUNT(*) from products';
    $stmt = $conn->select($query1);

    $numberpage = 10;
    $count =$stmt->fetchColumn();
    if(!isset($_GET['start'])){
        $start=0;
    }else{
        $start =$_GET['start'];
    }
    $page=$start*$numberpage;
    $total_page= ceil($count/$numberpage);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['search']==''){
            header('Location: product.php');
        }
        else{
            $query = "select * from products where concat(pro_shape, pro_name) like ? order by pro_id  ";
            $searchText = trim($_POST['search']);
            $param = ["%{$searchText}%"];

            $stmt = $conn->selectParam($query, $param);
            foreach ($stmt as $row){
                echo '<div class="card-product" data-modal="m'.$row['pro_id'].'">
        <div class="image">
            <img src="img/'.$row['pro_name'].'/'.$row['pro_shape'].'.png" width="50%" alt="">
        </div>
        <div class="info-product">
            <h3 class="type">'.$row['pro_name'].'</h3>
            <h4 class="name">'.$row['pro_name'].' '.$row['pro_shape'].'</h4>
            <span>$'.$row['pro_price'].'</span>
        </div>

    </div>
    <div class="modal" id="m'.$row['pro_id'].'">
        <div class="modal-content">
            <div class="x"> <span id="closeBT">&times</span></div>

            <section class="product">
                <div class="product__photo">
                    <div class="photo-container">
                        <div class="photo-main">
                            <img src="img/'.$row['pro_name'].'/'.$row['pro_shape'].'.png" width="50%" alt="">
                        </div>
                    </div>
                </div>
                <div class="product__info">

                    <div class="title">
                        <h1>'.$row['pro_name'].' '.$row['pro_shape'].'</h1>
                        <span>Stock: 1</span>
                    </div>
                    <div class="price">
        $ <span>'.$row['pro_price'].'</span>
                    </div>

                    <div class="description">
                        <h3>Description</h3>
                        <p>'.$row['pro_desrip'].'</p>
                    </div>
                    <a href="img/'.$row['pro_name'].'/'.$row['pro_file'].'" download><button class="buy--btn">Read More</button></a>
                    <button class="buy--btn">Compare</button>
                </div>
            </section>
        </div>
    </div>';
            }
        }

    }
        else {
            $query = 'select * from products limit ' . $page . ',' . $numberpage;
            $stmt = $conn->select($query)->fetchAll(PDO::FETCH_ASSOC);

            foreach ($stmt as $row) {
                echo '<div class="card-product" data-modal="m'.$row['pro_id'].'">
        <div class="image">
            <img src="img/'.$row['pro_name'].'/'.$row['pro_shape'].'.png" width="50%" alt="">
        </div>
        <div class="info-product">
            <h3 class="type">'.$row['pro_name'].'</h3>
            <h4 class="name">'.$row['pro_name'].' '.$row['pro_shape'].'</h4>
            <span>$'.$row['pro_price'].'</span>
        </div>

    </div>
    <div class="modal" id="m'.$row['pro_id'].'">
        <div class="modal-content">
            <div class="x"> <span id="closeBT">&times</span></div>

            <section class="product">
                <div class="product__photo">
                    <div class="photo-container">
                        <div class="photo-main">
                            <img src="img/'.$row['pro_name'].'/'.$row['pro_shape'].'.png" width="50%" alt="">
                        </div>
                    </div>
                </div>
                <div class="product__info">

                    <div class="title">
                        <h1>'.$row['pro_name'].' '.$row['pro_shape'].'</h1>
                        <span>Stock: 1</span>
                    </div>
                    <div class="price">
        $ <span>'.$row['pro_price'].'</span>
                    </div>

                    <div class="description">
                        <h3>Description</h3>
                        <p>'.$row['pro_desrip'].'</p>
                    </div>
                    <a href="img/'.$row['pro_name'].'/'.$row['pro_file'].'" download><button class="buy--btn">Read More</button></a>
                    <button class="buy--btn">Compare</button>
                </div>
            </section>
        </div>
    </div>';}

    ?>
    
</div>

<div id="pagination">
    <a>Pages</a>
        <?php
        for($i=0; $i < $total_page; $i++){
            $x=$i +1;
            echo '<a href="product.php?start='.$i.'" style="margin-left:4% ">'.$x.'</a>';
        }}
        ?>
</div>
</body>
<script>
    const fil = document.querySelector('.filter');
    const list = document.querySelector('.hide');

    function go() {
        fil.classList.toggle('active');
        list.classList.toggle('active')
    }
    // Modalshow
    var cards = document.querySelectorAll('.card-product');
    var closebuttons = document.querySelectorAll('#closeBT');

    cards.forEach(function(card) {
        card.addEventListener('click', function() {
            var modal = card.getAttribute('data-modal');
            document.getElementById(modal).classList.toggle('active');
        });
    })

    closebuttons.forEach(function(closebt) {
        closebt.addEventListener('click', function() {
            var modal = (closebt.closest(".modal").style.display = "none")
        })
    })
    window.onclick = function(e) {
        if (e.target.classList.contains('modal')) {
            e.target.style.display = 'none';
        }
    };

</script>

</html>