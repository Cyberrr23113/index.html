<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Cyber Zone Hack Team</title>

<meta name="keywords" content="You Need Cash? Weherever You

You Need Cash, We Are There.">

<meta name="description" content="You Need Cash? Weherever You

You Need Cash, We Are There.">

<meta property="og:image" content="">

<link rel="icon" href="https://static.wixstatic.com/media/905ddf_eebd050bf45649468012e0061d94c008~mv2.jpg/v1/fill/w_400,h_400,al_c,lg_1,q_80,enc_auto/WhatsApp%20Görsel%202024-08-16%20saat%2000_18_edited.jpg">

<meta name="robots" content="index, follow">

<meta name="googlebot" content="index,follow" />

<meta property="og:type" content="website">

<meta name="robots" content="all" /><meta name="robots schedule" content="auto" />

<meta name="distribution" content="global" /><link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet" type="text/css">

<base target='_blank'/><body><center>

<link href="https://fonts.googleapis.com/css?family=Averia+Sans+Libre" rel="stylesheet" type="text/css">

<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />

<meta name="distribution" content="global"><link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono|Rajdhani|Oswald:700|Iceland|PT+Sans&display=swap" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

<style type="text/css">* {<br>        -webkit-user-select: text !important;<br>        -moz-user-select: text !important;<br>        -ms-user-select: text !important;<br>         user-select: text !important;<br>    }</style></head>

<body>

  <div id="particles-js">

<canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1365" height="949"></canvas>

</div>

<div class="texture"></div>

<div class="texture2"></div>

<style>

  .texture {

    width: 100%;

    height: 100%;

    position: absolute;

    top: 0;

    left: 0;

    z-index: -100;

    background: url();

}

  .texture2 {

    width: 100%;

    height: 100%;

    position: absolute;

    top: 0;

    left: 0;

    z-index: -100;

    background-color: black;

        opacity: 0.6;

}

  </style>

  <script type="text/javascript">

var snowStorm = null;

