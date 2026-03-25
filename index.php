<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form for Cv</title>
        <link rel="stylesheet" href="./design/index.css">  
</head>
<body>
    <header>
        <img src="evsu.png" alt="photo">
        <h1>Form for CV</h1>
    </header>
 
    <form action="./view/displaycv.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="profile" id="prof">

        <div>
                <label for="name">Name:</label> 
                <input type="text" id="name" name="name">                    
            <label for="course">Course:</label>
        <input type="text" id="course" name="course">
        </div>
 
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">       
            <label for="education">Education:</label>
                <textarea id="education" name="education" rows="4" cols="50"></textarea>         
                    <label for="skills">Skills:</label> 
        <textarea id="skills" name="skills" rows="4" cols="50"></textarea>          
                <label for="experience">Work Experience:</label>         
                    <textarea id="experience" name="experience" rows="4" cols="50">
                </textarea>      
        <input type="submit" name="submit" value="Submit">
 
    </form>
</body>
</html>