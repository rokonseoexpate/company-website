<?php
$title = "Get Quote";
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
            $fileName = str_replace(' ', '-', $fileName); // Replace spaces with hyphens
            $fileName = time() . '-' . $fileName; // Add timestamp to make it unique
            $files[] = $fileName;
            // You can handle file upload here
            move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
        }
    }

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
    $sanitized_serviceTypes_json = json_encode($sanitized_serviceTypes);
    $sanitized_files_json = json_encode($files);

    $insert_query = "INSERT INTO get_quotes (name, company_name, company_website, phone, email, address, service_type, files, image_file_link, message) VALUES ('$sanitized_name', '$sanitized_companyName', '$sanitized_companyWebsite', '$sanitized_phone', '$sanitized_email', '$sanitized_address', '$sanitized_serviceTypes_json', '$sanitized_files_json', '$sanitized_imageFileLink', '$sanitized_message')";
    
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
  //  $successMessage = "Form submitted successfully!";

}
?>

<?php include 'includes/photo-editing-nav.php' ?>




<!--================================top-body section start here=======================-->
<section class="top-body" style="background-image: url(images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
    <div class="container ">
        <div class="row">
            <div class="col-12" style="z-index:500;">
                <div class="top_body_txt_part">
                    <h1>Get Quote</h1>
                    <p style="text-align:justify;"><a href="index.php" class="text-success">SEO Expate</a> photo editor provided you all type of image editing service.  If you like to edit your photo then you can see our service. SEO Expate photo editor give you all type of graphic designs service ex: Clipping Path Service, Jewelry image Retouching Service, ECommerce Photo Editing Service,  Image Masking Service, Image Color Correction Service, Real Estate Photo Editing, Photo Retouchin,  Image background remove service, Image Ghost Mannequin Effect Service, Image Shadow Making Service, Photo Restoration service, Image Manipulation Servic,  Wedding Photo Editing service, Image Raster to Vector Conversion service, Photo Background Removing service,Banner designs service, logo designs service.</p>
                    <p style="text-align:justify;">In the conclusion <a href="index.php" class="text-success">SEO Expate</a> photo editor company have more then 100 professional graphic designer people who doing graphic designs service for you. If you need to do photo editor person for your business then SEO Expate photo editor company will help you to provide you one suitable and experienced editor person.</p>
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
                            <li class="breadcrumb-item "><a href="index.php" class="text-light ">Home</a></li>
                            <li class="breadcrumb-item "><a href="photo-editor.php" class="text-light">Photo editor</a></li>
                            <li class="breadcrumb-item active text-light" aria-current="page">Get Quote</li>
                        </ol>
                    </nav>
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
                        <label for="fullname" class="form-label">First Name & Last Name  <span>*</span></label>
                        <input type="text" class="form-control" id="fullname" placeholder="Your Full Name" required>
                    </div>
                    <div class="col-12">
                        <label for="CompanyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="CompanyName" placeholder="Company Name" required>
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Phone / Whatsapp Number  <span>*</span></label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email <span>*</span></label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
                    </div>
                    <div class="col-12">
                        <label for="CompanyWebsite" class="form-label">Company Website</label>
                        <input type="text" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
                    </div>
                    <div class="col-12">
                        <label for="Addresses" class="form-label">Addresses </label>
                        <input type="text" class="form-control" id="Addresses" placeholder="Addresses..." required>
                    </div>
                    <div class="col-12">
                        <label for="stuf" class="form-label">Service Type <span>*</span></label> <br>
                        <div class="pt-2">
                            <input type="checkbox" id="Clipping" name="Clipping" value="Clipping">
                            <label for="Clipping"> Clipping Path</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Color" name="Color" value="Color">
                            <label for="Color"> Color Correction</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Commerce" name="Commerce" value="Commerce">
                            <label for="Commerce"> E-Commerce Photo Editing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Ghost" name="Ghost" value="Ghost">
                            <label for="Ghost"> Ghost Mannequin Effect</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Manipulation" name="Manipulation" value="Manipulation">
                            <label for="Manipulation"> Image Manipulation</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Masking" name="Masking" value="Masking">
                            <label for="Masking">Image Masking</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Jewelry" name="Jewelry" value="Jewelry">
                            <label for="Jewelry"> Jewelry Retouching</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Background" name="Background" value="Background">
                            <label for="Background"> Photo Background Removing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Restoration" name="Restoration" value="Restoration">
                            <label for="Restoration"> Photo Restoration</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Retouching" name="Retouching" value="Retouching">
                            <label for="Retouching"> Photo Retouching</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Vector" name="Vector" value="Vector">
                            <label for="Vector"> Raster to Vector Conversion</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Estate" name="Estate" value="Estate">
                            <label for="Estate">Real Estate Photo Editing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Shadow" name="Shadow" value="Shadow">
                            <label for="Shadow"> Shadow Making</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Wedding" name="Wedding" value="Wedding">
                            <label for="Wedding"> Wedding Photo Editing</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Design" name="Design" value="Design">
                            <label for="Design"> T-Shirt Design</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Logo" name="Logo" value="Logo">
                            <label for="Logo"> Logo Design</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Banner" name="Banner" value="Banner">
                            <label for="Banner"> Banner Design</label><br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" id="Work" name="Work" value="Work">
                            <label for="Work">Illustrator Art Work</label><br><br>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="file" class="form-label">File Upload (Limit - 1024MB/image, 100 files only) <span>*</span></label>
                        <input type="file" class="form-control" id="file" placeholder="Choose a file">
                    </div>
                    <div class="col-12">
                        <label for="Image" class="form-label">Image File Link</label>
                        <input type="text" class="form-control" id="Image" placeholder="Image Link" required>
                    </div>
                    <div class="col-12">
                        <label for="type" class="form-label">Message <span>*</span></label>
                        <textarea type="text" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
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

