<?php
session_start();
session_destroy();
?>
<script>
    window.alert("นำสินค้าออกจากตะกร้าทั้งหมด");
    window.location.replace("show_product.php");
</script>