<main>
    <div class="container shopping-cart-container">
        <form action="shopping-cart-page-controler.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($items as $item) { ?>
                        <?php
                            $subtotal = $item->getSubtotal();
                            $total += $subtotal;
                            ?>
                    <tr>
                        <th>
                            <input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item->getProduct()->id); ?>">
                        </th>
                        <td><?php echo htmlspecialchars($item->getProduct()->title); ?></td>
                        <td><?php echo htmlspecialchars($item->getProduct()->price); ?></td>
                        <td><?php echo htmlspecialchars($item->getQuantity()); ?></td>
                        <td><?php echo htmlspecialchars($item->getSubtotal()); ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td class="tg-0lax" colspan="3"></td>
                        <td class="tg-0lax">TOTAL</td>
                        <td class="tg-0lax"><?php echo htmlspecialchars($total); ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <button class="btn btn-danger" type="submit">Remove</button>
                <a href="./checkout-page-controler.php" class="btn btn-success m-2">Checkout</a>
            </div>
        </form>
    </div>
</main>