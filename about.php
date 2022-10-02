<?php
include("header.php");
?>
        <!-- banner -->
        <section class="banner_w3pvt">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />

<ul>

	<li>
		<div class="banner-top">
			<div class="overlay">
			<div class="container">
			<div class="banner-info">
				<div class="banner-w3ls-inner">
				<br><br><br><br><br><br><br>
					<h4>Apply for business loans online..</h4>
					<b style="color: white;">Take your business to the next level with easy & quick business loan from MyLoanee. Click to apply or know more about the best business loans in India. Best in Marketing. Lower Interest Rate. Fast Processing. Easy to Apply. Minimum Documentation..</b>
					<div class="test-info text-left mt-lg-5 mt-4">
						<a href="about.php" class="btn mr-2">About Us</a>
						<a href="contact.php" class="btn">Contact Us</a>
					</div>
				</div>

			</div>
			</div>
			</div>
		</div>
	</li>

<li>
<div class="banner-top1">
<div class="overlay sec">
<div class="container">
<div class="banner-info">
	<div class="banner-w3ls-inner">
					<h4>Need a Personal Loan</h4>
					<p>A personal loan is the best option if you need funds for an urgent need or a short period..</p>
		<div class="test-info text-left mt-lg-5 mt-4">
			<div class="test-info text-left mt-lg-5 mt-4">
				<a href="about.php" class="btn mr-2">About Us</a>
				<a href="contact.php" class="btn">Contact Us</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</li>
<li>
<div class="banner-top2">
<div class="overlay">
<div class="container">
<div class="banner-info">
	<div class="banner-w3ls-inner">
		<h4>Loan EMI calculator</h4>
		<h3>Business Loans</h3>
		<p>To calculate your EMI, just enter the loan amount, rate of interest and loan tenure, and your EMI is instantly displayed.</p>
		<div class="test-info text-left mt-lg-5 mt-4">
			<div class="test-info text-left mt-lg-5 mt-4">
				<a href="about.php" class="btn mr-2">About Us</a>
				<a href="contact.php" class="btn">Contact Us</a>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>
</li>

</ul>

				<div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>

                </div>
            </div>
        </section>
        <!-- //slider -->
    </div>

    <!-- //banner -->
    <!-- /features -->
    <section class="about py-md-5 py-5" id="loans">
        <div class="container py-md-5">
            <div class="feature-grids row mt-3">
                <div class="col-lg-6 ab-content-img">
                    <img src="images/ab.jpg" alt="" class="img-fluid image1">
                </div>
                <div class="col-lg-6 ab-content-inf pl-lg-5">
                    <h3 class="title-w3ls my-3">Instant Loan @ MyLoanee </h3>
                    <p>We are not yet another online offer comparison site. While we do give you the most exhaustive range of options, we do the last mile and get you the loan also. We strongly believe that financial services is not like an ecommerce business where products are standardized and hence the cheaper the better.</p>
                    <p>Every borrower has a unique financial position and requirement. MyLoanee can help you consolidate all your loans into one to increase your eligibility. Try Applying for a higher Loan Amount as most bank reduce interest rates as loan amount increases..</p>
            </div>
        </div>
    </section>
    <!-- //features -->


<section class="content-info py-5">
	<div class="container py-md-5">

		<h3 class="title-w3ls mb-5 text-center">Loan Types</h3>
		<div class="row">
		<?php
		$sql = "SELECT * FROM  ltyp_loantypes WHERE ltyp_status	='Active'";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			if($rs['ltyp_icon'] == "")
			{
				$icon = "images/noimage.png";
			}
			else if(file_exists("imgloantype/".$rs['ltyp_icon']))
			{
				$icon = "imgloantype/".$rs['ltyp_icon'];
			}
			else
			{
				$icon = "images/noimage.png";
			}
		?>
			<div class="col-lg-4 col-md-6 mt-4">
				<div class="thumbnail card">
					<div class="position-relative">
						<img src="<?php echo $icon; ?>" style="height: 250px;width: 100%;" class="img-fluid" alt="">
					</div>
					<div class="blog-info card-body">
						<h4 class=""><?php echo $rs['ltyp_loantype']; ?></h4>
						<p class="mt-2">
						<b>- Loan Amount -</b> <?php echo moneyFormatIndia($rs['min_loanamt']); ?> - <?php echo moneyFormatIndia($rs['max_loanamt']); ?><br>
						<b>- maximum Month -</b>  <?php echo $rs['ltyp_maxmonth']; ?> months<br>
						<b>- Interest rate -</b> <?php echo $rs['ltyp_interestperc']; ?>% 
						</p>
					</div>
				</div>
			</div>
		<?php
		}
		?>
		</div>
	</div>
