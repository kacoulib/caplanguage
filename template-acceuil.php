<?php /* Template Name: Acceuil */ get_header(); ?>
	
	<div class="demo-cont">
	  <!-- slider start -->
	  <div class="fnc-slider example-slider">
	    <div class="fnc-slider__slides">
	      <!-- slide start -->
	      <div class="fnc-slide m--blend-green m--active-slide">
	        <div class="fnc-slide__inner">
				<img src="<?php echo get_template_directory_uri()?>/img/home/carousel/cadre_0.png" class="slider_box fnc-slide__mask" alt="secteur juridique">
	          <div class="fnc-slide__mask">

	            <div class="fnc-slide__mask-inner"></div>
	          </div>
	          <div class="fnc-slide__content">

	            <h2 class="fnc-slide__heading">
	              <div class="fnc-slide__heading-line">
	                <div class="my_slider_text">
	                	<p><img src="<?php echo get_template_directory_uri();?>/img/home/text_0.png" alt=""></p>
	                	<div class="logo_name">
	                		<i>Cap</i>language</div>
	        	        	<h3>Votre agence de traduction technique</h3>
	                	</div>
	              </div>
	            </h2>
	          </div>
	        </div>
	      </div>
	      <!-- slide end -->
	      <!-- slide start -->
	      <div class="fnc-slide m--blend-dark">
	        <div class="fnc-slide__inner">
	          <div class="fnc-slide__mask">
	            <div class="fnc-slide__mask-inner"></div>
	          </div>
	          <div class="fnc-slide__content">
				<img src="<?php echo get_template_directory_uri()?>/img/home/carousel/slider_img_1_1.png" class="my_slider_text" alt="secteur juridique">
	            <h2 class="fnc-slide__heading">
	              <div class="fnc-slide__heading-line">
	                	                <div class="my_slider_text">
	                	<p>Secteur Juridique</p>
	                	<div class="logo_name">
	                		<i>Cap</i>language</div>
	        	        	<h3>Votre agence de traduction technique</h3>
	                	</div>
	              </div>
	            </h2>
	          </div>
	        </div>
	      </div>
	      <!-- slide end -->
	      <!-- slide start -->
	      <div class="fnc-slide m--blend-dark">
	        <div class="fnc-slide__inner">
	          <div class="fnc-slide__mask">
	            <div class="fnc-slide__mask-inner"></div>
	          </div>
	          <div class="fnc-slide__content">
				<img src="<?php echo get_template_directory_uri()?>/img/home/carousel/slider_img_2_1.png" class="my_slider_text" alt="secteur juridique">
	            <h2 class="fnc-slide__heading">
	              <div class="fnc-slide__heading-line">
	                	                <div class="my_slider_text">
	                	<p>Secteur Médical</p>
	                	<div class="logo_name">
	                		<i>Cap</i>language</div>
	        	        	<h3>Votre agence de traduction technique</h3>
	                	</div>
	              </div>
	            </h2>
	          </div>
	        </div>
	      </div>

	    </div>
	    <nav class="fnc-nav">
	      <div class="fnc-nav__bgs">
	        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
	        <div class="fnc-nav__bg m--navbg-dark"></div>
	        <div class="fnc-nav__bg m--navbg-red"></div>
	        <div class="fnc-nav__bg m--navbg-blue"></div>
	      </div>
	      <div class="fnc-nav__controls">
	        <button class="fnc-nav__control">
	          Welcome to Caplanguage
	          <span class="fnc-nav__control-progress"></span>
	        </button>
	        <button class="fnc-nav__control">
	          Secteur juridique
	          <span class="fnc-nav__control-progress"></span>
	        </button>
	        <button class="fnc-nav__control">
	          Secteur medical
	          <span class="fnc-nav__control-progress"></span>
	        </button>

	      </div>
	    </nav>
	  </div>
	  <!-- slider end -->
	  <div class="demo-cont__credits">
	    <div class="demo-cont__credits-close"></div>
	    <h2 class="demo-cont__credits-heading">Made by</h2>
	    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" />
	    <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
	    <a href="http://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
	    <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
	    <h2 class="demo-cont__credits-heading">Based on</h2>
	    <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
	    <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
	    <div class="colorful-switch">
	      <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
	      <label class="colorful-switch__label" for="colorful-switch-cb">
	        <span class="colorful-switch__bg"></span>
	        <span class="colorful-switch__dot"></span>
	        <span class="colorful-switch__on">
	          <span class="colorful-switch__on__inner"></span>
	        </span>
	        <span class="colorful-switch__off"></span>
	      </label>
	    </div>
	  </div>
		<div id="services">
			<ul>
				<li class="col-xs-4">
				<a href="<?php echo get_permalink() ?>/#traduction">
					<i class="picto traduction"></i>
					<h2>Traduction</h2>
					<p>Traduction assermentée,<br>suivi qualité assuré</p>
				</a>
				</li>
				<li class="col-xs-4">
				<a href="<?php echo get_permalink() ?>/#interpretariat">
					<i class="picto interpretariat"></i>
					<h2>Interprétariat</h2>
					<p>Interprétariat en simultané,<br>en consécutid ou en chuchoté.</p>
				</a>
				</li>
				<li class="col-xs-4">
				<a href="<?php echo get_permalink() ?>/#localisation">
					<i class="picto localisation"></i>
					<h2>Localisation</h2>
					<p>Adaptatoin de contenu de site web<br>
					à la langue et à la culture du marché cible</p>
				</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="secteurs_info">
		<div id="secteurs">
			<ul>
				<li class="col-xs-4">
					<a href="<?php echo get_permalink() ?>/#traduction">
						<span>
							<img src="<?php echo get_template_directory_uri();?>/img/pictos/secteurs/medical.png" alt="">
							<h2>Médical</h2>
							
						</span>
					</a>
				</li>
				<li class="col-xs-8">
					<ul>
						<li class="col-xs-12">
							<a href="<?php echo get_permalink() ?>/#traduction">
								<img src="<?php echo get_template_directory_uri();?>/img/pictos/secteurs/juridique.png" alt="">
								<h2>Juridique</h2>
							</a>
						</li>
						<li class="col-xs-6">
							<a href="<?php echo get_permalink() ?>/#traduction">
								<img src="<?php echo get_template_directory_uri();?>/img/pictos/secteurs/autres.png" alt="">
								<h2>Autres secteurs</h2>
							</a>
						</li>
						<li class="col-xs-6">
							<a href="<?php echo get_permalink() ?>/#traduction">
								<img src="<?php echo get_template_directory_uri();?>/img/pictos/secteurs/particuliers.png" alt="">
								<h2>Particuliers</h2>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<div id="infographie">
			<!-- Generator: Adobe Illustrator 16.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				  viewBox="0 0 1300 1600" enable-background="new 0 0 1300 1600" xml:space="preserve">
			<g>
				<defs>
					<polygon id="SVGID_1_" points="1,0 1,651.17 1300,542.171 1300,0 		"/>
				</defs>
				<clipPath id="SVGID_2_">
					<use xlink:href="#SVGID_1_"  overflow="visible"/>
				</clipPath>
