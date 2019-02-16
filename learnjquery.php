 <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body>
    <script>
$(document).ready(function(){
    $("#hide").click(function(){
      $("a").attr({
          "href":"http://localhost/im/carsale/newindex.php/",
          "title":"this is"
      });
            
            });
      
   
});
    
    </script>
     <button id="hide">Hide</button>
    <div id="div1" style="width:80px;height:80px;background-color:red;position:relative;">HELOO</div><br>
<div id="testFade">
    <p>This is to be hidden</p>
    <br/>
    <a href="www.w3c.com/aaa" title="test">Click</a>
    </div>
   <input type="text" id="name" name="name"/>
    <button id="show"><b>Stop</b></button>

    </body>
    </html>