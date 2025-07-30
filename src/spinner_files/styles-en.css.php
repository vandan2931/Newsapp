a:hover,header nav a {
	text-decoration: none;
}

img{
	border: 0;
}

.after-login table,.cart-table,.login-registration,.order-details td table {
	border-collapse: collapse;
}

.clear,.clearer {
	clear: both;
}

@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTZX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
}

@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(https://fonts.gstatic.com/s/opensans/v13/RjgO7rYTmqiVp7vzi-Q5URJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
}

@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSpX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}

@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
}

@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzJX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}


@font-face {
	font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
}

strong {
	font-weight: 600;
}

article,aside,figure,footer,header,main,nav,section {
	display: block;
}

ol {
	padding-left: 15px;
}

ol, ul {
  margin-top: 0;
  margin-bottom: 20px;
}

section {
	padding-bottom: 50px;
}

section.home{
	padding-bottom: 0;
}

section.plans{
	padding-bottom: 0;
}

.projects {
	display: block;
	margin: 0 auto;
	width: 100%;
	max-width: 680px;
	position: relative;
}

.projects li {
	display: inline;
	padding: 5px 10px;
	height: 15px;
	opacity: .7;
}

.projects li:first-child {
	padding-left: 17px;
}

.projects li:last-child {
	padding-right: 10px;
	float:right;
	margin-top: -2px;
}

.projects li img {
	vertical-align: middle;
	max-height: 18px;
}

.projects li:last-child img{
	max-height: 26px;
	margin-top: -6px;
}

.projects li a{
	font-family: Open Sans;
	font-weight: normal;
	text-decoration: none;
	color: #FFF;
}

.projects li:hover {
	opacity: 1;
}

.tools {
	float: right;
}

.tools li {
	margin-left: 40px;
}

.tools li,header aside .tools li a {
	font-size: 16px;
	font-weight: 600;
	color: #FFF;
	text-decoration: none;
	display: inline-block;
}

.tools li.signin a {
	text-indent: -10000px;
}

.tools a{
	display: inline-block;
}

