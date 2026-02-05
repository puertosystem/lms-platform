
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Checkout Page</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
<!--=       Checkout Area Start         =-->
<!--=====================================-->
<section class="checkout-page-area section-gap-equal">
    <div class="container">
        <form>
            <div class="checkout-notice">
                <div class="coupn-box">
                    <h6 class="toggle-bar"> Have a coupon?
                        <a href="javascript:void(0)" class="toggle-btn">Click here to enter your code</a>
                    </h6>
                    <div class="toggle-open">
                        <p>If you have a coupon code, please apply it below.</p>
                        <div class="input-group">
                            <input placeholder="Enter coupon code" type="text">
                            <div class="apply-btn">
                                <button type="submit" class="edu-btn btn-medium">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--25">
                <div class="col-lg-6">
                    <div class="checkout-billing">
                        <h3 class="title">Billing Details</h3>
                        <div class="row g-lg-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" id="first-name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input type="text" id="last-name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" id="company-name">
                        </div>
                        <div class="form-group">
                            <label>Email Address*</label>
                            <input type="email" id="email">
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone*</label>
                                    <input type="tel" id="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Country*</label>
                                    <select id="country">
                                        <option value="0">Select Option</option>
                                        <option value="3">Australia</option>
                                        <option value="4">England</option>
                                        <option value="6">New Zealand</option>
                                        <option value="5">Switzerland</option>
                                        <option value="1">United Kindom (UK)</option>
                                        <option value="2">United States (USA)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address*</label>
                            <input type="text" id="address1">
                            <input type="text" id="address2">
                        </div>
                        <div class="form-group">
                            <label>Town/ City*</label>
                            <input type="text" id="town">
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>State*</label>
                                    <select id="state">
                                        <option value="0">Select Option</option>
                                        <option value="1">Australia</option>
                                        <option value="2">England</option>
                                        <option value="3">New Zealand</option>
                                        <option value="4">Switzerland</option>
                                        <option value="5">United Kindom (UK)</option>
                                        <option value="6">United States (USA)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Zip Code*</label>
                                    <input type="tel" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="edu-form-check">
                                <input type="checkbox" id="crt-accnt" class="w-25">
                                <label for="crt-accnt">Create an Accoutn?</label>
                            </div>
                        </div>
                        <div class="form-group mt--50 mb-0">
                            <label>Order Notes</label>
                            <textarea id="notes" rows="4" placeholder="Notes about your order, e.g. speacial notes for delivery."></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="order-summery checkout-summery">
                        <div class="summery-table-wrap">
                            <h4 class="title">Your Orders</h4>
                            <table class="table summery-table">
                                <tbody>
                                    <tr>
                                        <td>Natural Science Project <span class="quantity">x 1</span></td>
                                        <td>$70.30</td>
                                    </tr>
                                    <tr>
                                        <td>The King of Drugs <span class="quantity">x 1</span></td>
                                        <td>$25.50</td>
                                    </tr>
                                    <tr>
                                        <td>The Silver Chair <span class="quantity">x 1</span></td>
                                        <td>$90.00</td>
                                    </tr>
                                    <tr class="order-subtotal">
                                        <td>Sub Total</td>
                                        <td>$150.50</td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>Order Total</td>
                                        <td>$150.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="order-payment">
                        <h4 class="title">Payment</h4>
                        <div class="payment-method">
                            <div class="form-group">
                                <div class="edu-form-check">
                                    <input type="radio" id="pay-bank" name="payment">
                                    <label for="pay-bank">Direct Bank Transfer</label>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                            <div class="form-group">
                                <div class="edu-form-check">
                                    <input type="radio" id="pay-pal" name="payment">
                                    <label for="pay-pal">PayPal</label>
                                    <a href="#">What is Paypal?</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="edu-btn order-place">Place Your order <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
