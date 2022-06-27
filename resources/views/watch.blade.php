<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/watch.css') }}">
</head>
<body>
    <div class="container">
    	<div class="hour flex">
    		<div class="line"></div>
    		<span class="session" id="am">am</span>
    		<span class="session" id="pm">pm</span>
    		<span id="hh">9</span>
    	</div>
    	<div class="minute flex">
    		<div class="line"></div>
    		<span id="mm">20</span>
    	</div>
    </div>

    <script type="text/javascript">
    	function currentTime() {
    		let date = new Date(); 
    		let hh = date.getHours();
    		let mm = date.getMinutes();
    		let ss = date.getSeconds();
    		let session = "AM";

    		if(hh == 0){
    			hh = 12;
    		}
    		if(hh > 12){
    			hh = hh - 12;
    			session = "PM";
    		}

    		hh = (hh < 10) ? "0" + hh : hh;
    		mm = (mm < 10) ? "0" + mm : mm;
    		ss = (ss < 10) ? "0" + ss : ss;

    		let time = hh + ":" + mm + ":" + ss + " " + session;

    		document.getElementById("hh").innerText = hh; 
    		document.getElementById("mm").innerText = mm;

    		if (session = "PM") {
    			document.querySelector('#am').style.display = 'none';
    			document.querySelector('#pm').style.display = 'block';
    		} else {
    			document.querySelector('#am').style.display = 'block';
    			document.querySelector('#pm').style.display = 'none';
    		}

    		let t = setTimeout(function(){ currentTime() }, 1000);
    	}
    	currentTime();
    </script>
</body>
</html>