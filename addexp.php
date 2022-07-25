<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddExpense</title>
    <link rel="stylesheet" href="mem_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <header class="main">
        
        <form action="adde.php" method="post">
        <div    class="scd"><h1>Add Expense</h1></div>
                <input type="text" name="bill_id" placeholder="bill_id" />
                <input type="text" name="projectid" placeholder="Project Id" />
                <input type="text" name="est_cost" placeholder="Est.Cost"/>
                
                <button class="main-btn login-btn" type="login">Add</button>
                
                <a  href="expense.php"  class="a2">Back</a>
        </form>
        </header>
</body>
</html>   