<main>
    <div class="container shopping-cart-container">
        <form action="remove-item-from-cart.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                    <tr>
                        <th>
                            <input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item['id']); ?>">
                        </th>
                        <td><?php echo htmlspecialchars($item['title']); ?></td>
                        <td><?php echo htmlspecialchars($item['price']); ?></td>
                        <td>1</td>
                        <td><?php echo htmlspecialchars($item['price']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <button class="btn btn-danger" type="submit">Remove</button>
            </div>
        </form>
    </div>
</main>