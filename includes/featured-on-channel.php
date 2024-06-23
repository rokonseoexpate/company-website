<div class="slider pt-5">
                    <div class="owl-carousel">
                        <?php
                        $i = 1;
                        $qry = "SELECT * FROM featured_youtubes ORDER BY sort_by ASC";
                        $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <iframe width="560" height="315" src="<?php echo $row['link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>
                    </div>
                </div>