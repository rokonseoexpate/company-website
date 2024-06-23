<div class="slider pt-5">
                    <div class="owl-carousel">
                        <?php
                        $i = 1;
                        $qry = "SELECT * FROM history_galleries WHERE image_type = 3 ORDER BY id DESC";
                        $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $imagePath = $row['image'];
                                $imageName = basename($imagePath);
                                $newImagePath = 'uploads/' . $imageName;
                        ?>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="<?php echo $newImagePath; ?>" alt="<?php echo $row['alt_tag'] ?>" description="<?php echo strip_tags($row['alt_description']) ?>">
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
                
                <div class="bbb_main_container">
                    <div class="bbb_viewed_slider_container">
                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                            <div class="owl-item">
                                <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/mukto-sokal.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/6578bb0f9469d.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/logo-fb.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/loggo.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/bogura.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/jaijaidin.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/satmatha.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/mukto-sokal.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="frontend/images/daily-korotoya.png" alt="We're Highlighted On" description="We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>