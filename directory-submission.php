<?php
$title = "About Us";
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Title" content="This is the my site">
	<meta name="description" content="This is the my site">
	<meta name="keywords" content="seoebl, seoexpate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Directory Submission</title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include('./includes/style.php') ?>

</head>
<style>
	#myBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 18px;
		border: none;
		outline: none;
		background: #1abc9c;
		color: white;
		cursor: pointer;
		padding: 15px;
		border-radius: 4px;
	}

	#myBtn:hover {
		background-color: #555;
	}
</style>

<body>

	<?php include('./includes/navbar.php') ?>


	<?php include "includes/seo-nav.php" ?>

	<section class="top-body app_development" style="background-image: url(frontend/images/1692873456499.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
			<div class="row">
				<div class="col-12 ecomresp" style="z-index:500;">
					<div class="top_body_txt_part">
						<h1 class="marginbottom text-center" style="font-size: 45px; line-height: 55px;">Directory
							Submission</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================top-body section end here=======================-->

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service eCommerceSEO" style="background: var(--button-bg-hover-color); padding: 15px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
								<li class="breadcrumb-item "><a href="back-link.php" class="text-light">Backlink</a>
								</li>
								<li class="breadcrumb-item active text-light" aria-current="page">Directory Submission
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content">
		<div class="container shadow px-5 py-5">
			<div class="row">
				<div class="col-12 pb-5">
					<h4 class="text-center">What Is Directory Submission?</h4>
					<div class="border-bottom border-3 border-success">
						<p class="text-center">Directory Submission is one of the oldest link building strategies known
							to the internet community. This involves submission of basic information about your website
							to the internet directories. Here we will submit a brief description about the products that
							you would like to promote along with an appropriate title for the submission. </p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<p>While making the submissions, we will also choose the appropriate category under which you wish
						your website to be listed in the directory. Added to that, we will also list the keywords that
						are relevant to your website so that when the directory users make a search using the keywords
						that are relevant to your website, your website will be featured in the directory searches.</p>
					<p>There are different types of internet directories. Some of the web directories are free
						directories; some are paid directories while others are dual directories. You will also find
						internet directories that are dedicated to specific niches or specific fields. We will submit
						your website to free directories.</p>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="clip_img">
						<img src="frontend/images/1_oVU2O7FDEuvFeTMeQQYMZg.jpg" alt="On Page SEO Service" description=" On Page SEO Service" class="img-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================domai_pricing_table section start here=======================-->
	<section class="domai_pricing_table t-shirt-price" style="background: var(--bg-secondary-color) !important;">
		<div class="container">
			<div class="row">
				<h4 class="text-center fw-bold fs-2">Directory Submission Packages</h4>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Package Name: 100DS</h6>
							<span class="value">$25</span>
						</div>
						<div class="content">
							<ul>
								<li class="px-3 text-center"> Total no. of Submission: 100</li>
								<li class="px-3 text-center"> Duration (Days): 9 Days</li>
								<li class="px-3 text-center"> No. of Reports: 1</li>
							</ul>
							<div class="link">
								<a href="#">BUY NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Package Name: 300DS</h6>
							<span class="value">$49</span>
						</div>
						<div class="content">
							<ul>
								<li class="px-3 text-center"> Total no. of Submission: 300</li>
								<li class="px-3 text-center"> Duration (Days): 21 Days</li>
								<li class="px-3 text-center"> No. of Reports: 3</li>
							</ul>
							<div class="link">
								<a href="#">BUY NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Package Name: 500DS</h6>
							<span class="value">$75</span>
						</div>
						<div class="content">
							<ul>
								<li class="px-3 text-center"> Total no. of Submission: 500</li>
								<li class="px-3 text-center"> Duration (Days): 35 Days</li>
								<li class="px-3 text-center"> No. of Reports: 5</li>
							</ul>
							<div class="link">
								<a href="#">BUY NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_pricing_table section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-bottom: unset;">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid #F4B400; background: var(--bg-secondary-color); ">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-5 pb-3">Directory submissions used for three specific reasons:</h6>
					<div>
						<p class="text-success">1. To get back links</p>
					</div>
					<div>
						<p class="text-success">2. To improve the online visibility</p>
					</div>
					<div>
						<p class="text-success">3. To improve traffic rate to websites</p>
					</div>
					<div>
						<p>When you are making Directory Submissions, it is important to select web directories that use
							'do follow' attribute. Only then, you will get back links for your website.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid var(--secondary-text-color); background: var(--bg-secondary-color); padding-top: unset; padding-bottom: unset;">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-5 pb-3">Why Is Manual Directory Submission Important?</h6>
					<div>
						<p>All the search engines including Google do not encourage or allow manipulative ranking
							efforts. If you make use of an automated directory submission tool, your website will be
							submitted to a massive list of random directories in a single click. This will result in a
							sudden blast in your links count. When there is a sudden increase in the links count of your
							website without adequate reasons, then it will set off the alarms with the search engines.
							This can send negative signals to the search engines and your website's credibility will
							become questionable. Once this happens, your website's ranking will plummet in the search
							results. In other words, your directory submission efforts will tend to produce just the
							opposite results that you wanted to achieve. </p>
					</div>
					<div>
						<p>You spend your time and money on directory submissions hoping to improve your website's
							ranking in the search results. If you are not careful with the approach that you use, your
							efforts will make your website's ranking decline rather than improving it. In such
							situations, it would have been better for your website if you had not taken any such
							efforts. In other words, you would have spent your money actually to ruin the existing
							ranking of your website. Manual directory submissions will protect your website from all
							such risks and it will help your website get good quality back links in the most search
							engine friendly way. Our manual directory submission will produce the desired positive
							results. </p>
					</div>
					<div>
						<p>Added to that, when the directory submission process is automated, the total number of
							directory approvals will be much lesser when compared to manual directory submissions. Each
							web directory has its own submission guidelines and restrictions. These submission
							guidelines can be followed only when the submissions are done manually, one directory at a
							time. SubmitEdgeseo.com makes use of 100% manual directory submission process. We have a
							dedicated team of submission experts that will submit your links manually to every single
							directory.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="background: var(--bg-secondary-color);">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid #F4B400; background: #fff;">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-4 pb-3">Key Features</h6>
					<p>Here are some very good reasons why you should select our Directory Submission.</p>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>You can improve your website's online visibility in the most search engine friendly
							way. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span></strong> We will make all the
							submissions manually and no part of the process is automated. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>Your website will get permanent, one way links.</p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>All the directories are carefully screened and only web directories that enjoy good
							reputation are included in our packages. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>Your website's ranking will be boosted in Google and the other search engines. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>We will provide you with a detailed report at the end of the directory submission.
							The report will include the complete list of directories to which we have submitted your
							website along with the landing pages where your links are featured. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>Our directory submission is Google Panda and Google Penguin friendly. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>All the web directories will be 'do follow' directories. </p>
					</div>
					<div>
						<p><strong> <span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong> We submit your website only to high Domain Authority directories. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>You get maximum number of links per package as we follow all the submission
							guidelines to the last detail. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>Your online visibility will be enhanced, as we will create search engine friendly
							titles and descriptions for your submissions. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2"><i class="fa-solid fa-circle-check"></i></span>
							</strong>You have the option to choose from regular submissions and search engine friendly
							submissions. When you choose our search engine friendly submission packages, we will submit
							your website to the directories in a phased manner so that your links count increase
							gradually. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid var(--secondary-text-color); background: var(--bg-secondary-color); padding-top: unset; padding-bottom: unset;">
			<div class="row ">
				<div class="col-12">
					<div>
						<p>Selling your products online is a highly challenging task. Every single day, hundreds of new
							websites are launched. It is needless to say that it just increases the online competition
							and thwarts the small and medium sized businesses that are ill-prepared to fight the online
							competition. Where does your website stand in terms of the online competition? Does your
							website enjoy good online visibility and do you have good ranking in Google for the top
							keywords? SubmitEdgeseo as one of the most experienced link building providers on the web
							knows how challenging it is for webmasters to improve their online visibility and to fight
							the cut-throat competition in every niche. Our directory submission has been very carefully
							crafted to help businesses get good ranking in the search results. We recommend our
							directory submission to all types of websites as we have tested and proven the effectiveness
							of this strategy. It works equally well for brand new websites and also for well established
							websites. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-top: unset;">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid #F4B400; background: var(--bg-secondary-color); ">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-5 pb-3">The Need To Choose Dependable Directory Submission</h6>
					<div>
						<p>As far as directory submission providers are concerned, there is no shortage of options in
							the industry today. However, as a webmaster, you need to be very cautious when you are
							selecting your directory submission provider. SubmitEdgeseo guarantees customers 100% manual
							directory submission and keeps its promise.</p>
					</div>
					<div>
						<p>We have been in the link building industry since 2006 and we have served over 20,000
							customers from various parts of the world. When you choose our directory submission plans,
							we bring with us such a vast experience that no other directory submission provider in the
							industry has and we ensure that your brand gets the desired visibility. We follow the
							industry's best practices in link building. </p>
					</div>
					<div>
						<p>We make sure that every customer that uses our directory submission is successful online.
							Working with a reputed and well-established directory submission provider like SubmitEdgeseo
							protects your brand from unscrupulous providers with very little or no history. We are here
							to establish long term relationship with our customers and that is why you have our
							satisfaction guarantee. Search engines have very little tolerance towards manipulative link
							building strategies today.</p>
					</div>
					<div>
						<p>Therefore, when you are hiring your directory submission providers, you will have to make
							sure that your provider will abide by the latest link building guidelines. Choose our
							directory submission and you will certainly be happy with your choice. We maintain very high
							professional standards in offering our directory submission.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-top: unset;">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid var(--secondary-text-color); background: var(--bg-secondary-color); padding-top: unset; padding-bottom: unset;">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-5 pb-3">SubmitEdgeseo Directory Submission Packages</h6>
					<div>
						<p>At SubmitEdgeseo we understand that every customer that approaches us for their link building
							needs has to work within a specific budget. To help all types of businesses access our
							directory submission easily, we have number of plans. You will be able to find a plan that
							fits your requirements. You will find directory submission plans starting from just 100
							submissions moving up to over 2000 submissions. All the plans are highly comprehensive and
							they come with detailed free report. If you want to get the best value for our money, choose
							our directory submission packages. To build Google friendly back links for your website
							choose one of our link building packages and get impressive back links for your website.
						</p>
					</div>
					<div>
						<p>If you have any questions regarding our directory submission get in touch with us right away
							and we will be happy to assist you. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-top: unset;">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid #F4B400; background: var(--bg-secondary-color); ">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-5 pb-3">Why It Is Best To Consider Directory Submission After The Google
						Updates?</h6>
					<div>
						<p>You must have already built links for your website using directory submissions. If you are
							wondering whether you should consider directory submission again for your link building
							needs, then take it from us, one of the leading link building providers on the web since
							2006, it is best to consider directory submission after Google updates for the following
							reasons:</p>
					</div>
					<div>
						<p><strong><span class="text-success px-2">1.</span></strong> You must have lost some of the
							links that you have built in the past using directory submissions because some of the
							directories that you have used must be no longer functional. Some of the directories could
							have removed your links while purging their directory or while cleaning up the old links.
							Some of the free directories might have now turned into fully paid sites and removed the old
							free listings. These are just some of the reasons for the loss of links that you have built
							using directory submissions in the past. Considering directory submission after Google
							updates will help you gain back your link strength and gain your ranking stability. </p>
					</div>
					<div>
						<p><strong><span class="text-success px-2">2.</span></strong> If the links those you have built
							in the past were not compatible with the latest Google updates then Google would have
							devalued your links this will result in loss of ranking in Google. By considering our
							directory submission after the Google updates, you can now make sure to build links that are
							compatible with Google's latest algorithm. SubmitEdgeseo has updated its directory
							submission to guarantee customers with Google Penguin and Google Panda link building
							solutions. SubmitEdgeseo updates its directory submission after every Google update. It is
							therefore best to consider our directory submission after every Google update to ensure that
							all your back links are compatible with Google's latest ranking algorithm.</p>
					</div>
					<div>
						<p><strong><span class="text-success px-2">3.</span></strong> Thirdly, to protect your website's
							ranking and to save your website from Google's wrath, you might have disavowed links that
							were not compatible with Google's ranking algorithm after the updates this would have
							weakened your link popularity. Using our directory submission after Google updates will put
							your website back on the map by helping you makeup for the lost links.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================accordion section start here=======================-->
	<section class="accordion_service">
		<div class="container">
			<div class="row">
				<h6 class="text-center pb-5 fs-2">FREQUENTLY ASKED QUESTIONS (FAQ)</h6>
				<div id="accordion">
					<div class="accordion-item">
						<h5 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Q. Is your
							directory submission search engine friendly?</h5>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, our directory submission is 100% search engine friendly. We
								update our strategies regularly to comply with the latest Google algorithm. Our
								directory submission is Google Penguin and Google Panda friendly.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Q. Do I need
							to exchange links with any third party websites?
						</h5>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
							<div class="accordion-body">No, all the links that you get will be one way links. There is
								no need to exchange links with any other website.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Q. How
							long will it take for you to complete the link building process?
						</h5>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
							<div class="accordion-body">The total duration for the completion of our directory
								submission will depend on the package you choose. The time-line for each plan is
								indicated in the package details. Please review our directory submission packages for
								more information on the duration for the completion of the link building process.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Q. Is this
							a manual directory submission?
						</h5>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, SubmitEdgeseo offers 100% manual directory submission.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFourr" data-bs-toggle="collapse" data-bs-target="#collapseFourr" aria-expanded="false" aria-controls="collapseFourr">Q. Will
							my website get good quality links?
						</h5>
						<div id="collapseFourr" class="accordion-collapse collapse" aria-labelledby="headingFourr" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, your website will get excellent back links when you choose
								our directory submission. We will submit your website only to high DA directories that
								enjoy good reputation.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Q. How
							much does your directory submission cost?
						</h5>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
							<div class="accordion-body">We feature various packages. The cost of our directory
								submission will depend on the plan that you choose. All the packages are priced very
								nominally to make it easy for everyone to access our directory submission.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFiifty" data-bs-toggle="collapse" data-bs-target="#collapseFiifty" aria-expanded="false" aria-controls="collapseFiifty">Q. How
							are your directory submission priced?
						</h5>
						<div id="collapseFiifty" class="accordion-collapse collapse" aria-labelledby="headingFiifty" data-bs-parent="#accordion">
							<div class="accordion-body">When you select our directory submission, you will be required
								to make just a onetime fee. The links obtained will be permanent one way links but there
								are no monthly subscriptions or any other form of recurring fee.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFouteen" data-bs-toggle="collapse" data-bs-target="#collapseFouteen" aria-expanded="false" aria-controls="collapseFouteen">Q.
							Are the links you get for my website 'do follow' links or 'no follow' links?
						</h5>
						<div id="collapseFouteen" class="accordion-collapse collapse" aria-labelledby="headingFouteen" data-bs-parent="#accordion">
							<div class="accordion-body">All the links that we get for your website are 100% do follow
								links. We do not submit your website to 'no follow' directories. We select directories
								that use 'do follow' attribute at the time of our submissions.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwenty" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">Q. Can
							I use your directory submission for deep link building needs?
						</h5>
						<div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, of course. You can make use of our directory submission for
								your deep linking needs too.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingNinteen" data-bs-toggle="collapse" data-bs-target="#collapseNinteen" aria-expanded="false" aria-controls="collapseNinteen">Q.
							Am I allowed to select my keywords for the submissions?
						</h5>
						<div id="collapseNinteen" class="accordion-collapse collapse" aria-labelledby="headingNinteen" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, you can select up to ten keywords for each URL or each
								order.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwelve" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">Q. How
							to get started with your directory submission ?
						</h5>
						<div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordion">
							<div class="accordion-body">To get started get with our directory submission, review all the
								packages that we have for you and select a package that fits your requirements and
								budget. Use the 'Buy Now' button and follow the instructions to complete the payment
								process. Once you complete the ordering process, send us your website URL and the
								keywords, and our experts will get to work immediately.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================accordion section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start">
		<div class="container">
			<?php include('./includes/seo-build-story.php') ?>
		</div>
	</section>
	<!--================================top_ready_start section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>

	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>
	<script>
		// Get the button
		let mybutton = document.getElementById("myBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
</body>

</html>