<!DOCTYPE html>
<html>
<title>Products Finder</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<?php include "sidenav.php" ?>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>Track and Find Producs on your Depot</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Chucu Mendez Iniciative</h1>
    <!--<div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN W3.CSS</button>
    </div>-->
  </div>
</header>

<!-- Modal
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div> -->
<div>
  <div>
    <button class="btn btn-success" style="align-content: left" data-toggle="modal" data-target="#modalproductnew" onclick="modalblank();">+ New Product</button>
  </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" onclick="window.open('search.php','_self');">
  <div class="w3-card w3-container" style="min-height:350px; box-shadow: 0 0px 0px 0 rgba(0,0,0,0.16), 0 0px 0px 0 rgba(0,0,0,0.12);background-image: url(Cuadrado2-12.png); width:100%; height:100%; background-repeat: no-repeat;background-position: center;">
  <!--<img src="Cuadrado2.png" style="width:100%; height:100%">-->
  <h3>Search</h3><br>
  <i class="fa fa-search w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Use to find a produc</p>
  <!--<p>Mobile first fluid grid</p>
  <p>Fits any screen sizes</p>
  <p>PC Tablet and Mobile</p>-->
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:350px">
  <h3>Orders</h3><br>
  <i class="fa fa-shopping-cart w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>See locations</p>
  <p>Based on and specific order</p>
  <!--<p>No need for jQuery</p>
  <p>No JavaScript library</p>-->
  </div>
</div>

<div class="w3-third" onclick="window.open('location.php','_self');">
  <div class="w3-card w3-container" style="min-height:350px">
  <h3> Locations </h3><br>
  <i class="fa fa-map-marker w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>See all location</p>
  <p>View used & available locations</p>
  <!--<p>Equal across platforms</p>
  <p>Equal across devices</p>-->
  </div>
</div>
</div>

