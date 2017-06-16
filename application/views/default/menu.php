
<!-- Header -->
<?php 
	$menu_home = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1 current" href="#">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_preventive = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text current" id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_cosmetic = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu " id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text current" id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_restorative = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu " id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text current" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
$menu_gum = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu " id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text current" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_pediatric = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu " id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text current" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_other = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text " id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu " id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text current" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1" href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_team = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_contact = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1 " href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="areas">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	$menu_areas = '<div class="te_overlay">&nbsp;</div>
<nav class="te_side_nav">
	<div class="te_side_nav1_left">
				<div class="te_side_nav1_content1"><a href="javascript:ca_close()">+</a></div>
			</div>
		<div class="te_side_nav1">
			<div class="te_side_nav1_right">
				<div class="te_side_nav1_content2">
					<ul class="te_menu_items">
						<li class="te_menu_items "><a class="te_menu_a1" href="home">HOME</a></li>
						<li class="te_menu_items"><a class="te_menu_a1" href="#">SERVICES</a></li>
						<ul class="te_menu_items_sub">
							
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="preventive_care_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="preventive_care" onclick="showCategory(this.id)">Preventive Care</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="cosmetic_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="cosmetic_dentistry" onclick="showCategory(this.id)">Cosmetic Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="restorative_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="restorative_dentistry" onclick="showCategory(this.id)">Restorative Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="gum_disease_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="gum_disease" onclick="showCategory(this.id)">Gum Disease</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="pediatric_dentistry_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="pediatric_dentistry" onclick="showCategory(this.id)">Pediatric Dentistry</a></div>
							</li>
							<li class="te_menu_items_sub">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" id="other_treatments_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="ca_menu_text" id="other_treatments" onclick="showCategory(this.id)">Other Treatments</a></div>
							</li>
						</ul>
						<li class="te_menu_items"><a class="te_menu_a1 " href="team">TEAM</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 " href="contact">CONTACT US</a></li>
						<li class="te_menu_items"><a class="te_menu_a1 current" href="#">AREAS SERVED</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="te_side_nav2">
			<a class="te_menu_btn_rwd" href="javascript:ca_close_rwd()" ><i class="fa fa-bars te_menu_btn"></i></a>
			<div class="te_side_nav2_content2">
				
					<ul class="te_menu_items_sub_nav2">
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section1">Exam and Cleanings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section2">Digital X-Rays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section3">Dental Sealant</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 preventive_care">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="preventive_care#section4">Fluoride Treatments</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section1">Teeth Whitening</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">White Fillings</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Bonding</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Cosmetic Inlays and Onlays</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section2">Porcelain Veneers</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section3">Crowns</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Fixed Bridges</a></div>
							</li>
							<li class="te_menu_items_sub_nav2 cosmetic_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="cosmetic_dentistry#section4">Implants</a></div>
							</li>

							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section1">Partial Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section2">Metal Free Partial</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section3">Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section4">Full Dentures</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section5">Root Canal Therapy (Endodontics)</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Crown and Bridges</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 restorative_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="restorative_dentistry#section6">Implants</a></div></li>

							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section1">Diagnosis</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Treatment</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Maintenance</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Deep Cleaning</a></div></li>
							<li class="te_menu_items_sub_nav2 gum_disease">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="gum_disease#section2">Bath Breath</a></div></li>

							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section1">Exam and Cleanings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Digital X-Rays</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sealants</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fillings</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Fluoride Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 pediatric_dentistry">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="pediatric_dentistry#section2">Sportguards</a></div></li>
							
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section1">Emergency</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Treatments</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Extractions</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Nightguards</a></div></li>
							<li class="te_menu_items_sub_nav2 other_treatments">
								<div class="ca_left1_menu"><img class="ca_pointer_menu hide_pointer" src='.base_url("assets/img/camino_navi_pointer.png").'></div>
								<div class="ca_rigth1_menu"><a class="te_sub_menu" href="other_treatments#section2">Snore Appliances</a></div></li>
						</ul>
				</div>
		</div>
	</nav>';
	
	if($page == 'home'){
	echo $menu_home;
	}
	else if($page == 'preventive_care'){
	echo $menu_preventive;
	}
	else if($page == 'cosmetic_dentistry'){
	echo $menu_cosmetic;
	}
	else if($page == 'restorative_dentistry'){
	echo $menu_restorative;
	}
	else if($page == 'gum_disease'){
	echo $menu_gum;
	}
	else if($page == 'pediatric_dentistry'){
	echo $menu_pediatric;
	}
	else if($page == 'other_treatments'){
	echo $menu_other;
	}
	else if($page == 'team'){
	echo $menu_team;
	}
	else if($page == 'contact'){
	echo $menu_contact;
	}
	else if($page == 'areas'){
	echo $menu_areas;
	}
	else{
		echo "menu_error";
	}

?>