<!-- 				
					<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="0.999" y1="3082.9082" x2="1.999" y2="3082.9082" gradientTransform="matrix(1299 0 0 -1299 -1297 4005024)">
					<stop  offset="0" style="stop-color:#FFD900"/>
					<stop  offset="1.076730e-007" style="stop-color:#FFD900"/>
					<stop  offset="1" style="stop-color:#FF8400"/>
					<stop  offset="1" style="stop-color:#FF8400"/>
				</linearGradient> -->
				<!-- <rect x="1" clip-path="url(#SVGID_2_)" fill="url(#SVGID_3_)" width="1299" height="651.17"/> -->
			</g>
			<g>
				<defs>
					<rect id="SVGID_4_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_5_">
					<use xlink:href="#SVGID_4_"  overflow="visible"/>
				</clipPath>
			</g>
			<g>
				<defs>
					<rect id="SVGID_6_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_7_">
					<use xlink:href="#SVGID_6_"  overflow="visible"/>
				</clipPath>
			</g>
			<g>
				<defs>
					<rect id="SVGID_8_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_9_">
					<use xlink:href="#SVGID_8_"  overflow="visible"/>
				</clipPath>
			</g>
			<text transform="matrix(1 0 0 1 439.3335 42.7026)"><tspan x="0" y="0" fill="#FFFFFF" font-family="'HelveticaLTStd-Bold'" font-size="60" letter-spacing="-2">C</tspan><tspan x="32.459" y="0" fill="#FFFFFF" font-family="'HelveticaLTStd-Bold'" font-size="60">AP</tspan></text>
			<text transform="matrix(1 0 0 1 563.5938 42.7026)" fill="#FFFFFF" font-family="'HelveticaLTStd-Light'" font-size="60">LANGUAGE</text>
			<text transform="matrix(1 0 0 1 488.9053 90.5684)"><tspan x="0" y="0" fill="#FFFFFF" font-family="'HelveticaLTStd-Light'" font-size="24">Une agence à l’esprit sta</tspan><tspan x="242.132" y="0" fill="#FFFFFF" font-family="'HelveticaLTStd-Light'" font-size="24">r</tspan><tspan x="250.411" y="0" fill="#FFFFFF" font-family="'HelveticaLTStd-Light'" font-size="24">t-up,</tspan></text>
			<text transform="matrix(1 0 0 1 400.4175 119.3682)" fill="#FFFFFF" font-family="'HelveticaLTStd-Light'" font-size="24">toujours disponible et à l’écoute de ses clients.</text>
			<g class='picto_anim'>
				<defs>
					<rect id="SVGID_10_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_11_">
					<use xlink:href="#SVGID_10_"  overflow="visible"/>
				</clipPath>
				
					<circle clip-path="url(#SVGID_11_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="649.5" cy="197.903" r="47.391"/>
				<path clip-path="url(#SVGID_11_)" d="M637.208,234.862h24.665v-1.294h0.566v-2.992h-2.992l-2.749-10.271l-0.891-4.528h-12.05
					l-1.294,4.528l-2.83,10.271h-2.831v2.992h0.405V234.862z M647.074,220.305h4.933l1.618,10.271h-8.168L647.074,220.305z"/>
				<path clip-path="url(#SVGID_11_)" d="M656.697,213.835v-0.566h-1.537l-0.403-3.235l-2.669-45.773h0.565v-2.507h-0.565v-1.456
					h-1.617v-3.558h-0.728v-6.713h-0.324v6.713h-0.566v3.477h-1.536v1.456h-0.405v2.507h0.405l-2.669,45.773l-0.404,3.235h-1.618v0.566
					h-0.242l0.404,1.618h13.586l0.404-1.618h-0.081V213.835z M653.706,206.719h-2.669v-3.64h2.507L653.706,206.719z M653.463,202.837
					h-2.507v-3.64h2.264L653.463,202.837z M653.22,199.036h-2.264v-3.639h2.021L653.22,199.036z M652.978,195.235h-2.021v-3.64h1.778
					L652.978,195.235z M652.815,191.353h-1.778v-3.639h1.616L652.815,191.353z M652.572,187.552h-1.616v-3.639h1.375L652.572,187.552z
					 M652.331,183.751h-1.375v-3.639h1.132L652.331,183.751z M650.956,179.869v-3.639h0.89l0.242,3.639H650.956z M651.44,168.547
					l0.243,3.639h-0.646v-3.639H651.44z M650.956,168.385v-3.801h0.242l0.242,3.801H650.956z M651.684,172.429l0.242,3.64h-0.889v-3.64
					H651.684z M648.449,209.63h-2.992l0.161-2.75h2.831V209.63z M648.449,206.719h-2.831l0.243-3.64h2.588V206.719z M648.449,202.837
					h-2.588l0.243-3.64h2.345V202.837z M648.449,199.036h-2.345l0.242-3.639h2.184L648.449,199.036z M648.449,195.235h-2.184
					l0.243-3.64h1.941V195.235z M648.449,191.353h-1.941l0.243-3.639h1.698V191.353z M648.449,187.552h-1.698l0.242-3.639h1.456
					V187.552z M648.449,183.751h-1.456l0.243-3.639h1.294L648.449,183.751z M648.449,179.869h-1.213l0.243-3.639h1.051L648.449,179.869
					z M648.449,176.068h-1.051l0.242-3.64h0.809V176.068z M648.449,172.267h-0.809l0.243-3.639h0.566V172.267z M648.449,168.385h-0.566
					l0.242-3.801h0.324V168.385z M650.956,209.63v-2.75h2.75l0.16,2.75H650.956z"/>
				<path clip-path="url(#SVGID_11_)" d="M661.873,235.347h-24.747l-3.073,5.661c2.103,0.729,4.286,1.375,6.47,1.779
					c1.617-2.183,5.014-3.639,8.977-3.639c3.881,0,7.278,1.456,8.976,3.639c2.184-0.404,4.367-1.051,6.47-1.779L661.873,235.347z"/>
				<polygon clip-path="url(#SVGID_11_)" fill="none" stroke="#000000" stroke-miterlimit="10" points="646.427,229.767 
					652.654,229.767 651.44,221.114 647.64,221.114 	"/>
				<path clip-path="url(#SVGID_11_)" fill="none" stroke="#000000" stroke-miterlimit="10" d="M641.494,242.949
					c2.588,0.485,5.257,0.728,7.925,0.728c2.75,0,5.419-0.243,8.088-0.728c-1.618-1.779-4.691-2.992-8.007-2.992
					C646.185,239.957,643.111,241.089,641.494,242.949z"/>
				<path clip-path="url(#SVGID_11_)" fill="none" stroke="#000000" stroke-miterlimit="10" d="M633.326,240.685l3.154-5.661v-0.565
					h-0.404v-4.61h3.073l2.183-7.764h-0.647v-4.286h-9.947v4.286h-0.728v-6.469h-3.639v6.469h-0.647v-2.103h-10.837v2.103h-1.536
					v-3.559h-4.772C613.674,228.554,622.57,236.641,633.326,240.685z"/>
				<path clip-path="url(#SVGID_11_)" fill="none" stroke="#000000" stroke-miterlimit="10" d="M689.936,219.253h-4.286v2.669h-0.484
					v-8.087h-8.654v4.367h-10.756v3.801h-7.763l2.102,7.763h3.154v4.61h-0.566v0.728l3.073,5.499
					C676.106,236.722,684.76,229.04,689.936,219.253z"/>
			</g>
			<text transform="matrix(1 0 0 1 580 270.9014)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">P</tspan><tspan x="12.768" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">R</tspan><tspan x="25.224" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24" letter-spacing="-1">O</tspan><tspan x="40.56" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">XIMITÉ</tspan></text>
			<g>
				<defs>
					<rect id="SVGID_12_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_13_">
					<use xlink:href="#SVGID_12_"  overflow="visible"/>
				</clipPath>
	
