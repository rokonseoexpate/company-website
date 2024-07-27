<?php
$title = "Contact";

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$companyName = $_POST['company_name'];
	$companyWebsite = $_POST['company_website'];
	$type = $_POST['type'];
	$stuf = $_POST['stuf'];
	$description = $_POST['description'];

	$files = [];
	if (!empty($_FILES['attachments']['name'][0])) {
		$fileCount = count($_FILES['attachments']['name']);
		for ($i = 0; $i < $fileCount; $i++) {
			$originalFileName = $_FILES['attachments']['name'][$i];
			$fileNameWithoutSpaces = str_replace(' ', '-', $originalFileName); // Replace spaces with hyphens
			$fileName = time() . '-' . $fileNameWithoutSpaces;
			$fileTmpName = $_FILES['attachments']['tmp_name'][$i];
			$fileDestination = 'uploads/contact/' . $fileName;
			move_uploaded_file($fileTmpName, $fileDestination);
			$files[] = $fileDestination;
		}
	}
	$encodedFiles = json_encode($files);

	$sql = "INSERT INTO contacts(name, email, phone, company_name, company_website, attachments, type, stuf, description) VALUES('$name', '$email', '$phone', '$companyName', '$companyWebsite','$encodedFiles', '$type', '$stuf', '$description')";

	$result = $conn->query($sql);

	if ($result === TRUE) {

		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			// $mail->SMTPDebug = 2;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = '4d5fe1dbbdefcb';                     //SMTP username
			$mail->Password   = 'b7ac257e665ba1';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
			$mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			//Recipients
			$mail->setFrom($email);

			if ($type == 'Career') {
				$mail->addAddress('career@seoexpate.com');
			} else {
				$mail->addAddress('info@seoexpate.com');
			}

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = strtoupper($type);
			$mail->Body    = '<h3> Hello you got the new message from ' . $name . '</h3>
			    <strong> Name : </strong> <span>' . $name . ' </span> <br/>
			    <strong> Email :  </strong> <span>' . $email . ' </span> <br/>
			    <strong> Phone :  </strong> <span>' . $phone . ' </span> <br/>
			    <strong> Company Name :  </strong> <span>' . $companyName . ' </span> <br/>
			    <strong> Company Website :  </strong> <span>' . $companyWebsite . '</span> <br/>
			    <strong> Description :  </strong> <span>' . $description . ' </span>';

			$mailSend = $mail->send();
			if ($mailSend) {

				$_SESSION['successMessage'] = 'Thank you. Your message send success.';

				header("Location: {$_SERVER["HTTP_REFERER"]}");
				exit(0);
			}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}


		$referrer = $_SERVER['HTTP_REFERER'];

		header("Location: contact.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
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
	<meta property="og:title" content="Home - IT Services, Technology Solutions">
	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
	<?php include('./includes/style.php') ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

	<!--================================conversation_away section start here=======================-->
	<section class="conversation_away pbunsetc">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="top_ready_start_txt ">
						<div class="top_about_us_txt" style="z-index:500;">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcumb_gph">
									<li class="breadcrumb-item "><a href="/" class="text-dark ">Home</a></li>
									<li class="breadcrumb-item active text-dark" aria-current="page">» Contact</li>
								</ol>
							</nav>
						</div>
						<h3>We’re just a</h3>
						<h4>Conversation away!</h4>
						<p>We combine international outlook with the knowledge from across the industries and technologies, into creating a digital masterpiece that delivers result.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="top_ready_start_img">
						<img src="frontend/images/95991_prev_ui.png" alt=" Conversation away" description=" Conversation away">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================conversation_away section end here=======================-->

	<!--================================contact_icons section start here=======================-->
	<section class="contact_icons">
		<div class="container">
			<div class="row">
				<div class="col-md-6 borderr">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-solid fa-magnifying-glass fa-rotate-90"></i>
						</div>
						<div class="icon_key_text">
							<p>Looking for Jobs?</p>
							<h5>Current Job Openings</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6 borderb">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-brands fa-searchengin fa-rotate-90"></i>
						</div>
						<div class="icon_key_text">
							<p>Looking for Business Collaboration or Partnership?</p>
							<h5>info@seoexpate.com</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 borderl">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-brands fa-searchengin fa-rotate-90"></i>
						</div>
						<div class="icon_key_text">
							<p>Press Inquiries</p>
							<h5>info@seoexpate.com</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-solid fa-magnifying-glass fa-rotate-90"></i>
						</div>
						<div class="icon_key_text">
							<p>Everything Else</p>
							<h5>info@seoexpate.com</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================contact_icons section end here=======================-->

	<!--================================Our_Offices section start here=======================-->
	<section class="Our_Offices">
		<div class="container">
			<div class="row">
				<div class="Our_Offices_txt pb-5 newudcode">
					<h6 class="fs-1">Our <span class="text-success">Offices</span></h6>
				</div>
				<?php
				$i = 1;
				$qry = "SELECT * FROM branches ORDER BY id DESC";
				$result = mysqli_query($conn, $qry);

				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
						<div class="col-md-6">
							<div class="Our_Offices_map">
								<iframe src="<?php echo $row['map'] ?>" width="300" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="Our_Offices_map_txt newudcode">
								<h6 class="fs-3 text-start pt-3"><?php echo $row['name'] ?></h6>
								<p><?php echo $row['address'] ?></p>
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
	</section>
	<!--================================Our_Offices section end here=======================-->

	<!--================================contact_icons section start here=======================-->
	<section class="contact_icons">
		<div class="container">
			<div class="row">
				<div class="contact_icon_text newudcode">
					<h5 class="text-center pb-5">Drop us a line to Start a Project with us</h5>
				</div>
				<div class="col-md-6 borderr">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-solid fa-pencil" alt=" seo expate" description=" seo expate"></i>
						</div>
						<div class="icon_key_text">
							<p>Ready to share a project?</p>
							<h5>Submit a Form</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6 borderb">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-regular fa-envelope" alt=" seo expate" description=" seo expate"></i>
						</div>
						<div class="icon_key_text">
							<p>Share a detailed specification</p>
							<h5>info@seoexpate.com</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 borderl">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-brands fa-whatsapp" alt=" seo expate" description=" seo expate"></i>
						</div>
						<div class="icon_key_text">
							<p>Connect on WhatsApp</p>
							<h5>+8801409957451</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="contact_icons_txt d-flex">
						<div class="icon_key">
							<i class="fa-brands fa-skype" alt=" seo expate" description=" seo expate"></i>
						</div>
						<div class="icon_key_text">
							<p>Connect on Skype</p>
							<h5>seoexpate</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================contact_icons section end here=======================-->

	<!--================================contact_form section start here=======================-->
	<section class="contact_form" id="contactForm">
		<?php include('./includes/trusted-contact-form.php') ?>
	</section>
	<!--================================contact_form section end here=======================-->

	<!--================================analog_clock section start here=======================-->
	<section class="analog_clock">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<canvas id="canvas" width="150" height="150"></canvas>
					<h5 class="pt-5">USA</h5>
					<p>80 Washington Square E, New York, NY 10003, USA </p>
				</div>
				<div class="col-md-6">
					<div class="container">
						<div class="clock">
							<label style="--i: 1"><span>1</span></label>
							<label style="--i: 2"><span>2</span></label>
							<label style="--i: 3"><span>3</span></label>
							<label style="--i: 4"><span>4</span></label>
							<label style="--i: 5"><span>5</span></label>
							<label style="--i: 6"><span>6</span></label>
							<label style="--i: 7"><span>7</span></label>
							<label style="--i: 8"><span>8</span></label>
							<label style="--i: 9"><span>9</span></label>
							<label style="--i: 10"><span>10</span></label>
							<label style="--i: 11"><span>11</span></label>
							<label style="--i: 12"><span>12</span></label>
							<div class="indicator">
								<span class="hand hour"></span>
								<span class="hand minute"></span>
								<span class="hand second"></span>
							</div>
						</div>
						<div class="mode-switch"></div>
					</div>
					<h5>Bangladesh</h5>
					<p>Floor 1, Kagjipara, SEO Expate Tower, Majhira, <br> Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================analog_clock section end here=======================-->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".submitBtn").click(function() {
				var name = $("#fullname").val();
				var email = $("#inputEmail4").val();
				var phone = $("#inputPassword4").val();
				var company_name = $("#CompanyName").val();
				var company_website = $("#CompanyWebsite").val();
				var stuf = $("#stuf").val();
				var description = $("#summernote").val();

				// Validation for name
				if (name === "") {
					$(".nameErr").php("Please enter your name");
					return;
				} else {
					$(".nameErr").php("");
				}

				// Validation for email
				if (email === "") {
					$(".emailErr").php("Please enter your email");
					return;
				} else {
					$(".emailErr").php("");
				}

				// Validation for phone
				if (phone === "") {
					$(".phoneErr").php("Please enter your phone number");
					return;
				} else {
					$(".phoneErr").php("");
				}

				// Validation for Company name
				if (company_name === "") {
					$(".company_nameErr").php("Please enter your company name");
					return;
				} else {
					$(".company_nameErr").php("");
				}

				// Validation for Company Website
				if (company_website === "") {
					$(".company_websiteErr").php("Please enter your company name");
					return;
				} else {
					$(".company_websiteErr").php("");
				}


				// Validation for stuf
				if (stuf === "") {
					$(".stufErr").php("Please enter number of staff required");
					return;
				} else {
					$(".stufErr").php("");
				}

				// Validation for description
				if (description === "") {
					$(".descriptionErr").php("Please describe your requirements");
					return;
				} else {
					$(".descriptionErr").php("");
				}

				// If all validations pass, submit the form
				$("#hireForm").submit();
			});
		});
	</script>

	<?php
	include('./includes/footer_menu.php');
	?>
	<?php include "includes/script.php" ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>


	<?php if ($_SESSION['successMessage']) : ?>
		<script>
			iziToast.success({
				title: 'Success',
				position: 'topRight',
				message: '<?php echo $_SESSION['successMessage']; ?>',
			});
			<?php unset($_SESSION['successMessage']); ?>
		</script>
	<?php endif; ?>

	<?php if (isset($errorMessage)) : ?>
		<script>
			iziToast.error({
				title: 'Error',
				position: 'topRight',
				message: '<?php echo $errorMessage; ?>',
			});
		</script>
	<?php endif; ?>
</body>

</html>