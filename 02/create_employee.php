<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
</head>

<body>
    <div class="container">
        <form class="add_form" action="create_employees.php" method="post">
            <p>Employee Number</p>
            <input type="number" name="employeeNumber" required> <br>
            <p>Last Name</p>
            <input type="text" name="lastName" required> <br>
            <p>First Name</p>
            <input type="text" name="firstName" required> <br>
            <p>Extension</p>
            <input type="text" name="extension" required> <br>
            <p>Email</p>
            <input type="text" name="email" required> <br>
            <p>Office Code</p>
            <input type="text" name="officeCode" required> <br>
            <p>Reports To</p>
            <input type="number" name="reportsTo" required> <br>
            <p>Job Title</p>
            <input type="text" name="jobTitle" required> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>