<!-- ANIM 1-->
					<polyline class='remake_to_path' data-_first_start-1500="stroke-dashoffset:0;" data-_first_end-1300="stroke-dashoffset:1000;"
					 clip-path="url(#SVGID_13_)" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					645.5,303.17 645.5,372.17 650.875,377.67 951,377.67 	"/>

<!-- PICTO 1 -->
					<g class="picto_anim" data-0="display:none;" data-1500="display:block;">
							
						<circle clip-path="url(#SVGID_13_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="1016.5" cy="306.689" r="47.396"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#F7931E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="997.982" y1="293.229" x2="997.982" y2="293.229"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,3.031" x1="998.391" y1="295.595" x2="1003.692" y2="323.576"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#F7931E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="1003.938" y1="324.8" x2="1003.938" y2="324.8"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#F7931E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="1005.405" y1="289.151" x2="1005.405" y2="289.151"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,3.01" x1="1007.526" y1="290.456" x2="1035.915" y2="307.587"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#F7931E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="1036.976" y1="308.158" x2="1036.976" y2="308.158"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#F7931E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="1035.996" y1="313.216" x2="1035.996" y2="313.216"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,2.968" x1="1033.876" y1="314.439" x2="1009.565" y2="327.981"/>
					
						<line clip-path="url(#SVGID_13_)" fill="none" stroke="#F7931E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="1008.506" y1="328.552" x2="1008.506" y2="328.552"/>
						<path clip-path="url(#SVGID_13_)" d="M1008.098,287.356c1.143-5.139-2.04-10.197-7.179-11.42
						c-5.139-1.142-10.197,2.039-11.42,7.179c-1.143,5.139,2.039,10.197,7.178,11.42
						C1001.816,295.677,1006.956,292.496,1008.098,287.356 M997.493,291.271c-3.346-0.733-5.384-4.079-4.65-7.423
						c0.734-3.345,4.079-5.384,7.424-4.65s5.384,4.079,4.649,7.423C1004.101,289.967,1000.756,292.006,997.493,291.271"/>
						<path clip-path="url(#SVGID_13_)" d="M1009.729,331.244c0.816-3.508-1.387-6.934-4.894-7.75c-3.508-0.816-6.934,1.387-7.75,4.895
						c-0.816,3.507,1.387,6.934,4.896,7.749C1005.406,336.873,1008.913,334.752,1009.729,331.244 M1002.469,333.936
						c-2.284-0.49-3.753-2.855-3.181-5.139c0.489-2.285,2.854-3.753,5.139-3.182c2.284,0.49,3.752,2.855,3.182,5.139
						C1007.037,333.039,1004.753,334.507,1002.469,333.936"/>
						<path clip-path="url(#SVGID_13_)" d="M1050.68,313.46c0.979-4.405-1.795-8.81-6.199-9.871c-4.405-0.979-8.811,1.795-9.87,6.2
						c-0.979,4.405,1.794,8.81,6.198,9.871C1045.296,320.64,1049.701,317.865,1050.68,313.46 M1041.462,317.131
						c-3.018-0.653-4.895-3.671-4.242-6.689c0.653-3.019,3.671-4.895,6.689-4.242c3.019,0.652,4.895,3.671,4.242,6.689
						C1047.499,315.907,1044.48,317.784,1041.462,317.131"/>
						<path clip-path="url(#SVGID_13_)" d="M983.175,276.698c1.012,0,1.831,0.82,1.831,1.831c0,1.012-0.819,1.831-1.831,1.831
						c-1.011,0-1.831-0.819-1.831-1.831C981.344,277.519,982.164,276.698,983.175,276.698"/>
						<path clip-path="url(#SVGID_13_)" d="M986.983,281.386c-0.513-0.513-1.245-0.806-1.978-0.806h-3.442
						c-0.806,0-1.538,0.367-2.124,0.879c0,0-0.293,1.319-0.293,1.538v5.494c0,0.293,0.221,0.512,0.514,0.512s0.512-0.219,0.512-0.512
						v-3.516c0.073,0,0.22,0.073,0.293,0.073v0.293v7.544c0,1.393,1.099,2.564,2.491,2.71v-5.639h0.512v5.639
						c1.392-0.146,2.491-1.245,2.491-2.71v-7.544v-0.293c0.146,0,0.293-0.073,0.366-0.073v3.442c0,0.293,0.22,0.513,0.513,0.513
						c0.292,0,0.512-0.22,0.512-0.513v-5.42C987.204,282.704,986.983,281.386,986.983,281.386"/>
						<path clip-path="url(#SVGID_13_)" d="M1055.946,300.137c1.011,0,1.831,0.82,1.831,1.831c0,1.012-0.82,1.831-1.831,1.831
						s-1.831-0.819-1.831-1.831C1054.115,300.957,1054.936,300.137,1055.946,300.137"/>
						<path clip-path="url(#SVGID_13_)" d="M1059.682,304.825c-0.513-0.513-1.245-0.806-1.979-0.806h-3.441
						c-0.807,0-1.538,0.367-2.124,0.879c0,0-0.293,1.319-0.293,1.538v5.494c0,0.293,0.22,0.512,0.513,0.512s0.512-0.219,0.512-0.512
						v-3.516c0.074,0,0.221,0.073,0.293,0.073v0.293v7.544c0,1.392,1.1,2.564,2.491,2.71v-5.713h0.513v5.64
						c1.392-0.146,2.49-1.245,2.49-2.71v-7.471v-0.293c0.146,0,0.293-0.073,0.366-0.073v3.441c0,0.293,0.22,0.514,0.513,0.514
						s0.513-0.22,0.513-0.514v-5.493C1059.975,306.217,1059.682,304.825,1059.682,304.825"/>
						<path clip-path="url(#SVGID_13_)" d="M993.326,328.438c0.89,0,1.611,0.722,1.611,1.611c0,0.89-0.722,1.612-1.611,1.612
						s-1.611-0.722-1.611-1.612C991.715,329.159,992.437,328.438,993.326,328.438"/>
						<path clip-path="url(#SVGID_13_)" d="M996.549,333.125c-0.439-0.439-1.099-0.659-1.758-0.659h-2.93
						c-0.732,0-1.318,0.293-1.831,0.732c0,0-0.22,1.099-0.22,1.392v4.761c0,0.219,0.22,0.439,0.439,0.439s0.438-0.22,0.438-0.439v-3.003
						c0.074,0,0.147,0.073,0.293,0.073v0.293v6.519c0,1.245,0.953,2.197,2.125,2.343v-4.907h0.439v4.907
						c1.172-0.073,2.124-1.098,2.124-2.343v-6.519v-0.22c0.146,0,0.22-0.073,0.366-0.073v3.003c0,0.22,0.22,0.439,0.439,0.439
						s0.439-0.22,0.439-0.439v-4.761C996.842,334.298,996.549,333.125,996.549,333.125"/>
				</g>
			
			</g>
			<text transform="matrix(1 0 0 1 968.5 379.9014)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">RÉSE</tspan><tspan x="48.359" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24" letter-spacing="-1">A</tspan><tspan x="61.871" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">U</tspan></text>
			<g>
				<defs>
					<rect id="SVGID_14_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_15_">
					<use xlink:href="#SVGID_14_"  overflow="visible"/>
				</clipPath>
	
