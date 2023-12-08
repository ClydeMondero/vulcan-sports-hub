<style><?php include "../styles/check-out.css" ?></style>
<section>
    <div class="checkout-container">
        <div class="title">
            <h1>Order Summary</h1>
        </div>
        <div class="infos">
            <span id="totalAmount">Total: ₱<?php echo number_format($total, 2, '.', ','); ?></span>
            <span>Shipping: Free</span>
        </div>
        <div class="checkout">
            <button class="checkout-btn" >Check out</button>
        </div>
    </div>
</section>