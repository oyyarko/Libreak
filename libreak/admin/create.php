<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $email = $branch = $enrno = $year = "";
$name_err = $email_err = $branch_err = $enrno_err = $year_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email address.";     
    } 
    else{
        $email = $input_email;
    }
    
    $input_branch = trim($_POST["branch"]);
    if(empty($input_branch)){
        $branch_err = "Please enter the branch.";     
    } else{
        $branch = $input_branch;
    }

    $input_enrno = trim($_POST["enrno"]);
    if(empty($input_enrno)){
        $enrno_err = "Please proper enrollment no.";     
    } 
    else{
        $enrno = $input_enrno;
    }

    $input_year = trim($_POST["year"]);
    if(empty($input_year)){
        $year_err = "Please enter an year.";     
    } else{
        $year = $input_year;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($email_err) && empty($enrno_err) && empty($branch_err) && empty($year_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (name, email, enrno, branch, year) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_address, $param_enrno, $param_branch, $param_year);
            
            // Set parameters
            $param_name = $name;
            $param_address = $email;
            $param_enrno = $enrno;
            $param_branch = $branch;
            $param_year = $year;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: students.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add students record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control"><?php echo $email; ?>
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($enrno_err)) ? 'has-error' : ''; ?>">
                            <label>Enrollment no.</label>
                            <input type="text" name="enrno" class="form-control" value="<?php echo $enrno; ?>">
                            <span class="help-block"><?php echo $enrno_err;?></span>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-4" name="branch">Branch:</label>
                        <div class="col-sm-6">
                        <select name="branch">
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Electronics and Communication">Electronics and Communication</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Mechnical Engineering">Mechnical Engineering</option>
                            <option value="Automobile Engineering">Automobile Engineering</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                        </select>
                        </div>
                    </div>
                        <div class="form-group">
                        <label class="control-label col-sm-4" name="year">Year:</label>
                        <div class="col-sm-6">
                        <select name="year">
                            <option value="1st">1st Year</option>
                            <option value="2nd">2nd Year</option>
                            <option value="3rd">3rd Year</option>
                            <option value="4th">4th Year</option>
                            <option value="Master">Masters</option>
                        </select>
                        </div>
    </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>