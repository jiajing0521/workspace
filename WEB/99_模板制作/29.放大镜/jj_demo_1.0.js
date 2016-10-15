$.extend({
	"glass":function(minDiv,maskDiv,maxDiv,bigImg){
		//以下是放大镜的原理：
		//布局比例：蒙板的大小/左边边框（小图）的大小 = 右边边框的大小/大图的大小
		//运算比例：蒙板的移动位置/可移动的最大位置 = - 大图的移动位置/大图可移动最大位置
		$(minDiv).mouseover(function(){
			$(maskDiv).show();
			$(maxDiv).show();
		});
		$(minDiv).mouseout(function(){
			$(maskDiv).hide();
			$(maxDiv).hide();
		});
		$(minDiv).mousemove(function(ev){
			var sliderX = ev.clientX - $(maskDiv).outerWidth()/2;
			var sliderY = ev.clientY - $(maskDiv).outerHeight()/2;
			var maxX = $(minDiv).innerWidth()- $(maskDiv).outerWidth();
			var minX = 0;
			var maxY = $(minDiv).innerHeight()- $(maskDiv).outerHeight();
			var minY = 0;
			//判断横向边界
			if (sliderX > maxX) {
				sliderX = maxX;
			} else if(sliderX < minX){
				sliderX = minX;
			}
			//判断纵向边界
			if (sliderY > maxY) {
				sliderY = maxY;
			} else if(sliderY < minY){
				sliderY = minY;
			}
			//蒙板跟随鼠标移动
			$(maskDiv).css({
				left:sliderX,
				top:sliderY
			});
			//求比例（蒙板的移动位置/可移动的最大位置）
			var biliX = sliderX/maxX;
			var biliY = sliderY/maxY;
			//大图跟随移动
			$(bigImg).css({
				left:-biliX * ($(bigImg).innerWidth() - $(maxDiv).outerWidth()),
				top:-biliY * ($(bigImg).innerHeight() - $(maxDiv).outerHeight())
			});
		});
	}
});