<!DOCTYPE html>
<!-- a document created by Michael Griffiths-->
<html lang="en">
    <head>
        <title>Michael's Cake Shop </title>
        <!--viewport sets up the site to fill the mobile screen-->
        
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
     
              <!-- these two lines of code give us access to the jquery libraries-->
       <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
$(function(){
    $("[data-role='header'], [data-role='footer']").toolbar();
});

</script>



<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/mystyles.css" type="text/css" />
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    </head>
    <body>
       <div id="myhead" data-role="header" data-position="fixed" data-theme="a">
             <h1>The Bakery</h1>
             <a href="#" class="ui-btn-right">Nav</a>
     </div>
    
<!--the menu page of the app-->       
         
        <section class="page" id="page1" data-role="page">
            
            </div>
        
        <ul id="mainmenu" data-role="listview">
            <li><a href="#page2">About</a></li>
            <ul data-role="listview">
                <li><a href="#">Non working link</a></li>
            </ul>
            <li><a href="#page3">Login</a></li>
        </ul>
            
        </section>   
       
<!--the about page of the app-->       
         
        <section class="page" id="page2" data-role="page">
            
            </div>
        <h2>About</h2>
            
            <p>Tootsie roll sugar plum muffin sesame snaps ice cream sugar plum topping jelly-o. 
            Caramels I love I love apple pie dragée candy. Dessert biscuit gummies marshmallow. 
            Jujubes fruitcake lemon drops oat cake. I love marshmallow toffee toffee donut. 
            Fruitcake wafer candy canes gummi bears cookie cheesecake.</p>
            
        
            <a href="#page3">gotopage3</a>
            
        </section>
     
<!--the login page of the app-->
     
      <section class="page" id="page3" data-role="page">
          
     <h2>Login</h2>
            <p>Macaroon wafer halvah gingerbread. Sweet roll sweet biscuit macaroon brownie chocolate 
            cake I love cupcake fruitcake. 
            Candy I love ice cream cotton candy jujubes pastry fruitcake chupa chups. 
            Marshmallow I love I love tiramisu gummi bears fruitcake. 
            Jelly wafer tart croissant jelly cheesecake toffee. 
            Candy canes cupcake jelly-o cookie halvah cookie. 
            Sweet roll marshmallow donut dragée soufflé jelly beans. 
            Tiramisu dragée I love jelly-o. 
            Macaroon I love I love fruitcake cheesecake topping liquorice cheesecake chocolate. 
            Liquorice apple pie pudding apple pie candy.
            
        </p>
            
            <a href="#page2">gotopage2</a>
      
      
        </section>
        <div data-role="footer" data-position="fixed" data-theme="a">This is the footer</div>

        </body>
        </html>