<!-- ANIM 2-->			
					<polyline class='remake_to_path' data-_second_start-1700="stroke-dashoffset:0;" data-_second_end-1500="stroke-dashoffset:1000;"
					clip-path="url(#SVGID_15_)" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					1016.5,449.17 1016.5,485.003 1011.25,490.67 390,490.67 	"/>
				
					<circle clip-path="url(#SVGID_15_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="295.635" cy="415.319" r="32.35"/>
				<path clip-path="url(#SVGID_15_)" d="M289.279,384.772c-5.882,1.233-11.099,4.079-15.273,8.158l15.273,14.041V384.772z"/>
				<path clip-path="url(#SVGID_15_)" d="M268.977,399.287c-1.613,2.751-2.846,6.546-3.605,9.771h14.894L268.977,399.287z"/>
				<path clip-path="url(#SVGID_15_)" d="M289.089,408.963l-16.222-14.799c-0.569,0.664-1.139,1.328-1.708,1.992l14.23,12.997
					L289.089,408.963z"/>
				<path clip-path="url(#SVGID_15_)" d="M326.371,409.817c-1.044-5.787-3.605-11.005-7.305-15.179l-13.945,15.179H326.371z"/>
				<path clip-path="url(#SVGID_15_)" d="M312.9,389.421c-3.225-2.182-6.925-3.7-10.815-4.554v16.792L312.9,389.421z"/>
				<path clip-path="url(#SVGID_15_)" d="M302.56,410.007l15.273-16.602c-0.569-0.569-1.233-1.233-1.897-1.802l-13.471,14.704
					L302.56,410.007z"/>
				<path clip-path="url(#SVGID_15_)" d="M301.801,445.866c5.977-1.233,11.384-4.174,15.558-8.253l-15.653-14.135L301.801,445.866z"/>
				<path clip-path="url(#SVGID_15_)" d="M302.75,421.96l15.843,14.42c0.569-0.664,1.138-1.328,1.707-1.993l-13.85-12.521
					L302.75,421.96z"/>
				<path clip-path="url(#SVGID_15_)" d="M265.277,422.149c1.233,5.313,3.795,10.151,7.305,14.04l14.609-14.325L265.277,422.149z"/>
				<path clip-path="url(#SVGID_15_)" d="M279.128,441.123c2.182,1.802,6.166,3.7,9.392,4.459l0.379-15.084L279.128,441.123z"/>
				<path clip-path="url(#SVGID_15_)" d="M288.425,422.909l-14.609,14.514c0.664,0.57,1.233,1.234,1.897,1.803l12.807-12.617
					L288.425,422.909z"/>
				<path clip-path="url(#SVGID_15_)" d="M299.714,384.867c-1.328-0.19-2.656-0.284-4.079-0.284c-1.423,0-2.751,0.094-4.08,0.284
					v26.942h-26.372c-0.095,1.139-0.19,2.372-0.19,3.51c0,1.518,0.095,3.131,0.379,4.649h26.278v25.898
					c1.328,0.19,2.657,0.285,4.08,0.285c1.423,0,2.751-0.095,4.079-0.285v-25.993h26.278c0.19-1.518,0.379-3.036,0.379-4.648
					c0-1.233-0.095-2.371-0.189-3.51h-26.563V384.867z"/>
				<path clip-path="url(#SVGID_15_)" fill="#FFFFFF" d="M341.076,406.592c17.971,0,32.539,14.568,32.539,32.539
					c0,17.971-14.568,32.539-32.539,32.539c-17.971,0-32.539-14.568-32.539-32.539C308.537,421.16,323.104,406.592,341.076,406.592"/>
				
					<circle clip-path="url(#SVGID_15_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="341.076" cy="439.131" r="32.539"/>
				<path clip-path="url(#SVGID_15_)" d="M372.381,439.131c0-12.522-7.4-23.432-18.119-28.46v56.825
					C364.981,462.563,372.381,451.653,372.381,439.131"/>
				<path clip-path="url(#SVGID_15_)" d="M309.77,439.131c0,12.902,7.874,24.001,19.068,28.839v-57.678
					C317.549,415.035,309.77,426.229,309.77,439.131"/>
			</g>
			<text transform="matrix(1 0 0 1 262 500.4014)" font-family="'HelveticaLTStd-Bold'" font-size="24">BILINGUE</text>
			<g>
				<defs>
					<rect id="SVGID_16_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_17_">
					<use xlink:href="#SVGID_16_"  overflow="visible"/>
				</clipPath>
			