<div id="modalproductnew" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('modalproductnew').style.display='none'"
        class="w3-button w3-display-topright">×</span>
      </header>
      <div class="w3-padding">
        <div class="w3-container">
          <div class="w3-row">
            <div class="col-lg-6 col-md-6 col-xs-6">
              <label for="frmnameN">Product Name:</label>
                <input type="text" id="frmnameN"></input>              
            </div>
          </div>
          <div class="w3-row">
            <div class="col-lg-6 col-md-6 col-xs-6">
              <label for="frmcodeN">Product Code:</label>
                <input type="text" id="frmcodeN"></input>              
            </div>
          </div>
          <div class="w3-row">
            <div class="col-lg-3 col-md-3 col-xs-3">
              <label for="frmpositionN">Location:</label>
                <input type="text" id="frmpositionN" value="A010101" disabled></input>
                <h2 class="w3-center">Display Locations</h2>
                <table border="1" width="100%">
                  <tr>
                    <td width="75%"  align="center">
                      <div class="w3-container">
                        <div class="w3-row"  align="center">

                          <?php

                          ?>

                          <div class="w3-col w3-container" style="background-color:white;">
                            <?php
                            include "tbllocations.php";
                            ?>
                            <!-- <div class="w3-row w3-container m2" style="padding: 0px" onclick="selectbox('11');">
                              <input type="text" class="boxfill" id="11" style="width: 100%; text-align: center; background-color: yellow; border:0px" value="04"></input>
                            </div>
                            <div class="w3-row w3-container m1" style="padding: 0px" onclick="selectbox('12');">
                              <input type="text" class="boxfill" id="12" style="width: 100%; text-align: center; background-color: yellow; border:0px" value="03"></input>
                            </div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="13" onclick="selectbox('13');">02</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="14" onclick="selectbox('14');">01</div>
                            <div class="w3-row w3-container m2" style="background-color:white;" id="A">A</div>
                          </div>

                          <div class="w3-col w3-container m2" style="background-color:white;">
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="21" onclick="selectbox('21');">04</div>
                            <div class="w3-row w3-container m1 boxfill" style="background-color:yellow;" id="22" onclick="selectbox('22');">03</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="23" onclick="selectbox('23');">02</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="24" onclick="selectbox('24');">01</div>
                            <div class="w3-row w3-container m2" style="background-color:white;" id="B">B</div>
                          </div>
                          <div class="w3-col w3-container m2" style="background-color:white;">
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="31" onclick="selectbox('31');">04</div>
                            <div class="w3-row w3-container m1 boxfill" style="background-color:yellow;" id="32" onclick="selectbox('32');">03</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="33" onclick="selectbox('33');">02</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="34" onclick="selectbox('34');">01</div>
                            <div class="w3-row w3-container m2" style="background-color:white;" id="C">C</div>
                          </div>
                          <div class="w3-col w3-container m2" style="background-color:white;">
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="41" onclick="selectbox('41');">04</div>
                            <div class="w3-row w3-container m1 boxfill" style="background-color:yellow;" id="42" onclick="selectbox('42');">03</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="43" onclick="selectbox('43');">02</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="44" onclick="selectbox('44');">01</div>
                            <div class="w3-row w3-container m2" style="background-color:white;" id="D">D</div>
                          </div>
                          <div class="w3-col w3-container m2" style="background-color:white;">
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="51" onclick="selectbox('51');">04</div>
                            <div class="w3-row w3-container m1 boxfill" style="background-color:yellow;" id="52" onclick="selectbox('52');">03</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="53" onclick="selectbox('53');">02</div>
                            <div class="w3-row w3-container m2 boxfill" style="background-color:yellow;" id="54" onclick="selectbox('54');">01</div>
                            <div class="w3-row w3-container m2" style="background-color:white;" id="E">E</div>
                          </div> -->

                        </div>
                      </div>
                    </td>
                    <td  align="center">
                      <div class="w3-container"  align="center">
                        <div class="w3-row">
                          <div class="w3-col w3-container m6" style="background-color:white; align-content: center;">
                            <div class="w3-row w3-container m2 boxfill1" style="background-color:green;" id="B11" onclick="selectbox1('B11');">04</div>
                            <div class="w3-row w3-container m1 boxfill1" style="background-color:green;" id="B12" onclick="selectbox1('B12');">03</div>
                            <div class="w3-row w3-container m2 boxfill1" style="background-color:green;" id="B13" onclick="selectbox1('B13');">02</div>
                            <div class="w3-row w3-container m2 boxfill1" style="background-color:green;" id="B14" onclick="selectbox1('B14');">01</div>
                            <div class="w3-row w3-container m2" style="background-color:white;" id="B15">
                              <input type="text" id="B151" width="90%"></input>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="w3-container w3-theme-l1">
        <button type="button" class="btn aComoBotones" data-dismiss="modal" onclick="addproductnew()">Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </footer>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.print.min.js"></script>
<!--<div class="w3-container">
<hr>
<div class="w3-center">
  <h2>Color Classes</h2>
</div>

<div class="w3-row">
  <div class="w3-col w3-container m2 w3-red"><p>Red</p></div>
  <div class="w3-col w3-container m2 w3-blue"><p>Blue</p></div>
  <div class="w3-col w3-container m2 w3-blue-grey"><p>Blue Grey</p></div>
  <div class="w3-col w3-container m2 w3-teal"><p>Teal</p></div>
  <div class="w3-col w3-container m2 w3-yellow"><p>Yellow</p></div>
  <div class="w3-col w3-container m2 w3-orange"><p>Orange</p></div>
</div>

<hr>
<div class="w3-center">
  <h2>Built-In Responsiveness</h2>
  <p class="w3-large">Resize the page to see the effect!</p>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-blue w3-border">
    <h5>w3-half</h5>  
    <p>The w3-half class uses half (50%) of the screen window.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-half w3-container">
    <h5>w3-half</h5>  
  </div>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-third w3-container w3-green">
    <h5>w3-third</h5>  
    <p>The w3-third class uses one third (33.33%) of the screen widow.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-third w3-container">
    <h5>w3-third</h5>  
  </div>
  <div class="w3-third w3-container">
    <h5>w3-third</h5>  
  </div>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-quarter w3-container w3-red">
    <h5>w3-quarter</h5>  
    <p>The w3-quarter class uses one quarter (25%) of the screen window.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>  
  </div>
