
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="mod_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <header class="main">
        <div    class="logo">
            <h1>PROTRACK</h1>
        </div>
        <nav class="navbar">
            <ul>
              <li><a href="wel.php">Home</a></li>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="timesheet.php">Timesheet</a></li>
              <li><a href="expense.php">Expense</a></li>
              <li><a href="memberadd.php">Add Member</a></li>
              <li><a href="memberde.php">Remove Member</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>

          </nav>
          <div    class="icons">
            <table>
                <tr>
                  <th>Schedule ID</th>
                  <th >Project ID</th>
                  <th>Project Name</th>
                  <th>Project Head</th>
                  <th>View Project</th>
                </tr>
                <?php 
        $connection = mysqli_connect('localhost','root','','protrack');
     
        $data = " SELECT  * from  project ";
        $result=mysqli_query($connection,$data);
     
?>
<?php
if ($result->num_rows > 0) {
  
  while($data = $result->fetch_assoc()) {
 ?>
 
                <tr>
                <td><?php echo $data['s_id']; ?></td>
                  <td><?php echo $data['projectid']; ?></td>
                  <td><?php echo $data['projectname']; ?></td>
                  <td><?php echo $data['projecthead']; ?></td>
                  <td><a  href="<?php echo $data['viewp']; ?>">View Project</a></td>
                  
                </tr>
               
                
                
                <?php
  }
} 
  ?>  
            </table>
          </div>
          
          
          
          <a href="addsch.php" class="a1">Add</a>
    </header>
</body>
</html>