<!-- ANIM 3-->			
				<polyline class='remake_to_path' data-_third_start-2000="stroke-dashoffset:0;" data-_third_end-1700="stroke-dashoffset:1000;"
					clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					326.5,557.17 326.5,645.003 333.335,652.184 843.5,653.17 	"/>
					
					<g class="picto_anim" data-0="display:none;" data-2000="display:block;">
						<circle clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="935.75" cy="643.974" r="47.522"/>
					
						<polyline clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
						970.6,656.891 977.18,656.891 977.18,644.381 968.732,631.626 953.216,631.626 953.216,656.891 955.246,656.891 	"/>
					
						<polygon clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
						956.628,645.192 956.628,634.388 965.157,634.388 973.605,645.192 	"/>
					
						<circle clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="962.558" cy="658.109" r="7.555"/>
					
						<circle clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="926.002" cy="658.109" r="7.555"/>
					
						<circle clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="926.002" cy="658.109" r="4.062"/>
					
						<circle clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="962.558" cy="658.109" r="4.062"/>
					
						<polyline clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
						933.476,656.891 950.616,656.891 950.616,626.752 906.667,626.752 906.667,656.891 918.528,656.891 	"/>
					
						<line clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="893.264" y1="638.531" x2="903.825" y2="638.531"/>
					
						<line clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="898.544" y1="634.388" x2="903.824" y2="634.388"/>
					
						<line clip-path="url(#SVGID_17_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="903.824" y1="647.954" x2="897" y2="647.954"/>
				</g>
			</g>
			<text transform="matrix(1 0 0 1 870.5 721.3906)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">RÉ</tspan><tspan x="24.72" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">A</tspan><tspan x="38.472" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">CTIVITÉ</tspan></text>
			<g>
				<defs>
					<rect id="SVGID_18_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_19_">
					<use xlink:href="#SVGID_18_"  overflow="visible"/>
				</clipPath>
				
