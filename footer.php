<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ucg-caamc
 */

?>
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo logo-1">
						<img src="<?=get_template_directory_uri()?>/img/ucg-logo-white.png" alt="UCG">
					</div>
					<div class="logo logo-2">
						<img src="<?=get_template_directory_uri()?>/img/20-years.png" alt="20 years">
					</div>
				</div>
				<div class="col-md-4">
					<div class="contacts">
						<h4>Наши контакты</h4>
						<?php dynamic_sidebar( 'footer_area_one' ); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="social">
						<h4>Свежие новости</h4>
						<ul>
							<?php dynamic_sidebar( 'footer_area_two' ); ?>
						</ul>
						<?php if ( is_user_logged_in() ) : ?>
							<a href="/index.php/tickera-oformleniya-biletov/">Tickera оформления билетов</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-12">
					<div class="copy">
						Разработка сайта — <a href="https://zeronetech.kz/" target="_blank">Zerone Technology</a> <img src="<?=get_template_directory_uri()?>/img/logo-zerone.png" alt="Zerone Technology">
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="hidden"></div>
	
	<!-- <script src="<?=get_template_directory_uri()?>/libs/jquery/jquery-1.11.2.min.js"></script> -->
	<script src="<?=get_template_directory_uri()?>/libs/waypoints/waypoints.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/libs/animate/animate-css.js"></script>
	<script src="<?=get_template_directory_uri()?>/libs/plugins-scroll/plugins-scroll.js"></script>
	<script src="<?=get_template_directory_uri()?>/libs/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/common.js"></script>
	<script>
		class ItcTabs {
			constructor(target, config) {
					const defaultConfig = {};
					this._config = Object.assign(defaultConfig, config);
					this._elTabs = typeof target === 'string' ? document.querySelector(target) : target;
					this._elButtons = this._elTabs.querySelectorAll('.tabs__btn');
					this._elPanes = this._elTabs.querySelectorAll('.tabs__pane');
					this._eventShow = new Event('tab.itc.change');
					this._init();
					this._events();
			}
			_init() {
				this._elTabs.setAttribute('role', 'tablist');
				this._elButtons.forEach((el, index) => {
				el.dataset.index = index;
				el.setAttribute('role', 'tab');
				this._elPanes[index].setAttribute('role', 'tabpanel');
				});
			}
			show(elLinkTarget) {
				const elPaneTarget = this._elPanes[elLinkTarget.dataset.index];
				const elLinkActive = this._elTabs.querySelector('.tabs__btn_active');
				const elPaneShow = this._elTabs.querySelector('.tabs__pane_show');
				if (elLinkTarget === elLinkActive) {
				return;
				}
				elLinkActive ? elLinkActive.classList.remove('tabs__btn_active') : null;
				elPaneShow ? elPaneShow.classList.remove('tabs__pane_show') : null;
				elLinkTarget.classList.add('tabs__btn_active');
				elPaneTarget.classList.add('tabs__pane_show');
				this._elTabs.dispatchEvent(this._eventShow);
				elLinkTarget.focus();
			}
			showByIndex(index) {
				const elLinkTarget = this._elButtons[index];
				elLinkTarget ? this.show(elLinkTarget) : null;
			};
			_events() {
				this._elTabs.addEventListener('click', (e) => {
				const target = e.target.closest('.tabs__btn');
				if (target) {
					e.preventDefault();
					this.show(target);
			}
			});
			
		}
		}
		new ItcTabs('.main_tabs');

		function createPreCourseBlock(targetElementClass){
			const divPromo = document.createElement("div");
			divPromo.className = "text-course";
			divPromo.id = "text-course"

			const h4Create = document.createElement("h4");
			h4Create.textContent = 'PRE-COURSE';
			h4Create.classList.add('text-course');

			const h4Create1 = document.createElement("h4");
			h4Create1.textContent = 'FULL FACE';
			h4Create1.id = 'full-face';

			const h4Create2 = document.createElement("h4");
			h4Create2.textContent = 'Dr. Nabila Azib';
			h4Create2.id = 'name-dr';

			const h4Create3 = document.createElement("p");
			h4Create3.textContent = 'Marroco';
			h4Create3.id = 'country';
			
			

			const divDescPromo = document.createElement("div");
			divDescPromo.className = "description";

			const pDescCreate =document.createElement('p');
			pDescCreate.className = "text-description";
			pDescCreate.textContent = "Пластически, реконструктивный и эстетический хирург, \nмеждународный тренер \nTeoxane";
			divDescPromo.appendChild(pDescCreate);
			

			const divDataTime = document.createElement("div");
			divDataTime.className = "date";

			const tableDate = document.createElement("table");
			const trDate = document.createElement("tr");
			const tbDate = document.createElement("td");
			const tbDate2 = document.createElement("td");
			const img = document.createElement("img");
			img.setAttribute("src","https://ucg.seopro.kz/wp-content/uploads/2023/08/iconizer-free-icon-event-566245-_1_.png");
	
			tbDate.appendChild(img);
			tbDate2.textContent = "17 сентября, 2023 \n10:00 - 16:00\n";
			trDate.append(tbDate,tbDate2);
			tableDate.append(trDate);
			divDataTime.append(tableDate);

			divPromo.appendChild(h4Create);
			divPromo.appendChild(h4Create1);
			divPromo.append(divDataTime);
			divPromo.appendChild(h4Create2);
			divPromo.appendChild(h4Create3);
			divPromo.appendChild(divDescPromo);

			const targetElement =document.querySelector("." + targetElementClass);
			targetElement.parentNode.insertBefore(divPromo, targetElement);

		}
		function createPostCourseBlock(targetElementClass){
			const divPromo = document.createElement("div");
			divPromo.className = "text-course";
			divPromo.id = "text-course"

			const h4Create = document.createElement("h4");
			h4Create.textContent = 'POST-COURSE';
			h4Create.classList.add('text-course');

			const h4Create1 = document.createElement("h4");
			h4Create1.textContent = 'FULL FACE';
			h4Create1.id = 'full-face';

			const h4Create2 = document.createElement("h4");
			h4Create2.textContent = 'Dr. Sergey Dryga';
			h4Create2.id = 'name-dr';

			const h4Create3 = document.createElement("p");
			h4Create3.textContent = 'Ukrain';
			h4Create3.id = 'country';
			
			

			const divDescPromo = document.createElement("div");
			divDescPromo.className = "description";

			const pDescCreate =document.createElement('p');
			pDescCreate.className = "text-description";
			pDescCreate.textContent = "-консультант компаний «Koru Pharma» Korea, Euroresearch s.r.l. Italia.\n-главный врач  «SD&IK CLINIC» (Киев, Украина)\n-Врач высшей категории\n-дерматолог\n-гистолог\n";
			divDescPromo.appendChild(pDescCreate);
			

			const divDataTime = document.createElement("div");
			divDataTime.className = "date";

			const tableDate = document.createElement("table");
			const trDate = document.createElement("tr");
			const tbDate = document.createElement("td");
			const tbDate2 = document.createElement("td");
			const img = document.createElement("img");
			img.setAttribute("src","https://ucg.seopro.kz/wp-content/uploads/2023/08/iconizer-free-icon-event-566245-_1_.png");
	
			tbDate.appendChild(img);
			tbDate2.textContent = "20 сентября, 2023 \n10:00 - 16:00\n";
			// tbDate3.textContent = "г. Алматы,\nул. Желтоксан 148";
			trDate.append(tbDate,tbDate2);
			tableDate.append(trDate);
			divDataTime.append(tableDate);

			divPromo.appendChild(h4Create);
			divPromo.appendChild(h4Create1);
			divPromo.append(divDataTime);
			divPromo.appendChild(h4Create2);
			divPromo.appendChild(h4Create3);
			divPromo.appendChild(divDescPromo);

			const targetElement =document.querySelector("." + targetElementClass);
			targetElement.parentNode.insertBefore(divPromo, targetElement);

		}
		const removeGirl2 = document.querySelector(".girl-2>img");
		tabsBtn = Array.from(document.getElementsByClassName("tabs__btn"));

		tabsBtn.forEach(element => {
			element.addEventListener("click", () =>{
			const attributeValue = element.getAttribute("data-index");
			if(attributeValue === "0"){
				removeGirl2.style.display = "none";
				document.querySelector(".girl-1>img").setAttribute("src","https://ucg.seopro.kz/wp-content/uploads/2023/08/nabila_novoe-removebg-preview-1.png");
				document.querySelector(".girl-1").classList.remove("spec-post-course");
				document.querySelector(".girl-1").classList.add("spec-pre-course");
				document.querySelector(".girl-1>img").style.width = "";
				document.querySelector(".logo>img").setAttribute("src","https://ucg.seopro.kz/wp-content/uploads/2023/08/logo-teoxane-v-belom-czvete.png");
				document.querySelector(".form-wrap").classList.add("form-course");
				document.querySelector("#form .logo").classList.add("logo-pre-course");
				document.querySelector("#form .logo").classList.remove("logo-post-course");
				// document.querySelector(".logo>img").style.marginRight = "75px";
				// document.querySelector(".logo>img").style.maxWidth = "30%";
				// document.querySelector(".logo>img").style.marginLeft = "682px";
				if (document.querySelector(".text-course") != null) {
					document.querySelector(".text-course").remove();
				}
				
				createPreCourseBlock("girls-wrap");
				

			}else if (attributeValue === "2") {

				removeGirl2.style.display = "none";
				document.querySelector(".girl-1>img").setAttribute("src","https://ucg.seopro.kz/wp-content/uploads/2023/08/sergej-dryga-1.png");
				document.querySelector(".girl-1").classList.remove("spec-pre-course");
				document.querySelector(".girl-1").classList.add("spec-post-course");
				document.querySelector("#form .logo").style.top = "";
				document.querySelector(".logo>img").setAttribute("src","https://ucg.seopro.kz/wp-content/uploads/2023/08/image_2023-08-04_09_41_01.png");
				document.querySelector(".form-wrap").classList.add("form-course");
				document.querySelector("#form .logo").classList.add("logo-post-course");
				document.querySelector("#form .logo").classList.remove("logo-pre-course");
				// document.querySelector(".logo>img").style.marginRight = "75px";
				// document.querySelector(".logo>img").style.maxWidth = "15%";
				// document.querySelector(".logo>img").style.marginLeft = "745px";
				
				if (document.querySelector(".text-course") != null) {
					document.querySelector(".text-course").remove();
				}
				createPostCourseBlock("girls-wrap");
			} else{
				document.querySelector(".girl-1>img").setAttribute("src","https://ucg.seopro.kz/wp-content/themes/ucg-caamc/img/girl-1.png");
				removeGirl2.setAttribute("src","https://ucg.seopro.kz/wp-content/themes/ucg-caamc/img/girl-2.png");
				document.querySelector(".logo>img").setAttribute("src","https://ucg.seopro.kz/wp-content/themes/ucg-caamc/img/logo-caamc.png");
				document.querySelector(".text-course").remove();
				document.querySelector("#form .logo").classList.remove("logo-post-course");
				document.querySelector("#form .logo").classList.remove("logo-pre-course");
				document.querySelector(".form-wrap").classList.remove("form-course");
				document.querySelector(".girl-1").classList.remove("spec-post-course");
				document.querySelector(".girl-1").classList.remove("spec-pre-course");
				removeGirl2.style.display = "";
				// document.querySelector(".logo>img").style.marginRight = "";
				document.querySelector(".girl-1").style.bottom = ""
				document.querySelector(".girl-1").style.right = "";
				document.querySelector(".girl-1>img").style.width = "";
				// document.querySelector(".logo>img").style.marginRight = "";
				// document.querySelector(".logo>img").style.maxWidth = "";
				// document.querySelector(".logo>img").style.marginLeft = "";
			}
		}); 
		});
			
	</script>
</div>

<?php wp_footer(); ?>

</body>
</html>
