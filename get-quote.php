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
    $serviceTypes = isset($_POST['service_type']) ? $_POST['service_type'] : array();
    $imageFileLink = $_POST['image_file_link'];
    $message = $_POST['message'];

    // Handle file upload
    $files = [];
    if (!empty($_FILES['files']['name'][0])) {
        $fileCount = count($_FILES['files']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileTmpName = $_FILES['files']['tmp_name'][$i];
            $files[] = $fileName;
            // You can handle file upload here
            move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
        }
    }

    // You can perform further validation and processing here

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
    $sanitized_serviceTypes = array_map(function($item) use ($conn) {
        return mysqli_real_escape_string($conn, $item);
    }, $serviceTypes);
    $sanitized_imageFileLink = mysqli_real_escape_string($conn, $imageFileLink);
    $sanitized_message = mysqli_real_escape_string($conn, $message);

    // Insert data into database
    $insert_query = "INSERT INTO get_quotes (name, company_name, company_website, phone, email, address, service_type, files, image_file_link, message) VALUES ('$sanitized_name', '$sanitized_companyName', '$sanitized_companyWebsite', '$sanitized_phone', '$sanitized_email', '$sanitized_address', '" . implode(',', $sanitized_serviceTypes) . "', '" . implode(',', $files) . "', '$sanitized_imageFileLink', '$sanitized_message')";

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
    // Redirect back to the form page if accessed directly without form submission
    $successMessage = "Form submitted successfully!";
  
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
                            <a class="nav-link dropdown-toggle" href="photo_editor.html" data-bs-toggle="dropdown"> Photo Editing Services </a>
                            <div class="dropdown-menu megamenu" role="menu">
                                <div class="row g-3">
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="clipping_path.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Clipping Path</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="background_remove.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Photo Background Removing</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="image_masking.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Image Masking</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="shadow_making.html" class="d-flex">
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
                                            <a href="ghost_mannequin.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Ghost Mannequin Effect</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="photo_retouching.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Photo Retouching</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="color_correction.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Color Correction</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="ecommerce_photo_edit.html" class="d-flex">
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
                                            <a href="jewelry_retouching.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Jewelry Retouching</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="wedding_photo.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Wedding Photo Editing</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="photo_restoration.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Photo Restoration</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="real_estate_photo.html" class="d-flex">
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
                                            <a href="image_manipulation.html" class="d-flex">
                                                <div><i class="fa-regular fa-compass"></i></div>
                                                <div>
                                                    <h6 class="title">Image Manipulation</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="col-megamenu pb-2">
                                            <a href="raster_vector.html" class="d-flex">
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
                            <a class="nav-link  dropdown-toggle" href="graphic_design.html" data-bs-toggle="dropdown"> Graphic Design </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="t-shirt-design.html"> T-Shirt Design</a></li>
                                <li><a class="dropdown-item" href="logo_design.html">Logo Designs Service</a></li>
                                <li><a class="dropdown-item" href="banner_design.html">Banner Design</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="photo_editor_pricing.html"> Pricing </a></li>
                        <li class="nav-item"><a class="nav-link" href="photo_edit_portfolio.html"> Portfolio </a></li>
                    </ul>
                    <ul class="navbar-nav booknowbtn">
                        <li class="nav-item">
                            <a type="submit" class="nav-link btn" href="get_quote.html">Get Quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--================================photo editor sub Header section end here=======================-->

<!--================================top-body section start here=======================-->
<section class="top-body" style="background-image: url(assets/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
    <div class="container ">
        <div class="row">
            <div class="col-12" style="z-index:500;">
                <div class="top_body_txt_part">
                    <h1>Get Quote</h1>
                    <p style="text-align:justify;">SEO Expate photo editor provided you all type of image editing service.  If you like to edit your photo then you can see our service. SEO Expate photo editor give you all type of graphic designs service ex: Clipping Path Service, Jewelry image Retouching Service, ECommerce Photo Editing Service,  Image Masking Service, Image Color Correction Service, Real Estate Photo Editing, Photo Retouchin,  Image background remove service, Image Ghost Mannequin Effect Service, Image Shadow Making Service, Photo Restoration service, Image Manipulation Servic,  Wedding Photo Editing service, Image Raster to Vector Conversion service, Photo Background Removing service,Banner designs service, logo designs service.</p>
                    <p style="text-align:justify;">In the conclusion SEO Expate photo editor company have more then 100 professional graphic designer people who doing graphic designs service for you. If you need to do photo editor person for your business then SEO Expate photo editor company will help you to provide you one suitable and experienced editor person.</p>
                </div>
                <div class="top-body-button pt-3">
                    <a type="button" href="free_trial.html">Free Trial</a>
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
                    <a href="photo_editor.html" class="text-light"><p>Photo editor</p></a>
                    <p class="px-3 text-light">»</p>
                    <p class="text-light">Get Quote</p>
                </div>
                <div class=" pt-2 text-light"><h4 class="fs-1 fw-bold text-center">Get Quote</h4></div>
                <p class="fs-6 pt-2 fw-bold text-center text-light">Start Your Free Quote With SEO Expate Photo Editor</p>
            </div>
        </div>
    </div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================free_trail services section start here=======================-->
