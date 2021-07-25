<html>
   <head></head>
   <body>
      <form>
         <input id="uname" onkeyup="getVal(this)" type="text" placeholder="Username"><br>
         <span id="op"></span><br>
		 <input type="password" placeholder="Password"><br>
	   </form>
	   <button id="btn_g" onclick="viewGoogle()">Login with Google</button>
	   <span onmouseover="viewInfo()" onmouseover="hideInfo()">aiub</span>
	   <p id="aiub_info" style="display:none;">

       American International University- Bangladesh, commonly known by its  acronym AIUB, is an accredited private univarsity
    </p>
    <form id="g_form" style="display: none;">
        <input type ="text" placeholder="gmail"><br>
        <input type ="Password" placeholder="gmail password"><br>
    </form>
    <script src="myjs.js"></script>
</body>
</html>