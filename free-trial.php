<?php
$title = "Free Trial";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission

    // Retrieve form data
    $name = $_POST['name'];
    $companyName = $_POST['company_name'];
    $companyWebsite = $_POST['company_website'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $serviceType = $_POST['service_type'];
    $imageFileLink = $_POST['image_file_link'];
    $message = $_POST['message'];

    $files = [];
    if (!empty($_FILES['files']['name'][0])) {
        $fileCount = count($_FILES['files']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $originalFileName = $_FILES['files']['name'][$i];
            $fileNameWithoutSpaces = str_replace(' ', '-', $originalFileName); // Replace spaces with hyphens
            $fileName = time() . '-' . $fileNameWithoutSpaces; // Combine timestamp and filename
            $fileTmpName = $_FILES['files']['tmp_name'][$i];
            $fileDestination = 'uploads/' . $fileName; // Set the destination directory
            move_uploaded_file($fileTmpName, $fileDestination); // Move the uploaded file to the destination directory
            $files[] = $fileDestination; // Store the file path in the $files array
        }
    }

    // Encode files array as JSON
    $encodedFiles = json_encode($files);

    // Example: Insert data into database
    require_once 'config/dbconnect.php'; // Include your database connection file
    $db = new DB_con();
    $conn = $db->get_connection();

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_companyName = mysqli_real_escape_string($conn, $companyName);
    $sanitized_companyWebsite = mysqli_real_escape_string($conn, $companyWebsite);
    $sanitized_phone = mysqli_real_escape_string($conn, $phone);
    $sanitized_email = mysqli_real_escape_string($conn, $email);
    $sanitized_address = mysqli_real_escape_string($conn, $address);
    $sanitized_serviceType = mysqli_real_escape_string($conn, $serviceType);
    $sanitized_imageFileLink = mysqli_real_escape_string($conn, $imageFileLink);
    $sanitized_message = mysqli_real_escape_string($conn, $message);

    // Insert data into database
    $insert_query = "INSERT INTO free_trials (name, company_name, company_website, phone, email, address, service_type, files, image_file_link, message) VALUES ('$sanitized_name', '$sanitized_companyName', '$sanitized_companyWebsite', '$sanitized_phone', '$sanitized_email', '$sanitized_address', '$sanitized_serviceType', '$encodedFiles', '$sanitized_imageFileLink', '$sanitized_message')";

    if (mysqli_query($conn, $insert_query)) {
        // Data inserted successfully
        $successMessage = "Form submitted successfully!";

    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
} else {
    // No form submission, do nothing
}
?>

<!--================================photo editor sub Header section end here=======================-->
    <div class="photo_edipth">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <div class="container-fluid ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse  justify-content-center" id="main_nav">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown has-megamenu ">
                                <a class="nav-link dropdown-toggle" href="photo_editor.php" data-bs-toggle="dropdown"> Photo Editing Services </a>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <div class="row g-3">
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="clipping_path.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Clipping Path</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="background_remove.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Photo Background Removing</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="image_masking.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Image Masking</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="shadow_making.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Shadow Making</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="ghost_mannequin.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Ghost Mannequin Effect</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="photo_retouching.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Photo Retouching</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="color_correction.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Color Correction</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="ecommerce_photo_edit.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">E-Commerce Photo Editing</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="jewelry_retouching.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Jewelry Retouching</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="wedding_photo.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Wedding Photo Editing</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="photo_restoration.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Photo Restoration</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="real_estate_photo.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Real Estate Photo Editing</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="image_manipulation.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Image Manipulation</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="col-megamenu pb-2">
                                                <a href="raster_vector.php" class="d-flex">
                                                    <div><i class="fa-regular fa-compass"></i></div>
                                                    <div>
                                                        <h6 class="title">Raster to Vector Conversion</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="graphic_design.php" data-bs-toggle="dropdown"> Graphic Design </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="t-shirt-design.php"> T-Shirt Design</a></li>
                                    <li><a class="dropdown-item" href="logo_design.php">Logo Designs Service</a></li>
                                    <li><a class="dropdown-item" href="banner_design.php">Banner Design</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="photo_editor_pricing.php"> Pricing </a></li>
                            <li class="nav-item"><a class="nav-link" href="photo_edit_portfolio.php"> Portfolio </a></li>
                        </ul>
                        <ul class="navbar-nav booknowbtn">
                            <li class="nav-item">
                                <a type="submit" class="nav-link btn" href="get_quote.php">Get Quote</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--================================photo editor sub Header section end here=======================-->

    <!--================================top-body section start here=======================-->
    <section class="top-body" style="background-image: url(frontend/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
        <div class="container ">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="top_body_txt_part">
                        <h1>Free Trial</h1>
                        <p style="text-align:justify;">SEO Expate photo editor provided you all type of image editing service.  If you like to edit your photo then you can see our service. SEO Expate photo editor give you all type of graphic designs service ex: Clipping Path Service, Jewelry image Retouching Service, ECommerce Photo Editing Service,  Image Masking Service, Image Color Correction Service, Real Estate Photo Editing, Photo Retouchin,  Image background remove service, Image Ghost Mannequin Effect Service, Image Shadow Making Service, Photo Restoration service, Image Manipulation Servic,  Wedding Photo Editing service, Image Raster to Vector Conversion service, Photo Background Removing service,Banner designs service, logo designs service.</p>
                        <p style="text-align:justify;">In the conclusion SEO Expate photo editor company have more then 100 professional graphic designer people who doing graphic designs service for you. If you need to do photo editor person for your business then SEO Expate photo editor company will help you to provide you one suitable and experienced editor person.</p>
                    </div>
                    <div class="top-body-button pt-3">
                        <a type="button" href="free_trial.php">Free Trial</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================top-body section end here=======================-->

    <!--================================cliping_service section start here=======================-->
    <section class="cliping_service photo_edit_all_service tshirtdesign" style="background: var(--button-bg-hover-color);">
        <div class="container">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="breadcumb_gph d-flex">
                        <a href="photo_editor.php" class="text-light"><p>Photo editor</p></a>
                        <p class="px-3 text-light">»</p>
                        <p class="text-light">Free Trial</p>
                    </div>
                    <div class=" pt-2 text-light"><h4 class="fs-1 fw-bold text-center">Free Trial</h4></div>
                </div>
            </div>
        </div>
    </section>
    <!--================================cliping_service section end here=======================-->

    <!--================================free_trail services section start here=======================-->
    <section class="free_trail">
        <div class="container">
            <div class="row">
                <h4>SEO Expate Photo Editor Provide Creative Photo Editing Service</h4>
                <p>Complete Form &  Fill up the Required ( * ) Fields to Submit the Form Properly.</p>
                <div class="col-md-6">
                    <form class="row g-3" id="freeTrialForm" method="POST" action="free-trial.php" enctype="multipart/form-data">

                        <div class="col-12">
                            <label for="fullname" class="form-label">First Name & Last Name <span>*</span></label>
                            <input type="text" name="name" class="form-control" id="fullname" placeholder="Your Full Name">
                            <span id="fullnameError" class="error text-danger"></span>
                        </div>
                        <div class="col-12">
                            <label for="CompanyName" class="form-label">Company Name <span>*</span></label>
                            <input type="text" name="company_name" class="form-control" id="CompanyName" placeholder="Company Name">
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Phone / Whatsapp Number <span>*</span></label>
                            <input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="+8801409957451">
                            <span id="phoneError" class="error text-danger"></span>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email <span>*</span></label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com">
                            <span id="emailError" class="error text-danger"></span>
                        </div>
                        <div class="col-12">
                            <label for="CompanyWebsite" class="form-label">Company Website</label>
                            <input type="text"  name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website" >
                        </div>
                        <div class="col-12">
                            <label for="Addresses" class="form-label">Addresses </label>
                            <input type="text" name="address" class="form-control" id="Addresses" placeholder="Addresses..." >
                        </div>
                        <div class="col-12">
                            <label for="stuf" class="form-label">Select Service Type <span>*</span></label>
                            <select name="service_type" id="stuf" style="width: 100%;" class="form-control">
                                <option value="">Select Service</option>
                                <option value="Clipping Path">Clipping Path</option>
                                <option value="Color Correction">Color Correction</option>
                                <option value="E-Commerce Photo Editing">E-Commerce Photo Editing</option>
                                <option value="Ghost Mannequin Effect">Ghost Mannequin Effect</option>
                                <option value="Image Manipulation">Image Manipulation</option>
                                <option value="Image Masking">Image Masking</option>
                                <option value="Jewelry Retouching">Jewelry Retouching</option>
                                <option value="Photo Background Removing">Photo Background Removing</option>
                                <option value="Photo Restoration">Photo Restoration</option>
                                <option value="Photo Retouching">Photo Retouching</option>
                                <option value="Raster to Vector Conversion">Raster to Vector Conversion</option>
                                <option value="Real Estate Photo Editing">Real Estate Photo Editing</option>
                                <option value="Shadow Making">Shadow Making</option>
                                <option value="Wedding Photo Editing">Wedding Photo Editing</option>
                                <option value="T-Shirt Design">T-Shirt Design</option>
                                <option value="Logo Design">Logo Design</option>
                                <option value="Banner Design">Banner Design</option>
                                <option value="Illustrator Art Work">Illustrator Art Work</option>
                            </select>
                            <span id="serviceTypeError" class="error text-danger"></span>
                        </div>
                        <div class="col-12 ">
                            <label for="file" class="form-label">File Upload (Limit - 1024MB/image, 100 files only) <span>*</span></label>
                            <input type="file" name="files[]" class="form-control" id="file" placeholder="Choose a file" multiple>
                            <span id="filesError" class="error text-danger"></span>
                        </div>
                        <div class="col-12 ">
                            <label for="Image" class="form-label">Image File Link</label>
                            <input type="text" name="image_file_link" class="form-control" id="Image" placeholder="Image Link" >
                        </div>
                        <div class="col-12 ">
                            <label for="type" class="form-label">Message <span>*</span></label>
                            <textarea type="text" name="message" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
                            <span id="messageError" class="error text-danger"></span>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 ">
                    <div class="upload_files">
                        <div class="row">
                            <div class="col-md-6 pt-5">
                                <div class="text-center pb-3"><i class="fa-solid fa-quote-left"></i></div>
                                <h6>WeTransfer</h6>
                                <div class="top-body-button pt-3 text-center">
                                    <a type="button" href="https://wetransfer.com/">File Uplod Here</a>
                                </div>
                            </div>
                            <div class="col-md-6 pt-5">
                                <div class="text-center pb-3"><i class="fa-brands fa-dropbox"></i></div>
                                <h6>DropBox</h6>
                                <div class="top-body-button pt-3 text-center">
                                    <a type="button" href="https://www.dropbox.com/request/1GcUVWYgFRAPeqzbbDfa">File Uplod Here</a>
                                </div>
                            </div>
                            <h3 class="text-center text-success pt-5 pb-3">Upload</h3>
                            <h4>You can send any trail image or photo via WeTransfer or DropBox.</h4>
                            <p>info@seoexpate.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================free_trail services section end here=======================-->

    <!--================================editor_all_services section end here=======================-->
    <section class="WHAT_MAKES footer_btm_all_services"  style="background: unset" >
        <div class="container">
            <div class="row">
                <div class="col-md-3 margintop">
                    <h4>Photoshop Services</h4>
                    <a href="clipping_path.php" class="d-flex pt-4">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Clipping Path Service</h6>
                        </div>
                    </a>
                    <a href="jewelry_retouching.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Jewelry Retouching Service</h6>
                        </div>
                    </a>
                    <a href="ecommerce_photo_edit.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>E-Commerce Photo Editing</h6>
                        </div>
                    </a>
                    <a href="image_masking.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Image Masking Service</h6>
                        </div>
                    </a>
                    <a href="color_correction.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Color Correction Service</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 margintop">
                    <h4>Photoshop Services</h4>
                    <a href="real_estate_photo.php" class="d-flex pt-4">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Real Estate Photo Editing</h6>
                        </div>
                    </a>
                    <a href="photo_retouching.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Photo Retouching</h6>
                        </div>
                    </a>
                    <a href="background_remove.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Remove Background Image</h6>
                        </div>
                    </a>
                    <a href="ghost_mannequin.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Ghost Mannequin Effect</h6>
                        </div>
                    </a>
                    <a href="shadow_making.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Shadow Making Service</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 margintop">
                    <h4>Photoshop Services</h4>
                    <a href="photo_restoration.php" class="d-flex pt-4">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Photo Restoration</h6>
                        </div>
                    </a>
                    <a href="image_manipulation.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Image Manipulation Service</h6>
                        </div>
                    </a>
                    <a href="wedding_photo.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Wedding Photo Editing</h6>
                        </div>
                    </a>
                    <a href="raster_vector.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Raster to Vector Conversion</h6>
                        </div>
                    </a>
                    <a href="background_remove.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Photo Background Removing</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 margintop">
                    <h4>Graphics Design Services</h4>
                    <a href="t-shirt-design.php" class="d-flex pt-4">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>T-Shirt Design</h6>
                        </div>
                    </a>
                    <a href="logo_design.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Logo Designs Service</h6>
                        </div>
                    </a>
                    <a href="banner_design.php" class="d-flex pt-2">
                        <div>
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="what_make-txt">
                            <h6>Banner Design</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--================================editor_all_services section end here=======================-->

    <!--================================Thrive_Globally section start here=======================-->
    <section class="PAY_MENT" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="PAY_IMG">
                    <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="payment" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!--================================Thrive_Globally section end here=======================-->

<script>
    document.getElementById("freeTrialForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
        // Validate form fields
        if (validateForm()) {
            this.submit(); // Submit the form if validation passes
        }
    });

    function validateForm() {
        // Reset error messages
        document.querySelectorAll('.error').forEach(function(element) {
            element.innerHTML = '';
        });

        // Get form inputs
        var fullname = document.getElementById("fullname").value;
        var phone = document.getElementById("inputPassword4").value;
        var email = document.getElementById("inputEmail4").value;
        var serviceType = document.getElementById("stuf").value;
        var files = document.getElementById("file").value;
        var message = document.getElementById("type").value;

        // Perform validation
        var isValid = true;
        if (fullname.trim() === "") {
            document.getElementById("fullnameError").innerHTML = "Please enter your full name.";
            isValid = false;
        }
        if (phone.trim() === "") {
            document.getElementById("phoneError").innerHTML = "Please enter your phone number.";
            isValid = false;
        }
        if (email.trim() === "") {
            document.getElementById("emailError").innerHTML = "Please enter your email address.";
            isValid = false;
        } else if (!isValidEmail(email)) {
            document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
            isValid = false;
        }
        if (serviceType.trim() === "") {
            document.getElementById("serviceTypeError").innerHTML = "Please select a service type.";
            isValid = false;
        }
        if (files.trim() === "") {
            document.getElementById("filesError").innerHTML = "Please select at least one file to upload.";
            isValid = false;
        }
        if (message.trim() === "") {
            document.getElementById("messageError").innerHTML = "Please enter a message.";
            isValid = false;
        }

        return isValid; // Return true if all validations pass
    }

    function isValidEmail(email) {
        // Regular expression for email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>


<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>