<section class="free_trail">
    <div class="container">
        <div class="row">
            <p>Complete Form &  Fill up the Required ( * ) Fields to Submit the Form Properly.</p>
            <div class="col-12">
                <form class="row g-3 py-5 px-5">
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
                        <label for="stuf" class="form-label">Service Type <span>*</span></label> <br>
                        <div class="pt-2">
                            <input type="checkbox" id="Clipping" name="service_type[]" value="Clipping Path">
                            <label for="Clipping"> Clipping Path</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Color" name="service_type[]" value="Color Correction">
                            <label for="Color"> Color Correction</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Commerce" name="service_type[]" value="E-Commerce Photo Editing">
                            <label for="Commerce"> E-Commerce Photo Editing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Ghost" name="service_type[]" value="Ghost Mannequin Effect">
                            <label for="Ghost"> Ghost Mannequin Effect</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Manipulation" name="service_type[]" value="Image Manipulation">
                            <label for="Manipulation"> Image Manipulation</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Masking" name="service_type[]" value="Image Masking">
                            <label for="Masking">Image Masking</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Jewelry" name="service_type[]" value="Jewelry Retouching">
                            <label for="Jewelry"> Jewelry Retouching</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Background" name="service_type[]" value="Photo Background Removing">
                            <label for="Background"> Photo Background Removing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Restoration" name="service_type[]" value="Photo Restoration">
                            <label for="Restoration"> Photo Restoration</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Retouching" name="service_type[]" value="Photo Retouching">
                            <label for="Retouching"> Photo Retouching</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Vector" name="service_type[]" value="Raster to Vector Conversion">
                            <label for="Vector"> Raster to Vector Conversion</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Estate" name="service_type[]" value="Real Estate Photo Editing">
                            <label for="Estate">Real Estate Photo Editing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Shadow" name="service_type[]" value="Shadow Making">
                            <label for="Shadow"> Shadow Making</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Wedding" name="service_type[]" value="Wedding Photo Editing">
                            <label for="Wedding"> Wedding Photo Editing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Design" name="service_type[]" value="T-Shirt Design">
                            <label for="Design"> T-Shirt Design</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Logo" name="service_type[]" value="Logo Design">
                            <label for="Logo"> Logo Design</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Banner" name="service_type[]" value="Banner Design">
                            <label for="Banner"> Banner Design</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Work" name="service_type[]" value="Illustrator Art Work">
                            <label for="Work">Illustrator Art Work</label><br><br>
                        </div>
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
        </div>
    </div>
</section>
<!--================================free_trail services section end here=======================-->

<!--================================editor_all_services section end here=======================-->
<section class="WHAT_MAKES footer_btm_all_services "  style="background: unset" >
    <div class="container">
        <div class="row">
            <div class="col-md-3 margintop">
                <h4>Photoshop Services</h4>
                <a href="clipping_path.html" class="d-flex pt-4">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Clipping Path Service</h6>
                    </div>
                </a>
                <a href="jewelry_retouching.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Jewelry Retouching Service</h6>
                    </div>
                </a>
                <a href="ecommerce_photo_edit.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>E-Commerce Photo Editing</h6>
                    </div>
                </a>
                <a href="image_masking.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Image Masking Service</h6>
                    </div>
                </a>
                <a href="color_correction.html" class="d-flex pt-2">
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
                <a href="real_estate_photo.html" class="d-flex pt-4">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Real Estate Photo Editing</h6>
                    </div>
                </a>
                <a href="photo_retouching.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Photo Retouching</h6>
                    </div>
                </a>
                <a href="background_remove.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Remove Background Image</h6>
                    </div>
                </a>
                <a href="ghost_mannequin.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Ghost Mannequin Effect</h6>
                    </div>
                </a>
                <a href="shadow_making.html" class="d-flex pt-2">
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
                <a href="photo_restoration.html" class="d-flex pt-4">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Photo Restoration</h6>
                    </div>
                </a>
                <a href="image_manipulation.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Image Manipulation Service</h6>
                    </div>
                </a>
                <a href="wedding_photo.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Wedding Photo Editing</h6>
                    </div>
                </a>
                <a href="raster_vector.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Raster to Vector Conversion</h6>
                    </div>
                </a>
                <a href="background_remove.html" class="d-flex pt-2">
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
                <a href="t-shirt-design.html" class="d-flex pt-4">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>T-Shirt Design</h6>
                    </div>
                </a>
                <a href="logo_design.html" class="d-flex pt-2">
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                    </div>
                    <div class="what_make-txt">
                        <h6>Logo Designs Service</h6>
                    </div>
                </a>
                <a href="banner_design.html" class="d-flex pt-2">
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
                <img src="assets/images/Payment-method-banner-image-1024x73.webp" alt="payment" width="100%">
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

