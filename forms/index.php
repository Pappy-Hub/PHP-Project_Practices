<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get & Post</title>
</head>

<body>

<!-- GET Method: For fetching data from the database-->

    <form method="POST" action="user_data.php"> 
        <div>
            <label for="name">
                Name: <input type="text" name="name">
            </label>
        </div>

        <div>
            <label for="email">
                Email: <input type="email" name="email">
            </label>
        </div>

        <div>
            <button type="submit" >Submit</button>
        </div>
    </form>

   

<!-- GET Method: For sending data from the database-->


</body>

</html>


1. Create a registration form that takes in the following below and submits using the POST method.

Name
Email
Date of Birth
Gender
Country
2. Your page should send the form to a file called user_data.php, which does the following:

 Save the user data into a file called userdata.csv
 Returns the data submitted to the users using the print_r method.
 

Submission Mode:

A github repo