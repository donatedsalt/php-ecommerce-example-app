<?php
include_once("components/header.php");
?>

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Wishlist</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Wishlist Start -->
<div class="cart-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Add to Cart</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <tr>
                                <td><a href="#"><img src="img/product-1.png" alt="Image"></a></td>
                                <td><a href="#">Product Name</a></td>
                                <td>$22</td>
                                <td>
                                    <div class="qty">
                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td><button>Add to Cart</button></td>
                                <td><button><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="img/product-2.png" alt="Image"></a></td>
                                <td><a href="#">Product Name</a></td>
                                <td>$22</td>
                                <td>
                                    <div class="qty">
                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td><button>Add to Cart</button></td>
                                <td><button><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="img/product-3.png" alt="Image"></a></td>
                                <td><a href="#">Product Name</a></td>
                                <td>$22</td>
                                <td>
                                    <div class="qty">
                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td><button>Add to Cart</button></td>
                                <td><button><i class="fa fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wishlist End -->
 
<?php
include_once("components/footer.php");
?>