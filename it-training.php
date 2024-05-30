<?php
$title = "It Training";
ob_start();
?>

    <div class="py-5">
        <div class="container">
            <h4>Data Not Found</h4>
        </div>
    </div>

<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>