<?php include 'includes/footer-services.php' ?>

<!--================================Thrive_Globally section start here=======================-->
<section class="PAY_MENT" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="PAY_IMG">
                <img src="images/Payment-method-banner-image-1024x73.webp" alt=" seo expate" description=" seo expate" width="100%">
            </div>
        </div>
    </div>
</section>
<!--================================Thrive_Globally section end here=======================-->




<!---->
<!--<script>-->
<!--    document.getElementById("freeTrialForm").addEventListener("submit", function(event) {-->
<!--        event.preventDefault(); // Prevent form submission-->
<!--        // Validate form fields-->
<!--        if (validateForm()) {-->
<!--            this.submit(); // Submit the form if validation passes-->
<!--        }-->
<!--    });-->
<!---->
<!--    function validateForm() {-->
<!--        // Reset error messages-->
<!--        document.querySelectorAll('.error').forEach(function(element) {-->
<!--            element.innerHTML = '';-->
<!--        });-->
<!---->
<!--        // Get form inputs-->
<!--        var fullname = document.getElementById("fullname").value;-->
<!--        var phone = document.getElementById("inputPassword4").value;-->
<!--        var email = document.getElementById("inputEmail4").value;-->
<!--        var serviceType = document.getElementById("stuf").value;-->
<!--        var files = document.getElementById("file").value;-->
<!--        var message = document.getElementById("type").value;-->
<!---->
<!--        // Perform validation-->
<!--        var isValid = true;-->
<!--        if (fullname.trim() === "") {-->
<!--            document.getElementById("fullnameError").innerHTML = "Please enter your full name.";-->
<!--            isValid = false;-->
<!--        }-->
<!--        if (phone.trim() === "") {-->
<!--            document.getElementById("phoneError").innerHTML = "Please enter your phone number.";-->
<!--            isValid = false;-->
<!--        }-->
<!--        if (email.trim() === "") {-->
<!--            document.getElementById("emailError").innerHTML = "Please enter your email address.";-->
<!--            isValid = false;-->
<!--        } else if (!isValidEmail(email)) {-->
<!--            document.getElementById("emailError").innerHTML = "Please enter a valid email address.";-->
<!--            isValid = false;-->
<!--        }-->
<!--        if (serviceType.trim() === "") {-->
<!--            document.getElementById("serviceTypeError").innerHTML = "Please select a service type.";-->
<!--            isValid = false;-->
<!--        }-->
<!--        if (files.trim() === "") {-->
<!--            document.getElementById("filesError").innerHTML = "Please select at least one file to upload.";-->
<!--            isValid = false;-->
<!--        }-->
<!--        if (message.trim() === "") {-->
<!--            document.getElementById("messageError").innerHTML = "Please enter a message.";-->
<!--            isValid = false;-->
<!--        }-->
<!---->
<!--        return isValid; // Return true if all validations pass-->
<!--    }-->
<!---->
<!--    function isValidEmail(email) {-->
<!--        // Regular expression for email validation-->
<!--        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;-->
<!--        return emailRegex.test(email);-->
<!--    }-->
<!--</script>-->


<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>