function SnowStorm() {

  this.flakesMax = 128;         

  this.flakesMaxActive = 64;     

  this.animationInterval = 33;   

  this.flakeBottom = null;

  this.targetElement = null;

  this.followMouse = true; 

  this.snowColor = 'red';      

  this.snowCharacter = '•'; 

  this.snowStick = true;      

  this.useMeltEffect = true; 

  this.useTwinkleEffect = false;  

  this.usePositionFixed = false; 

  this.flakeLeftOffset = 0;     

  this.flakeRightOffset = 0;    

  this.flakeWidth = 8;       

  this.flakeHeight = 8;     

  this.vMaxX = 5;           

  this.vMaxY = 4;       

  this.zIndex = 0;       

  var addEvent = (typeof(window.attachEvent)=='undefined'?function(o,evtName,evtHandler) {

  return o.addEventListener(evtName,evtHandler,false);

  }:function(o,evtName,evtHandler) {

  return o.attachEvent('on'+evtName,evtHandler);

  });



  var removeEvent = (typeof(window.attachEvent)=='undefined'?function(o,evtName,evtHandler) {

    return o.removeEventListener(evtName,evtHandler,false);

  }:function(o,evtName,evtHandler) {

  return o.detachEvent('on'+evtName,evtHandler);

  });



  function rnd(n,min) {

    if (isNaN(min)) {

    min = 0;

  }

    return (Math.random()*n)+min;

  }



  function plusMinus(n) {

    return (parseInt(rnd(2),10)==1?n*-1:n);

  }



  var s = this;

  var storm = this;

  this.timers = [];

  this.flakes = [];

  this.disabled = false;

  this.active = false;



  var isIE = navigator.userAgent.match(/msie/i);

  var isIE6 = navigator.userAgent.match(/msie 6/i);

  var isOldIE = (isIE && (isIE6 || navigator.userAgent.match(/msie 5/i)));

  var isWin9X = navigator.appVersion.match(/windows 98/i);
  var isiPhone = navigator.userAgent.match(/iphone/i);

  var isBackCompatIE = (isIE && document.compatMode == 'BackCompat');

  var noFixed = ((isBackCompatIE  isIE6  isiPhone)?true:false);

  var screenX = null;

  var screenX2 = null;

  var screenY = null;

  var scrollY = null;

  var vRndX = null;

  var vRndY = null;

  var windOffset = 1;

  var windMultiplier = 2;

  var flakeTypes = 6;

  var fixedForEverything = false;

  var opacitySupported = (function(){

    try {

    document.createElement('div').style.opacity = '0.5';

    } catch (e) {

    return false;

    }

    return true;

  })();

  var docFrag = document.createDocumentFragment();

  if (s.flakeLeftOffset === null) {

  s.flakeLeftOffset = 0;

  }

  if (s.flakeRightOffset === null) {

  s.flakeRightOffset = 0;

  }



  this.meltFrameCount = 20;

  this.meltFrames = [];

  for (var i=0; i<this.meltFrameCount; i++) {

  this.meltFrames.push(1-(i/this.meltFrameCount));

  }



  this.randomizeWind = function() {

    vRndX = plusMinus(rnd(s.vMaxX,0.2));

    vRndY = rnd(s.vMaxY,0.2);

    if (this.flakes) {

      for (var i=0; i<this.flakes.length; i++) {

        if (this.flakes[i].active) {

          this.flakes[i].setVelocities();

    }

      }

    }

  };



  this.scrollHandler = function() {

    // "attach" snowflakes to bottom of window if no absolute bottom value was given

    scrollY = (s.flakeBottom?0:parseInt(window.scrollYdocument.documentElement.scrollTopdocument.body.scrollTop,10));

    if (isNaN(scrollY)) {

    scrollY = 0; // Netscape 6 scroll fix

  }

    if (!fixedForEverything && !s.flakeBottom && s.flakes) {

      for (var i=s.flakes.length; i--;) {

        if (s.flakes[i].active === 0) {

        s.flakes[i].stick();

    }

      }

    }

  };



  this.resizeHandler = function() {

    if (window.innerWidth || window.innerHeight) {

      screenX = window.innerWidth-(!isIE?16:2)-s.flakeRightOffset;

      screenY = (s.flakeBottom?s.flakeBottom:window.innerHeight);

    } else {

      screenX = (document.documentElement.clientWidthdocument.body.clientWidthdocument.body.scrollWidth)-(!isIE?8:0)-s.flakeRightOffset;

      screenY = s.flakeBottom?s.flakeBottom:(document.documentElement.clientHeightdocument.body.clientHeightdocument.body.scrollHeight);

    }

    screenX2 = parseInt(screenX/2,10);

  };



  this.resizeHandlerAlt = function() {

    screenX = s.targetElement.offsetLeft+s.targetElement.offsetWidth-s.flakeRightOffset;

    screenY = s.flakeBottom?s.flakeBottom:s.targetElement.offsetTop+s.targetElement.offsetHeight;

    screenX2 = parseInt(screenX/2,10);

  };



  this.freeze = function() {

    // pause animation

    if (!s.disabled) {

      s.disabled = 1;

    } else {

      return false;

    }

    for (var i=s.timers.length; i--;) {

      clearInterval(s.timers[i]);

    }

  };



  this.resume = function() {

    if (s.disabled) {

       s.disabled = 0;

    } else {

      return false;

    }

    s.timerInit();

  };



  this.toggleSnow = function() {

    if (!s.flakes.length) {

      // first run

      s.start();

    } else {

      s.active = !s.active;

      if (s.active) {

        s.show();

        s.resume();

      } else {

        s.stop();

        s.freeze();

      }

    }

  };



  this.stop = function() {

    this.freeze();

    for (var i=this.flakes.length; i--;) {

      this.flakes[i].o.style.display = 'none';

    }

    removeEvent(window,'scroll',s.scrollHandler);

    removeEvent(window,'resize',s.resizeHandler);

    if (!isOldIE) {

      removeEvent(window,'blur',s.freeze);

      removeEvent(window,'focus',s.resume);

    }

  };



  this.show = function() {

    for (var i=this.flakes.length; i--;) {

      this.flakes[i].o.style.display = 'block';

    }

  };



  this.SnowFlake = function(parent,type,x,y) {

    var s = this;

    var storm = parent;

    this.type = type;

    this.x = x||parseInt(rnd(screenX-20),10);

    this.y = (!isNaN(y)?y:-rnd(screenY)-12);

    this.vX = null;

    this.vY = null;
    
    this.vAmpTypes = [1,1.2,1.4,1.6,1.8]; // "amplification" for vX/vY (based on flake size/type)

    this.vAmp = this.vAmpTypes[this.type];

    this.melting = false;

    this.meltFrameCount = storm.meltFrameCount;

    this.meltFrames = storm.meltFrames;

    this.meltFrame = 0;

    this.twinkleFrame = 0;

    this.active = 1;

    this.fontSize = (10+(this.type/5)*10);

    this.o = document.createElement('div');

    this.o.innerHTML = storm.snowCharacter;

    this.o.style.color = storm.snowColor;

    this.o.style.position = (fixedForEverything?'fixed':'absolute');

    this.o.style.width = storm.flakeWidth+'px';

    this.o.style.height = storm.flakeHeight+'px';

    this.o.style.fontFamily = 'arial,verdana';

    this.o.style.overflow = 'hidden';

    this.o.style.fontWeight = 'normal';

    this.o.style.zIndex = storm.zIndex;

    docFrag.appendChild(this.o);



    this.refresh = function() {

    if (isNaN(s.x) || isNaN(s.y)) {

    // safety check

    return false;

    }

      s.o.style.left = s.x+'px';

      s.o.style.top = s.y+'px';

    };



    this.stick = function() {

      if (noFixed || (storm.targetElement != document.documentElement && storm.targetElement != document.body)) {

        s.o.style.top = (screenY+scrollY-storm.flakeHeight)+'px';

      } else if (storm.flakeBottom) {

      s.o.style.top = storm.flakeBottom+'px';

    } else {

        s.o.style.display = 'none';

      s.o.style.top = 'auto';

        s.o.style.bottom = '0px';

      s.o.style.position = 'fixed';

        s.o.style.display = 'block';

      }

    };



    this.vCheck = function() {

      if (s.vX>=0 && s.vX<0.2) {

        s.vX = 0.2;

      } else if (s.vX<0 && s.vX>-0.2) {

        s.vX = -0.2;

      }

      if (s.vY>=0 && s.vY<0.2) {

        s.vY = 0.2;

      }

    };



    this.move = function() {

      var vX = s.vX*windOffset;

      s.x += vX;

      s.y += (s.vY*s.vAmp);

      if (s.x >= screenX || screenX-s.x < storm.flakeWidth) { // X-axis scroll check

        s.x = 0;

      } else if (vX < 0 && s.x-storm.flakeLeftOffset<0-storm.flakeWidth) {

        s.x = screenX-storm.flakeWidth-1; // flakeWidth;

      }

      s.refresh();

      var yDiff = screenY+scrollY-s.y;

      if (yDiff<storm.flakeHeight) {

        s.active = 0;

      if (storm.snowStick) {

          s.stick();

      } else {

        s.recycle();

      }

      } else {

      if (storm.useMeltEffect && s.active && s.type < 3 && !s.melting && Math.random()>0.998) {

        // ~1/1000 chance of melting mid-air, with each frame

        s.melting = true;

        s.melt();

        // only incrementally melt one frame

        // s.melting = false;

      }

      if (storm.useTwinkleEffect) {

      if (!s.twinkleFrame) {

      if (Math.random()>0.9) {

          s.twinkleFrame = parseInt(Math.random()*20,10);

        }

      } else {

      s.twinkleFrame--;

      s.o.style.visibility = (s.twinkleFrame && s.twinkleFrame%2===0?'hidden':'visible');

      }

      }

      }

    };



    this.animate = function() {

      // main animation loop

      // move, check status, die etc.

      s.move();

    };



    this.setVelocities = function() {

      s.vX = vRndX+rnd(storm.vMaxX*0.12,0.1);

      s.vY = vRndY+rnd(storm.vMaxY*0.12,0.1);

    };



  this.setOpacity = function(o,opacity) {

    if (!opacitySupported) {

    return false;

    }

    o.style.opacity = opacity;

  };



    this.melt = function() {

    if (!storm.useMeltEffect || !s.melting) {

    s.recycle();

    } else {

    if (s.meltFrame < s.meltFrameCount) {

      s.meltFrame++;

      s.setOpacity(s.o,s.meltFrames[s.meltFrame]);

      s.o.style.fontSize = s.fontSize-(s.fontSize*(s.meltFrame/s.meltFrameCount))+'px';

      s.o.style.lineHeight = storm.flakeHeight+2+(storm.flakeHeight*0.75*(s.meltFrame/s.meltFrameCount))+'px';

    } else {

      s.recycle();

    }

    }

    };



    this.recycle = function() {

      s.o.style.display = 'none';

      s.o.style.position = (fixedForEverything?'fixed':'absolute');
      
      s.o.style.bottom = 'auto';

      s.setVelocities();

      s.vCheck();

    s.meltFrame = 0;

    s.melting = false;

    s.setOpacity(s.o,1);

    s.o.style.padding = '0px';

    s.o.style.margin = '0px';

    s.o.style.fontSize = s.fontSize+'px';

    s.o.style.lineHeight = (storm.flakeHeight+2)+'px';

    s.o.style.textAlign = 'center';

    s.o.style.verticalAlign = 'baseline';

      s.x = parseInt(rnd(screenX-storm.flakeWidth-20),10);

      s.y = parseInt(rnd(screenY)*-1,10)-storm.flakeHeight;

      s.refresh();

      s.o.style.display = 'block';

      s.active = 1;

    };



    this.recycle(); // set up x/y coords etc.

    this.refresh();



  };



  this.snow = function() {

    var active = 0;

    var used = 0;

    var waiting = 0;

    var flake = null;

    for (var i=s.flakes.length; i--;) {

      if (s.flakes[i].active == 1) {

        s.flakes[i].move();

        active++;

      } else if (s.flakes[i].active === 0) {

        used++;

      } else {

        waiting++;

      }

      if (s.flakes[i].melting) {

      s.flakes[i].melt();

    }

    }

    if (active<s.flakesMaxActive) {

      flake = s.flakes[parseInt(rnd(s.flakes.length),10)];

      if (flake.active === 0) {

        flake.melting = true;

      }

    }

  };



  this.mouseMove = function(e) {

    if (!s.followMouse) {

    return true;

  }

    var x = parseInt(e.clientX,10);

    if (x<screenX2) {

      windOffset = -windMultiplier+(x/screenX2*windMultiplier);

    } else {

      x -= screenX2;

      windOffset = (x/screenX2)*windMultiplier;

    }

  };



  this.createSnow = function(limit,allowInactive) {

    for (var i=0; i<limit; i++) {

      s.flakes[s.flakes.length] = new s.SnowFlake(s,parseInt(rnd(flakeTypes),10));

      if (allowInactive || i>s.flakesMaxActive) {

      s.flakes[s.flakes.length-1].active = -1;

    }

    }

    storm.targetElement.appendChild(docFrag);

  };



  this.timerInit = function() {

    s.timers = (!isWin9X?[setInterval(s.snow,s.animationInterval)]:[setInterval(s.snow,s.animationInterval*3),setInterval(s.snow,s.animationInterval)]);

  };



  this.init = function() {

    s.randomizeWind();

    s.createSnow(s.flakesMax); // create initial batch

    addEvent(window,'resize',s.resizeHandler);

    addEvent(window,'scroll',s.scrollHandler);

    if (!isOldIE) {

      addEvent(window,'blur',s.freeze);

      addEvent(window,'focus',s.resume);

    }

    s.resizeHandler();

    s.scrollHandler();

    if (s.followMouse) {

      addEvent(document,'mousemove',s.mouseMove);

    }

    s.animationInterval = Math.max(20,s.animationInterval);

    s.timerInit();

  };



  var didInit = false;



  this.start = function(bFromOnLoad) {

  if (!didInit) {

    didInit = true;

  } else if (bFromOnLoad) {

    // already loaded and running

    return true;

  }

    if (typeof s.targetElement == 'string') {

    var targetID = s.targetElement;

      s.targetElement = document.getElementById(targetID);

      if (!s.targetElement) {

      throw new Error('Snowstorm: Unable to get targetElement "'+targetID+'"');

    }

    }

  if (!s.targetElement) {

    s.targetElement = (!isIE?(document.documentElement?document.documentElement:document.body):document.body);

  }

    if (s.targetElement != document.documentElement && s.targetElement != document.body) {

    s.resizeHandler = s.resizeHandlerAlt; // re-map handler to get element instead of screen dimensions

  }

    s.resizeHandler(); // get bounding box elements

    s.usePositionFixed = (s.usePositionFixed && !noFixed); // whether or not position:fixed is supported

    fixedForEverything = s.usePositionFixed;

    if (screenX && screenY && !s.disabled) {

      s.init();

      s.active = true;

    }

  };



  function doStart() {

    s.start(true);

  }



  if (document.addEventListener) {

    // safari 3.0.4 doesn't do DOMContentLoaded, maybe others - use a fallback to be safe.

    document.addEventListener('DOMContentLoaded',doStart,false);

    window.addEventListener('load',doStart,false);

  } else {
      
      addEvent(window,'load',doStart);

  }



}

