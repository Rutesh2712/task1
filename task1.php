<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title </title>
    <meta charset="UTF-8">
    <meta name="viewport" contents="width=device-width, initial-scale=1">
    <style>
    * {
        Box-sizing: border-box;
    }
    /*style the body*/
    body{
        font-family: Arial,Helvetica, sans-serif;
        margin:0;
    }

    /* Header /logo Title */
    .header {
        padding: 80px;
        text-align:center;
        background-color: black;
        color:white;
    }
    /*Increase the font size of the heading */
    .header h1{
        font-size:40px;
    }

     /*style the navigation bar links*/
     .navbar a{
        overflow: hidden;
        background-color: #333;
     }

    /*style the navigation bar links*/
    .navbar a{
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

   /* Right-aligned link */
   .navbar a.right{
    float:right;
   }

   /*Change color on hover */
   .navbar a:hover {
       background-color: #ddd;
       color: black;
   }

   /* Column container*/
   .row {
       dispay:-ms-flexbox;
       display:flex;
       -ms-flex-wrap: wrap;
       flex-wrap: wrap;
   }

   /* Create two columns that sits next to each other*/
   /*Sidebar/left Column*/
   .side{
       -ms-flex:30%;
       flex:30%;
       background-color: #f1f1f1;
       padding:20px;
   }

   /*Main Column*/
   .main{
       -ms-flex:70%;
       flex:70%;
       background-color: #white;
       padding:20px;
   }

  /* Fake=image,just for the example  */
  .fakeimg{
      background-color: #aaa;
      width: 100%;
      PADDING:20px;
  }

  /*Footer*/
  .footer{
      padding:20px;
      text-align: center;
      background: #ddd;
  }

 /* Respnsive Layout - when the screen is less than 400px wide, make the navigation links stack on the top of the each 
 other instad of next to each other*/
 @media and (max-width:400px){
     .navbar a{
         float:none;
         width: 100%;
     }
 }
    </style>    

    </head>

    <body>

        <div class="header">
            <h1> My website </h1>
            <p>A website created by me.</p>
        </div>

        <div class="navbar">
            <a href="#" class="right">Home</a>
            <a href="#" class="right">About</a>
            <a href="#" class="right">Services</a>
            <a href="#" class="right">Portfolio</a>
            <a href="#" class="right">Contact</a>
        </div>

        <div class="row">
            <div class="side">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <img src="G:\Aai Mobile\Pictures\IMG_20220208_194920_555.jpg">
                <div class="fakeimg" style="height:200px;">Rutesh</div> 
                <p>Some text about me in culpa qui official deserunt mollit anim...</p>
                <h3>More Text</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <div class="fakeimg" style="height:60px;">Image</div><br>
                <div class="fakeimg" style="height:60px;">Image</div><br>
                <div class="fakeimg" style="height:60px;">Image</div><br>
            </div>
       
        <div class="main">
            <h2>TITLE HEADING</h2>
            <h5>Title description.....</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some Text...</p>a
            <p> Sunt in culpa qui official shjdsvbnjbnmsdv badsdfm </p>
            <br>
            <h2>TITLE HEADING</h2>
            <h5>Title description.....</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some Text...</p>
            <p> Sunt in culpa qui official shjdsvbnjbnmsdv badsdfm </p>
            <br>
            </div>
        </div>

        <div class="footer">
            <h2>Footer</h2>
        </div>
    </body>
</html>        