<!-- ANIM 4-->			
				<polyline class='remake_to_path' data-_fourth_start-2300="stroke-dashoffset:0;" data-_fourth_end-2000="stroke-dashoffset:1000;"
					clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					905.5,798.17 905.5,837.003 898.167,844.67 411,844.67 	"/>
					
				<g class="picto_anim" data-0="display:none;" data-2300="display:block;">

					<circle clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="220.5" cy="771.898" r="47.613"/>
					<path clip-path="url(#SVGID_19_)" d="M200.823,742.909c3.488,0,6.316,2.828,6.316,6.316c0,3.487-2.828,6.315-6.316,6.315
					c-3.488,0-6.316-2.828-6.316-6.315C194.507,745.737,197.335,742.909,200.823,742.909"/>
					<path clip-path="url(#SVGID_19_)" d="M211.35,759.023c-0.486-1.539-1.377-2.672-4.454-2.753h-11.822
					c-2.834,0-5.101,1.214-6.073,2.996c0,0-0.972,2.995-0.972,5.425v19.029c0,0.972,0.81,1.701,1.701,1.701c0.89,0,1.7-0.811,1.7-1.701
					v-12.146c0.324,0.081,0.648,0.162,1.053,0.243c0,0.324-0.081,0.647-0.081,1.053v26.074c0,4.938,2.591,8.907,7.45,9.394V788.66h1.7
					v19.596c4.778-0.404,7.45-4.453,7.45-9.393V772.87c0-0.323-0.081-3.157-0.081-3.481c0.486-0.081,3.158,3.805,4.453,4.776
					c1.296,0.972,11.58-5.749,11.58-5.749c0.891-0.242,1.457-1.215,1.133-2.186c-0.323-0.973-1.214-1.458-2.186-1.134
					c0,0-7.773,3.481-8.583,3.157L211.35,759.023z"/>
					<polygon clip-path="url(#SVGID_19_)" points="225.196,766.473 224.306,765.582 235.156,754.65 235.48,754.975 	"/>
					<path clip-path="url(#SVGID_19_)" d="M255.319,791.251h-31.904v-47.694h31.904V791.251z M224.225,790.441h30.285v-46.075h-30.285
					V790.441z"/>

					<polyline clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					228.112,750.439 229.083,751.331 232.08,748.092 	"/>

					<rect x="227.547" y="748.739" transform="matrix(1 -0.009 0.009 1 -6.7195 2.0847)" clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3.158" height="3.32"/>

					<line clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="235.804" y1="750.277" x2="248.841" y2="750.277"/>

					<polyline clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					228.112,756.756 229.083,757.729 232.08,754.408 	"/>

					<rect x="227.548" y="755.136" transform="matrix(1 -0.009 0.009 1 -6.7769 2.085)" clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3.158" height="3.32"/>

					<line clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="235.804" y1="756.675" x2="248.841" y2="756.675"/>

					<rect x="227.547" y="761.453" transform="matrix(1 -0.009 0.009 1 -6.8335 2.0852)" clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3.158" height="3.319"/>

					<line clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="235.804" y1="762.991" x2="248.841" y2="762.991"/>

					<rect x="227.547" y="767.85" transform="matrix(1 -0.0087 0.0087 1 -6.6546 2.0129)" clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3.158" height="3.32"/>

					<line clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="235.804" y1="769.388" x2="248.841" y2="769.388"/>

					<rect x="227.548" y="774.247" transform="matrix(1 -0.009 0.009 1 -6.9493 2.0861)" clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3.158" height="3.32"/>

					<line clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="235.804" y1="775.785" x2="248.841" y2="775.785"/>

					<rect x="227.547" y="780.563" transform="matrix(1 -0.009 0.009 1 -7.006 2.0864)" clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3.158" height="3.32"/>

					<line clip-path="url(#SVGID_19_)" fill="none" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="235.804" y1="782.102" x2="248.841" y2="782.102"/>
				</g>
			</g>
			<text transform="matrix(1 0 0 1 145.5 849.4014)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">GE</tspan><tspan x="27.312" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">S</tspan><tspan x="38.688" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">TION DE P</tspan><tspan x="139.414" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">R</tspan><tspan x="151.87" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">OJET</tspan></text>
			<g>
				<defs>
					<rect id="SVGID_20_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_21_">
					<use xlink:href="#SVGID_20_"  overflow="visible"/>
				</clipPath>
				
