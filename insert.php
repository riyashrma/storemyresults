<?php
// $server="localhost";
// $username="root";
// $pw="";
// $dbname="p2";

// $conn=mysqli_connect($server, $username, $pw, $dbname);
// if($conn){
//     echo "Success in connecting";
// }

// if (isset($_POST["submit"])){ 
//     if(!empty($_POST["$firstname"]) && !empty($_POST["$lastname"]) && !empty($_POST["$usn"]) && !empty($_POST["$branch"]) && !empty($_POST["$email"]) && !empty($_POST["$phoneno"]) && !empty($_POST["$password"]) && !empty($_POST["$confirmpassword"])){
//         $firstname= $_POST["$firstname"];
//         $lastname= $_POST["$lastname"];
//         $usn=$_POST["$usn"];
//         $branch= $_POST["$branch"];
//         $email= $_POST["$email"];
//         $phoneno= $_POST["$phoneno"];
//         $password= $_POST["$password"];
//         $confirmpassword= $_POST["$confirmpassword"];
//         //$lastname= $_POST['$lastname'];

//         $sql = "INSERT INTO `studentdetails` (`firstname`,`lastname`,`usn`,`branch`,`email`,`phoneno`,`password`,`confirmpassword`) VALUES('{$_POST[firstname]}','{$_POST[lastname]}','{$_POST[usn]}','{$_POST[branch]}','{$_POST[email]}','{$_POST[phoneno]}','{$_POST[password]}','{$_POST[confirmpassword]}')";
//         $data = mysqli_query($conn,$sql) or die(mysqli_error());

//         if(!$data){
//             echo "Sed";
//         }
//         else if($data){
//             echo "Woah bro";
//         }
//     }
//     else{
//         echo "All fields are required";
//     }
// }

//?>

