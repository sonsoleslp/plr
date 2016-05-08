<?php

require_once('class.translation.php');

if(isset($_GET['lang']))
	$translate = new Translator($_GET['lang']);
else
	$translate = new Translator('es');

$mainsection=true;
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>

<?php include 'nav.php'; ?>

	<!-- SLIDER -->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" id="homeSection" style="background-image: url(images/Imagen4.jpg)">
					<div class="carousel-caption container wow slideInLeft section-title">

						<div class="row"><br><br><br>
							<div class="col-sm-12">
								<br><br><br>
								<h1><?php $translate->__('SUBTITLE'); ?></h1>
								<h2>PEDRO LÓPEZ RUIPÉREZ</h2>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div> <!--/#home-carousel-->
    </section>
	<!-- /SLIDER -->



	<!-- ABOUT -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<br>
						<h1><?php $translate->__('CV_SECTION_TITLE'); ?></h1>

					</div>


				<ul class="timeline">
					<br>
					<li class="wow slideInLeft">
						<div class="timeline-badge "><i class="fa fa-graduation-cap"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_1'); ?></h4>
							</div>
							<div class="timeline-body">
								<p><?php $translate->__('CV_CONTENT_1'); ?></p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted wow slideInRight">
						<div class="timeline-badge "><i class="fa fa-university"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_2'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_2'); ?>								</p>
							</div>
						</div>
					</li>
					<li class="wow slideInLeft">
						<div class="timeline-badge "><i class="fa fa-building"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_3'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_3'); ?>
								</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted wow slideInRight">
						<div class="timeline-badge "><i class="fa fa-calculator"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_4'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_4'); ?>
								</p>
							</div>
						</div>
					</li>
					<li class="wow slideInLeft">
						<div class="timeline-badge "><i class="fa fa-code"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_5'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_5'); ?>
								</p>

							</div>
						</div>
					</li>
					<li  class="timeline-inverted wow slideInRight">
						<div class="timeline-badge "><i class="fa fa-group"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_6'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_6'); ?>
								</p>
							</div>
						</div>
					</li>
					<li class="wow slideInLeft">
						<div class="timeline-badge "><i class="fa fa-line-chart"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_7'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_7'); ?>
								</p>
							</div>
						</div>
					</li>
					<li  class="timeline-inverted wow slideInRight">
						<div class="timeline-badge "><i class="fa fa-cube"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><?php $translate->__('CV_TITLE_8'); ?></h4>
							</div>
							<div class="timeline-body">
								<p>
									<?php $translate->__('CV_CONTENT_8'); ?>
								</p>
							</div>
						</div>
					</li>
				</ul>



				</div>
			</div>
		</div>
	</section>
	<!-- /ABOUT -->
	<!-- SERVICES -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<h1><?php $translate->__('SERVICES_SECTION_TITLE'); ?></h1>

					</div>
				</div>

				<div class="wow st-link slideInUp col-lg-4  col-xs-12 col-sm-6 st-service  text-center">
					<a href="#our-works"><img class="iconlink" style="max-height:130px;" src="images/svg/2heights.svg"></a><br><br>
					<h2><?php $translate->__('SERV_TITLE_1'); ?></h2>
					<p><?php $translate->__('SERV_CONTENT_1'); ?></p>
				</div>

				<div class="wow st-link slideInUp col-lg-4  col-xs-12 col-sm-6 st-service  text-center">
					<a href="#estructuras"><img class="iconlink" style="max-height:130px;" src="images/svg/building.svg"></a><br><br>
					<h2><?php $translate->__('SERV_TITLE_2'); ?></h2>
					<p><?php $translate->__('SERV_CONTENT_2'); ?></p>				</div>
				<div class="wow st-link slideInUp col-lg-4  col-xs-12 col-sm-6 st-service  text-center">
					<a href="#pm"><img class="iconlink" style="max-height:130px;" src="images/svg/proj.svg"></a><br><br>
					<h2><?php $translate->__('SERV_TITLE_3'); ?></h2>
					<p><?php $translate->__('SERV_CONTENT_3'); ?></p>
				</div>
				<div class="wow st-link slideInUp col-lg-4  col-xs-12 col-sm-6 st-service  text-center">
					<a href="#otros"><img class="iconlink" style="max-height:130px;" src="images/svg/paper.svg"></a><br><br>
					<h2><?php $translate->__('SERV_TITLE_4'); ?></h2>
					<p><?php $translate->__('SERV_CONTENT_4'); ?></p>
				</div>
				<div class="wow st-link slideInUp col-lg-4  col-xs-12 col-sm-6 st-service  text-center">
					<a href="#otros"><img class="iconlink " style="max-height:130px;" src="images/svg/factory.svg"></a><br><br>
					<h2><?php $translate->__('SERV_TITLE_5'); ?></h2>
					<p><?php $translate->__('SERV_CONTENT_5'); ?></p>
				</div>
				<div class="wow st-link slideInUp col-lg-4  col-xs-12 col-sm-6 st-service  text-center">
					<a href="#otros"><img class="iconlink" style="max-height:130px;" src="images/svg/suitcase.svg"></a><br><br>
					<h2><?php $translate->__('SERV_TITLE_6'); ?></h2>
					<p><?php $translate->__('SERV_CONTENT_6'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<!-- /SERVICES -->
	<!-- OUR WORKS -->
	<section id="our-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<h1><?php $translate->__('ARQ_SETION_TITLE'); ?></h1>
					</div>
				</div>
				<div class="portfolio-wrapper" >
					<div class="col-md-12">
						<ul class="filter">  			
							<li class="wow slideInUp" ><a class="active" href="#" data-filter="*"><?php $translate->__('ARQ_CAT_1'); ?></a></li>
							<li class="wow slideInUp" ><a href="#" data-filter=".uni"><?php $translate->__('ARQ_CAT_2'); ?></a></li>
							<li class="wow slideInUp" ><a href="#" data-filter=".rel"><?php $translate->__('ARQ_CAT_3'); ?></a></li>
							<li class="wow slideInUp" ><a href="#" data-filter=".dep"><?php $translate->__('ARQ_CAT_4'); ?></a></li>
							<li class="wow slideInUp" ><a href="#" data-filter=".ofi"><?php $translate->__('ARQ_CAT_5'); ?></a></li>
							<li class="wow slideInUp" ><a href="#" data-filter=".ind"><?php $translate->__('ARQ_CAT_6'); ?></a></li>
							<li class="wow slideInUp" ><a href="#" data-filter=".cul"><?php $translate->__('ARQ_CAT_7'); ?></a></li>
						</ul><!--/#portfolio-filter-->
					</div>
					
					<div class="portfolio-items">
						

						<div class="col-md-4 col-sm-6 work-grid dep">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-3.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-3.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>MARINA DAVILA</h5>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid  dep">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-4.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-4.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>MARINA DAVILA</h5>

								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid   dep">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-5.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-5.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>MARINA DAVILA</h5>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid html  dep">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-6.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-6.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>MARINA DAVILA</h5>
								</div>
							</div>	
						</div>

						<div class="col-md-4 col-sm-6 work-grid  dep">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-7.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-7.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>MARINA DAVILA</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid  dep">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-8.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-8.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>MARINA DAVILA</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid ind">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-9.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-9.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>ARBO</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid ofi">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-10.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-10.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>AIMEN</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid ofi">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-11.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-11.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>AIMEN</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid rel">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-14.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-14.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Iglesia de San Fausto de Chapela</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid rel">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-15.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-15.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Iglesia de San Fausto de Chapela</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid rel">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-16.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-16.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Iglesia de San Fausto de Chapela</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid rel">
						<div class="portfolio-content text-center">
							<img class="wow zoomIn img-responsive" src="images/works/portfolio-17.jpg" alt="">
							<div class="portfolio-overlay">
								<a href="images/works/portfolio-17.jpg"><i class="fa fa-search-plus"></i></a>
								<h5>Iglesia de Alcabre</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 work-grid rel">
						<div class="portfolio-content text-center">
							<img class="wow zoomIn img-responsive" src="images/works/portfolio-18.jpg" alt="">
							<div class="portfolio-overlay">
								<a href="images/works/portfolio-18.jpg"><i class="fa fa-search-plus"></i></a>
								<h5>Iglesia de Alcabre</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 work-grid rel">
						<div class="portfolio-content text-center">
							<img class="wow zoomIn img-responsive" src="images/works/portfolio-19.jpg" alt="">
							<div class="portfolio-overlay">
								<a href="images/works/portfolio-19.jpg"><i class="fa fa-search-plus"></i></a>
								<h5>Iglesia de Alcabre</h5>
							</div>
						</div>
					</div>
						<div class="col-md-4 col-sm-6 work-grid rel">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-20.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-20.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Iglesia de Alcabre</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid  cul">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>CENTRO CULTURAL CORUXO</h5>

								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 work-grid cul">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-2.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-2.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>CENTRO CULTURAL CORUXO</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-21.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-21.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-22.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-22.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-23.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-23.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-24.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-24.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-12.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-12.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-25.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-25.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 work-grid uni">
							<div class="portfolio-content text-center">
								<img class="wow zoomIn img-responsive" src="images/works/portfolio-26.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-26.jpg"><i class="fa fa-search-plus"></i></a>
									<h5>Particular</h5>
								</div>
							</div>
						</div>

					</div>				
				</div>

			</div>
		</div>
	</section>
	<!-- /OUR WORKS -->







	<!-- ESTRUCTURAS -->
	<section id="estructuras">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<br><br>
						<h1><?php $translate->__('ESTRUCTURAS_SECTION_TITLE'); ?></h1>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="estructuras about-us">

						<p class="wow bounceInDown" ><?php $translate->__('EST_INTRO'); ?></p>

							<p class="estruc wow slideInLeft" data-wow-duration="0.7s" data-wow-delay="0.15s"><?php $translate->__('EST_LI_1'); ?></p>
							<p class="estruc wow slideInRight" data-wow-duration="0.7s" data-wow-delay="0.2s"><?php $translate->__('EST_LI_2'); ?></p>
							<p class="estruc wow slideInLeft" data-wow-duration="0.7s" data-wow-delay="0.25s"><?php $translate->__('EST_LI_3'); ?></p>
							<p class="estruc wow slideInRight" data-wow-duration="0.7s" data-wow-delay="0.3s"><?php $translate->__('EST_LI_4'); ?></p>
							<p class="estruc wow slideInLeft" data-wow-duration="0.7" data-wow-delay="0.35s"><?php $translate->__('EST_LI_5'); ?></p>
							<p class="estruc wow slideInRight" data-wow-duration="0-7s" data-wow-delay="0.4s"><?php $translate->__('EST_LI_6'); ?></p>
							<p class="estruc wow slideInLeft" data-wow-duration="0.7s" data-wow-delay="0.45s"><?php $translate->__('EST_LI_7'); ?></p>

					</div>
				</div>
				<div class="col-sm-6 our-office">
					<div id="office-carousel" class="carousel slide" data-ride="carousel">			
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/office/04.jpg" alt="">
								<p><?php $translate->__('EST_CAP_1'); ?></p>
							</div>

							<div class="item">
								<img src="images/office/02.jpg" alt="">
								<p><?php $translate->__('EST_CAP_2'); ?></p>
							</div>

							<div class="item">
								<img src="images/office/03.jpg" alt="">
								<p><?php $translate->__('EST_CAP_3'); ?></p>
							</div>
							<div class="item">
								<img src="images/office/05.jpg" alt="">
								<p><?php $translate->__('EST_CAP_4'); ?></p>
							</div>
							<div class="item">
								<img src="images/office/06.jpg" alt="">
								<p><?php $translate->__('EST_CAP_5'); ?></p>
							</div>
							<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="office-carousel-right" href="#office-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>		
					</div> <!--/#office-carousel--> 
				</div>
			</div>
		</div>
	</section>
	<!-- /ESTRUCTURAS -->

	<!-- PM -->
	<section id="pm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<br><br>
						<h1><?php $translate->__('PROJECT_SECTION_TITLE'); ?></h1>

					</div>
				</div>
				<div class="wow bounceInLeft col-xs-12  col-md-6">
					<h3><?php $translate->__('MAN'); ?></h3>
					<img class="img-responsive" src="images/office/pm1.jpg" alt=""><br><br>
					<p><?php $translate->__('MAN_P1'); ?></p>
					<p><?php $translate->__('MAN_P2'); ?></p>
					<p><?php $translate->__('MAN_P3'); ?></p>
					<p><?php $translate->__('MAN_P4'); ?></p>


					<ul>
						<li><?php $translate->__('MAN_L1'); ?></li>
						<li><?php $translate->__('MAN_L2'); ?></li>
						<li><?php $translate->__('MAN_L3'); ?></li>
						<li><?php $translate->__('MAN_L4'); ?></li>
						<li><?php $translate->__('MAN_L5'); ?></li>
						<li><?php $translate->__('MAN_L6'); ?></li>
						<li><?php $translate->__('MAN_L7'); ?></li>
						<li><?php $translate->__('MAN_L8'); ?></li>
					</ul>
					<p><?php $translate->__('MAN_P5'); ?></p>
					<ul>
						<li><?php $translate->__('MAN_L9'); ?></li>
						<li><?php $translate->__('MAN_L10'); ?></li>
						<li><?php $translate->__('MAN_L11'); ?></li>
						<li><?php $translate->__('MAN_L12'); ?></li>
						<li><?php $translate->__('MAN_L13'); ?></li>
						<li><?php $translate->__('MAN_L14'); ?></li>
					</ul>
				</div>
				<div class="wow bounceInRight col-xs-12 col-md-6">
					<h3><?php $translate->__('MON'); ?></h3>
					<img class="img-responsive" src="images/office/pm2.jpg" alt=""><br><br>
					<p><?php $translate->__('MON_P1'); ?></p>
					<p><?php $translate->__('MON_P2'); ?></p>
					<p><?php $translate->__('MON_P3'); ?></p>
					<p><?php $translate->__('MON_P4'); ?></p>
					<p><?php $translate->__('MON_P5'); ?></p>

					<ul>
						<li><?php $translate->__('MON_L1'); ?></li>
						<li><?php $translate->__('MON_L2'); ?></li>
						<li><?php $translate->__('MON_L3'); ?></li>
						<li><?php $translate->__('MON_L4'); ?></li>
						<li><?php $translate->__('MON_L5'); ?></li>
						<li><?php $translate->__('MON_L6'); ?></li>
						<li><?php $translate->__('MON_L7'); ?></li>

					</ul>

				</div><br><br>
			</div><br><br>
		</div><br><br>
	</section>
	<!-- /PM -->

	<!-- OTROS -->
	<section id="otros">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<br><br>
						<h1 style="color:#ddd;"><?php $translate->__('OTROS_SECTION_TITLE'); ?></h1>

					</div>
				</div>

				<div class="wow slideInUp  col-sm-4 col-xs-12">
					<div class="st-pricing text-center">
						<h5><?php $translate->__('VAL_TITLE'); ?></h5>
						<div class="st-border"></div>
						<img src="images/image002.jpg" class="img-responsive"><br><br>
						<p><?php $translate->__('VAL_CONTENT_1'); ?></p>
						<p><?php $translate->__('VAL_CONTENT_2'); ?></p>
						<p><?php $translate->__('VAL_CONTENT_3'); ?></p>
					</div>
				</div>

				<div class="wow slideInUp col-sm-8 col-xs-12">

					<div class=" wow slideInUp col-sm-12">
						<div class="st-pricing text-center">
							<h5><?php $translate->__('CERT_TITLE'); ?></h5>
							<div class="st-border"></div>
							<p><?php $translate->__('CERT_CONTENT_1'); ?></p>
							<p><?php $translate->__('CERT_CONTENT_2'); ?></p>
							<p><?php $translate->__('CERT_CONTENT_3'); ?></p>
						</div><br>
					</div>
					<div class="wow slideInUp col-sm-12">
						<div class="st-pricing text-center">
							<h5><?php $translate->__('INSP_TITLE'); ?></h5>
							<div class="st-border"></div>
							<p><?php $translate->__('INSP_CONTENT_1'); ?></p>
							<img src="images/ite.jpg" style="float:left; margin:5px;" class="img-responsive">
							<p><?php $translate->__('INSP_CONTENT_2'); ?></p>
							<p><?php $translate->__('INSP_CONTENT_3'); ?></p>

						</div><br>
					</div>
				</div>
				<br><br><br><br>
			</div>
			<br><br>




		</div>
	</section>
	<!-- /OTROS -->

	<!-- CONTACT -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow slideInLeft section-title">
						<h1><?php $translate->__('CONTACT_SECTION_TITLE'); ?></h1>
						
					</div>
				</div>
				<div class="col-sm-5 contact-info">
					<p class="contact-content wow fadeIn">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2953.8882592005543!2d-8.723061985098122!3d42.23820015078211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f626a0e8b6755%3A0x17371c88d72880c3!2sPedro+L%C3%B3pez+Ruip%C3%A9rez!5e0!3m2!1ses!2ses!4v1458472074901" width="100%" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
					<br><br>
					<p class="st-address wow slideInLeft"><i class="fa fa-map-marker"></i> <strong>c/ Marqués de Valladares, 33, 1º dcha. Vigo, PO</strong></p>
					<p class="st-phone wow slideInRight"><i class="fa fa-phone"></i> <strong>+34   986 44 70 64 / 669 380 375</strong></p>
					<p class="st-email wow slideInLeft"><i class="fa fa-envelope-o"></i> <strong>pedrolr@coag.es</strong></p>
					<p class="st-website wow slideInRight"><i class="fa fa-globe"></i> <strong>www.pedrolopezruiperez.tk</strong></p>
				
				</div>
				<div class="col-sm-6 col-sm-offset-1">
					<form action="email.php?lang=<?php $translate->__('LANG'); ?>" class="contact-form wow rotateInDownRight" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" required="required" placeholder="<?php $translate->__('CONTACT_NAME'); ?>*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="<?php $translate->__('CONTACT_EMAIL'); ?>*">
							</div>
							<div class="col-sm-12">
								<textarea name="message" required="required" cols="30" rows="10" placeholder="<?php $translate->__('CONTACT_MENSAJE'); ?>*"></textarea>
							</div>
							<div class="col-sm-12">
								<!--<input type="submit" name="submit" value="Send Message" class="btn btn-send">-->
								<input type="submit" class="btn btn-send" value="<?php $translate->__('CONTACT_SEND'); ?>">
							</div>

						</div>

					</form>

				</div>
			</div>
		</div>
	</section>
	<!-- /CONTACT -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container wow slideInUp">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<!--<span>Follow us:</span>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest-p"></i></a>-->
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>PEDRO LÓPEZ RUIPÉREZ.</p>
					<p>Designed by Sonsoles López Pernas <a href="http://github.com/sonsoleslp"><i class="fa fa-github"></i></a></p>
					<p>&copy; 2015 <a href="">ShapedTheme</a>. All Rights Reserved.</p>
					<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

<?php include 'footer.php'; ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-56260844-4', 'auto');
	ga('send', 'pageview');

</script>


</body>
</html>