snowStorm = new SnowStorm();



function IE(e) {

     if (navigator.appName == "Microsoft Internet Explorer" && (event.button == "2" || event.button == "3")) {

          return false;

     }

}

function NS(e) {

     if (document.layers || (document.getElementById && !document.all)) {

          if (e.which == "2" || e.which == "3") {

               return false;

          }

     }

}

document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("return false");







(function() {

  var canvas, ctx, circ, nodes, mouse, SENSITIVITY, SIBLINGS_LIMIT, DENSITY, NODES_QTY, ANCHOR_LENGTH, MOUSE_RADIUS;



  SENSITIVITY = 100;



  SIBLINGS_LIMIT = 10;



  DENSITY = 50;



  NODES_QTY = 0;



  ANCHOR_LENGTH = 20;



  MOUSE_RADIUS = 200;



  circ = 2 * Math.PI;

  nodes = [];



  canvas = document.querySelector('canvas');

  resizeWindow();

  mouse = {

    x: canvas.width / 2,

    y: canvas.height / 2

  };

  ctx = canvas.getContext('2d');

  if (!ctx) {

    alert("Ooops! Your browser does not support canvas :'(");

  }



  function Node(x, y) {

    this.anchorX = x;

    this.anchorY = y;

    this.x = Math.random() * (x - (x - ANCHOR_LENGTH)) + (x - ANCHOR_LENGTH);

    this.y = Math.random() * (y - (y - ANCHOR_LENGTH)) + (y - ANCHOR_LENGTH);

    this.vx = Math.random() * 2 - 1;

    this.vy = Math.random() * 2 - 1;

    this.energy = Math.random() * 100;

    this.radius = Math.random();

    this.siblings = [];

    this.brightness = 0;

  }



  Node.prototype.drawNode = function() {

    var color = "rgba(255, 0, 0, " + this.brightness + ")";

    ctx.beginPath();

    ctx.arc(this.x, this.y, 2 * this.radius + 2 * this.siblings.length / SIBLINGS_LIMIT, 0, circ);

    ctx.fillStyle = color;

    ctx.fill();

  };



  Node.prototype.drawConnections = function() {

    for (var i = 0; i < this.siblings.length; i++) {

      var color = "rgba(255, 0, 0, " + this.brightness + ")";

      ctx.beginPath();

      ctx.moveTo(this.x, this.y);

      ctx.lineTo(this.siblings[i].x, this.siblings[i].y);

      ctx.lineWidth = 1 - calcDistance(this, this.siblings[i]) / SENSITIVITY;

      ctx.strokeStyle = color;

      ctx.stroke();

    }

  };



  Node.prototype.moveNode = function() {

    this.energy -= 2;

    if (this.energy < 1) {

      this.energy = Math.random() * 100;

      if (this.x - this.anchorX < -ANCHOR_LENGTH) {

        this.vx = Math.random() * 2;

      } else if (this.x - this.anchorX > ANCHOR_LENGTH) {

        this.vx = Math.random() * -2;

      } else {

        this.vx = Math.random() * 4 - 2;

      }

      if (this.y - this.anchorY < -ANCHOR_LENGTH) {

        this.vy = Math.random() * 2;

      } else if (this.y - this.anchorY > ANCHOR_LENGTH) {

        this.vy = Math.random() * -2;

      } else {

        this.vy = Math.random() * 4 - 2;

      }

    }

    this.x += this.vx * this.energy / 100;

    this.y += this.vy * this.energy / 100;

  };



  function initNodes() {

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    nodes = [];

    for (var i = DENSITY; i < canvas.width; i += DENSITY) {

      for (var j = DENSITY; j < canvas.height; j += DENSITY) {

        nodes.push(new Node(i, j));

        NODES_QTY++;

      }

    }

  }



  function calcDistance(node1, node2) {

    return Math.sqrt(Math.pow(node1.x - node2.x, 2) + (Math.pow(node1.y - node2.y, 2)));

  }



  function findSiblings() {

    var node1, node2, distance;

    for (var i = 0; i < NODES_QTY; i++) {

      node1 = nodes[i];

      node1.siblings = [];

      for (var j = 0; j < NODES_QTY; j++) {

        node2 = nodes[j];

        if (node1 !== node2) {

          distance = calcDistance(node1, node2);

          if (distance < SENSITIVITY) {

            if (node1.siblings.length < SIBLINGS_LIMIT) {

              node1.siblings.push(node2);

            } else {

              var node_sibling_distance = 0;

              var max_distance = 0;

              var s;
              
              for (var k = 0; k < SIBLINGS_LIMIT; k++) {

                node_sibling_distance = calcDistance(node1, node1.siblings[k]);

                if (node_sibling_distance > max_distance) {

                  max_distance = node_sibling_distance;

                  s = k;

                }

              }

              if (distance < max_distance) {

                node1.siblings.splice(s, 1);

                node1.siblings.push(node2);

              }

            }

          }

        }

      }

    }

  }



  function redrawScene() {

    resizeWindow();

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    findSiblings();

    var i, node, distance;

    for (i = 0; i < NODES_QTY; i++) {

      node = nodes[i];

      distance = calcDistance({

        x: mouse.x,

        y: mouse.y

      }, node);

      if (distance < MOUSE_RADIUS) {

        node.brightness = 1 - distance / MOUSE_RADIUS;

      } else {

        node.brightness = 0;

      }

    }

    for (i = 0; i < NODES_QTY; i++) {

      node = nodes[i];

      if (node.brightness) {

        node.drawNode();

        node.drawConnections();

      }

      node.moveNode();

    }

    requestAnimationFrame(redrawScene);

  }



  function initHandlers() {

    document.addEventListener('resize', resizeWindow, false);

    canvas.addEventListener('mousemove', mousemoveHandler, false);

  }



  function resizeWindow() {

    canvas.width = window.innerWidth;

    canvas.height = window.innerHeight;

  }



  function mousemoveHandler(e) {

    mouse.x = e.clientX;

    mouse.y = e.clientY;

  }



  initHandlers();

  initNodes();

  redrawScene();

})();

