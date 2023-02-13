<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<header>
	<meta name="naver-site-verification" content="927782b24a9cb8b85d05a92f37d380cd33703886" />
	<meta name="viewport" cocntent="width=device-width; ">
	<link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&family=Single+Day&display=swap" rel="stylesheet">
<style>
	*{
		font-family: 'Gowun Dodum', sans-serif;
	}
	#YoutubeLive {
			position: relative;
			/*width: 100vw;*/
			padding-left: 5%;
			padding-right: 5%;
			padding-bottom: 0%;
			padding-top: 50px;
	}
	/*
	#liveworship {
		position: absolute;
		width: 100%;
		height: 100%;
	}
	*/
	#accnt_no{
		position: relative;
		padding-top: 10px; 
		text-align: center; 
	}
</style>
</header>


<body>	
<!-------------------------- 게시판 -------------------------->

<div>
	<!-- ON AIR -->
	<div class="container">
		
			<div id="YoutubeLive">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Y_GF__fqIrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
					<!-- https://youtube.com/live/Y_GF__fqIrs?feature=share	-->

				</div>
<!-- 유튜브 편집 { -->
				<script type="text/javascript">      $(window).resize(function(){resizeYoutube();});      $(function(){resizeYoutube();});      function resizeYoutube(){ $("iframe").each(function(){ if( /^https?:\/\/www.youtube.com\/embed\//g.test($(this).attr("src")) ){ $(this).css("width","100%"); $(this).css("height",Math.ceil( parseInt($(this).css("width")) * 480 / 854 ) + "px");} }); }</script>
        <!-- } 유튜브 편집 끝 -->
			<div id="accnt_no">
				온라인 헌금: 농협 217016-51-003287  <br>
        		(예금주: 대한예수교장로회 부림교회)
			</div>
	</div>

	<!-- 말씀과 기도의 삶 -->
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'qt', 5, 40);?>
			</div>

			
	
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'utils', 5, 40);?>
			</div>
		</div> 
	</div>
</div>

<div class="margin-bottom-150"></div>
</body>






<?php
include_once(G5_THEME_PATH.'/tail.php');
