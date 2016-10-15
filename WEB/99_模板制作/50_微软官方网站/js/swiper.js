$(document).ready(function () {
	var mySwiper = new Swiper ('.swiper-container', {
		//自动播放
		autoplay: 5000,
		direction: 'horizontal',
		//循环播放
		loop: true,
		
		// 如果需要分页器
		pagination: '.swiper-pagination',
		paginationClickable :true,
		
		// 如果需要前进后退按钮
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		//淡入淡出效果
		effect : 'fade',
		fade: {
		  crossFade: true,
		}
	})
	$(".swiper-container").mouseover(function(){
		$(".swiper-pagination").show();
		$(".swiper-button").show();
	})
	$(".swiper-container").mouseout(function(){
		$(".swiper-pagination").hide();
		$(".swiper-button").hide();
	})
})
