<?php include_once '../ColorShop/layout/header_user.php' ?>
<section class="orders container">

    <h1 class="heading">placed orders</h1>

    <div class="box-container">



        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        
            $fetch_order = select_order_where_idKH($id_kh);
            foreach ($fetch_order as $order) {
        ?>
                <div class="box">
                    
                    <p>Order code : <span><?= $order['order_code'] ?></span></p>
                    <p>placed on : <span><?= $order['date'] ?></span></p>
                    <p>name : <span><?= $name ?></span></p>
                    <p>email : <span><?= $email ?></span></p>
                    <p>number : <span><?= $phone ?></span></p>
                    <p>address : <span><?= $address ?></span></p>
                    <p>payment method : <span><?= $order['method'] ?></span></p>
                    <p>total price : <span><?= $order['total_price'] ?></span></p>
                    <p> payment status :<span style="color:<?php if ($order['payment_status'] == 'pending') {
                                                                echo 'red';
                                                            } else {
                                                                echo 'green';
                                                            }; ?>"><?= $order['payment_status']; ?></span> </p>
                    <p>your orders : <span></span></p>

                    <?php
                    $fetch_products = select_order_product_where_maHD($order['order_code']);
                    foreach ($fetch_products as $product) { ?>
                        <div class="product">
                            <div class="text">
                                <p>Name : <?= $product['name'] ?> </p>
                                <p>Price : <?= $product['price'] ?></p>
                                <p>Quantity : <?= $product['so_luong'] ?></p>
                                <p>Total price : <?= $product['don_gia'] ?></p>
                            </div>
                        </div>


                    <?php  } ?>
                    <div>
    <?php
    if($order['payment_status'] == 'pending'){ ?>
    <a class="btn btn-danger m-2" href="index.php?art=order_history&huy_don_hang=<?= $order['order_code'] ?>" onclick="return confirm('Do you want to cancel this order!')">Cancel order !</a>
     <?php   
    }else if($order['payment_status'] == 'completed'){?>
    <a class="btn btn-secondary m-2" style="background: green;" href="">Order completed!</a>
    <?php
    }
    ?>
</div>              

                </div>
            <?php  } 
            }
            else { ?>
            <section>
                <div style="margin-top: 200px;text-align:center;">
                    <h2>No orders placed yet!</h2>
                    <div style="margin-top: 60px;">
                        <a href="index.php" style="color: white;padding:10px 20px;background:red;border-radius:6px;">Quay lại trang chủ</a>
                    </div>
                </div>
            </section>
        <?php } ?>

    </div>

</section>

<?php include_once '../ColorShop/layout/footer_user.php' ?>