</div> 
     
<div class="w3-center">
  <h2>Containers</h2>
  <p>Use containers to create headers, sections and footers.</p>
</div>   

<header class="w3-container w3-blue-grey">
  <h2>Header</h2>
</header>

<div class="w3-padding w3-white w3-display-container">
  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright"><i class="fa fa-remove"></i></span>
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom,
  with a metropolitan area of over 13 million inhabitants.</p>
  <p>Standing on the River Thames, London has been a major settlement for two millennia,
  its history going back to its founding by the Romans, who named it Londinium.</p>
  <p>By the way, you can add a close icon to all containers if you want the ability to hide them. Look to your right!</p>
</div>

<footer class="w3-container w3-blue-grey">
  <h5>Footer</h5>
  <p class="w3-opacity">Footer information goes here</p>
</footer>

<hr>
<div class="w3-center">
  <h2>Color Themes</h2>
  <p>The color themes have been designed to work harmoniously with each other.</p>
</div>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-indigo">
    <h3>Theme Indigo</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-indigo">Movies 2014</h3>
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      <h3>Frozen</h3>
      <p>The response to the animations was ridiculous</p>
    </li>
    <li>
      <h3>The Fault in Our Stars</h3>
      <p>Touching, gripping and genuinely well made</p>
    </li>
    <li>
      <h3>The Avengers</h3>
      <p>A huge success for Marvel and Disney</p>
    </li>
  </ul>
  <div class="w3-container w3-indigo w3-large"><span class="w3-right">Next</span></div>
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-theme">
    <h3>Theme</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-theme">Movies 2014</h3>
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      <h3>Frozen</h3>
      <p>The response to the animations was ridiculous</p>
    </li>
    <li>
      <h3>The Fault in Our Stars</h3>
      <p>Touching, gripping and genuinely well made</p>
    </li>
    <li>
      <h3>The Avengers</h3>
      <p>A huge success for Marvel and Disney</p>
    </li>
  </ul>
  <div class="w3-container w3-theme w3-large"><span class="w3-right">Next</span></div>
</div>
</div>
</div>

<div class="w3-container w3-center">
  <hr>
  <h3>Paper-like Cards with Shadows</h3>
</div>

<div class="w3-row-padding"> 

<div class="w3-third">
<div class="w3-card">
  <img src="/w3images/car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card</p>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="/w3images/car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-4</p>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="/w3images/car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-4</p>
  </div>
</div>
</div>
</div>

<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2>Tables</h2>
    <p w3-class="w3-large">Don't worry. W3.CSS takes care of your tables.</p>
  </div>
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>First Name</th>
  <th>Last Name</th>
  <th>Points</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Jill</td>
  <td>Smith</td>
  <td>50</td>
</tr>
<tr class="w3-white">
  <td>Eve</td>
  <td>Jackson</td>
  <td>94</td>
</tr>
<tr>
  <td>Adam</td>
  <td>Johnson</td>
  <td>67</td>
</tr>
</tbody>
</table>
</div>

<hr>
<h2 class="w3-center">Forms and Lists</h2>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<form class="w3-container w3-card-4">
  <h2>Input Form</h2>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Name</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Email</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Subject</label>
  </div>

  <div class="w3-row">
  <div class="w3-half">
    <input id="milk" class="w3-check" type="checkbox" checked="checked">
    <label>Milk</label>
    <br>
    <input id="sugar" class="w3-check" type="checkbox">
    <label>Sugar</label>
    <br>
    <input id="lemon" class="w3-check" type="checkbox" disabled>
    <label>Lemon (Disabled)</label>
    <br><br>
  </div>

  <div class="w3-half">
    <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
    <label>Male</label>
    <br>
    <input id="female" class="w3-radio" type="radio" name="gender" value="female">
    <label>Female</label>
    <br>
    <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
    <label> Don't know (Disabled)</label>
  </div>
  </div>
