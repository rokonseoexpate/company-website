<?php
$title = "Free Trial";
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Title" content="Seo Expate Bangladesh LTD.">
    <meta name="description" content="Seo Expate Bangladesh LTD.">
    <meta name="keywords" content="seoebl, seoexpate, Seo Expate Bangladesh LTD.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <meta property="og:title" content="free trail - IT Services, Technology Solutions">

    <?php include('./includes/style.php') ?>

    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "native_language_names": true,
            "detect_browser_language": true,
            "url_structure": "sub_domain",
            "languages": ["en", "fr", "de", "it", "es"],
            "wrapper_selector": ".gtranslate_wrapper",
            "horizontal_position": "left",
            "vertical_position": "bottom"
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

</head>

<body>
<?php include "includes/navbar.php" ?>
<?php include 'includes/photo-editing-nav.php' ?>

<!--================================top-body section start here=======================-->
<section class="top-body" style="background-image: url(frontend/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
    <div class="container ">
        <div class="row">
            <div class="col-12" style="z-index:500;">
                <div class="top_body_txt_part">
                    <h1>Free Trial</h1>
                    <p style="text-align:justify;">SEO Expate photo editor provided you all type of image editing service. If you like to edit your photo then you can see our service. SEO Expate photo editor give you all type of graphic designs service ex: Clipping Path Service, Jewelry image Retouching Service, ECommerce Photo Editing Service, Image Masking Service, Image Color Correction Service, Real Estate Photo Editing, Photo Retouchin, Image background remove service, Image Ghost Mannequin Effect Service, Image Shadow Making Service, Photo Restoration service, Image Manipulation Servic, Wedding Photo Editing service, Image Raster to Vector Conversion service, Photo Background Removing service,Banner designs service, logo designs service.</p>
                    <p style="text-align:justify;">In the conclusion SEO Expate photo editor company have more then 100 professional graphic designer people who doing graphic designs service for you. If you need to do photo editor person for your business then SEO Expate photo editor company will help you to provide you one suitable and experienced editor person.</p>
                </div>
                <div class="top-body-button pt-3">
                    <a type="button" href="free-trial.php">Free Trial</a>
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
                <div class="top_about_us_txt" style="z-index:500;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcumb_gph">
                            <li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
                            <li class="breadcrumb-item "><a href="graphic-design-and-photo-editing.php" class="text-light">Photo editor</a></li>
                            <li class="breadcrumb-item active text-light" aria-current="page">Free Trial</li>
                        </ol>
                    </nav>
                </div>
                <div class=" pt-2 text-light">
                    <h4 class="fs-1 fw-bold text-center">Free Trial</h4>
                </div>
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
            <p>Complete Form & Fill up the Required ( * ) Fields to Submit the Form Properly.</p>
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
                        <input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website">
                    </div>
                    <div class="col-12">
                        <label for="Addresses" class="form-label">Addresses </label>
                        <input type="text" name="address" class="form-control" id="Addresses" placeholder="Addresses...">
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
                        <input type="text" name="image_file_link" class="form-control" id="Image" placeholder="Image Link">
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
                        <div class="newudcode">
                            <h2 class="text-center text-success pt-5 pb-3">Upload</h2>
                        </div>
                        <div class="newudcode">
                            <p class="fs-3 fw-bold">You can send any trail image or photo via WeTransfer or DropBox.</p>
                        </div>

                        <p>info@seoexpate.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================free_trail services section end here=======================-->

<?php include 'includes/footer-services.php' ?>

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


<?php
include('./includes/footer_menu.php');
?>

<script src="frontend/js/jquery-3.5.1.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/owl.carousel.js"></script>
<script src="frontend/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" ></script>


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




<?php if (isset($successMessage)): ?>
    <script>
        iziToast.success({
            title: 'Success',
            position: 'topRight',
            message: '<?php echo $successMessage; ?>',
        });
    </script>
<?php endif; ?>

<?php if (isset($errorMessage)): ?>
    <script>
        iziToast.error({
            title: 'Error',
            position:'topRight',
            message: '<?php echo $errorMessage; ?>',
        });
    </script>
<?php endif; ?>
</body>
</html>

