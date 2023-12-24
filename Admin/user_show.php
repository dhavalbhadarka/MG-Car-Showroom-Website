<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Detail</title>
  <style type="text/css">
body{
  text-align: center;
}

table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

h2{
  font-size: 50px;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #000;
  color: white;
}


.center {
  margin-left: auto;
  margin-right: auto;
}

.button {
  padding: 10px 12px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #0066ff;
  border: none;
  border-radius: 12px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  
  transform: translateY(4px);
}

.button1 {
  padding: 10px 12px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:  #ff0000;
  border: none;
  border-radius: 12px;
  
}

.button1:hover {background-color: #3e8e41}

.button1:active {
  background-color: #3e8e41;
  
  transform: translateY(4px);
}



  </style>
</head>
<body>
 <h2 class="text-center pt-5">User Detail Show</h2>

 <table  style="width: 1100px" border="1px solid black" class="center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      
      <th scope="col">Delete</th>
  
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $temp=mysqli_query($con,"SELECT * FROM login");
    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $data['id']; ?></th>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['password1']; ?></td>
          <td><a href="user_delete.php?uidi=<?php echo $data['id']; ?>" 
            class="button1">Delete</a></td>
          </tr>


        </tbody>


        <?php
      }
      ?>
    </table>
  
     
    
 <br> <br>
  </body>
  </html>