<?php
/* *********************************************************************

		Template Name: Page: Modules

 		PAGE-MODULES.PHP
 			> GET_H_MAIN
 			> GET_S_EXAMPLE
			> GET_SIDEBAR
			> GET_F_MAIN

************************************************************************ */
get_header();
?>


<div class="page p_modules">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

		<ul class="modules">

			<?php

			function scan_dir($dir_lm) {
			    $ignored = array('.', '..', '.svn', '.htaccess');

			    $files = array();
			    foreach (scandir($dir_lm) as $file) {
			        if (in_array($file, $ignored)) continue;
			        $files[$file] = filemtime($dir_lm . '/' . $file);
			    }

			    arsort($files);
			    $files = array_keys($files);

			    return ($files) ? $files : false;
			}
			$path = $file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', getcwd() . '\template-modules');
			var_dump($path);

			$dir = is_dir($path);

			var_dump($dir);

			?>

			<?php foreach ($dir as $file) : ?>

			    <?php if( $file != "." && $file != ".." && $file != "index.php"  ) : ?>

			     <li class="modules__item">
			         <a class="modules__link" href="<?php echo $file; ?>"><?php echo $file; ?></a>
			     </li>

			    <?php endif; ?>

			<?php endforeach; ?>

		</ul>

	</main><!-- end page__main -->


	<?php
	/* ************************************************************************
				GET_SIDEBAR
	*************************************************************************** */
	?>
	<?php get_sidebar(); ?>


	<?php
	/* ************************************************************************
				GET_F_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_main'); ?>
	<?php get_footer(); ?>