</section>
<!-- //banner-botttom -->


    <!--mid -->
    <section class="mid-w3-pvt-content">
        <div class="overlay-inner py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="test-info text-right ml-auto">
                    <h3 class="title-w3ls two">Helping Your Business Reach</h3>
                    <h4 class="tittle">Its Full
                        Potential</h4>
                    <p class="mt-4">Are you a self-employed or salaried individual trying to meet both ends? Have you given a thought about personal loan option? When there is an unusual expense like child's marriage, renovation of your home or furnishing, children’s higher education, family holiday, or any other dream to be turned into reality, make use of the personal loans..</p>
                    <div class="text-right mt-5">
                        <a href="about.php" class="btn mr-2">Read More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //mid-->

    <!-- /services -->
    <div class="welcome py-5">
        <div class="container py-xl-5 py-lg-3" id="services">
            <div class="row">
                <div class="col-lg-5 welcome-left">
                    <h4>What We Provide</h4>
                    <h3 class="title-w3ls mt-2 mb-3">Services we’re Provided</h3>
<ul class="tic-info list-unstyled mt-5">
                        <li>
                            <span class="fa fa-check-square-o mr-2"></span> All Types of Loans available
                        </li>
						
                        <li>

                            <span class="fa fa-check-square-o mr-2"></span> Paperless Loan Application
                        </li>

                        <li>

                            <span class="fa fa-check-square-o mr-2"></span> Repayable in 12 to 60 EMIs

                        </li>
                        <li>

                            <span class="fa fa-check-square-o mr-2"></span>Loan Interest starts from 10%

                        </li>
                        <li>
                            <span class="fa fa-check-square-o mr-2"></span> Easy Online Payment
                        </li>
                    </ul>
                </div>
<?php
$i=0;
$sqlltyp_loantypes = "SELECT * FROM ltyp_loantypes ORDER BY RAND() LIMIT 6";
$qsqlltyp_loantypes= mysqli_query($con,$sqlltyp_loantypes);
while($rsltyp_loantypes = mysqli_fetch_array($qsqlltyp_loantypes))
{
	$ltyp_loantype[$i] = $rsltyp_loantypes['ltyp_loantype'];
	$ltyp_interestperc[$i] = $rsltyp_loantypes['ltyp_interestperc'];
	$i++;
}
?>
                <div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-sm-4 service-1-w3pvt serve-gd1">
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[5]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[5]; ?>%</p>
                            </div>
                        </div>
                        <div class="col-sm-4 service-1-w3pvt serve-gd2">
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[0]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[0]; ?>%</p>
                            </div>
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[1]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[1]; ?>%</p>
                            </div>
                        </div>
                        <div class="col-sm-4 service-1-w3pvt serve-gd3">
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[2]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[2]; ?>%</p>
                            </div>
                            <div class="serve-grid mt-4">
                                <p class="text-li mt-2" style="color: red;"><?php echo $ltyp_loantype[3]; ?>
                                <p class="mt-2"><?php echo $ltyp_interestperc[3]; ?>%</p> </p>
                            </div>
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[4]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[4]; ?>%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->


    <!-- /news-letter -->
    <section class="news-letter-w3-pvt">
        <div class="container contact-form mx-auto text-left">
            <h3 class="title-w3ls two text-left mb-5">Take instant loans @ MyLoanee </h3>
            <form method="post" action="#" class="w3pvt-frm">
                <div class="row subscribe-sec">
                    <p class="news-para col-lg-12">Take instant loans whenever you need, 24x7. Borrow as low as ₹3,000 or as high as ₹5 Lakh. You can get instant cash loans from MyLoanee and also use the same limit with a credit card.</p>
                </div>

            </form>
        </div>
    </section>
    <!-- //news-letter -->
    <!-- /services -->
    <div class="welcome py-5" id="test">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
                    <div class="row">
