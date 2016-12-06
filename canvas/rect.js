// 属性说明：x y起始点坐标  w h矩形的宽高 opcity透明度  scale缩放矩形 rotate旋转角度 
// fillStyle填充颜色 strokeStyle描边颜色
// 方法说明：render渲染画布
function Rect(option){
	this._init(option)
}
Rect.prototype = {
	_init: function(option){
		this.x = option.x || 0;
		this.y = option.y || 0;
		this.w = option.w || 0;
		this.h = option.h || 0;
		this.opacity = option.opacity == 0 ? 0 : (option.opacity || 1);
		this.scaleX = option.scaleX || 1;
		this.scaleY = option.scaleY || 1;
		this.rotate = option.rotate || 0;
		this.fillStyle = option.fillStyle || 'green';
		this.strokeStyle = option.strokeStyle || 'red';
	},
	render: function(ctx){
		ctx.save();//保存之前的画布状态
		ctx.beginPath();
		ctx.translate(this.x, this.y);//把画布移动到起始点坐标
		ctx.globalAlpha = this.opacity;// 透明度

		ctx.scale(this.scaleX,this.scaleY);
		// ctx.rotate = this.rotate * Math.PI / 180;
		ctx.rotate(this.rotate * Math.PI / 180 );
		ctx.rect(0, 0, this.w, this.h);
		ctx.fillStyle = this.fillStyle;
		ctx.fill();

		ctx.strokeStyle = this.strokeStyle;
		ctx.stroke();
		ctx.restore();//还原绘制的状态
	}
}