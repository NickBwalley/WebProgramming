<?php
include 'connection.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Forms</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <div class="division">
       <fieldset>
         <form class="" action="register2.php" method="post">
           <h1><legend><span style = "color: blue">Registration-Form</span></legend></h1>
           <label for="lastName">Enter Username</label>
           <input type="text" name="username" value="">
           <br>
           <label for="email">Enter E-Mail</label>
           <input type="email" name="email" value="">
           <br>
           <label for="DateOfBirth">Enter DOB</label>
           <input type="date" name="dob" value="">
           <br>
           <label for="phoneNumber">Enter PhoneNumber</label>
           <input type="number" name="phoneNumber" value="">
           <br>
           <label for="occupation">Enter Occupation</label>
           <input type="text" name="occupation" value="">
           <br>
           <label for="password">Set Your Password</label>
           <input type="password" name="password" value="">
           <br>
           <button type="submit" name="register">REGISTER</button>
         </fieldset>

         </form>

     </div>

   </body>
 </html>