</script>

<script type="text/javascript">"interactivity": {

    "detect_on": "window",

    "events": {

      "onhover": {

        "enable": true,

        "mode": "bubble"

      },</script>

<style>

html {

height: 100%

}

body {

    background-color: transparent;

}

      .ico {

        width:250px;

        height:250px;

        margin:0;

        padding:0;

      }

#particles-js {

    position: absolute;

    width: 100%;

    height: 100%;

    background-repeat: no-repeat;

    background-size: cover;

    background-position: 50% 50%;

    opacity: 0.5;

}

            #xx {

        width: 100%;

        height: 100%; 

        background-size: cover; 

        background-position: 50% 50%; 

        position: fixed; 

        top: 0px; 

        z-index:1;

      } 

      @keyframes blikk{

        0% {

          color: darkred;

          text-shadow: #fff 0px 0px 10px;

        }

        50% {

          color: white;

          text-shadow: darkred 0px 0px 10px;

        }

        100% {

          color: darkred;

          text-shadow: #fff 0px 0px 10px;

        }

      }

    img.tengah {

    display: block;

    margin-left: auto;

    margin-right: auto;

}

html {cursor: url(https://github.com/ByTanimsiz/q/blob/main/cur641.cur?raw=true), auto;}

</style>

<div id="xxx">

<style>

html {

  height: 100%;

  -webkit-box-sizing: border-box;

          box-sizing: border-box;

}

::-webkit-scrollbar {

  width: 0.1px;

}

.example::-webkit-scrollbar {

  display: none;

}

.example {

  -ms-overflow-style: none;

  scrollbar-width: none;

}

body {

   /* overflow-y: hidden; Hide vertical scrollbar */

  overflow-x: hidden; /* Hide horizontal scrollbar */

  min-height: 100%;

  position: relative;

  padding-bottom: 3rem;

  margin: 0;

  padding: 0;

  text-align: center;

  width: 100%;

   font-family: 'Rajdhani', sans-serif;

  a { text-decoration: none; color:white; }

a:visited { text-decoration: none; }

a:hover { text-decoration: none; }

a:focus { text-decoration: none; }

a:hover, a:active { text-decoration: none; }

}

.animated-button3 {

  width: 150px;

      height: 60px;

  background: linear-gradient(-30deg, #3d3d0b 50%, #2b2b08 50%);

  padding: 20px 40px;

  margin: 12px;

  display: inline-block;

  -webkit-transform: translate(0%, 0%);

          transform: translate(0%, 0%);

  overflow: hidden;

  color: #ffffff;
  
  acolor: #f7f7d4;

  font-size: 14px;

  letter-spacing: 2.5px;

  text-align: center;

  text-decoration: none;

   font-family: 'Rajdhani', sans-serif;

  -webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);

          box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);

  a:visited, a:hover, a:focus {

    text-decoration: none;

    color: #000;

}

}



.animated-button3::before {

  content: '';

  position: absolute;

  top: 0px;

  left: 0px;

  width: 100%;

  height: 100%;

  background-color: #adad85;

  opacity: 0;

  -webkit-transition: .2s opacity ease-in-out;

  transition: .2s opacity ease-in-out;

}



.animated-button3:hover::before {

  opacity: 0.2;

}



.animated-button3 span {

  position: absolute;

}



.animated-button3 span:nth-child(1) {

  top: 0px;

  left: 0px;

  width: 100%;

  height: 2px;

  background: -webkit-gradient(linear, right top, left top, from(rgba(43, 43, 8, 0)), to(#d9d926));

  background: linear-gradient(to left, rgba(43, 43, 8, 0), #d9d926);

  -webkit-animation: 2s animateTop linear infinite;

          animation: 2s animateTop linear infinite;

}



@keyframes animateTop {

  0% {

    -webkit-transform: translateX(100%);

            transform: translateX(100%);

  }

  100% {

    -webkit-transform: translateX(-100%);

            transform: translateX(-100%);

  }

}



.animated-button3 span:nth-child(2) {

  top: 0px;

  right: 0px;

  height: 100%;

  width: 2px;

  background: -webkit-gradient(linear, left bottom, left top, from(rgba(43, 43, 8, 0)), to(#d9d926));

  background: linear-gradient(to top, rgba(43, 43, 8, 0), #d9d926);

  -webkit-animation: 2s animateRight linear -1s infinite;

          animation: 2s animateRight linear -1s infinite;

}



@keyframes animateRight {

  0% {

    -webkit-transform: translateY(100%);

            transform: translateY(100%);

  }

  100% {

    -webkit-transform: translateY(-100%);

            transform: translateY(-100%);

  }

}



.animated-button3 span:nth-child(3) {

  bottom: 0px;

  left: 0px;

  width: 100%;

  height: 2px;

  background: -webkit-gradient(linear, left top, right top, from(rgba(43, 43, 8, 0)), to(#d9d926));

  background: linear-gradient(to right, rgba(43, 43, 8, 0), #d9d926);

  -webkit-animation: 2s animateBottom linear infinite;

          animation: 2s animateBottom linear infinite;

}



@keyframes animateBottom {

  0% {

    -webkit-transform: translateX(-100%);

            transform: translateX(-100%);

  }

  100% {

    -webkit-transform: translateX(100%);

            transform: translateX(100%);

  }

}



.animated-button3 span:nth-child(4) {

  top: 0px;

  left: 0px;

  height: 100%;

  width: 2px;

  background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 43, 8, 0)), to(#d9d926));

  background: linear-gradient(to bottom, rgba(43, 43, 8, 0), #d9d926);

  -webkit-animation: 2s animateLeft linear -1s infinite;

          animation: 2s animateLeft linear -1s infinite;

}



@keyframes animateLeft {

  0% {

    -webkit-transform: translateY(-100%);

            transform: translateY(-100%);

  }

  100% {

    -webkit-transform: translateY(100%);

            transform: translateY(100%);

  }

}

}

/*# 1877 */

</style>

<style>

@import "https://fonts.googleapis.com/earlyaccess/droidarabickufi.css";

a:visited, a:hover, a:focus {

    text-decoration: none;

    color: white;

}

animated-button3 {

   font-family: 'Rajdhani', sans-serif;

}

</style>

<style>

.gambargetar{position:relative}

img:hover{opacity:1}textarea{resize:none}

img {

    position:relative;opacity:1.0

}

</style>

<style type="text/css">

@media only screen and (max-device-width: 480px) {

html, body {

  overflow-x: hidden;

}

body {

  position: relative;

   font-family: 'Rajdhani', sans-serif;

}

    img {    

    weight: 100%;

    position: relative;

    margin: -4;

}

</style>

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<style type="text/css">body, a:hover {cursor: url(https://cur.cursors-4u.net/cursors/cur-7/cur686.cur), progress !important;}</style>

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">

   body,td,th {

   color: #000;

   margin: 0;

   padding: 0;

   height: 125%;

   position: fixed;

   font-family: 'Rajdhani', sans-serif;

   background-image: url("https://static.wixstatic.com/media/905ddf_390943c7bab144499b83f7c81b646719~mv2.png/v1/fill/w_1310,h_699,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/905ddf_390943c7bab144499b83f7c81b646719~mv2.png");

   background-color:#000000;

   background-position: center;

   background-repeat: no-repeat;

   background-size: cover;

   text-shadow: 3px 3px 2px black, 6px 6px 5px black, 6px 6px 5px black;

   a:visited, a:hover, a:focus {

    text-decoration: none;

    color: white;

}

   }

</style>

<body oncontextmenu="if (!window.cfRLUnblockHandlers) return false; return false;" onkeydown="if (!window.cfRLUnblockHandlers) return false; return false;" onmousedown="if (!window.__cfRLUnblockHandlers) return false; return false;" data-cf-modified-ce222c656afc4da03b6a67db-="https://static.wixstatic.com/media/905ddf_eebd050bf45649468012e0061d94c008~mv2.jpg/v1/fill/w_400,h_400,al_c,lg_1,q_80,enc_auto/WhatsApp%20Görsel%202024-08-16%20saat%2000_18_edited.jpg">

<center><font size="3" color="ae00ae">♠ ♠ </font><font size="3" color="white">♠ </font><font size="3" color="white">♠ </font><font size="3" color="white">♠ </font><font size="3" color="ae00ae">♠ ♠</font></center>

<img src="">

<style>img {

  max-width: 100%;

  -webkit-filter: drop-shadow(4px 4px 4px #000);

  filter: drop-shadow(4px 4px 4px #000);

}

</style>

<img src="https://static.wixstatic.com/media/905ddf_eebd050bf45649468012e0061d94c008~mv2.jpg/v1/fill/w_400,h_400,al_c,lg_1,q_80,enc_auto/WhatsApp%20Görsel%202024-08-16%20saat%2000_18_edited.jpg" border="0" width="250" style=" border-radius: 25px;" onclick="location.href = '';"> 



<div style="line-height:40%;">

<br

<iframe src="https://mp3semti.com/dinle/Sezen-Aksu-Kaybolan-Yillar" allow="autoplay" loop style="display:none"> </iframe>

<audio loop autoplay>



<source src="https://mp3semti.com/dinle/Sezen-Aksu-Kaybolan-Yillar" type="audio/mpeg">

</audio>

</div>

<div id="center"> <font color="white" size="6" face="'Rajdhani', sans-serif"> <font color=#FFFF00> </font> <a style="text-decoration:none" onclick="location.href = '';"><font color=#AE00AE onclick="location.href = 'https://instagram.com/mast5r';">CyberZoneHackTeam<img src="https://i.imgur.com/Imsbaxc.gif" style="margin:0 0 -0px 0;width:20px;height:20px;"></a></font>

<div style="line-height:20%;">

<br>

</div>

<center><div id="center"> <font size="5"><font face="'Rajdhani', sans-serif" color="#ff0000"> </font><font face="'Rajdhani', sans-serif" color="#ffffff">

</font><font face="'Rajdhani', sans-serif" color="#AE00AE"></font><font face="'Rajdhani', sans-serif" color="#ffffff"></font><font face="'Rajdhani', sans-serif" color="#008000"></font></font></div>

<!--<img src="https://i./cwfwBp8.gif" width="300" height="40" style="margin-left:0px;"><br>-->



<font color="white" size="4" face="Share Tech Mono"><br>

</font>

<font color="ae00ae" size="9" face="Share Tech Mono">"Hacked By <span style="color:red">Cyber Zone Group</span>"</font><br>


<font color="white" size="5" face="Share Tech Mono"> </font><br>

<!--<font color="white" size="5" face="Share Tech Mono"></font><br>

<font color="white" size="5" face="Share Tech Mono"></font>

<div id="center"> <font color="black" size="5" face="'Averia Sans Libre'" style="text-shadow: 0px 1px 10px lime;"></a></div></font>-->

<img src="https://i.imgur.com/cwfwBp8.gif" width="300" height="40" style="margin-left:0px;"><br>

<div id="center"><img src="https://i.imgur.com/8zYLCbs.gif" style="margin:0 0 -0px 0;width:25px;height:25px;"><font color="white" size="6" face="'Rajdhani', sans-serif" text-shadow: 2px 2px">I Did No Harm, Close The Vulnerability.</a></font><img src="https://i.imgur.com/HyXzLUG.gif" style="margin:0 0 -0px 0;width:25px;height:25px;"><br><img src="https://i.imgur.com/nNhAn7g.gif" style="margin:0 0 -0px 0;width:30px;height:30px;"><font color="white" size="5" face="'Rajdhani', sans-serif" text-shadow: 2px 2px" style="background-image: url('https://i.imgur.com/8f11A2B.gif');width='5'"><span style="color: red;font-family:'Courier New', Courier, monospace; font-size: 15px;">HaN:~#</span></a><img


src="https://i.imgur.com/BbSScWJ.gif" style="margin:0 0 -0px 0;width:30px;height:30px;"></div></font></div>

<!--<div id="center"><img src="https://i.imgur.com/nNhAn7g.gif" style="margin:0 0 -0px 0;width:30px;height:30px;"><font color="white" size="4" face="droid arabic kufi" text-shadow: 2px 2px" style="background-image: url('https://i.imgur.com/KpGkxmO.gif');width='5'">بێگانە ئەگەر بتڕێ ئەڵێن تڕی فەرموو</a><img src="https://i.imgur.com/BbSScWJ.gif" style="margin:0 0 -0px 0;width:30px;height:30px;"></div></font></div></div></center></a></font></div>-->

<div style="line-height:40%;">

<br>

</div>

<script language="javascript">document.write(unescape(''))</script><a href="https://t.me/CyberZoneGroup" class="animated-button3" style="text-decoration: none">

<span></span>

<span></span>

<span></span>

<span></span>

Telegram

</a>



  
<span></span>

<span></span>

<span></span>

<span></span>



</a>

<br>



</div>

<style type="text/css">

            p {

                margin: 0;

            }



            *, *::before, *::after {

                box-sizing: border-box;

            }



            .overlay, .scare {

background-color: transparent;



            }



            p.overlay-title {

                font-size: 24px;

                font-weight: 900;

                color: black;

                line-height: 1;



                margin-bottom: 16px;

            }



            .overlay-button {

                position: absolute;

                display: inline-flex;

                align-items: center;



                height: 40px;



                padding-right: 24px;

                padding-left: 24px;



                font-size: 16px;

                font-weight: 500;

                line-height: 1;



                border-radius: 4px;



                margin: 4px;



                cursor: pointer;

            }



            .overlay-buttons-wrapper {

                margin: -8px;

            }



            #accept-button {

              z-index: 100px;

                color: rgb(255, 34, 34);

                border: 0px solid rgb(253, 253, 253);

            }



            #decline-button {

                color: rgb(255, 34, 34);



                border: 2px solid rgb(253, 253, 253);

            }



            p.overlay-description {

                font-size: 16px;

                font-weight: 400;

                color: rgba(0, 0, 0, 0.5);

                line-height: 1.25;



                margin-bottom: 32px;

            }



            a.overlay-link {

                display: inline-block;



                text-decoration: none;



                font-size: 16px;

                font-weight: 500;

                color: rgb(132, 94, 194);

                line-height: 1;



                position: relative;



                margin-top: 16px;

            }



            a.overlay-link::before {

                position: absolute;



                content: "";



                height: calc(50% + 4px);

                width: calc(100% + 8px);



                bottom: -4px;

                left: -4px;



                background-color: rgba(132, 94, 194, 0.1);

            }



            .overlay-body {

                max-width: 512px;



                text-align: center;



                font-family: "Inter", sans-serif;

            }



            .overlay.hidden {

                display: none;

            }



            .overlay {

                z-index: 2;

background-color: transparent;

                display: flex;

                align-items: center;

                justify-content: center;

                 overflow: hidden;

            }



            .scare {

                z-index: 1;

            }



            video {

                height: 100%;

                width: 100%;

                object-fit: cover;

margin-top: 500px;

            }

            xnvideo {

                height: 100%;

                width: 100%;

                object-fit: cover;
                
                
      }



      video#video::-webkit-media-controls-enclosure {

        display:none !important;

      }

    </style>

<script>

 function changer()

 {

const element = document.getElementById("video");

    element.classList.add("xnvideo");

    element.classList.remove("video");

var element = document.getElementById("video");

  element.classList.toggle("xnvideo");

 }

</script>

</head>

<body>

<div id="overlay" class="overlay">

<!--<div class="overlay-body">

<div class="overlay-buttons-wrapper">-->

<br><div id="accept-button" class="overlay-button"><font color="red" size="5" face="'Rajdhani', sans-serif" text-shadow: 2px 2px"></div>

<!--<div id="decline-button" class="overlay-button"><font color="red" size="4" face="'Rajdhani', sans-serif" text-shadow: 2px 2px">Decline</div>-->

<script>

function textt() {

  var hid = document.getElementsByClassName("exp");

    // Emulates jQuery $(element).is(':hidden');

    if(hid[0].offsetWidth > 0 && hid[0].offsetHeight > 0) {

        hid[0].style.visibility = "visible";

    }

}

</script>

<script>

function videoo() {

  var hid = document.getElementsByClassName("video");

    // Emulates jQuery $(element).is(':hidden');

    if(hid[0].offsetWidth > 0 && hid[0].offsetHeight > 0) {

        hid[0].style.visibility = "visible";

    }

}

  var hid = document.getElementsByClassName("scare");

    // Emulates jQuery $(element).is(':hidden');

    if(hid[0].offsetWidth > 0 && hid[0].offsetHeight > 0) {

        hid[0].style.visibility = "visible";

    }

}

</script>



</div>

</div>

</div>

<meta name="keywords" content="">



<script type="text/javascript">

            const video = document.getElementById("video");

            const overlay = document.getElementById("overlay");

            const declineButton = document.getElementById("decline-button");

            const acceptButton = document.getElementById("accept-button");



            let hasClicked;



        window.onbeforeunload = function( ) {

          if(hasClicked) return true;

        };



            function buttonClick(event) {

                event.preventDefault();

                if(!hasClicked) hasClicked = true;

                overlay.classList.add("hidden");

                video.play();

                videoClick();

window.scrollTo(0,document.body.scrollHeight);

textt();

            }



            function videoClick(event) {

                if(event) event.preventDefault();

                // if not fullscreen

                const { documentElement } = document;

          if(documentElement.requestFullscreen) documentElement.requestFullscreen();

          else if(documentElement.mozRequestFullScreen) documentElement.mozRequestFullScreen();

          else if(documentElement.webkitRequestFullscreen) documentElement.webkitRequestFullscreen();

          else if(documentElement.msRequestFullscreen) full.msRequestFullscreen();

            }



            acceptButton.addEventListener("click", buttonClick);

            declineButton.addEventListener("click", buttonClick);

            video.addEventListener("click", videoClick);

    </script>

         <script>

            document.onkeydown = function (e) {

                    return false;

            }

            </script>

            <script>

              document.addEventListener("contextmenu", function(e){

                  e.preventDefault();

              }, false);

              </script>





</div>

<FONT color=#FF0000></font><br>

</body>

</script>

</center>

</font>

</footer>

<body oncontextmenu="if (!window.__cfRLUnblockHandlers) return false; return false;" data-cf-modified-ce222c656afc4da03b6a67db-="">

  <script type="ce222c656afc4da03b6a67db-text/javascript">

  document.onkeydown = function (e) {

          return false;

  }

  </script>

<script type="ce222c656afc4da03b6a67db-text/javascript">

    document.addEventListener("contextmenu", function(e){

        e.preventDefault();

    }, false);

    </script>

<!--<audio autoplay="true" loop src="XX1877.mp3">-->

</html></body></FONT></font></div></div></font></div>

<iframe width="0" height="0" src="oplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

</font></font></font></font></font></font></font></font></font></font></center></body></html>


