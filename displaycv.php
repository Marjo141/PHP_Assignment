<?php

// this part is to upload the profile picture and display the cv details on a new page
if(isset($_POST['submit'])){
    $folder = './uploads/';
    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }
    $fileName = $_FILES['profile']['name'];
    $tmp_file = $_FILES['profile']['tmp_name'];
    $path = $folder . $fileName;
    move_uploaded_file($tmp_file, $path);


    // Get form data
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - <?php echo htmlspecialchars($name); ?></title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="cv-container">
        <header class="cv-header">
            <?php if($path && file_exists($path)): ?>
                <img src="<?php echo $path; ?>" alt="Profile Picture" class="profile-pic">
            <?php endif; ?>
            <h1> <?php echo htmlspecialchars($name); ?></h1>
            <p> <?php echo htmlspecialchars($course); ?></p>
        </header>
        
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
        </section>
        
        <section class="education">
            <h2>Education</h2>
            <p><?php echo nl2br(htmlspecialchars($education)); ?></p>
        </section>
        
        <section class="skills">
            <h2>Skills</h2>
            <p><?php echo nl2br(htmlspecialchars($skills)); ?></p>
        </section>
        
        <section class="experience">
            <h2>Work Experience</h2>
            <p><?php echo nl2br(htmlspecialchars($experience)); ?></p>
        </section>
    </div>
</body>
</html>

<?php
}
?>