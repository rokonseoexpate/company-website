<div class="col-12 pt-5">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">

            <?php
            $qry = "SELECT * FROM history_galleries WHERE image_type = 2 ORDER BY id DESC";
            if ($result = $conn->query($qry)) {
                $active = true;
                $index = 0;
                while ($row = $result->fetch_assoc()) {
                    $imagePath = $row['image'];
                    $imageName = basename($imagePath);
                    $newImagePath = 'uploads/' . $imageName;
            ?>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $index; ?>" <?php echo $active ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $index; ?>"></button>
            <?php
                    $active = false;
                    $index++;
                }
            }
            ?>
        </div>
        <div class="carousel-inner pb-5">
            <?php
            $result->data_seek(0);
            $active = true;
            while ($row = $result->fetch_assoc()) {
                $imagePath = $row['image'];
                $imageName = basename($imagePath);
                $newImagePath = 'uploads/' . $imageName;
            ?>
                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>" data-bs-interval="10000">
                    <img src="<?php echo $newImagePath; ?>" class="d-block w-100" alt="<?php echo $row['alt_tag'] ?>" description="<?php echo strip_tags($row['alt_description']) ?>">
                </div>
            <?php
                $active = false;
            }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>