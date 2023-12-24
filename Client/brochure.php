<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 25%;
  padding:0px;
  margin-top: 50px;
  margin-left: 85px;
  margin-bottom: 100px;
  border:5px double black;
}


.row::after {
  content: "";
  clear: both;
  display: table;
}

p{
  text-align: center;
  color: yellow;
}

h2{
  text-align: center;
  font-size: 50px;
  color: white;
}

body{
  background-image: url("images/back.jpg");
}
</style>
</head>
<body>



<h2>* Download Brochure From Here *</h2>


<div class="row">
  <div class="column">
    <img src="images/hector.jpeg" alt="Snow" style="width:100%">
    <br/>
    <a href="Brochure/HECTOR.pdf"><p>HECTOR</p></a>
  </div>

  <div class="column">
     <img src="images/hector-plus-6s.jpg" alt="Snow" style="width:100%">
    <br/>
    <a href="Brochure/HECTOR PLUS 6S.pdf"><p>HECTOR PLUS 6 STR</p></a>
  </div>

  <div class="column">
    <img src="images/astor.jpg" alt="Snow" style="width:100%">
    <br/>
    <a href="Brochure/ASTOR.pdf"><p>ASTOR</p></a>
  </div>
</div>


<div class="row">
  <div class="column">
    <img src="images/gloster.jpg" alt="Snow" style="width:100%">
    <br/>
    <a href="Brochure/GLOSTER.pdf"><p>GLOSTER</p></a>
  </div>

  <div class="column">
     <img src="images/hector-plus-7s.jpg" alt="Snow" style="width:100%">
    <br/>
    <a href="Brochure/HECTOR PLUS 7S.pdf"><p>HECTOR PLUS 7 STR</p></a>
  </div>

  <div class="column">
    <img src="images/zs-ev.jpg" alt="Snow" style="width:100%">
    <br/>
    <a href="Brochure/ZS EV.pdf"><p>MG ZS EV</p></a>
  </div>
</div>

</body>
</html>