.signin-profile, .cart-icon, .logout{
	background: url(https://icons8.com/preloaders/img/icons.svg) left top no-repeat transparent;
	width: 24px;
	height: 24px;
}

.cart-icon{
	background-position: -25px 0;
}

.logout{
	background-position: -50px 0;
}

.generator-holder,.parameters .size-slider {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
}

.left {
	float: left;
}

.align-left {
	text-align: left;
}

.button {
	background: #3678bb;
	font-size: 16px;
	color: #FFF;
	padding: 13px;
	border-radius: 50px;
	text-align: center;
	transition: background-color .1s ease;
	display: inline-block;
	text-decoration: none;
	border-width: 0;
	cursor: pointer;
}

.button:hover {
	background-color: #ff9e02;
}

.button.parameters-button {
	display: none;
	width: 166px;
	position: absolute;
	top: 75px;
	left: calc(50% - 110px);
	padding: 6px 27px;
	font-size: 14px;
}

.button.white-button {
	border: 1px solid #bbc5ce;
	background-color: #FFF;
	color: #bbc5ce;
	font-weight: 600;
}

.button.checkout-button {
	background: url(https://icons8.com/preloaders/img/arrow-right.svg) right 29px top 19px no-repeat #3678bb;
	max-width: 169px;
	text-decoration: none;
	display: block;
	margin: 40px auto 0;
}

.button.checkout-button:hover {
	background-color: #ff9e02;
}

.button.filter-button {
	text-transform: uppercase;
	font-weight: 600;
	width: 100px;
	margin: 11px 0 0 25px;
	display: none;
}

.button.generate-button,.button.reset-button {
	background-color: transparent;
	padding: 6px;
	width: 115px;
	color: #FFF;
	border: 1px solid #FFF;
	font-weight: 600;
	text-decoration: none;
	font-size: 14px;
	text-transform: uppercase;
	margin: 0 8px;
}

.button.generate-button:hover,.button.reset-button:hover {
	color: #59d;
	background-color: #FFF!important;
}

.button.buy-button,.button.download-button {
	color: #FFF!important;
	padding: 6px 27px;
	font-size: 14px;
	text-transform: uppercase;
}

.button.buy-button {
	display: inline-block;
	background-color: #59d;
	font-weight: 600;
	text-decoration: none;
	margin: 0 8px;
}

.button.buy-button:hover {
	background-color: #3678bb!important;
}

.button.buy-button-clone,.button.buy-button-clone2,.generator-back .generator-footer a.button.buy-button-clone {
	position: fixed;
	left: 0;
	top: 0;
	z-index: 100000;
	display: none;
	border-radius: 20px;
}

.button.download-button {
	position: absolute;
	right: 30px;
	bottom: 108px;
	background-color: #59d;
}

.button.download-button.inactive,.button.download-button.inactive:hover {
	background-color: #a3a3a3!important;
}

.message {
	display: block;
	margin: 50px auto;
	border-radius: 10px;
	background-color: #f7f7f7;
	color: #9c9c9c;
	width: 95%;
	max-width: 600px;
	padding: 28px;
}

.generator-content .message {
	max-width: calc(100% - 60px);
}

.message strong {
	font-weight: 600;
	font-size: 16px;
	color: #6e6e6e;
}

.message a {
	color: #59d;
	text-decoration: underline;
}

.ajax-message a,.message a:hover {
	text-decoration: none;
}

.message h2 {
	color: #bad74b;
	font-size: 35px;
	font-weight: 500;
	margin: 0 0 20px!important;
	text-align: left;
}

.message.err h2 {
	color: #ff5349;
}

.ajax-message {
	position: fixed;
	display: block;
	padding: 20px;
	left: 50%;
	top: 0;
	width: 300px;
	margin-left: -160px;
	border: 0;
	color: #FFF;
	font-size: 14px!important;
	border-radius: 5px;
	z-index: 1000000;
	font-weight: 600;
}

.ajax-message a {
	color: #FFF;
	border-bottom: 1px dashed #FFF;
}

.ajax-message.err {
	background-color: #ff4b42;
	border: 0 solid #890000;
	color: #FFF;
}

.ajax-message.confirm {
	background-color: #4fca24;
	border: 0 solid #004a0c;
	color: #FFF;
}

.language {
	position: relative;
	width: 27px;
	height: 24px;
}

.language a {
	display: block;
	position: absolute;
	top: 3px;
}

.preloaders-list .sp{
	background: #2a343d;
	color: #ff9e02;
	font-size: 15px;
	font-weight: 600;
	padding: 15px;
	margin-top: -50px;
}

.preloaders-list .sp a{
	font-size: 15px;
	color: #ff9e02;
	text-decoration: underline;
}

.preloaders-list .sp span{
	font-size: 15px;
	color: #FFF;
	text-transform: uppercase;
	display: inline-block;
	margin-right: 10px;
}

.preloaders-list h1 img {
	display: block;
	max-width: 57px;
	max-height: 57px;
	margin: 0 auto;
}

.category a,.category a h5,.plans-list a,.plans-list h3,.preloader .preloader-title,ol li a {
	text-decoration: none;
}

.preloader.home-preloader figure div{
	width: 64px;
	height: 64px;
	margin: 50px auto 0 auto;
	background: url(https://icons8.com/preloaders/img/home-loaders.svg) left top no-repeat transparent;
}

.preloader.home-preloader.p-810 figure div{
	background-position: 0px 0px;
}

.preloader.home-preloader.p-831 figure div{
	background-position: -64px 0px;
}

.preloader.home-preloader.p-805 figure div{
	background-position: -128px 0px;
}

.preloader.home-preloader.p-91 figure div{
	background-position: -192px 0px;
}

.preloader.home-preloader.p-126 figure div{
	background-position: -256px 0px;
}

.preloader.home-preloader.p-45 figure div{
	background-position: -320px 0px;
}

.preloader.home-preloader.p-25 figure div{
	background-position: -384px 0px;
}

.preloader.home-preloader.p-5 figure div{
	background-position: -448px 0px;
}

.preloader.home-preloader.p-6 figure div{
	background-position: -512px 0px;
}

.preloader.home-preloader.p-2 figure div{
	background-position: -576px 0px;
}

.preloader.home-preloader.p-35 figure div{
	background-position: -640px 0px;
}

.preloader.home-preloader.p-3 figure div{
	background-position: -704px 0px;
}

.preloader.home-preloader.p-30 figure div{
	background-position: -883px 0px;
	width: 128px;
}

.preloader.home-preloader.p-15 figure div{
	background-position: -1081px 0px;
	width: 128px;
}

.preloader.home-preloader.p-103 figure div{
	background-position: -1334px 0px;
	width: 160px;
}

.preloader.home-preloader.p-739 figure div{
	background-position: -1620px 0px;
	width: 128px;
}

.p-810:hover figure div, .p-810.active figure div{
	animation:spinner_rotate 1s linear infinite;
}

.p-831:hover figure div, .p-805:hover figure div, .p-45:hover figure div,.p-831.active figure div, .p-805.active figure div, .p-45.active figure div{
	animation:spinner_rotate_back 1s linear infinite;
}

.p-126:hover figure div, .p-35:hover figure div,.p-126.active figure div, .p-35.active figure div{
	animation: spinner_rotate 1s steps(12, end) infinite forwards;
}


.p-2:hover figure div,.p-2.active figure div{
	animation: spinner_rotate 1s steps(8, end) infinite forwards;
}

.p-8:hover figure div, .p-91:hover figure div, .p-3:hover figure div, .p-6:hover figure div,.p-8.active figure div, .p-91.active figure div, .p-3.active figure div, .p-6.active figure div{
	animation:spinner_rotate 1s linear infinite;
}

.p-25:hover figure div, .p-5:hover figure div,.p-25.active figure div, .p-5.active figure div{
	animation: spinner_rotate_back 0.6s steps(8, end) infinite forwards;
}

.p-30:hover figure div,.p-30.active figure div{
	animation: translate1 1s steps(13, end) infinite forwards;
}

.p-103:hover figure div,.p-103.active figure div{
	animation: translate3 1s steps(11, end) infinite forwards;
}

.p-15:hover figure div,.p-15.active figure div{
	animation:translate2 1s linear infinite;
}

.p-739:hover figure div,.p-739.active figure div{
	animation:translate4 1s linear infinite;
}

@keyframes spinner_rotate{
	0%{
		transform:rotate(0deg)
	}

	100%{
		transform:rotate(360deg)
	}
}

@keyframes spinner_rotate_back{
	0%{
		transform:rotate(360deg)
	}

	100%{
		transform:rotate(0deg)
	}
}

@keyframes translate1{
	0%{
		background-position: -934px 0;
	}

	100%{
		background-position: -765px 0;
	}
}

@keyframes translate2{
	0%{
		background-position: -1062px 0;
	}

	100%{
		background-position: -1081px 0;
	}
}

@keyframes translate3{
	0%{
		background-position: -1434px 0;
	}

	100%{
		background-position: -1214px 0;
	}
}

@keyframes translate4{
	0%{
		background-position: -1620px 0;
	}

	100%{
		background-position: -1599px 0;
	}
}


.preloader.wide-preview figure {
	background-size: 128px;
}

.category {
	padding: 40px 20px;
	display: inline-block;
	position: relative;
	width: 14%;
	height: 100px;
	text-align: center;
	cursor: pointer;
	overflow: hidden;
}

.category a,.category figure figcaption {
	left: 0;
	width: 100%;
	position: absolute;
	text-align: center;
}

.category figure div{
	width: 64px;
	height: 64px;
	display: inline-block;
	margin: 0 auto;
	background: url(https://icons8.com/preloaders/img/categories-colorful.svg) left top no-repeat transparent;
}

.category figure .c-free{
	background-position: -1024px 0;
}

.category figure .c-all{
	background-position: -64px 0;
}

.category figure .c-1{
	background-position: -704px 0;
}

.category figure .c-2{
	background-position: -1088px 0;
}

.category figure .c-3{
	background-position: -896px 0;
}

.category figure .c-4{
	background-position: 0 0;
}

.category figure .c-5{
	background-position: -768px 0;
}

.category figure .c-6{
	background-position: -384px 0;
}

.category figure .c-7{
	background-position: -320px 0;
}

.category figure .c-8{
	background-position: -832px 0;
}

.category figure .c-9{
	background-position: -256px 0;
}

.category figure .c-10{
	background-position: -448px 0;
}

.category figure .c-11{
	background-position: -512px 0;
}

.category figure .c-12{
	background-position: -960px 0;
}

.category figure .c-13{
	background-position: -192px 0;
}

.category figure .c-14{
	background-position: -576px 0;
}

.category figure .c-15{
	background-position: -640px 0;
}

.category figure .c-16{
	background-position: -128px 0;
}

.category figure .c-17{
	background-position: -1157px 0;
}

.category figure .c-19{
	background-position: -1211px 0;
}

.category a {
	top: 127px;
	transition: all .3s ease;
}

.category figure img {
	max-width: 64px;
	max-height: 64px;
	margin-bottom: 15px;
}

.category figure figcaption {
	top: 170px;
	opacity: 0;
}

.category a h5 {
	font-size: 16px;
	font-weight: 700;
	color: #404447;
	text-transform: uppercase;
}

.category .preloaders-amount {
	position: absolute;
	padding: 7px;
	background: #bbc5ce;
	color: #FFF;
	font-size: 11px;
	font-weight: 700;
	right: 20px;
	top: 0;
	border-radius: 20px;
}

.category:hover figure div {
	visibility: hidden;
}

.category:hover figure figcaption {
	opacity: 1;
	top: 70px;
	transition: all .3s ease;
}

.category:hover .preloaders-amount {
	display: none;
}

.category:hover a {
	top: 30px;
}

.category:hover .category-title-free {
	color: #4fca24;
}

.category:hover .category-title-letters_numbers_words {
	color: #ff5349;
}

.category:hover .category-title-3d {
	color: #b7b74e;
}

.category:hover .category-title-astronomy {
	color: #ff7f49;
}

.category:hover .category-title-circular {
	color: #1cd3a2;
}

.category:hover .category-title-flags_animated {
	color: #1dacd6;
}

.category:hover .category-title-fruits_and_vegetables {
	color: #c364c5;
}

.category:hover .category-title-horizontal {
	color: #7366bd;
}

.category:hover .category-title-people_and_animals {
	color: #b22222;
}

.category:hover .category-title-rectangular {
	color: #22a991;
}

.category:hover .category-title-religion {
	color: #6b8e23;
}

.category:hover .category-title-science {
	color: #f75394;
}

.category:hover .category-title-smileys {
	color: gold;
}

.category:hover .category-title-social_bookmarks {
	color: #5a72cd;
}

.category:hover .category-title-weather_conditions {
	color: #006cff;
}

.category:hover .category-title-zodiac {
	color: #faa76c;
}

.category:hover .category-title-miscellaneous {
	color: #e15416;
}

.category:hover .category-title-all {
	color: #59d;
}

.plans-list,.plans-list a {
	font-size: 15px;
	color: #bbc5ce;
}

.plans-list {
	background: #f6f6f6;
	text-align: center;
	padding: 30px 0 70px 0;
	margin-top: 20px;
	position: relative;
	overflow: hidden;
}

.plans-list::before{
	content: "";
	position: absolute;
	width: 300vw;
	height: 300vh;
	top: -150vh;
	left: -150vw;
	z-index: 0;
	opacity: .5;
	background: url(https://icons8.com/preloaders/img/ajax-loaders.svg) 0 0 repeat;
	-webkit-transform: rotate(30deg);
	-moz-transform: rotate(30deg);
	-ms-transform: rotate(30deg);
	-o-transform: rotate(30deg);
	transform: rotate(30deg);
}

.plans-list.plans{
	margin-top: 0;
}

.plans-list article {
	width: calc(25% - 90px);
	padding: 73px 20px 20px;
	margin: 20px;
	background: #FFF;
	display: inline-block;
	vertical-align: top;
	border-radius: 7px;
	height: 297px;
	position: relative;
	box-shadow: 0 0 9px 2px rgba(0,0,0,.04);
	transition: all .3s ease;
	text-align: center!important;
	cursor: pointer;
}

.plans-list article:hover {
	box-shadow: 0 0 9px 4px rgba(0,0,0,.1);
}

.plans-list h3 {
	height: 60px;
	color: #404447;
	font-weight: 700;
	font-size: 20px;
	text-transform: uppercase;
	display: inline-block;
	line-height: 24px;
}

.plans-list .plan-bottom,.plans-list .price-block {
	position: absolute;
	padding: 20px 0;
	color: #FFF;
	font-weight: 700;
	text-align: center;
}

.plans-list .price,.preloader-preview .p-name,figure.preloader-animated-preview img {
	display: none;
}

.plans-list .price-block {
	left: 45%;
	left: calc(50% - 35px);
	top: -35px;
	width: 70px;
	height: 30px;
	border-radius: 70px;
	font-size: 21px;
}

.plans-list .price-block .price-decimals {
	font-size: 12px;
}

.plans-list .plan-free .plan-bottom,.plans-list .plan-free .price-block {
	background-color: #4fca24;
}

.plans-list .plan-single-purchase .plan-bottom,.plans-list .plan-single-purchase .price-block{
	background-color: #59d;
}

.plans-list .plan-month-subscription .plan-bottom,.plans-list .plan-month-subscription .price-block	{
	background-color: #ff9e02;
}

.plans-list .plan-ten-animations .plan-bottom,.plans-list .plan-ten-animations .price-block {
	background-color: #ff9e02;
}

.plans-list .plan-lifetime-subscription .plan-bottom,.plans-list .plan-lifetime-subscription .price-block,.plans-list .plan-subscription .plan-bottom,.plans-list .plan-subscription .price-block {
	background-color: #ff4b42;
}

.plans-list .plan-bottom {
	left: 0;
	bottom: 0;
	width: 100%;
	font-size: 14px;
	text-transform: uppercase;
	border-radius: 0 0 7px 7px;
}

.plans-list article .plan-bottom .arrow-right {
	margin-left: 0;
	opacity: 0;
	transition: all .3s ease;
}

.plans-list article:hover .plan-bottom .arrow-right {
	margin-left: 18px;
	opacity: 1;
}

.plans-list .p-description {
	max-width: 300px;
	margin: 0 auto;
}

figure.preloader-animated-preview {
	margin-bottom: 50px;
}

.preloader-animated-preview span.red {
	color: #f0667c;
}

.preloader-animated-preview span.green {
	padding: 5px 10px;
	border-radius: 3px;
	background-color: #28c91c;
	color: #FFF;
}

.preloader-preview {
	position: relative;
}

figure.preloader-animated-preview figcaption {
	display: inline-block;
	width: 70%;
	width: calc(100% - 235px);
	vertical-align: top;
}

.preloader-animated-preview .actual-preview {
	display: inline-block;
	margin: 0 60px 0 40px;
}

.preloader-preview .figcaption-attr {
	display: inline-block;
	width: 260px;
	margin-top: 12px;
	font-weight: 600;
}

.preloader-preview .button.buy-button,.preloader-preview .button.modify-button,.preloader-preview .button.register-license {
	width: 170px!important;
	padding: 13px!important;
	display: block;
	margin: 0 0 15px;
}

.preloader-preview .buttons-holder {
	position: absolute;
	left: 0;
	top: 170px;
}

.preloader-preview .little-text {
	font-size: 12px;
	color: #404447;
	display: block;
	margin-top: 20px;
}

.preloader-examples {
	text-align: center;
}

.preloader-examples h2 {
	margin: 100px 0 50px;
	text-align: center!important;
}

.preloader-example {
	display: inline-block;
	min-width: 200px;
	text-align: center;
	min-height: 200px;
	vertical-align: top;
}

.svg-preview.svg-preview-text {
	width: 128px;
	height: 128px;
	vertical-align: middle;
	font-size: 14px;
	color: #3678bb;
	text-align: center;
	margin: auto;
}

.preloader-example .dimensions {
	background: #f6f6f6;
	color: #404447;
	padding: 10px;
	margin-bottom: 20px;
}

.preloader-examples .preloader-animated-preview {
	display: block;
	margin: auto;
	vertical-align: middle;
}

.amount-generated,.page-rating {
	font-size: 30px;
	color: #59d;
	padding: 6px 42px 6px 0;
	border-right: 1px solid #555d64;
	display: inline-block;
}

.page-rating {
	color: #ff9e02;
	border-right: 0;
	padding: 6px 0 6px 42px;
	font-size: 23px;
}

.page-rating .rating-star {
	width: 12px;
	height: 11px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -409px -12px no-repeat;
	display: inline-block;
	padding-left: 6px;
	cursor: pointer;
}

.page-rating .rating-star:first-child {
	margin-left: 10px;
}

.page-rating .rating-star.filled {
	background: url(https://icons8.com/preloaders/img/icons.svg) -409px 0 no-repeat;
}

.amount-generated span,.page-rating .rating-holder {
	font-size: 12px;
	text-transform: uppercase;
	display: block;
	line-height: 8px;
}

.page-rating .rating-holder {
	margin-bottom: 6px;
}

.social-pages .facebook,.social-pages .twitter,.social-pages .vk{
	background: url(https://icons8.com/preloaders/img/icons.svg) -428px 0 no-repeat transparent;
	width: 18px;
	height: 16px;
}

.social-pages .twitter{
	background-position: -447px 0;
}

.social-pages .vk{
	background-position: -466px 0;
}

.pr {
	display: none;
}

.generator-overlay {
  position: fixed;
  z-index: 1000;
	left: 0;
  top: 0;
  bottom: 0;
  right: 0;
	background-color: rgba(0,0,0,.3);
	display: none;
}

.generator-holder {
	background: 0 0;
	position: fixed;
	top: 0;
	left: -1000px;
	z-index: 2000;
	width: 905px;
	height: 676px;
	text-align: left;
	user-select: none;
}

.generator-holder .generator-close {
	width: 16px;
	height: 16px;
	position: absolute;
	right: -32px;
	top: 0;
	cursor: pointer;
	background: url(https://icons8.com/preloaders/img/generator-close.svg) center center no-repeat;
}

.generator-holder.with-words {
	height: 728px;
}

/* .generator-back {
	height: 676px;
	background: #FFF;
	left: 300px;
	border-radius: 0 4px 4px 0;
} */

.generator-holder.with-words .generator-back {
	height: 728px;
}

/* .generator {
	display: block;
} */

.generator .generator-content {
	height: 578px;
	max-height: 578px;
	width: 604px;
	text-align: center;
	vertical-align: middle;
	display: block;
	overflow: auto;
}

.generator-holder.with-words .generator .generator-content {
	height: 630px;
}

.generator .loading {
	position: absolute;
	width: 150px;
	text-align: center;
	left: 250px;
	left: calc(50% - 75px);
	top: 250px;
}

.generator-holder .parameters {
	display: inline-block;
	width: 300px;
	height: 666px;
	background: #59d;
	border-radius: 4px 0 0 4px;
	padding-top: 10px;
	position: relative;
}

.fieldset .help::before {
	content: url(https://icons8.com/preloaders/img/help-arrow.svg);
	position: absolute;
	left: -20px;
	top: -3px;
	display: none;
	max-width: 8px;
}

.fieldset .help:hover::before {
	display: block;
}

.fieldset .help {
	width: 13px;
	height: 13px;
	position: absolute;
	left: 12px;
	top: 52px;
	display: none;
	opacity: .6;
	background: url(https://icons8.com/preloaders/img/icons.svg) -142px 0 no-repeat;
}

.small-browser-test {
	display: block;
	margin: auto;
	width: 140px;
	height: 30px;
}

.fieldset .help div {
	display: none;
	border-radius: 5px;
	background: #DDD;
	padding: 14px;
	width: 250px;
	position: absolute;
	left: -298px;
	top: -50px;
	font-size: 14px;
}

.fieldset .help:hover div,.generator-holder .parameters .fieldset:hover .help {
	display: block;
}

.fieldset .help.help-words div {
	top: -25px;
}

.fieldset .help.help-orig-colors {
	top: 91px;
}

.fieldset .help.help-fore-color {
	top: 152px;
}

.fieldset .help.help-fore-color div {
	top: -17px;
}

.fieldset .help.help-back-color {
	top: 191px;
}

.fieldset .help.help-speed {
	top: 50px;
}

.fieldset .help.help-size div {
	top: -150px;
}

.fieldset .help.help-gray-transp {
	top: 91px;
}

.fieldset .help.help-flip {
	top: 152px;
}

.fieldset .help.help-frames {
	top: 252px;
}

.fieldset .help.help-reverse {
	top: 291px;
}

.fieldset .help.help-gen-auto {
	top: 330px;
}

.generator-holder .parameters .fieldset .help:hover {
	opacity: 1;
}

.generator-help {
	right: 60px;
	top: 70px;
	background: #ffde00;
	width: 470px;
	z-index: 300;
	font-size: 16px;
	padding: 10px;
	display: none;
	border-radius: 5px;
}

.generator-holder.with-words .parameters {
	height: 718px;
}

.generator-holder .parameters * {
	color: #FFF;
}

.generator-holder .parameters .fieldset {
	padding: 16px 15px 15px 32px;
	display: block;
	border: 0;
	position: relative;
	border-bottom: 1px solid #99c2eb;
	height: auto;
	transition: all .3s ease;
}

.generator-holder .parameters .fieldset.closed {
	height: 19px;
	overflow: hidden;
}

.generator-holder .parameters .fieldset.closed :not(.legend):not(.close-fieldset) {
	display: none;
}

.generator-holder .parameters .fieldset.closed .legend {
	padding-bottom: 15px;
}

.generator-holder .parameters .fieldset .legend {
	display: block;
	font-size: 14px;
	color: #FFF;
	font-weight: 500;
	text-transform: uppercase;
	cursor: pointer;
	padding: 15px 0 12px;
	margin-top: -15px;
}

.generator-holder .parameters .fieldset .close-fieldset {
	width: 10px;
	height: 10px;
	color: #FFF;
	position: absolute;
	left: 12px;
	top: 21px;
	font-weight: 400;
	background: url(https://icons8.com/preloaders/img/icons.svg) -131px -10px no-repeat;
	opacity: .8;
	cursor: pointer;
}

.generator-holder .parameters .fieldset .close-fieldset.open-fieldset {
	background-position: -131px 0;
}

.generator-close,.generator-help {
	position: absolute;
}

.parameters-overlay {
	position: absolute;
	left: 31px;
	width: 265px;
	height: 40px;
	background-color: #59d;
	opacity: .5;
	display: none;
}

.parameters-overlay.f-overlay {
	top: 145px;
}

.parameters-overlay.b-overlay {
	top: 185px;
}

.parameters-overlay.gt-overlay {
	top: 82px;
}

.parameters-overlay.fa-overlay {
	top: 235px;
}

#downloadOptions {
	position: absolute;
	right: 170px;
	bottom: 108px;
	width: 193px;
	overflow: hidden;
	height: 19px;
	display: none;
	text-align: left;
	z-index: 1000;
	padding: 6px 27px;
	font-size: 14px;
	cursor: pointer;
	border-radius: 15px;
	background: url(https://icons8.com/preloaders/img/arrow-top.svg) right 10px top 14px no-repeat #59d;
	transition: height .1s linear;
}

#downloadOptions:hover {
	background-color: #59d!important;
}

#downloadOptions .download-options {
	width: 200px;
	height: 100px;
	overflow: hidden;
	margin-top: 10px;
	transition: height .1s linear;
}

#downloadOptions .download-options div {
	margin-top: 5px;
}

#downloadOptions.open {
	height: 120px;
	background-image: url(https://icons8.com/preloaders/img/arrow-down.svg);
}

.parameters input[type=checkbox].hidden,.parameters input[type=radio].hidden,input[type=radio].hidden {
	position: absolute;
	left: -10000px;
}

.parameters label {
	font-weight: 400;
	font-size: 14px;
	cursor: pointer;
}

.parameters label.disabled {
	opacity: .7;
}

.parameters label.bold {
	font-size: 16px;
	opacity: 1;
}

.parameters label.active,.parameters label:hover {
	opacity: 1;
}

.parameters .label-splitter {
	margin-top: 17px;
}

.parameters .line-splitter {
	border-bottom: 1px solid #77ade4;
	margin: 19px -15px 19px 0;
}

.parameters input[type=text] {
	width: 72px;
	border: 1px solid #FFF;
	padding: 3px 10px;
	font-size: 10px;
	text-transform: uppercase;
	border-radius: 15px;
	background: 0 0;
	float: right;
	text-align: center;
}

.parameters input[type=text]#word {
	float: left;
	width: 231px;
	text-align: left;
	text-transform: none;
}

.parameters input[type=text]#height,.parameters input[type=text]#width {
	text-transform: none;
	width: 45px;
	margin-right: 27px;
}

.parameters input[type=text].color-p {
	width: 42px;
	padding: 3px 5px 3px 18px;
	background: url(https://icons8.com/preloaders/img/icons.svg) 7px -95px no-repeat;
	margin: 3px 6px 0 0;
}

.parameters .size-slider {
	width: 14px;
	height: 8px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -201px 0 no-repeat;
	position: absolute;
	top: 74px;
	left: 218px;
	cursor: e-resize;
	user-select: none;
}

.parameters .reset-sizes {
	width: 23px;
	height: 21px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -216px 0 no-repeat;
	position: absolute;
	left: 263px;
	top: 66px;
}

.parameters .color {
	width: 17px;
	height: 17px;
	border: 2px solid #FFF;
	border-radius: 20px;
	background: #FFF;
	float: right;
	margin-top: 3px;
	cursor: pointer;
}

.parameters .slider-minus,.parameters .slider-plus {
	position: absolute;
	left: 33px;
	top: 51px;
	width: 13px;
	height: 13px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -170px -13px no-repeat;
	cursor: pointer;
}

.parameters .slider-plus {
	background-position: -170px 0;
	top: 52px;
	left: auto;
	right: 16px;
}

.parameters #slider {
	left: 20px;
	top: -8px;
}

.parameters .constrain-proportions {
	width: 14px;
	height: 15px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -185px 0 no-repeat;
	position: absolute;
	left: 164px;
	top: 69px;
}

.parameters .link-line-top {
	position: absolute;
	left: 170px;
	top: 56px;
	border: 1px solid #FFF;
	border-width: 1px 0 0 1px;
	border-radius: 10px 0 0;
	width: 16px;
	height: 7px;
}

.parameters .link-line-bottom {
	position: absolute;
	left: 170px;
	top: 90px;
	border: 1px solid #FFF;
	border-width: 0 0 1px 1px;
	border-radius: 0 0 0 10px;
	width: 16px;
	height: 7px;
}

.parameters .parameters-footer {
	text-align: center;
	position: absolute;
	left: 0;
	bottom: 30px;
}

.generator-holder.with-words .parameters .parameters-footer {
	bottom: 15px;
}

.generator .preview-back {
	position: absolute;
	left: 208px;
	left: calc(50% - 95px);
	top: 29px;
}

.generator .preview-back div {
	position: absolute;
	top: 0;
	border: 1px solid transparent;
	width: 30px;
	height: 30px;
	margin: 0 5px;
	cursor: pointer;
	padding: 0;
	border-radius: 30px;
}

.generator .preview-back div.black {
	background: #000;
	left: 49px;
}

.generator .preview-back div.white {
	background: #FFF;
	left: 98px;
	border-color: #bcc6cf;
}

.generator .preview-back div.transp {
	background: url(https://icons8.com/preloaders/img/transparent.gif);
	left: 0;
}

.generator .preview-back div.colorful {
	background: url(https://icons8.com/preloaders/img/color_picker_icon_big.png) center center;
	left: 147px;
}

.buy-button-block {
	position: absolute;
	right: 30px;
	top: 33px;
}

.buy-button-block .source-file-type {
	position: absolute;
	left: -10px;
	top: 4px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -275px 2px no-repeat #59d;
	width: 30px;
	height: 29px;
	border-radius: 20px 0 0 20px;
	transition: background-color .1s ease;
}

.buy-button-block:hover .source-file-type {
	background-color: #3678bb;
}

.buy-button-block .source-file-type.psd {
	background-position: -238px 5px;
	width: 36px;
	left: -15px;
}

.buy-button-block .source-file-type.psd-max {
	background-position: -484px 2px;
	width: 56px;
	left: -35px;
}

.buy-button-block.word-preloader{
	visibility: hidden !important;
}

.login-registration {
	width: 760px;
	margin: 0 auto;
	font-size: 14px;
	color: #404447;
}

.login-registration td {
	width: 290px;
	vertical-align: top;
	padding: 0;
	text-align: center;
}

.login-registration td .form-row,.login-registration td form {
	width: 290px;
	text-align: left;
	margin: 0 auto;
}

.login-registration td .form-row.last-form-row {
	margin-bottom: -5px;
}

.login-registration td .form-row a[href="javascript:;"] {
	display: block;
	margin-bottom: 11px;
}

.login-registration td.forgot-box,.login-registration td.login-box {
	padding-right: 140px;
}

/* .login-registration h2 {
	color: #404447;
	font-size: 18px;
	font-weight: 500;
	text-transform: uppercase;
	margin-bottom: 46px;
	text-align: center;
} */

.login-registration td .form-row .mobile-show {
	display: none;
}

/* .login-registration .button {
	width: 100%;
	display: block;
	margin: 29px auto;
} */

/* .login-registration .loader,.login-registration input[type=submit] {
	display: none;
}

.login-registration a {
	font-size: 14px;
	text-decoration: none;
	color: #59d;
}

.login-registration a:hover {
	text-decoration: underline;
}

.login-registration .button:hover {
	background: #4fca24;
	border-color: #4fca24;
	color: #FFF;
} */

.input-error {
	color: #ff4b42!important;
	border-bottom-color: #ffc9c6!important;
	background: url(https://icons8.com/preloaders/img/input-error.svg) right 22px bottom 9px no-repeat;
}

.input-error::-webkit-input-placeholder {
	color: #ff4b42;
}

.input-error::-moz-placeholder {
	color: #ff4b42;
}

.input-error:-ms-input-placeholder {
	color: #ff4b42;
}

.input-error:-moz-placeholder {
	color: #ff4b42;
}

.after-login table {
	width: 100%;
	border-spacing: 0;
}

.after-login table tr td {
	border: 1px solid #f2f2f2;
	padding: 40px;
	text-align: center;
	position: relative;
}

.after-login table tr td h3 {
	margin-bottom: 20px;
	font-size: 25px;
	font-weight: 400;
	text-align: center;
}

.after-login table tr td a {
	position: absolute;
	right: 40px;
	bottom: 40px;
}

.login-registration .confirmation-text {
	display: block;
	margin-bottom: 20px;
}

.captcha-image {
	vertical-align: top;
	max-width: 120px;
	margin-top: -11px;
}

.license-table tr td {
	width: 50%;
	padding: 40px;
	vertical-align: top;
}

.license-table tr td:first-child {
	padding-left: 0;
}

.license-table tr td:nth-child(2) {
	padding-right: 0;
}

.tags-list {
	background: #FFF;
	overflow: auto;
	max-height: 200px;
	z-index: 2000;
	padding: 10px;
	left: 0;
	right: 0;
	top: 51px;
	border-radius: 0 0 10px 10px;
	width: 90%;
	margin: 0 auto;
	position: absolute;
}

.tags-list li{
	padding: 3px 5px;
	color: #555;
	cursor: pointer;
}

.tags-list li:hover, .tags-list li.active{
	background: #f5f5f5;
}

.comm.comm-160{
	height: 650px;
	width: 300px;
	margin-left: 20px;
}

.comm{
	text-align: center;
}

.comm table{
	margin: 0 auto;
}

.comm.comm-728 {
	background: #FFF;
	text-align: center;
	overflow: hidden;
	text-align: center;
}

.comm.comm-728.top {
	/* margin: 30px 0; */
}

.comm [data-pixfuture-container]:not(:empty) {
  margin: 30px 0;
}

.comm.comm-728.middle{
	margin: 30px 0;
}

.comm.comm-728.middle.before-categories{
	margin-top: 70px;
	margin-bottom: 0;
}

.plans-list .comm.comm-728{
	margin-top: 40px;
}

.comm.comm-728.transparent {
	background-color: transparent;
}

.inner-comm{
  width: 100%;
  padding: 20px;
  text-align: center;
}

.inner-comm img{
	max-width: 100%;
}

.inner-comm a {
  border: none;
}

.hidey {
	vertical-align: top;
	cursor: pointer;
	width: 17px;
	height: 17px;
	background: url(https://icons8.com/preloaders/img/icons.svg) -384px 0 no-repeat;
	display: inline-block;
}

.comm.comm-160 .hidey {
	display: block;
	width: 16px;
	margin-top: 10px;
}

input[type=search] {
	-webkit-appearance: textfield;
}

.donations-table tr td {
	padding: 8px;
}

.center {
	text-align: center !important;
}

.displaynone {
	display: none!important;
}

.visible {
	display: block;
}

.position-relative {
	position: relative;
}

.inline-block {
	display: inline-block!important;
}

::-webkit-input-placeholder {
	color: #a0a8af;
}

::-moz-placeholder {
	color: #a0a8af;
}

:-ms-input-placeholder {
	color: #a0a8af;
}

:-moz-placeholder {
	color: #a0a8af;
}


.bottom-a{
	display: none;
	position:fixed;
	bottom:0;
	width:100%;
	text-align:center;
	background:#2a343d;
	z-index:250;
	color:#FFF;
	padding: 20px 0;
	cursor: pointer;
}

.bottom-a .content{
	display: none;
}

.bottom-a.open{
	width: 500px;
	height: 250px;
	margin: 0 auto;
	bottom: auto;
	top: 150px;
	left: calc(50% - 250px);
}

.bottom-a.open .content{
	display: block;
	padding: 20px;
	margin: 20px 0;
}

.bottom-a.open .share{
	width: 254px;
	display: block;
	margin: 0 auto;
}

.bottom-a.open span.bottom-a-bottom{
	display: block;
}

.bottom-a .close{
	position:absolute;
	right:10px;
	top:10px;
	background:url(https://icons8.com/preloaders/img/generator-close.svg) center center no-repeat transparent;
	width:20px;
	height:20px;
	cursor:pointer;
}

.bottom-a span.bottom-a-bottom{
	display: none;
	position: absolute;
	bottom: 20px;
	left: 0;
	font-size: 12px;
	width: 100%;
	text-align: center;
}

.payment-systems h3.currency-header{
	margin-top: 54px !important;
	display: none;
}

.payment-system-header{
	margin-bottom:21px;
	margin-top:44px;
}

.cryptocurrency-selection, .currency-selection{
	display: none;
}

.crypto-table{
	max-width: 1100px;
	margin: 0 auto;
}

.crypto-table tr td{
	text-align: left;
	padding: 10px;
}

/* adsense */

.horizontal-ad { width: 100%; max-height: 90px; }


.lightbox{
	position: fixed;
	width: 90%;
	height: 90%;
	max-height: 629px;
	max-width: 927px;
	background: url(https://icons8.com/preloaders/img/free-templates.png) center top no-repeat #FFF;
	background-size: contain;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	border-radius: 20px;
	box-shadow: 0px 0px 17px 7px rgba(0, 0, 0, 0.12);
	z-index: 1000;
}

.lightbox .close{
	width: 16px;
	height: 16px;
	cursor: pointer;
	position: absolute;
	top: 20px;
	right: 20px;
	background: url(https://icons8.com/preloaders/img/generator-close.svg) center center no-repeat #5599dd;
	border-radius: 20px;
}

.lightbox .doshare{
	position: absolute;
	right: 20px;
	bottom: 20px;
	color: #5599dd;
	text-align: center;
	line-height: 50px;
}

.main-text{
	text-align: left;
	padding: 0 30px 94px 30px;
	max-width: 1400px;
	margin: auto;
	/* line-height: 1.6; */
}

.main-text.inner-text{
	padding-top: 70px;
	padding-bottom: 0;
	text-align: justify;
}

.main-text p{
	margin-bottom: 30px;
}


@media screen and (max-width:1139px) {
	.projects {
		background: url(https://icons8.com/preloaders/img/projects.svg) center top no-repeat;
		width: 24px;
		position: absolute;
		right: 235px;
		top: 40px;
		text-align: left;
		padding-top: 40px;
		z-index: 1000;
	}

	.projects li {
		display: none;
		background: #5699dd;
		padding: 10px 15px;
	opacity: 1;
	}

	.projects li:first-child {
		padding-left: 15px;
	}

	.projects li:last-child {
		float: none;
	margin-left: -3px;
	padding-bottom: 15px;
	}

	.projects li img {
		opacity: 1;
	}

	header .search-form {
		margin-top: 50px;
	}
}

@media screen and (max-width:1490px) {
	.fieldset .help div {
		width: 200px;
		left: -248px;
	}
}

@media screen and (max-width:1375px) {
	.fieldset .help:hover::before {
		display: none;
	}

	.fieldset .help div {
		left: 300px;
		z-index: 2000;
	}
}

@media screen and (max-width:1200px) {
	.plans-list article {
		width: 23%;
		width: calc(25% - 55px);
		margin: 5px;
	}

	.page-content {
		padding: 20px 15px;
		width: 90%;
		width: calc(100% - 30px);
	}
}

@media screen and (max-width:1100px) {
	.category {
		width: 16%;
	}
}

@media screen and (max-width:1000px) {
	.category {
		width: 23%;
		width: calc(25% - 40px);
	}

	.plans-list article {
		width: 50%;
		width: calc(50% - 55px);
		margin-bottom: 40px;
	}

	.generator-holder .generator-close {
		right: 10px;
		top: 10px;
		background-color: #59d;
		z-index: 1;
		width: 24px;
		height: 24px;
		background-position: 4px 4px;
		border-radius: 20px;
	}

	.plans-list::before{
		height: 400vh;
	}
}

@media screen and (max-width:950px) {
	.a2a_default_style .a2a_counter img,.a2a_default_style .a2a_dd,.a2a_default_style .a2a_img,.a2a_default_style .a2a_svg,.a2a_default_style a {
		float: none!important;
		display: inline-block!important;
	}
}

@media screen and (max-width:900px) {
	.preloaders-list h1 {
		margin-top: 40px;
		padding-bottom: 40px;
		font-weight: 500;
		font-size: 25px;
	}

	.generator .generator-content,.generator-holder {
		width: 100%;
	}

	#fileSizeDiv {
		left: auto;
		right: 10px;
		bottom: 190px;
	}

	.button.download-button {
		right: 10px;
		width: 193px;
	}

	#downloadOptions {
		right: 10px;
		bottom: 150px;
	}

	.buy-button-block {
		right: 10px;
		top: 10px;
	}

	.generator-link.common-generator-link {
		position: absolute;
		top: 70px;
		right: 10px;
	}

	.generator-link.common-generator-link:first-child {
		top: 50px;
	}

	.generator-back .generator-footer a.register-license {
		position: absolute;
		top: 50px;
		right: 10px;
		left: auto;
	}

	.button.back-button{
		padding: 5px 8px 5px 25px;
		background-position: 10px 10px;
		font-size: 14px;
	}

	.comm table tr td{
		display: block;
	}
}

@media screen and (max-width:850px) {
	.filter-options {
		width: 541px;
	}

	.filter-option.filter-dropdown:hover .filter-options.filter-options-category {
		height: 385px;
	}

	.filter-options-category .filter-options-option:nth-child(3n+4) {
		border-right: 1px solid #e9e9e9;
	}

	.filter-options-category .filter-options-option:nth-child(2n+1) {
		border-right: 0;
	}
}

@media screen and (max-width:770px) {
	.login-registration td.forgot-box,.login-registration td.login-box {
		padding-right: 20px;
	}

	.login-registration h2 {
		text-align: center;
	}

	.login-registration {
		width: 100%;
	}

	.license-table tr td {
		padding: 0 0 30px!important;
		display: block;
		width: 100%;
	}
}

@media screen and (max-width:740px) {
	.selected-categories,.selected-types {
		display: none;
	}



	.comm.comm-728 {
		overflow: hidden;
		width: 100%;
	}

	.comm.comm-160 {
		display: none;
	}

	.tags-list{
		width: 85%;
	}
}

@media screen and (max-width:700px) {
	.preloaders-list h1 {
		font-size: 20px;
	}

	.button.back-button{
		top: 0;
	}
}

@media screen and (max-width:620px) {
	.footer-bottom{
		height: 100px;
	}
}

@media screen and (max-width:600px) {
	.login-registration tr td {
		display: block;
		width: 100%;
	}

	.login-registration td.forgot-box,.login-registration td.login-box {
		padding-right: 0;
	}

	.login-registration td .form-row .button.mobile-show {
		display: block;
	}

	.login-registration td .form-row .mobile-hide {
		display: none!important;
	}
}

@media screen and (max-width:590px) {
	.projects,header nav {
		right: auto;
		top: 99px;
		background-position: left top;
	}

	header aside .logo {
		display: block;
		float: none;
		margin: 0 auto 30px;
	}

	header nav {
		left: 30px;
	}

	.projects {
		left: 100px;
	}


	.projects li:last-child {
	margin-left: 0;
	padding-right: 15px;
	}

	header .search-form {
		margin-top: 20px;
	}

	.filter-options,.filters .filter-option.filter-dropdown {
		display: none;
	}
}

@media screen and (max-width:560px) {
	.generator-holder .parameters {
		left: 45%;
		left: calc(50% - 150px);
		position: absolute;
		transition: all .3s ease;
	}

	.generator-holder .parameters.mobile-hidden {
		left: -100vw;
	}

	.generator-back {
		left: -100vw;
		width: 100%;
		transition: all .3s ease;
	}

	.generator-back.mobile-show {
		left: 0;
	}

	.button.parameters-button {
		display: block;
	}
}

@media screen and (max-width:520px) {
	.plans-list article {
		width: calc(100% - 55px);
	}

	.preloaders-list h1 {
		font-size: 16px;
	}

	.plans-list::before{
		height: 900vh;
		width: 600vw;
	}

	.footer-bottom .supported-by{
		right: auto;
		left: 50%;
		transform: translateX( -50% );
	}
}

@media screen and (max-width:490px) {
	.projects {
		width: 24px;
	}

	.page-content img {
		max-width: 100%;
	}

	.tags-list{
		width: 80%;
	}



	.button.back-button{
		top: -5px;
		left: 10px;
	}


	.bottom-a.open{
		width: 100%;
		left: 0;
		top: 50px;
		height: 300px;
	}

}


@media screen and (max-width:360px) {

	.tags-list{
		width: 70%;
	}
}

@media screen and (max-width:350px) {
	header nav {
		left: 10px;
	}

	header aside {
		padding: 40px 10px;
	}

	.projects {
		left: 60px;
	}

	header aside .tools li {
		margin-left: 20px;
	}

	.tools .cart {
		width: 100%;
	}

	.tools .cart .cart-header {
		margin: 20px 10px;
	}

	.cart-table tr td,.cart-table tr td:first-child,.cart-table tr td:last-child {
		padding: 10px;
	}
}

@media screen and (max-width:300px) {
	.login-registration td .form-row,.login-registration td form {
		width: 100%;
	}

}

@media screen and (max-width:250px) {
	.cart-table tr td:first-child,.tools .cart .cart-header a img {
		display: none;
	}

	.bottom-a.open{
		height: 100vh;
		height: calc(100vh - 20px);
		top: 0;
	}
	.bottom-a.open .share{
		width: 100%;
	}
	.bottom-a.open h3{
		display: none;
	}
}

@media screen and (max-width:200px) {
	header aside .logo img {
		width: 100%;
	}

	header aside .logo {
		width: 90%;
	}
}

@media screen and (max-height:670px) {
	.generator-holder {
		overflow-y: auto;
		max-height: 100vh;
	}

	.generator-holder .generator-close {
		right: 32px;
	}

	.fieldset .help div {
		left: 300px;
		z-index: 2000;
	}
}
.dynamic-slider-control{position:relative;-moz-user-focus:normal}.dynamic-slider-control,.dynamic-slider-control .handle{-moz-user-select:none;cursor:default}.horizontal{width:226px;height:35px;margin-left:-7px;margin-bottom: -15px;}.dynamic-slider-control input,#sliderValue5h{display:none}.dynamic-slider-control .handle,.dynamic-slider-control .line{position:absolute;overflow:hidden}.dynamic-slider-control .handle{font-size:1px;z-index:2;}.dynamic-slider-control.horizontal .handle{width:9px; height:9px; background:#FFF;border-radius:10px; cursor:pointer;}.dynamic-slider-control .line{background:#FFF;}.dynamic-slider-control.horizontal .line{height:1px;padding:0}.dynamic-slider-control .line div{display:none;}.transparent-line{height: 1px; background: #77ade4; top: 17px; right: 4px; position: absolute; z-index: 1;}.colorpicker,.colorpicker input{font-family:Arial,Helvetica,sans-serif}.colorpicker{width:356px;height:176px;overflow:hidden;position:absolute;background:url(https://faviconer.net/colorpicker/images/colorpicker_background.png);display:none;z-index:2001;-webkit-box-shadow:0 0 19px rgba(0,0,0,.15);-moz-box-shadow:0 0 19px rgba(0,0,0,.15);box-shadow:0 0 19px rgba(0,0,0,.15);-moz-border-radius:5px;-khtml-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}.colorpicker_color,.colorpicker_color div{width:150px;height:150px;position:absolute}.colorpicker_color{left:14px;top:13px;background:red;overflow:hidden;cursor:crosshair;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.colorpicker_color div{top:0;left:0;background:url(https://faviconer.net/colorpicker/images/colorpicker_overlay.png)}.colorpicker_color div div{position:absolute;top:0;left:0;width:11px;height:11px;overflow:hidden;background:url(https://faviconer.net/colorpicker/images/colorpicker_select.gif);margin:-5px 0 0 -5px}.colorpicker_hue{position:absolute;top:13px;left:171px;width:35px;height:150px;cursor:n-resize}.colorpicker_hue div{position:absolute;width:35px;height:9px;overflow:hidden;background:url(https://faviconer.net/colorpicker/images/colorpicker_indic.gif) left top;margin:-4px 0 0;left:0}.colorpicker_current_color,.colorpicker_new_color{width:60px;height:30px;top:13px;background:red;border-radius:3px;position:absolute}.colorpicker_new_color{left:213px}.colorpicker_current_color{left:283px}.colorpicker input{background-color:transparent;border:1px solid transparent;border-radius:2px;position:absolute;font-size:10px;color:#898989;top:2px;right:11px;text-align:center;width:29px;margin:0;padding:0;height:16px}.colorpicker_field,.colorpicker_field span,.colorpicker_hex,.colorpicker_submit{position:absolute;height:22px}.colorpicker_hex{width:72px;background:url(https://faviconer.net/colorpicker/images/colorpicker_hex.png) top;left:212px;top:142px}.colorpicker_hex input{right:6px}.colorpicker_field{width:62px;background-position:top}.colorpicker_field span{width:12px;overflow:hidden;top:0;right:0;cursor:n-resize}.colorpicker_rgb_r{background-image:url(https://faviconer.net/colorpicker/images/colorpicker_rgb_r.png);top:52px;left:212px}.colorpicker_rgb_g{background-image:url(https://faviconer.net/colorpicker/images/colorpicker_rgb_g.png);top:82px;left:212px}.colorpicker_rgb_b{background-image:url(https://faviconer.net/colorpicker/images/colorpicker_rgb_b.png);top:112px;left:212px}.colorpicker_hsb_h{background-image:url(https://faviconer.net/colorpicker/images/colorpicker_hsb_h.png);top:52px;left:282px}.colorpicker_hsb_s{background-image:url(https://faviconer.net/colorpicker/images/colorpicker_hsb_s.png);top:82px;left:282px}.colorpicker_hsb_b{background-image:url(https://faviconer.net/colorpicker/images/colorpicker_hsb_b.png);top:112px;left:282px}.colorpicker_submit{width:22px;background:url(https://faviconer.net/colorpicker/images/colorpicker_submit.png) top;left:322px;top:142px;overflow:hidden}.colorpicker_focus{background-position:center}.colorpicker_hex.colorpicker_focus,.colorpicker_slider,.colorpicker_submit.colorpicker_focus{background-position:bottom}