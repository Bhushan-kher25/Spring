<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sp.php" method="post">
    <br>
    Name:<input type="text" value=""  name="name"><br>
    <br>
    Email:<input type="email" name="email"><br>
    <br>
    <input type="submit" value="button" name="submit">
</form>
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="C:\xampp\htdocs\html\style\f" type="text/css">
     -->
     <link rel="stylesheet" href="C:\xampp\htdocs\html\style\form.css">
    <meta charset="UTF-8">

    <title> Document </title>
    
</head>
<body>
    
    <form action="sp.php" method="POST">
        <h1>Contact form</h1>
       <div class="container">
            <form action="sp.php">
          
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          
              <label for="country">Country</label>
              <select id="country" name="country" placeholder=" select country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
              

              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          
              <div class="noop"><input type="submit" value="Submit"></div>
          
            </form>
          </div>
    </form>
</body>
</html>


<?php
    // $Name = $_POST['nm'];
    // $Email = $_POST['em'];
    $con=mysqli_connect('localhost','root','','bhushan');
    if(isset($_POST['submit']))
    {
        $First_name=$_POST['firstname'];
        $Last_name=$_POST['lastname'];
        $Country=$_POST['country'];
        $Subject=$_POST['subject'];
        $query="INSERT INTO contact form (First name , Last name , Country , Subject) VALUES ('$First_name','$Last_name','$Country','$Subject')";

        $run=mysqli_query($con,$query);
    }

?>