<?php
$i=0;
$sqlcustomer = "SELECT * FROM cst_customer WHERE cst_status='Active' and cst_type='Customer' ORDER BY RAND() LIMIT 6";
$qsqlcustomer= mysqli_query($con,$sqlcustomer);
while($rscustomer = mysqli_fetch_array($qsqlcustomer))
{
	$cstname[$i] = $rscustomer['cst_fname'] . " " .$rscustomer['cst_mname'] . " " .$rscustomer['cst_lname'];
	$cstimg[$i] = $rscustomer['cst_photo'];
	$i++;
}
?>
<div class="col-sm-4 service-1-w3pvt serve-gd3">
	<div class="serve-grid test-gd mt-4">
		<img src="filecst_photo/<?php echo $cstimg[0]; ?>" alt="" style="width: 160px; height: 160px;" class="img-fluid image1">
		<p class="mt-2"><?php echo $cstname[0]; ?></p>
	</div>
	<div class="serve-grid test-gd mt-4">
		<img src="filecst_photo/<?php echo $cstimg[1]; ?>" style="width: 160px; height: 160px;" alt="" class="img-fluid image1">
		<p class="mt-2"><?php echo $cstname[1]; ?> </p>
	</div>
	<div class="serve-grid test-gd mt-4">
		<img src="filecst_photo/<?php echo $cstimg[2]; ?>" style="width: 160px; height: 160px;" alt="" class="img-fluid image1">
		<p class="mt-2"><?php echo $cstname[2]; ?> </p>
	</div>
</div>

<div class="col-sm-4 service-1-w3pvt serve-gd2">
	<div class="serve-grid test-gd mt-4">
		<img src="filecst_photo/<?php echo $cstimg[3]; ?>" style="width: 160px; height: 160px;" alt="" class="img-fluid image1">
		<p class="mt-2"><?php echo $cstname[3]; ?> </p>
	</div>
	<div class="serve-grid test-gd mt-4">
		<img src="filecst_photo/<?php echo $cstimg[4]; ?>" alt="" class="img-fluid image1" style="width: 160px; height: 160px;" >
		<p class="mt-2"><?php echo $cstname[4]; ?> </p>
	</div>
</div>
<div class="col-sm-4 service-1-w3pvt serve-gd1">
	<div class="serve-grid test-gd mt-4">
		<img src="filecst_photo/<?php echo $cstimg[5]; ?>" style="width: 160px; height: 160px;" alt="" class="img-fluid image1">
		<p class="mt-2"><?php echo $cstname[5]; ?> </p>
	</div>
</div>

                    </div>
                </div>
                <div class="col-lg-5 welcome-left pl-lg-5">
                    <h4>Words </h4>
                    <h3 class="title-w3ls mt-2 mb-3">From Customer
                        Testimonial</h3>

                    <p class="mt-4 test"><span class="fa fa-quote-left"></span> I was in need of an urgent personal loan. Got this website while looking to online apply for personal loan. I applied online and got money within few hours of applying. Happy with the experience.</p>
                    <p class="mt-4 test"><span class="fa fa-quote-left"></span> I will recommend this site to all those who want to apply loan online.</p>
                    <p class="mt-4 test"><span class="fa fa-quote-left"></span> Got suggested by a friend to apply for loan online. It was simple, easy and fast process as promised.</p>
                    <p class="mt-4 test"><span class="fa fa-quote-left"></span> Instant Loans are best for urgent requirements. I applied for the same from MyLoanee. The process to apply was very simple and easy. I got the approval message within seconds and disbursal happened on the same day.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- //services -->
    <?php
include("footer.php");
?>