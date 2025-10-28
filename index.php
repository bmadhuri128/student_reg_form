<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
    <header id="SectionHeader">
        <h1>Student Registration Form</h1>
    </header>


    <div id="SectionForm">
        <form name="Form" action="login.php" method="POST">

            <section id="SectionUser">
                <label>Username</label><br>
                <input type="text" name="user" required><br>
            </section>

            <section id="SectionPass">
                <label>Password</label><br>
                <input type="password" name="pass" required><br>
            </section>

            <section id="SectionGen">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="male" required> Male <br> 
                <input type="radio" name="gender" value="female"> Female  <br>
                <input type="radio" name="gender" value="PreferNottosay"> Prefer Not to say<br>
            </section>

            <section id="SectionNum">
                <label>Phone Number</label><br>
                <input type="number" name="number" required><br>
            </section>

            <section id="SectionMail">
                <label>Email</label><br>
                <input type="email" name="e_mail" required><br>
            </section>

            <section id="SectionEdu">
                <label>Program Type</label><br>
                <input type="radio" name="edu" value="BTech" required> B.Tech <br>  
                <input type="radio" name="edu" value="BE"> B.E  <br>
                <input type="radio" name="edu" value="Diploma"> Diploma  <br>
                <input type="radio" name="edu" value="DualDegree"> Dual Degree  <br>
                <input type="radio" name="edu" value="IntegratedMTech"> Integrated M.Tech <br>  
                <input type="radio" name="edu" value="MTech"> M.Tech  <br>
                <input type="radio" name="edu" value="PhD"> Ph.D  <br>
            </section>

            <section id="SectionStream">
                <label>Stream</label><br>
                <input type="radio" name="stream" value="CSE" required> CSE <br> 
                <input type="radio" name="stream" value="IT"> IT  <br>
                <input type="radio" name="stream" value="ECE"> ECE  <br>
                <input type="radio" name="stream" value="EEE"> EEE  <br>
                <input type="radio" name="stream" value="MECH"> MECH  <br>
                <input type="radio" name="stream" value="CIVIL"> CIVIL  <br>
                <input type="radio" name="stream" value="AIML"> AIML  <br>
            </section>

            <section id="SectionBtn">
                <input type="submit" value="Submit" name="Submit">
            </section>

        </form>
    </div>

    
    <footer id="SectionFooter">
        <p>&copy; B Madhuri Registration form </p>
    </footer>

</body>
</html>