</form>
</div>
<div class="w3-half">
<div class="w3-card-4 w3-container">
<h2>Lists</h2>
<ul class="w3-ul w3-margin-bottom">
  <li>Jill</li>
  <li>Eve</li>
  <li>Adam</li>
</ul>
<br>
<ul class="w3-ul w3-border w3-hoverable">
  <li class="w3-theme">Jill</li>
  <li>Eve</li>
  <li>Adam</li>
  <li>Steve</li>
</ul>
<br>
</div>
</div>
</div>
<hr>

<h2 class="w3-center">Progress Bars</h2>
<div class="w3-container">

<div class="w3-light-gray">
  <div id="myBar" class="w3-center w3-padding w3-theme" style="width:5%">5%</div>
</div><br>
<button class="w3-btn w3-theme" onclick="move()">Click Me</button> 
</div>
<hr>

<h2 class="w3-center">Slideshows</h2>
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity" src="/w3images/snow.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/w3images/lights.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/w3images/mountains.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/w3images/forest.jpg" style="width:100%">

<a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
<a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>

<div class="w3-container">
<hr>
<h2 class="w3-center">Navigation</h2>

<div class="w3-bar w3-theme">
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Link 1</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      Dropdown <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
      <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 2</a>
      <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>
  
<hr>
<h2 class="w3-center">Accordions</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 1</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 2</button>
<div id="Demo2" class="w3-hide">
  <a href="#" class="w3-button w3-block w3-left-align">Link 1</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 2</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 3</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 3</button>
<div id="Demo3" class="w3-hide w3-black">
  <div class="w3-container">
    <p>Accordion with Images:</p>
    <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
    <p>French Alps</p>
  </div>
</div>

<hr>
<h2 class="w3-center">Tabs</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">London</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Paris</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>

<hr>
<h2 class="w3-center">Buttons</h2>
<div class="w3-center">
  <br>
  <a class="w3-button w3-theme">Button</a>
  <a class="w3-button w3-theme">Button</a>
  <a class="w3-button w3-theme-d3 w3-disabled">Button</a>
  <br><br>
  <a class="w3-button w3-circle w3-large w3-black"><i class="fa fa-plus"></i></a>
  <a class="w3-button w3-circle w3-large w3-theme"><i class="fa fa-plus"></i></a>  
  <a class="w3-button w3-circle w3-large w3-card-4"><i class="fa fa-plus"></i></a>
</div>
<br>
<div class="w3-center">
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-theme">Dropdown <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>

</div> -->

<!--<hr>
<div class="w3-center">
  <h2>Pagination</h2>
   Pagination 
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">«</a>
      <a href="#" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">5</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">»</a>
    </div>
  </div>
</div>
<br>-->

<hr>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <!--<h3>Footer</h3>-->
  <p>Powered by <a href="#" target="_blank">R.Mendez</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <!--<p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>-->
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
// function w3_open() {
//   var x = document.getElementById("mySidebar");
//   x.style.width = "100%";
//   x.style.fontSize = "40px";
//   x.style.paddingTop = "10%";
//   x.style.display = "block";

//   var y = document.getElementById("mySidebar1");
//   y.style.width = "100%";
//   y.style.fontSize = "40py";
//   y.style.paddingTop = "10%";
//   y.style.display = "block";
// }
// function w3_close() {
//   document.getElementById("mySidebar").style.display = "none";
// }

function addproductnew(){
  var product = $('#frmnameN').val();
  var code = $('#frmcodeN').val();
  var position = $('#frmpositionN').val();

  cadena = "product=" + product +
           "&code=" + code +
           "&position=" + position;

  $.ajax({
      type: 'POST',
      url: 'addproductnew.php',
      data: cadena,
      success: function(response){
        console.log(response);
        if(response == '1'){
          alert("The Product was added successful");
          location.reload(true);
        }
        if(response=='2'){
          alert("The product all ready exist. Please check !!!!");
        }
        if(response=='3'){
          alert("The product didn't was created. Please check !!!!")
        }
      }
  });
}

