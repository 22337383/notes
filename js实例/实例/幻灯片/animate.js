// 匀速动画函数
    var timer = null;
    function animate(obj,target){
      clearInterval(obj.timer);
      var speed = target > obj.offsetLeft ? 10 : -10;
      
      obj.timer = setInterval(function(){
      // 重点是判断，非常重要
      var back = target - obj.offsetLeft; 
      obj.style.left = obj.offsetLeft + speed + "px";
      if (Math.abs(back) <= 10) {
        clearInterval(obj.timer);
        obj.style.left = target + "px";
      }
      },10)
    }