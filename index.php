<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ucg-caamc
 */

get_header();
?>
<main>
		<section id="video-slider">
			<video id="background-video" autoplay loop muted poster="<?=get_template_directory_uri()?>/img/header_bg.jpg">
				<source src="<?=get_field('main-link-in-banner', 2);?>" type="video/mp4">
			</video>
		</section>
		
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 class="title line">О конгрессе</h2>
						<div class="blocks">
							<div class="block">
								<div class="bl"><img src="<?=get_template_directory_uri()?>/img/icon-date.png" alt="Date"> Дата:</div>
								<div class="br"><?=get_field('data_o_kongresse', 2);?></div>
							</div>
							<div class="block">
								<div class="bl"><img src="<?=get_template_directory_uri()?>/img/icon-marker.png" alt="Place"> Место:</div>
								<div class="br"><?=get_field('mesto_kongressa', 2);?></div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<p><?=get_field('about-the-congress', 2);?></p>
					</div>
				</div>					
				<div class="row">
					<div class="col-md-4">
						<div class="blocks b2">
							<div class="block">
								<div class="bl long"><img src="<?=get_template_directory_uri()?>/img/icon-time.png" alt="Time"> До конгресса осталось</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="timer">
							<div class="bt"><div id="tday"></div><span>дней</span></div>
							<div class="bt"><div id="thours"></div><span>часов</span></div>
							<div class="bt"><div id="tminutes"></div><span>минут</span></div>
							<div class="bt"><div id="tseconds"></div><span>секунд</span></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="speakers">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="title">спикеры конгресса</h2>
							<div class="blocks">
								<?php if (have_posts()) : query_posts(array('posts_per_page' => 9, 'cat' => 5)); ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="block">
											<div class="img">
												<div class="country <?=get_field('flag_strany');?>"><?=get_field('strana_spikera');?></div>
												<?= get_the_post_thumbnail() ?>
											</div>
											<p class="name"><?php the_title(); ?></p>
											<p class="category"><?=get_field('brend_spikera');?></p>
											<a class="btn-mobile popup-modal" href="#speaker<?=the_ID()?>">Подробнее</a>
											<p class="desc"><?=get_field('opisanie_spikera');?></p>
										</div>
										<div class="blockMobile mfp-hide" id="speaker<?=the_ID()?>">
											<div class="img">
												<div class="country <?=get_field('flag_strany');?>"><?=get_field('strana_spikera');?></div>
												<?= get_the_post_thumbnail() ?>
											</div>
											<p class="name"><?php the_title(); ?></p>
											<p class="category"><?=get_field('brend_spikera');?></p>
											<p class="desc"><?=get_field('opisanie_spikera');?></p>
										</div>
									<?php endwhile; ?>
								<?php endif;
								wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section id="about">
			<div class="bg-rec">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-5 content">

							<h2 class="title">О нас</h2>
							<p><?=get_field('o_nas', 2);?></p>
							<a href="#form" class="btn btn-color">Связаться с нами</a>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="partners">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title">Наши партнеры</h2>
						<div class="partners-items">
							<?php echo get_post_field('post_content', 2); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="partners">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title">Наши спонсоры</h2>
						<div class="partners-items">
							<?php echo get_post_field('post_content', 412); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="info">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<div class="img">
							<img src="<?=get_template_directory_uri()?>/img/20-years.png" alt="20 years celebrating">
						</div>	
						</div>
						<div class="col-md-6">
							<div class="block">
								<p><?=get_field('opisanie_o_posvyashhenii', 2);?></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="block">
								<a href="#form" class="btn btn-color">Принять участие <div class="icon-arr"></div></a>
							</div>
						</div>
				</div>
			</div>
		</section>

		

		<section id="programm">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<h2 class="title">Программа конгресса</h2>
							<div class="tabs-wrap">
								<ul class="tabs">
									<li data-tab-target="#program1" class="tab active"><span><?=get_field('pervyj_den', 2);?></span><?=get_field('data_pervogo_dnya', 2);?></li>
									<li data-tab-target="#program2" class="tab"><span><?=get_field('vtoroj_den', 2);?></span><?=get_field('data_vtorogo_dnya', 2);?></li>
								</ul>
								<div class="tab-content">
									<div data-tab-content id="program1" class="active">
										<?php if (have_posts()) : query_posts(array('posts_per_page' => 20, 'cat' => 6)); ?>
											<?php while (have_posts()) : the_post(); ?>
												<div class="list <?if(get_field('first-last') == '1') echo 'accent';?>">
													<div class="lb left">
														<div class="time"><?=get_field('vremya');?></div>
														<div class="type"><?=get_field('lekcziya_vystuplenii');?></div>
													</div>
													<div class="lb center">
														<div class="img">
															<?= get_the_post_thumbnail() ?>
														</div>
													</div>
													<div class="lb right">
														<div class="topic"><?=get_field('tema_vystuplenie');?></div>
														<div class="name"><div class="<?if(get_field('flag_strany_spikera') != 'empty') echo 'country';?> <?=get_field('flag_strany_spikera');?>"></div><?=the_title();?></div>
													</div>
												</div>
											<?php endwhile; ?>
										<?php endif;
										wp_reset_query(); ?>
									</div>
									<div data-tab-content id="program2">
										<?php if (have_posts()) : query_posts(array('posts_per_page' => 20, 'cat' => 7)); ?>
											<?php while (have_posts()) : the_post(); ?>
												<div class="list <?if(get_field('first-last') == '1') echo 'accent';?>">
													<div class="lb left">
														<div class="time"><?=get_field('vremya');?></div>
														<div class="type"><?=get_field('lekcziya_vystuplenii');?></div>
													</div>
													<div class="lb center">
														<div class="img">
															<?= get_the_post_thumbnail() ?>
														</div>
													</div>
													<div class="lb right">
														<div class="topic"><?=get_field('tema_vystuplenie');?></div>
														<div class="name"><div class="<?if(get_field('flag_strany_spikera') != 'empty') echo 'country';?> <?=get_field('flag_strany_spikera');?>"></div><?=the_title();?></div>
													</div>
												</div>
											<?php endwhile; ?>
										<?php endif;
										wp_reset_query(); ?>
									</div>
									<a href="<?=get_field('programma_dlya_skachivaniya', 2);?>" class="btn btn-download">Скачать программу <img src="<?=get_template_directory_uri()?>/img/icon-dwn.png" alt="Скачать программу"></a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>
		<section id="advantages">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title">Преимущества участия</h2>
						<div class="advantages-items">
							<div class="item">
								<div class="icon"><img src="<?=get_template_directory_uri()?>/img/advantage/rank.png" alt="rank"></div>
								<p><?=get_field('preimushhestva_uchastiya_1', 2);?></p>
							</div>
							<div class="item">
								<div class="icon"><img src="<?=get_template_directory_uri()?>/img/advantage/magicpen.png" alt="rank"></div>
								<p><?=get_field('preimushhestva_uchastiya_2', 2);?></p>
							</div>
							<div class="item">
								<div class="icon"><img src="<?=get_template_directory_uri()?>/img/advantage/like1.png" alt="rank"></div>
								<p><?=get_field('preimushhestva_uchastiya_3', 2);?></p>
							</div>
							<div class="item">
								<div class="icon"><img src="<?=get_template_directory_uri()?>/img/advantage/people.png" alt="rank"></div>
								<p><?=get_field('preimushhestva_uchastiya_4', 2);?></p>
							</div>
							<div class="item">
								<div class="icon"><img src="<?=get_template_directory_uri()?>/img/advantage/musicnote.png" alt="rank"></div>
								<p><?=get_field('preimushhestva_uchastiya_5', 2);?></p>
							</div>
							<div class="item">
								<div class="icon"><img src="<?=get_template_directory_uri()?>/img/advantage/medalstar.png" alt="rank"></div>
								<p><?=get_field('preimushhestva_uchastiya_6', 2);?></p>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="sections">
		</section>
		<section id="lasttime">
			<h2 class="title">Как это было в прошлый раз?</h2>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="gallery-items gallery-items-first">
							<?php if (have_posts()) : query_posts(array('posts_per_page' => 100, 'cat' => 8)); ?>
								<? $gallery = get_post_field('post_content', 305);
										$remText = explode(" ", $gallery);
										$remText2 = str_replace("ids=\"", "", end($remText));
										$items = str_replace("\"]", "", $remText2);
										$gallItems = explode(",", $items);

										foreach ($gallItems as $key => $value) {
											$img = wp_get_attachment_image_url( $value, '');
											echo '<div class="images"><a href="'.$img.'" class="popup"><img src="'.$img.'" alt="img 1"></a></div>';
										}
										?>
							<?php endif;
							wp_reset_query(); ?>
						</div>						
						<div class="gallery-items gallery-items-second">
							<?php if (have_posts()) : query_posts(array('posts_per_page' => 100, 'cat' => 8)); ?>
								<?php while (have_posts()) : the_post(); ?>
										<? $gallery = get_post_field('post_content', 309);
										$remText = explode(" ", $gallery);
										$remText2 = str_replace("ids=\"", "", end($remText));
										$items = str_replace("\"]", "", $remText2);
										$gallItems = explode(",", $items);

										foreach ($gallItems as $key => $value) {
											$img = wp_get_attachment_image_url( $value, '');
											echo '<div class="images"><a href="'.$img.'" class="popup"><img src="'.$img.'" alt="img 1"></a></div>';
										}
										?>
								<?php endwhile; ?>
							<?php endif;
							wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id = "pre-course">
			<div class="container">
				<div class ="row">
					<div class="col-md-6">
						<div class="info-course">
							<h2>PRE-COURSE TEOXANE</h2>
							<div class="date">
								<table>
									<tr>
										<td>
											<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/iconizer-free-icon-event-566245-_1_.png">
										</td>
										<td>
											10:00 - 16:00 </br> 20 сентября, 2023 
										</td>
									</tr>
								</table>
							</div>
							<!-- <a href="#form" class="btn btn-color">
								Регистрация 
							</a> -->
							<p><?php $value = get_field("pre_course",2); 
							echo $value;?>
							</p>
						</div>
						
					</div>
					<div class="col-md-6 padding-null">
						<div class = "preview-spec">
							<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/logo-teoxane-v-belom-czvete.png" alt="logo" class="logo-block-pre-course">
							<div class = "obreznoy_krug">
								<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/nabila_novoe-removebg-preview.png" alt="vedushei-photo" class="spec-pre-photo-circle">
							</div>
							<div>
								<h4>Dr. Nabila Azib</h4>
								<p>Marocco</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="pre-block-mobile-course">				
							<div class="logo-pre-block-course">
								<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/logo-teoxane-v-belom-czvete.png" alt="CAAMC">
							</div>
							<div class="pre-course-desc" id="pre-course-desc">
								<h4 class="pre-course-title">PRE-COURSE</h4>
								<h4 id="full-face-pre-course">FULL FACE</h4>
								<div class="date">
								<table>
									<tr>
										<td>
											<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/iconizer-free-icon-event-566245-_1_.png"></td><td>17 сентября, 2023</br> 
								10:00 - 16:00
										</td>
									</tr>
								</table>
							</div>
								<h4 id="name-dr-pre">Dr. Nabila Azib</h4>
								<p id="country">Marocco</p>
								<div class="description">
									<p class="text-description"></p>
								</div>
							</div>
							<div class="specialist-wrap">
								<div class="specialist">
									<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/nabila_novoe-removebg-preview.png" alt="Girl 1">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<section id="info" class="white">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<div class="img">
							<!-- <img src="<?=get_template_directory_uri()?>/img/20-years.png" alt="20 years celebrating"> -->
						</div>	
						</div>
						<div class="col-md-6">
							<div class="block">
								<p>Закрытый индивидуальный мастер-класс от ведущих международных тренеров, для более углубленного изучения техник и живого общения со спикерами.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="block">
								<a href="#form" class="btn btn-color">Принять участие <div class="icon-arr"></div></a>
							</div>
						</div>
				</div>
			</div>
		</section>
		<section id = "post-course">
			<div class="container">
				<div class ="row">
					<div class="col-md-6">
						<div class = "preview-spec">
								<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/image_2023-08-04_09_41_01.png" alt="logo" class="logo-block-post-course">
								<div class = "obreznoy_krug">
									<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/izobrazhenie_whatsapp_2023-08-10_v_16.48.27-removebg-preview.png" alt="vedushei-photo" class="spec-post-photo-circle">
								</div>
								
								<div>
									<h4>Dr. Sergey Dryga</h4>
									<p>Ukrain</p>
								</div>
						</div>
					</div>
					<div class="col-md-6 padding-null">
						<div class="info-course ">
							<h2>POST-COURSE GOURI</h2>
							<div class="date">
								<table>
									<tr>
										<td>
											<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/iconizer-free-icon-event-566245-_1_.png">
										</td>
										<td>
											10:00 - 16:00 </br> 20 сентября, 2023 
										</td>
									</tr>
								</table>
							</div>
							<!-- <a href="#form" class="btn btn-color">
								Регистрация 
							</a> -->
							<p><?php $value = get_field("post_course",2); 
							echo $value;?>
							</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="post-block-mobile-course">				
							<div class="logo-post-block-course">
								<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/image_2023-08-04_09_41_01.png" alt="CAAMC">
							</div>
							<div class="post-course-desc" id="post-course-desc">
								<h4 class="post-course-title">POST-COURSE</h4>
								<h4 id="full-face-post-course">FULL FACE</h4>
								<div class="date">
								<table>
									<tr>
										<td>
											<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/iconizer-free-icon-event-566245-_1_.png"></td><td>20 сентября, 2023</br> 
								10:00 - 16:00
										</td>
									</tr>
								</table>
							</div>
								<h4 id="name-dr-post">Dr. Sergey Dryga</h4>
								<p id="country">Ukrain</p>
								<div class="description">
									<p class="text-description"></p>
								</div>
							</div>
							<div class="specialist-wrap">
								<div class="specialist">
									<img src="https://ucg.seopro.kz/wp-content/uploads/2023/08/izobrazhenie_whatsapp_2023-08-10_v_16.48.27-removebg-preview.png" alt="Girl 1">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		
		<section id="form">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="form-wrap">
							<div class="form">
								<div class="main_tabs">
									<div class="tabs__nav">
										<button class="tabs__btn"><h4>PRE-COURSE</h4></button>
										<button class="tabs__btn tabs__btn_active"><h4>КОНГРЕСС CAAMC</h4></button>
										<button class="tabs__btn"><h4>POST-COURSE</h4></button>
									</div>
									<div class="tabs__content">
										
										<div class="tabs__pane">
											<?=do_shortcode('[contact-form-7 id="433" title="Pre-curse"]');?>
										</div>
										<div class="tabs__pane tabs__pane_show">
											<div class="tabs-wrap">
												<ul class="tabs">
													<li data-tab-target2="#form1" class="tab active">Физическое лицо</li>
													<li data-tab-target2="#form2" class="tab">Юридическое лицо</li>
												</ul>
												<div class="tab-content">
													<div data-tab-content2 id="form1" class="active">
														<?=do_shortcode('[contact-form-7 id="16" title="Физичиское лицо"]');?>
													</div>
													<div data-tab-content2 id="form2">
														<?=do_shortcode('[contact-form-7 id="66" title="Юридическое лицо"]');?>
													</div>
												</div>
											</div>	
										</div>
										<div class="tabs__pane">
											<?=do_shortcode('[contact-form-7 id="433" title="Pre-curse"]');?>
										</div>
									</div>
								</div>
							</div>
							<div class="logo">
								<img src="<?=get_template_directory_uri()?>/img/logo-caamc.png" alt="CAAMC">
							</div>
							<div class="girls-wrap">
								<div class="girl girl-2">
									<img src="<?=get_template_directory_uri()?>/img/girl-2.png" alt="Girl 2">
								</div>
								<div class="girl girl-1">
									<img src="<?=get_template_directory_uri()?>/img/girl-1.png" alt="Girl 1">
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