function selectbox(idbox){
  var i = 0;
  var j = 0;
  var idboxf = 0;
  $(".boxfill").prop('selected',false);
  $(".boxfill").css({'background-color':'yellow'});
  for(i=1; i<6;i++){
    for(j=1; j<5; j++){
      var idboxf= i+""+j;
      if(idbox==idboxf){
        if ($("#"+i+j).prop('selected')==true){
          $("#"+i+j).css({'background-color':'yellow'});
          $("#"+i+j).prop('selected',false);
          $("#B151").val("");
          var idbox = 0;
        }else{
          $("#"+i+j).css({'background-color':'yellow'});
          $("#"+i+j).css({'background-color':'green'});
          $("#"+i+j).prop('selected',true);
          $("#B151").val($("#"+i+j).val());
          var idbox = 0;
        }
      }
    }
  }
}


function selectbox1(idbox1){
  console.log("Der");
  var i = 0;
  var j = 0;
  var idboxf = 0;
  $(".boxfill1").prop('selected',false);
  for(i=1; i<2; i++){
    for(j=1; j<5; j++){
      var idboxf= "B"+i+""+j;
      if(idbox1==idboxf){
        if ($("#B"+i+j).prop('selected')==true){
          $("#B"+i+j).css({'background-color':'green'});
          $("#B"+i+j).prop('selected',false);
          var idbox1 = 0;
        }else{
          $(".boxfill1").css({'background-color':'green'});
          $("#B"+i+j).css({'background-color':'red'});
          $("#B"+i+j).prop('selected',true);
          var idbox1 = 0;
        }
      }
    }
  }
}

function modalblank(){
  $('#frmnameN').val("");
  $('#frmcodeN').val("");
  $('#frmpositionN').val("");
}
// Tabs
// function openCity(evt, cityName) {
//   var i;
//   var x = document.getElementsByClassName("city");
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";
//   }
//   var activebtn = document.getElementsByClassName("testbtn");
//   for (i = 0; i < x.length; i++) {
//     activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
//   }
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " w3-dark-grey";
// }

// var mybtn = document.getElementsByClassName("testbtn")[0];
// mybtn.click();

// Accordions
// function myAccFunc(id) {
//   var x = document.getElementById(id);
//   if (x.className.indexOf("w3-show") == -1) {
//     x.className += " w3-show";
//   } else { 
//     x.className = x.className.replace(" w3-show", "");
//   }
// }

//Slideshows
// var slideIndex = 1;
// var slideIndes = 1;

// function plusDivs(n) {
//   slideIndex = slideIndex + n;
//   showDivs(slideIndex);
// }

// function plusDivs1(n) {
//   slideIndes = slideIndes + n;
//   showDivs1(slideIndes);
// }

// function showDivs(n) {
//   var x = document.getElementsByClassName("mySlides");
//   if (n > x.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = x.length} ;
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   x[slideIndex-1].style.display = "block";  
// }

// function showDivs1(n) {
// var y = document.getElementsByClassName("mySlidex");
//   if (n > y.length) {slideIndes = 1}    
//   if (n < 1) {slideIndes = y.length} ;
//   for (i = 0; i < y.length; i++) {
//     y[i].style.display = "none";  
//   }
//   y[slideIndes-1].style.display = "block";
// }

// showDivs(1);
// showDivs1(1);

// // Progress Bars
// function move() {
//   var elem = document.getElementById("myBar");   
//   var width = 5;
//   var id = setInterval(frame, 10);
//   function frame() {
//     if (width == 100) {
//       clearInterval(id);
//     } else {
//       width++; 
//       elem.style.width = width + '%'; 
//       elem.innerHTML = width * 1  + '%';
//     }
//   }
// }
</script>

</body>
</html>
