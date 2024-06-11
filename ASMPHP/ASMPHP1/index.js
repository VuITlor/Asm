var index = 1;
function thaydoianh(){
    var anh = ["./img/banner-07-throw.jpg","./img/banner-08-shake.jpg","./img/banner-09-flick.jpg","./img/banner-10-tilt.jpg","./img/banner-11-drag.jpg","./img/banner-12-move.jpg"];
    document.getElementById('img').src = anh[index];
    index++;
    if(index == 6){
        index = 0;
    }
}
setInterval(thaydoianh,2000);
