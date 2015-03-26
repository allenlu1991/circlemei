<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:56:"F:/wamp/www/circlemei/mobile/themes/miqinew/category.dwt";i:1;s:66:"F:/wamp/www/circlemei/mobile/themes/miqinew/library/goods_list.lbi";i:2;s:67:"F:/wamp/www/circlemei/mobile/themes/miqinew/library/page_footer.lbi";}s:7:"expires";i:1427188524;s:8:"maketime";i:1427184924;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>护肤_专属圈子的服装潮牌 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/miqinew/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/miqinew/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/miqinew/ectouch.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <div id="search_box2" >
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
          <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r header_search"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  <div class="filter" style="position:static; top:0px; width:100%;">
  <form method="GET" class="sort" name="listform">
    <ul class="filter-inner">
      <li class="filter-cur"> <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC#goods_list">综合</a> </li>
      <li class=""> <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=click_count&order=DESC#goods_list">人气<i class="f-ico-arrow-d"></i></a> </li>
      <li class=""> <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_count&order=DESC#goods_list">销量</a></li>
      <li class=""> <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb "></i> </span> </a> </li>
      <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
    </ul>
    <input type="hidden" name="category" value="6" />
    <input type="hidden" name="display" value="grid" id="display" />
    <input type="hidden" name="brand" value="0" />
    <input type="hidden" name="price_min" value="0" />
    <input type="hidden" name="price_max" value="0" />
    <input type="hidden" name="filter_attr" value="0" />
    <input type="hidden" name="page" value="1" />
    <input type="hidden" name="sort" value="goods_id" />
    <input type="hidden" name="order" value="DESC" />
  </form>
</div>
<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;"> 
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a>
  </div>
  </form>
  <div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="http://localhost/?computer=1"> 电脑版 </a> <a href="./"> 触屏版 </a> <a href="#"> 苹果客户端 </a> <a class="#"> Android客户端 </a> </p>
  <p class="region"> 
     
    &copy; 2005-2015 圈美 版权所有，并保留所有权利。 </p>
  <div class="favLink region"> <a href="http://www.ecmoban.com"> powered by ecmoban </a> </div>
</div>
<link href="themes/miqinew/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav   global-nav--current">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<script type="text/javascript" src="themes/miqinew/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script></div>
<div id="nav" class="nav" style="right:-275px;">
  <form class="hold-height" action="category.php">
    <div class="attrExtra">
      <input type="hidden" name="category" value="6"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%"> 
       
       
      
            <div class="attr brandAttr">
        <div class="attrKey">品牌</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li class="av-selected"> 
               
              <a href="javascript:void(0);" data="0">全部</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="1">兰蔻</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="2">雅诗兰黛</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="7">倩碧</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="12">娇兰</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="13">雅顿</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="14">迪奥</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="15">茱莉蔻</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="16">我的美白日记</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="17">美体小铺</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="18">碧欧泉</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="23">欧莱雅</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="24">思亲肤</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="32">娇韵诗</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="33">资生堂</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="34">菲诗小铺</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="36">高丝</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="41">兰芝</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="44">欧树</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="45">悠香伊</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="46">SK-II</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="47">姗娜</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="48">韩国思美兰</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="49">佰草集</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="50">瑞尔薇黛</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="51">和汉方</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="52">可莱丝</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="53">泊美</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="54">欧珀莱</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="55">丝塔芙</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="56">植村秀</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="57">婵真</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="58">嘉娜宝</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="59">英国AA网</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="60">雅漾</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="61">契尔氏</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="62">彼得罗夫</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="63">希思黎</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="64">DHC</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="65">JUJU</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="66">理肤泉</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="67">蓓丽</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="68">曼秀雷敦</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="69">肌研</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="70">玫琳凯</a></li>
                        <input type="hidden" name="brand" value="0" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
       
      
            <div class="attr brandAttr">
        <div class="attrKey">价格</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li class="av-selected"> 
               
              <a href="javascript:void(0);" data="0|0">全部</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="10|190">10&nbsp;-&nbsp;190</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="190|370">190&nbsp;-&nbsp;370</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="370|550">370&nbsp;-&nbsp;550</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="550|730">550&nbsp;-&nbsp;730</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="730|910">730&nbsp;-&nbsp;910</a></li>
                        <input type="hidden" name="price_min" value="0" />
            <input type="hidden" name="price_max" value="0" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
       
      
            <div class="attr brandAttr">
        <div class="attrKey">功效</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li class="av-selected filter_attr"> 
               
              <a href="javascript:void(0);" data="0">全部</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="245">保湿</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="243">修护</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="251">卸妆</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="285">去死皮</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="265">去角质</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="267">去黑头</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="273">去黑色素</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="269">均匀肤色</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="257">抗敏感</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="293">抗氧化</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="263">抗菌消炎</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="279">抗衰老</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="259">排毒</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="247">控油</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="289">提亮肤色</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="253">收缩</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="255">毛孔</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="295">水油平衡</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="249">活肤</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="287">淡斑</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="277">清洁</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="291">清洁毛孔</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="261">祛斑</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="281">祛痘</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="241">美白</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="283">补水</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="275">调理肌肤</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="271">镇静舒缓</a></li>
                      </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
            <div class="attr brandAttr">
        <div class="attrKey">肤质</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li class="av-selected filter_attr"> 
               
              <a href="javascript:void(0);" data="0">全部</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="246">中性</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="244">干性</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="250">敏感性</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="242">油性</a></li>
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="248">混合型</a></li>
                      </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
            <input type="hidden" name="filter_attr" value="0"/>
       
       
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/miqinew/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/miqinew/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/miqinew/js/ectouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=6&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/miqinew/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>