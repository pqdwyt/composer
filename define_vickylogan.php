<!--
 THIS FILE IS SAFE TO EDIT! This is the content for your new page.
 Note that the file in the template directory overrides the non-template file 

-->
<?php 
// $sql="select distinct p.products_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_TO_CATEGORIES . " ptc
// where ptc.products_id = p.products_id and ptc.categories_id=36 and p.products_status = 1 order by p.products_sort_order ASC";

// $new_products = $db->Execute($sql);
// while (!$new_products->EOF) {
//   $artist_products_arr[]=$new_products->fields['products_id'];
//   $new_products->MoveNext();
// }
$artist_products_arr=array(65,139)
 ?>
<style>
#back_to_top{margin-top:0px;}
.vickylogan_top{height:401px;background: url("images/aries/VICKY-01.jpg")no-repeat;}
.vickylogan_middle{height:590px;background: url("images/aries/VICKY-02.jpg")no-repeat;}
.vickylogan_bottom{height:509px;background: url("images/aries/VICKY-03.jpg")no-repeat;}
.vickylogan_top_text{width:500px;float:right;text-align:center;font-size:15px;color:#e2d4ff;line-height: 23px;margin-top:179px;margin-right:80px;}
.vickylogan_middle_div{width:916px;margin:0 auto;height:425px;}
.vickylogan_middle_div_img{width:263px;height:424px;margin-left: 26px;text-align: center;float:left;border:solid 1px white;}
.vickylogan_middle_div_img img{margin-top:12px;}
.div_img img{width:237px;height:302px;}
.vickylogan_middle_div_img h2 a{font-size:16px;text-transform: uppercase;font-weight: lighter;color:#000000;font-family: 'Helvetica W01 Cn', Helvetica, sans-serif;}
.item_price{font-size:14px;color:#e92b6e;}

.vickylogan_middle_div_img:hover{border:solid 1px #f5388a;}
</style>
<!-- bof define_vickylogan -->
<div class="vickylogan">
<div class="vickylogan_top">
	<div class="vickylogan_top_text">
		An influential fashion star that specializeds in makeup and hairstyles. <br>All of her words and actions show confidence and love. <br>When not working,Vicky loves to travel and enjoy her life. <br> So her signature styles are full of passion.Let's rock with her!
	</div>
	<a href="https://www.youtube.com/user/thenewvickylew" target="_blank"><div style="width:167px;height:39px;float:right;margin-top:284px;margin-right:-221px"></div></a>
	<a href="https://www.instagram.com/victoriouslogan/" target="_blank"><div style="width:167px;height:39px;float:right;margin-top:284px;margin-right:-433px"></div></a>
</div>
<div class="vickylogan_middle">
<div style="height:110px;width:100%"></div>
	<div class="vickylogan_middle_div">
	<?php for($i=0;$i<count($artist_products_arr);$i++){?>
                    <?php $n = $i+1; ?>
		<div class="vickylogan_middle_div_img">
			<a href="<?php echo zen_href_link(FILENAME_PRODUCT_INFO, 'products_id='.$artist_products_arr[$i])?>" target="_blank"><div class="div_img">
				<?php echo zen_get_products_image($artist_products_arr[$i]);?></div>
				<h2><?php echo zen_get_products_name($artist_products_arr[$i]);?></a></h2>
				<h3 class="item_price">Start with <?php echo zen_get_products_display_price($artist_products_arr[$i]);?></h3>
				<div class="item_rate" ><?php                     
                    $reviews_average_show=(ceil($reviews_average->fields['average_rating'])<=0 || ceil($reviews_average->fields['average_rating'])>5)? '5':ceil($reviews_average->fields['average_rating']);?>
                    <img src="images/proinfo/stars_<?php echo $reviews_average_show;?>.png" ></div>
			</a>
		</div>

    <?php } ?>
    <div style="border:solid 1px #ccc;width:237px;height:302px;float:right;margin-right:50px;margin-top:22px;"><img src="images/aries/VICKY-04-3.jpg" alt=""></div>
	</div>

</div>
<div class="vickylogan_bottom">

<!-- <iframe width="520" height="293" src="https://www.youtube.com/embed/bNxEXz-TsWM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> -->
<!-- <iframe width="520" height="293" src="https://www.youtube.com/embed/UQ43n_RvQOQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> -->
<div style="height:100px;"></div>
<div id="demo" class="jcImgScroll">
	<ul>
		<li><a href="#" ><iframe width="614" height="347" src="https://www.youtube.com/embed/bNxEXz-TsWM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></a></li>
		<li><a href="#" ></a><iframe width="614" height="347" src="https://www.youtube.com/embed/UQ43n_RvQOQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></li>
		<li><a href="#"></a><iframe width="614" height="347" src="https://www.youtube.com/embed/X9wKsw8lN9M?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></li>
		<li><a href="#" ></a><iframe width="614" height="347" src="https://www.youtube.com/embed/yqG6rz9qu1A?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></li>
		<li><a href="#" ></a><iframe width="614" height="347" src="https://www.youtube.com/embed/R5kqYTtwwhU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></li>
		
	</ul>
</div>
</div>
	
</div>


<script src="/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jQuery-easing.js"></script>
<script type="text/javascript" src="/js/jQuery-jcImgScroll.js"></script>
<script type="text/javascript">
$(function(){
	$("#demo").jcImgScroll({
		arrow : {
			width:45,	
			height:400,
			x:60,
			y:0
		},
		width : 614, //设置图片宽度
		height:347, //设置图片高度
		imgtop:22,//每张图片的上下偏移量
		imgleft:-10,//每张图片的左边偏移量
		imgwidth:30,//每张图片的宽度偏移量
		imgheight:44,//每张图片的高度偏移量
		count : 5,
		offsetX : 60,
		NumBtn : false,
		title:false,
		setZoom:.8,
	});
});
</script>
       

         <style type="text/css">

.blank30{height:30px;overflow:hidden;}
/* jQuery jcImgScroll */
.jcImgScroll{position:relative;height:380px;}
.jcImgScroll li{border:1px solid #ccc;}
.jcImgScroll li a{background:#fff;display:block;position:relative;z-index:99;}
.jcImgScroll li.loading a{background:#fff url(img/loading.gif) no-repeat center center;} 
.jcImgScroll li img,.jcImgScroll li,.jcImgScroll em,.jcImgScroll dl{display:none;border:0 none;}
.jcImgScroll li img{width: 100%;height: 100%;}
.jcImgScroll em.sPrev{background:url(images/mainpage/ads_left.png) no-repeat left center;opacity: 0.55}
.jcImgScroll em.sNext{background:url(images/mainpage/ads_right.png) no-repeat right center;opacity: 0.55}
.jcImgScroll dl dd{background:url(images/NumBtn.png) no-repeat 0 bottom;text-indent:-9em;}
.jcImgScroll dl dd:hover,.jcImgScroll dl dd.curr{background-position:0 0;}
</style>
   