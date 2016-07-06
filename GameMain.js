
var canvas;
var context;
const NUM = 100;
const WIDTH = 800;
const HEIGHT = 600;
var speedx = new Array(NUM);
var speedy = new Array(NUM);
var xpos = new Array(NUM);
var ypos = new Array(NUM);
var rad = new Array(NUM);
var r = new Array(NUM);
var g = new Array(NUM);
var b = new Array(NUM);

function init(){
  //描画コンテキストの取得
  canvas = document.getElementById('sample1');
  if (canvas.getContext) {
    context = canvas.getContext('2d');
    for(var i = 0;i < NUM;i++){
      speedx[i] = Math.random() * 15 - Math.random() * 15;
      speedy[i] = Math.random() * 15 - Math.random() * 15;
      xpos[i] = WIDTH / 2;
      ypos[i] = HEIGHT / 2;
      rad[i] = Math.random() * 2+1;
      r[i] = Math.floor(Math.random() * 256);
      g[i] = Math.floor(Math.random() * 256);
      b[i] = Math.floor(Math.random() * 256);
    }
  }
}

function draw() {
  context.globalCompositeOperation = "source-over";
  context.fillStyle = 'rgba(8,8,12,0.5)';
  context.fillRect(0,0,WIDTH,HEIGHT);
  context.globalCompositeOperation = "lighter";

for(var i = 0;i < NUM;i++){
    xpos[i] += speedx[i];
    ypos[i] += speedy[i];

    if (xpos[i] < 0 || xpos[i] >WIDTH){
      speedx[i] *= -1;
    }
    if (ypos[i] < 0 || ypos[i] >HEIGHT){
      speedy[i] *= -1;
    }

    context.beginPath();
    context.fillStyle = 'rgb(' + r[i] + ',' + g[i] + ',' + b[i] + ')';
    context.arc(xpos[i],ypos[i],rad[i],0,Math.PI*2,true);
    context.fill();
  }
}

function Main(){
  //初期処理
  init();
  //描画処理
  setInterval(draw,33);
}