<!-- ANIM 5-->			
				<polyline class='remake_to_path' data-_fifth_start-2600="stroke-dashoffset:0;" data-_fifth_end-2300="stroke-dashoffset:1000;"
					clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					220.5,963.17 220.5,1047.67 226.75,1053.162 721,1052.67 	"/>
				
				<g class="picto_anim" data-0="display:none;" data-2600="display:block;">
					<ellipse clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="821.438" cy="947.754" rx="46.642" ry="47.786"/>

					<path clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M793.991,978.386l-6.535-10.946c0,0,15.765-10.781,22.627-10.781s16.255,3.512,17.072,3.512s12.171,0.816,11.19,5.555
					c-0.326,1.389-1.062,3.268-15.928,1.063c0,0,12.171,5.309,17.726,0c0.816-1.063,12.171-6.944,15.602-3.758
					c3.431,3.186-1.307,4.737-1.307,4.737s-18.869,12.089-20.83,12.579c-1.96,0.491-19.85-4.574-26.956-7.596
					C805.02,971.933,801.669,974.792,793.991,978.386z"/>

					<path clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M824.052,946.283l-15.685,2.206c-0.326,0.081-0.57-0.246-0.652-0.572l-0.654-5.064l-2.695-19.604
					c-0.082-0.408,0.163-0.734,0.49-0.734l15.602-2.288c0.327-0.081,0.572,0.246,0.653,0.571l0.899,6.535l-3.514,12.008l5.556,2.043
					l0.489,4.003C824.541,945.875,824.379,946.201,824.052,946.283z"/>
					<path clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M827.646,942.607
					l-8.822-2.858c-0.327-0.082-0.407-0.49-0.327-0.817l1.472-4.819l5.799-18.87c0.082-0.325,0.409-0.57,0.735-0.489l15.03,4.819
					c0.326,0.081,0.408,0.49,0.326,0.817l-2.532,8.332L827.646,942.607z"/>
					<path clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M838.673,955.105
					l-12.008-10.537c-0.245-0.246-0.245-0.654,0-0.898l3.269-3.84l12.66-15.029c0.245-0.327,0.653-0.327,0.898-0.164l11.927,10.538
					c0.245,0.245,0.245,0.652,0,0.897l-6.535,7.76l-9.312,11.11C839.327,955.269,838.918,955.351,838.673,955.105z"/>

					<polygon clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					819.559,933.785 810.736,935.175 809.267,925.616 818.089,924.146 	"/>

					<polyline clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					828.871,925.535 830.586,928.967 837.366,924.637 	"/>

					<polygon clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					834.344,932.315 825.849,929.701 828.544,920.39 837.121,923.003 	"/>

					<polyline clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					841.613,934.684 841.858,938.523 849.701,937.625 	"/>

					<polygon clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					843.819,943.18 837.202,937.054 843.492,929.864 850.19,935.991 	"/>

					<path clip-path="url(#SVGID_21_)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M853.132,962.131c0.407-0.572,0.816-0.98,0.898-1.145c0.653-0.734-2.533-3.92-6.045-2.45c-3.513,1.552-7.27,6.453-8.741,8.822
					C843.165,963.928,851.172,962.213,853.132,962.131z"/>
				</g>
			</g>
			<text transform="matrix(1 0 0 1 746.375 1027.6514)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">À LA </tspan><tspan x="50.879" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">C</tspan><tspan x="63.863" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">A</tspan><tspan x="78.551" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">R</tspan><tspan x="91.007" y="0" font-family="'HelveticaLTStd-Bold'" font-size="24">TE</tspan></text>
			<g>
				<defs>
					<rect id="SVGID_22_" y="-1085" width="1300" height="4564"/>
				</defs>
				<clipPath id="SVGID_23_">
					<use xlink:href="#SVGID_22_"  overflow="visible"/>
				</clipPath>
				
