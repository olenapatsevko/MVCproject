var k = 1;
$('body *').click(function () {
    if (k == 1){
        var s = document.createElement('div');
        var st = document.createElement('style');
        document.body.appendChild(s);
        document.body.appendChild(st);
        s.innerHTML = '<img id="g329hu" src="http://lux.dev-web.in.ua/img/golub.gif" alt="">';
        st.innerHTML = '#g329hu{position: absolute;z-index: 999;transition: 0.3s;}';
        k = 2;
    }
    else {

    }
});

var z=0;
$('#wrap .video-changer-1').click(function () {
   if (z == 0){
       z = 2;
   }
});

$('#wrap .video-changer-4').click(function () {
    if (z == 2){
        z = 22;
    }
});

$('#wrap .video-changer-2').click(function () {
    if (z == 22){
        z = 45;
    }
});

$('#wrap .video-changer-3').click(function () {
    if (z == 45){
        var O = document.getElementById('g329hu'),
            X = 0,
            Y = 0,mouseX=0,mouseY=0;
        window.addEventListener('click', function (ev) {
            ev = window.event || ev;
            X=ev.pageX - 130;
            Y=ev.pageY ;
        });

        function move() {
            var p = 'px';
            console.log(X,Y);
            O.style.left = X + p;
            O.style.top = Y + p;

            setTimeout(move, 100);
        }
        move();
    }
});