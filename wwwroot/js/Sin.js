//$(document).ready(function () {
//    if (canvas.getContext) {

//        var ctx = canvas.getContext("2d");
//        var re_time = 30;

//        time_go();
//        var e = 2;
//        var bool = true;
//        var dots = [];

//        function time_go() {

//            timer = setInterval(function () {
//                ctx.strokeStyle = "#ff6565";
//                ctx.lineWidth = 0.02;

//                ctx.beginPath();
//                ctx.clearRect(0, 0, canvas.width, canvas.height);

//                for (i = 0; i < 800; i++) {
//                    x = i;
//                    var ds = 8000;
//                    var sigma = Math.sqrt(ds);
//                    var u = 200;
//                    var dxu = (x - u) * (x - u);

//                    dots[i] = 3000 * (Math.pow(2.86, - dxu / (ds * 2)) / (sigma * Math.sqrt(2 * Math.PI)));
//                }

//                for (i = 0; i < 800; i++) {
//                    x = i;
//                    ctx.moveTo(x * 2, 0);
//                    var ds = 10000;
//                    var sigma = Math.sqrt(ds);
//                    var u = 500;
//                    var dxu = (x - u) * (x - u);

//                    dots[i] += 5000 * (Math.pow(2.86, - dxu / (ds * 2)) / (sigma * Math.sqrt(2 * Math.PI)));
//                    ctx.moveTo(x, 0);
//                    ctx.stroke();
//                    ctx.lineTo(x, dots[i] * 10 - 10);
//                }

//                //for (x = 0; x <= 360; x++) {
//                //    ctx.moveTo(x, 0);
//                //    y = Math.sin(x * Math.PI / 180) * 100;
//                //    ctx.lineTo(x, y);
//                //}

//                //ctx.stroke();
//                //for (x = 0; x <= 360; x++) {
//                //    ctx.moveTo(x * e, 0);
//                //    y = Math.sin(x * Math.PI / 180) * 120;
//                //    ctx.lineTo(x * e, y);
//                //}

//                //if (bool)
//                //    e -= 0.01;
//                //if (e <= 0.20)
//                //    bool = false;
//                //if (!bool)
//                //    e += 0.01;
//                //if (e >= 2.00)
//                //    bool = true;
//                //ctx.stroke();
//            }, re_time);
//        }
//    }
//});