<!-- ANIM 6-->			
					<polyline class='remake_to_path' data-_sixth_start-2900="stroke-dashoffset:0;" data-_sixth_end-2600="stroke-dashoffset:1000;"
					clip-path="url(#SVGID_23_)" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					859.5,1159.17 859.5,1281.17 853.75,1287.67 706,1287.67 	"/>
					
					<g class="picto_anim" data-0="display:none;" data-2900="display:block;">
						<circle clip-path="url(#SVGID_23_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="433.5" cy="1203.983" r="47.049"/>
						<path clip-path="url(#SVGID_23_)" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M455.697,1206.557
						h-6.434c0-0.643-0.08-16.246-0.08-17.05c0-9.41-5.55-14.236-16.407-14.236c-10.858,0-16.407,4.745-16.407,14.236
						c0,0.724,0.08,16.407,0.08,17.13l-6.595-0.16v-17.051c0-13.189,8.365-20.749,22.922-20.749s22.921,7.56,22.921,20.749
						C455.777,1189.748,455.777,1206.154,455.697,1206.557z"/>
						<path clip-path="url(#SVGID_23_)" fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" d="M464.866,1206.396
						c0,3.619,0.08,16.729-1.287,19.946c-4.504,10.777-16.728,18.417-30.159,18.417c-13.512,0-25.817-7.801-30.24-18.739
						c-1.287-3.137-1.126-16.085-1.126-19.624H464.866z"/>
						<path clip-path="url(#SVGID_23_)" d="M437.441,1220.712c0-2.172-1.769-4.021-4.021-4.021c-2.172,0-4.022,1.77-4.022,4.021
						c0,1.528,0.885,2.814,2.091,3.458l-1.045,8.043h6.434l-1.126-8.364C436.798,1223.125,437.441,1221.999,437.441,1220.712"/>
					</g>
			</g>
			<text transform="matrix(1 0 0 1 312.125 1285.4014)" font-family="'HelveticaLTStd-Bold'" font-size="24">SÉCURITÉ ET CONFIDENTIALITÉ</text>
			<text transform="matrix(1 0 0 1 311.125 1318.4102)" font-family="'JosefinSlab-SemiBold'" font-size="18">Nous nous engageons sur la protection de vos données</text>
			<text transform="matrix(1 0 0 1 311.125 1340.0098)" font-family="'JosefinSlab-SemiBold'" font-size="18">et la confidentialité de leur traitement.</text>
			<g>
				
<!-- ANIM 7-->			
				<polyline class='remake_to_path' data-_seventh_start-3200="stroke-dashoffset:0;" data-_seventh_end-2900="stroke-dashoffset:1000;"
					fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="0,8" points="
					433.5,1353.17 433.5,1401.17 440.5,1406.67 636.5,1406.67 643.5,1411.67 643.5,1480.17 	"/>
			</g>
			<text transform="matrix(1 0 0 1 517.25 1538.0293)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Bold'" font-size="38" letter-spacing="-1">C</tspan><tspan x="20.558" y="0" font-family="'HelveticaLTStd-Bold'" font-size="38">AP</tspan></text>
			<text transform="matrix(1 0 0 1 595.9482 1538.0293)" font-family="'HelveticaLTStd-Light'" font-size="38">LANGUAGE</text>
			<text transform="matrix(1 0 0 1 401.0166 1566.8379)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">simplifie la gestion de </tspan><tspan x="241.354" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">v</tspan><tspan x="253.235" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">os com</tspan><tspan x="330.923" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">m</tspan><tspan x="352.347" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">unications</tspan></text>
			<text transform="matrix(1 0 0 1 551.2705 1598.0381)"><tspan x="0" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">à l’in</tspan><tspan x="50.075" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">t</tspan><tspan x="58.187" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">e</tspan><tspan x="71.212" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">r</tspan><tspan x="80.338" y="0" font-family="'HelveticaLTStd-Roman'" font-size="26">national !</tspan></text>
			</svg>

		</div>
		<div class="skew open_skew"></div>
	</div>

	<!-- tarif -->
	<div id="tarif">
		<div>
			<h2 class="text-uppercase">Testez nous !</h2>
			<h3>Simulez le prix de votre projet</h3>
			<h4>simple, précis, rapide et sans engagement</h4>
		</div>
		<ul class="text-uppercase">
			<li><a href="<?php echo get_page_link(60);?>?action=simulator">simuler un tarif</a></li>
			<li><a href="<?php echo get_page_link(60);?>?action=devis">demander un devis</a></li>
		</ul>

	</div>

	<!-- carousel -->
		<div class="container my_carousel" >
    		<div class="col-md-12">
		        <div>
		            <div id="myCarousel" class="carousel slide">
		                
		                <!-- Carousel items -->
		                <div class="carousel-inner">
		                	<!-- first slid -->
		                    <div class="item active">
		                        <div class="row">
		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/0.png" alt="Image" class="img-responsive">
		                            </div>

		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/1.png" alt="Image" class="img-responsive">
		                            </div>

		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/2.png" alt="Image" class="img-responsive">
		                            </div>
		                            
		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/3.png" alt="Image" class="img-responsive">
		                            </div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                    <!-- second slid -->
		                    <div class="item ">
		                        <div class="row">
		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/0.png" alt="Image" class="img-responsive">
		                            </div>

		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/1.png" alt="Image" class="img-responsive">
		                            </div>

		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/2.png" alt="Image" class="img-responsive">
		                            </div>
		                            
		                            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri();?>/img/home/partenaires/3.png" alt="Image" class="img-responsive">
		                            </div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                        
			                    <!-- add more items to display more-->
			                    <!--/item-->
		                </div>
		                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span>‹</span></a>

		                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span>›</span></a>
		            </div>
		            <!--/myCarousel-->
		        </div>
		        <!--/well-->
		    </div>
		</div>



<?php get_footer(); ?>
