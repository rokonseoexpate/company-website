<div class="slider pt-5">
    <div class="owl-carousel">
        <?php
        $i = 1;
        $qry = "SELECT * FROM history_galleries WHERE image_type = 4 ORDER BY id DESC";
        $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="image">
                    </div>
                    <h5 class="mb-0 text-center"><b><?php echo $row['short_title'] ?></b></h5>
                    <p class="text-center p-4"><?php echo $row['title'] ?> </p>
                </div>

        <?php
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>


    </div>
</div>