<?php
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="p2";
// $useremail;
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if(!$conn){
//     echo "connection failed".mysqli_connect_error();
// }
// else{

//         if(isset($_POST["login"]))
//         {
//           $emaill=$_POST["email"];
//           $useremail=$_POST["email"];
//           $pwl=$_POST["pw"];
//           $query="select * from studentdetails where email='$emaill'";
//           $result=mysqli_query($conn,$query);
//           if($result)
//           {
//             if(mysqli_num_rows($result)==1)
//             {
              
//               if($pwl == $pw)
//               {
//                 echo"succesfully loggedin";
//                 $_SESSION['logged_in']=true;
//                 $_SESSION["email"]=$result_fetch["email"];
//                 header("location: index.php");
//               }
//               else
//             {
//               echo"
//                 <script>
//                   alert('Incorrect Password');
//                   window.location.href='index.php';
//                 </script>
//               ";
//             }
//             }
//             else
//             {
//               echo"
//                 <script>
//                   alert('Email or Username Not Registered');
//                   window.location.href='index.php';
//                 </script>
//               ";
//             }
          
      
//           }
//           else
//           {
//             echo"
//               <script>
//                 alert('Cannot Run Query');
//                 window.location.href='index.php';
//               </script>
//             ";
//           }
      
      
//         }

//     if(isset($_POST["submit"])){
//         if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usn"]) && !empty($_POST["branch"]) && !empty($_POST["email"]) && !empty($_POST["phn"]) && !empty($_POST["pw"]) && !empty($_POST["cpw"])){
//             $firstname=$_POST["firstname"];
//             $lastname=$_POST["lastname"];
//             $usn=$_POST["usn"];
//             $branch=$_POST["branch"];
//             $email=$_POST["email"];
//             $phn=$_POST["phn"];
//             $pw=$_POST["pw"];
//             $cpw=$_POST["cpw"];
            

//             $query="insert into studentdetails(firstname,lastname,usn,branch,email,phn,pw,cpw) values('$firstname','$lastname','$usn','$branch','$email','$phn','$pw','$cpw')";
//             $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
//             if($run){
//                 echo "form submitted";
//             }
//             else{
//                 echo"not submitted";
//             }
//         }
//         else{
//             echo "all fields required";
//         }

//     }


// }
?>

<?php

// $servername="localhost";
// $username="root";
// $password="";
// $dbname="p2";

// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if(!$conn){
//     echo "connection failed".mysqli_connect_error();
// }
// else{
//   if(isset($_POST["login"]))
//   {
//     if(!empty($_POST["email"]) && !empty($_POST["pw"]))
//     {
//       $emaill=$_POST["email"];
//       $pwl=$_POST["pw"];
//       $query=mysqli_query($conn,"select * from studentdetails where email='$emaill' and pw='$pwl'");
//       if(mysqli_num_rows($query)>0)
//       {
//         echo"
//         <script>
//                     alert('logged in successfully');
//                     window.location.href='page2.php';
//                   </script>
//         ";
       
//       }
//       else
//       {
//         echo"
//         <script>
//                     alert('email or password not registered');
//                     window.location.href='index.php';
//                   </script>
        
//         ";
//       }

//     }
//     else
//     {
//       echo "
//       <script>
//                     alert('All fields required');
//                     window.location.href='index.php';
//                   </script>
//       ";
//     }

//   }
//   if(isset($_POST["signup"]))
//   {
//     if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usn"]) && !empty($_POST["branch"]) && !empty($_POST["email"]) && !empty($_POST["phn"]) && !empty($_POST["pw"]) && !empty($_POST["cpw"]))
//     {
//       $firstname=$_POST["firstname"];
//             $lastname=$_POST["lastname"];
//             $usn=$_POST["usn"];
//             $branch=$_POST["branch"];
//             $email=$_POST["email"];
//             $pw=$_POST["pw"];
//             $cpw=$_POST["cpw"];
//             $phn=$_POST["phn"];
           
//             if($_POST["pw"] == $_POST["cpw"])
//             {
//               $query="insert into studentdetails(firstname,lastname,usn,branch,email,phn,pw,cpw) values('$firstname','$lastname','$usn','$branch','$email','$phn','$pw','$cpw')";
//               $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
//               echo "
//               <script>
//                     alert('Registration Successful');
//                     window.location.href='page2.php';
//                   </script>
//               ";


//             }
//             else
//             {
//               echo "
//               <script>
//                     alert('incorrect password');
//                     window.location.href='index.php';
//                   </script>
              
//               ";

//             }


//     }
//     else 
//     {
//       echo "
//           <script>
//                 alert('All fields required');
//                 window.location.href='index.php';
//               </script>
          
//           ";


//     }

//   }

// }
?>




<?php

$servername="localhost";
$username="root";
$password="";
$dbname="p2";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
  if(isset($_POST["login"]))
  {
    if(!empty($_POST["email"]) && !empty($_POST["pw"]))
    {
      $emaill=$_POST["email"];
      $pwl=$_POST["pw"];
      $query=mysqli_query($conn,"select * from studentdetails where email='$emaill' and pw='$pwl'");
      if(mysqli_num_rows($query)>0)
      {
        echo"
        <script>
                    alert('logged in successfully');
                    window.location.href='page2.php';
                  </script>
        ";
       
      }
      else
      {
        echo"
        <script>
                    alert('email or password not registered');
                    window.location.href='index.php';
                  </script>
        
        ";
      }

    }
    else
    {
      echo "
      <script>
                    alert('All fields required');
                    window.location.href='index.php';
                  </script>
      ";
    }

  }
  if(isset($_POST["signup"]))
  {
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usn"]) && !empty($_POST["branch"]) && !empty($_POST["email"]) && !empty($_POST["phn"]) && !empty($_POST["pw"]) && !empty($_POST["cpw"]))
    {
      $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $usn=$_POST["usn"];
            $branch=$_POST["branch"];
            $email=$_POST["email"];
            $phn=$_POST["phn"];
            $pw=$_POST["pw"];
            $cpw=$_POST["cpw"];
            
           
            if($_POST["pw"] == $_POST["cpw"])
            {
              $query="insert into studentdetails(firstname,lastname,usn,branch,email,phn,pw,cpw) values('$firstname','$lastname','$usn','$branch','$email','$phn','$pw','$cpw')";
              $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
              echo "
              <script>
                    alert('Registration Successful');
                    window.location.href='page2.php';
                  </script>
              ";


            }
            else
            {
              echo "
              <script>
                    alert('incorrect password');
                    window.location.href='index.php';
                  </script>
              
              ";

            }


    }
    else 
    {
      echo "
          <script>
                alert('All fields required');
                window.location.href='index.php';
              </script>
          
          ";


    }

  }

}
?>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="p2";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
  if(isset($_POST["login"]))
  {
    if(!empty($_POST["email"]) && !empty($_POST["pw"]))
    {
      $emaill=$_POST["email"];
      $pwl=$_POST["pw"];
      $query=mysqli_query($conn,"select * from studentdetails where email='$emaill' and pw='$pwl'");
      if(mysqli_num_rows($query)>0)
      {
        echo"
        <script>
                    alert('logged in successfully');
                    window.location.href='page2.php';
                  </script>
        ";
       
      }
      
      else
      {
       
       
        echo"
        <script>
                    alert('email or password not registered');
                    window.location.href='index.php';
                  </script>
        
        ";
       
      }

    }
    else
    {
      echo "
      <script>
                    alert('All fields required');
                    window.location.href='index.php';
                  </script>
      ";
    }

  }
  if(isset($_POST["updatepw"]))
  {
    if(!empty($_POST["email"]) && !empty($_POST["pw"]))
    {
      $emaillf=$_POST["email"];
      $npw=$_POST["pw"];
      $query4=mysqli_query($conn,"select * from studentdetails where email='$emaillf'"); 
      if(mysqli_num_rows($query4)>0)
      {
      $query3="UPDATE `studentdetails` SET `pw`='$npw',`cpw`='$npw' WHERE email='$emaillf'";
      if(mysqli_query($conn,$query3))
      {
        echo"
        <script>
        alert('updated successfully');
        window.location.href='index.php';
      </script>
        ";
      }
      else{
        echo"
        <script>
        alert('password or email not registered');
        window.location.href='index.php';
      </script>
        
        ";
      }
    }
    else
    {
      echo"
      <script>
        alert('password or email not registered');
        window.location.href='index.php';
      </script>
      
      ";
    }
    }
    else
    {
      echo"
      <script>
      alert('All fields required');
      window.location.href='index.php';
    </script>
      
      ";
    }
  }
  if(isset($_POST["signup"]))
  {
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usn"]) && !empty($_POST["branch"]) && !empty($_POST["email"]) && !empty($_POST["phn"]) && !empty($_POST["pw"]) && !empty($_POST["cpw"]))
    {
            $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $usn=$_POST["usn"];
            $branch=$_POST["branch"];
            $email=$_POST["email"];
            $phn=$_POST["phn"];
            $pw=$_POST["pw"];
            $cpw=$_POST["cpw"];
            
           
            if($_POST["pw"] == $_POST["cpw"])
            {
              $query="insert into studentdetails(firstname,lastname,usn,branch,email,phn,pw,cpw) values('$firstname','$lastname','$usn','$branch','$email','$phn','$pw','$cpw')";
              $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
              echo "
              <script>
                    alert('Registration Successful');
                    window.location.href='page2.php';
                  </script>
              ";


            }
            else
            {
              echo "
              <script>
                    alert('incorrect password');
                    window.location.href='index.php';
                  </script>
              
              ";

            }


    }
    else 
    {
      echo "
          <script>
                alert('All fields required');
                window.location.href='index.php';
              </script>
          
          ";


    }

  }

}
?>