<!DOCTYPE HTML>
<html lang="<?php 
define('LANGUAGE_LOADED', true);
require_once(__DIR__ . '/includes/language.php');
echo getCurrentLanguage(); 
?>">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BigPass - <?php echo __('student.personal_title'); ?></title>
<?php
include_once('header.php');
?>
<!--==================================================-->
<!-- Start Solution Hero Section -->
<!--==================================================-->
<div class="solution-hero-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solution-title">
					<h1><?php echo __('student.personal_title'); ?></h1>
				</div>
				<div class="solution-breadcrumb">
					<ul>
						<li><a href="index.php"><?php echo __('nav.home'); ?></a></li>
						<li><a href="solutions.php"><?php echo __('nav.solutions'); ?></a></li>
						<li><?php echo __('student.personal_title'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Solution Hero Section -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Solution Content Section -->
<!--==================================================-->
<div class="solution-content-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="solution-sidebar">
					<h3 class="solution-sidebar-title"><?php echo __('solutions2.solutions_title'); ?></h3>
					<ul class="solution-menu">
						<li>
							<a href="AccessControl.php" class="d-flex align-items-center">
								<i class="bi bi-shield-lock"></i>
								<span><?php echo __('solutions2.two_title'); ?></span>
							</a>
						</li>
						<li>
							<a href="PersonnelAccess.php" class="d-flex align-items-center">
								<i class="bi bi-person-badge"></i>
								<span><?php echo __('personal.personal_title'); ?></span>
							</a>
						</li>
						<li>
							<a href="StudentAttendance.php" class="active d-flex align-items-center">
								<i class="bi bi-mortarboard"></i>
								<span><?php echo __('solutions2.student_title'); ?></span>
							</a>
						</li>
						<li>
							<a href="CafeteriaManagement.php" class="d-flex align-items-center">
								<i class="bi bi-cup-hot"></i>
								<span><?php echo __('solutions2.cf_title'); ?></span>
							</a>
						</li>
						<li>
							<a href="BreakTracking.php" class="d-flex align-items-center">
								<i class="bi bi-clock-history"></i>
								<span><?php echo __('solutions2.break_title'); ?></span>
							</a>
						</li>
						<li>
							<a href="RestaurantCafeTender.php" class="d-flex align-items-center">
								<i class="bi bi-shop"></i>
								<span><?php echo __('solutions2.rest_title'); ?></span>
							</a>
						</li>
					</ul>
					
					<div class="mt-4">
						<h3 class="solution-sidebar-title"><?php echo __('tag.tags_title'); ?></h3>
						<div class="tag-item2">
							<a href="PersonnelAccess.php"><?php echo __('tag.personal_tag'); ?></a>
							<a href="AccessControl.php"><?php echo __('tag.acces_tag'); ?></a>
							<a href="StudentAttendance.php"><?php echo __('tag.student_tag'); ?></a>
							<a href="CafeteriaManagement.php"><?php echo __('tag.cafeteria_tag'); ?></a>
							<a href="BreakTracking.php"><?php echo __('tag.break_tag'); ?></a>
							<a href="RestaurantCafeTender.php"><?php echo __('tag.res_tag'); ?></a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-8">
				<div class="solution-main-content">
					<div class="solution-image">
						<img src="assets/images/resource/rpost2.png" alt="<?php echo __('student.personal_title'); ?>" class="img-fluid">
					</div>
					
					<h2 class="solution-content-title"><?php echo __('student.personal_title'); ?></h2>
					
					<div class="solution-description">
						<p><?php echo __('student.personaltwo_title'); ?></p>
					</div>
					
					<div class="solution-quote">
						<p><?php echo __('student.blog_under'); ?></p>
						<cite><?php echo __('student.quote_cite'); ?></cite>
					</div>
					
					<div class="solution-image-grid">
						<div class="solution-image-item">
							<img src="assets/images/resource/rpost22.png" alt="<?php echo __('student.image1_alt'); ?>">
						</div>
						<div class="solution-image-item">
							<img src="assets/images/resource/rpost2.png" alt="<?php echo __('student.image2_alt'); ?>">
						</div>
					</div>
					
					<div class="solution-description">
						<p><?php echo __('student.collg_6'); ?></p>
						<p><?php echo __('student.blog_desc'); ?></p>
					</div>
					
					<div class="solution-cta">
						<a href="contact.php" class="solution-cta-button"><?php echo __('personal.contact_button'); ?> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Solution Content Section -->
<!--==================================================-->

<?php
include_once('mreferances.php');
include_once('footer.php');
?>