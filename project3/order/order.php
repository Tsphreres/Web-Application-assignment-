<?php
$selected_item = isset($_GET['item']) ? urldecode($_GET['item']) : '';
?>
<h1>Place Your Order - Ohereza ibyo wifuza</h1>
<div class="rwandan-note">
    Please fill in your details. Sample Rwandan names: Mugisha, Uwase, Habimana, Mukamana, Niyonshuti, Uwamahoro
</div>
<div class="form-container">
    <form action="process_order.php" method="POST">
        <div class="form-group">
            <label>Full Name (Izina ryose) *</label>
            <input type="text" name="fullname" required placeholder="e.g., Mugisha Jean, Uwase Aline">
        </div>
        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email" required placeholder="example@email.com">
        </div>
        <div class="form-group">
            <label>Phone (Telefone) *</label>
            <input type="tel" name="phone" required placeholder="0788 123 456">
        </div>
        <div class="form-group">
            <label>Menu Item (Ibiryo) *</label>
            <input type="text" name="menu_item" id="menu_item_input" required value="<?php echo htmlspecialchars($selected_item); ?>" placeholder="Select from menu or type item name">
        </div>
        <div class="form-group">
            <label>Delivery Address (Aho uherereye) *</label>
            <textarea name="address" required placeholder="Kigali, Kimironko, Near Bank of Kigali..."></textarea>
        </div>
        <div class="form-group">
            <label>Order Date (Itariki) *</label>
            <input type="date" name="order_date" required>
        </div>
        <button type="submit" class="btn">Place Order - Ohereza</button>
    </form>
</div>
<script>
    const today = new Date().toISOString().split('T')[0];
    const dateInput = document.querySelector('input[name="order_date"]');
    if(dateInput) dateInput.value = today;
</script>
