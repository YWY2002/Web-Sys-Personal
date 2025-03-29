<div class="row">
    
    <!-- Cart Table -->
    <div class="col-lg-9">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $item['product_name']; ?></td>
                        <td><?= $item['location']; ?></td>
                        <td><?= $item['check_in']; ?></td>
                        <td><?= $item['check_out']; ?></td>
                        <td>$<?= number_format($item['price'], 2); ?></td>
                        <td><?= $item['quantity']; ?></td>
                        <td>$<?= number_format($item['price'] * $item['quantity'], 2); ?></td>
                        <td>
                            <a href="process_cart.php?product_id=<?= $item['product_id']; ?>&quantity=-1" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <!-- Order Summary -->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                <h4>Order Summary</h4>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['cart_summary']) && !empty($_SESSION['cart_summary'])): ?>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between">
                            <span>Subtotal:</span>
                            <span>$<?= number_format($_SESSION['cart_summary']['total_price'], 2); ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>GST (9%):</span>
                            <span>$<?= number_format($_SESSION['cart_summary']['gst'], 2); ?></span>
                        </li>
                        <li class="d-flex justify-content-between total-price">
                            <span>Total:</span>
                            <span>$<?= number_format($_SESSION['cart_summary']['total_price_gst'], 2); ?></span>
                        </li>
                    </ul>
                    <a href="booking.php" class="btn btn-primary btn-lg w-100">Proceed to Checkout</a>
                <?php else: ?>
                    <p>Your order summary is empty.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>