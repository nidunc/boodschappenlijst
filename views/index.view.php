<?php require('partials/header.php'); ?>

<h1>Boodschappenlijst</h1>

<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($groceries as $item) :
            $total_price = 0;
            $name = $item->name();
            $price = $item->price();
            $display_price = formatEuro($price);
            $quantity = $item->number();
            $subtotal = $item->price() * $quantity;
            $subtotal_display = formatEuro($subtotal);
            $total_price += $subtotal;
        ?>
            <tr>
                <td><?= $name; ?></td>
                <td class="productPrice"><?= $display_price; ?></td>
                <td><input type="number" class="productQuantity" title="Select quantity of <?= $name; ?>" value="<?= $quantity; ?>" min="0" step="1"></td>
                <td class="productTotalCost"><?= $subtotal_display ?></td>
            </tr>
        <?php endforeach;
        $display_total = formatEuro($total_price); ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Totaal</td>
            <td id="totalCost"><?= $display_total; ?></td>
        </tr>
    </tfoot>
</table>

<?php require('partials/footer.php'); ?>