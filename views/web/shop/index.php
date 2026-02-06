
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Cart Page</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Cart Page</li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1">
            <span></span>
        </li>
        <li class="shape-2 scene"><img data-depth="2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-13.png" alt="shape"></li>
        <li class="shape-3 scene"><img data-depth="-2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-15.png" alt="shape"></li>
        <li class="shape-4">
            <span></span>
        </li>
        <li class="shape-5 scene"><img data-depth="2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-07.png" alt="shape"></li>
    </ul>
</div>

<!--=====================================-->
<!--=           Cart Area Start         =-->
<!--=====================================-->
<section class="cart-page-area edu-section-gap">
    <div class="container">
        <div class="table-responsive">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th scope="col" class="product-remove"></th>
                        <th scope="col" class="product-thumbnail"></th>
                        <th scope="col" class="product-title">Product Name</th>
                        <th scope="col" class="product-price">Price</th>
                        <th scope="col" class="product-quantity">Quantity</th>
                        <th scope="col" class="product-subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="product-remove">
                            <a href="#" class="remove-wishlist"><i class="icon-73"></i></a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="<?php echo $baseUrl; ?>/cursos/detalle-curso"><img src="<?php echo $baseUrl; ?>/assets/images/shop/product-02.jpg" alt="Books"></a>
                        </td>
                        <td class="product-title">
                            <a href="<?php echo $baseUrl; ?>/cursos/detalle-curso">Natural Science Project</a>
                        </td>
                        <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>70.30</td>
                        <td class="product-quantity" data-title="Qty">
                            <div class="pro-qty">
                                <input type="number" class="quantity-input" value="1">
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>70.30</td>
                    </tr>
                    <tr>
                        <td class="product-remove"><a href="#" class="remove-wishlist"><i class="icon-73"></i></a></td>
                        <td class="product-thumbnail"><a href="<?php echo $baseUrl; ?>/cursos/detalle-curso"><img src="<?php echo $baseUrl; ?>/assets/images/shop/product-03.jpg" alt="Digital Product"></a></td>
                        <td class="product-title"><a href="<?php echo $baseUrl; ?>/cursos/detalle-curso">The King of Drugs</a></td>
                        <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>70.00</td>
                        <td class="product-quantity" data-title="Qty">
                            <div class="pro-qty">
                                <input type="number" class="quantity-input" value="1">
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>70.00</td>
                    </tr>
                    <tr>
                        <td class="product-remove"><a href="#" class="remove-wishlist"><i class="icon-73"></i></a></td>
                        <td class="product-thumbnail"><a href="<?php echo $baseUrl; ?>/cursos/detalle-curso"><img src="<?php echo $baseUrl; ?>/assets/images/shop/product-06.jpg" alt="Digital Product"></a></td>
                        <td class="product-title"><a href="<?php echo $baseUrl; ?>/cursos/detalle-curso">The Silver Chair</a></td>
                        <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>70.00</td>
                        <td class="product-quantity" data-title="Qty">
                            <div class="pro-qty">
                                <input type="number" class="quantity-input" value="1">
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>70.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="cart-update-btn-area">
            <div class="input-group product-cupon">
                <input placeholder="Coupon code..." type="text">
                <button type="submit" class="submit-btn"><i class="icon-4"></i></button>
            </div>
            <div class="update-btn">
                <a href="#" class="edu-btn btn-border btn-medium disabled">Update Cart <i class="icon-4"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                <div class="order-summery">
                    <h4 class="title">Cart Totals</h4>
                    <table class="table summery-table">
                        <tbody>
                            <tr class="order-subtotal">
                                <td>Subtotal</td>
                                <td>$210.90</td>
                            </tr>
                            <tr class="order-total">
                                <td>Order Total</td>
                                <td>$210.90</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?php echo $baseUrl; ?>/tienda/checkout" class="edu-btn btn-medium checkout-btn">Process to Checkout <i class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
