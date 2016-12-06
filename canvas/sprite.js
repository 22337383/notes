// 参数说明：x y 绘制到画布上什么位置   w h绘制精灵图的宽高    originW originH裁剪精灵图的宽高  
// fps帧频 imgSrc图片地址
function Sprite(option){
	// 对象接收到参数后直接调用_init方法
	this._init(option);
}
//在对象原型上添加构造函数
Sprite.prototype = {
	_init:function(option){
		this.x = option.x == 0 ? 0 : (option.x || 0);//this 指向调用对象的构造函数
		this.y = option.y == 0 ? 0 : (option.y || 0);
		this.w = option.width || 45;//如果没有传递参数或者参数为0默认取45，否则就按参数大小
		this.h = option.height || 60;
		this.originW = option.originwW || 40;
		this.originH = option.originH || 60;
		this.fps = option.fps || 10;
		this.imgSrc = option.imgSrc || '';//没有传递图片地址默认为空
	},//曾经错误：忘记加逗号
	// 渲染到画布上面
	render: function(ctx){
		var img = new Image();
		img.src = this.imgSrc; 
		var self = this;//把原型对象拿过来；

		img.onload = function(){
			var dirIndex = 0;//用于计算精灵图y坐标
			var frameIndex = 0;//起始帧，用于计算裁剪x坐标
			
			setInterval(function(){
				
				ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);//清除画布
				ctx.drawImage(img, frameIndex * self.originWidth, dirIndex * self.originHeight, 
					self.originWidth, self.originHeight, self.x, self.y, self.w, self.h);

				frameIndex ++;
				frameIndex %= 4;
			},1000 / self.fps)
		}
	},
	//改变方向
	chageDir:function(dir){
		if (dir == 'left') {
			this.dirIndex = 1;//this指向函数的调用者
		}

		if( dir == 'right' ) {
			this.dirIndex = 2;
		}


		if( dir == 'up' ) {
			this.dirIndex = 3;
		}

		if( dir == 'down' ) {
			this.dirIndex = 0;
		}
	}
}