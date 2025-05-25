<!DOCTYPE HTML>  
<html>
<head>
<style>
.error { color: #FF0000; }
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $skillsErr = $dobErr = $fileErr = "";
$name = $email = $gender = $comment = $website = $dob = "";
$skills = array();
$uploadOk = 1;
$file="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // Website
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
      $websiteErr = "Invalid URL";
    }
  }

  // Comment
  if (isset($_POST["comment"])) {
    $comment = test_input($_POST["comment"]);
  }

  // Date of Birth
  if(empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
    if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $dob)) {
      $dobErr = "Invalid date format. Use YYYY-MM-DD.";
    } else {
      $dobDate = new DateTime($dob);
      $today = new DateTime();
      $age = $today->diff($dobDate)->y;
      
      if ($age < 18) {
        $dobErr = "You must be at least 18 years old.";
      }
    }
  }

  // Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  // Skills
  if (empty($_POST["skills"])) {
    $skillsErr = "Skills are required";
    $skills = array();
  } else {
    $skills = $_POST["skills"];
  }

  // Resume upload validation
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["resume"]["name"]);
  $documentFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if (!empty($_FILES["resume"]["name"])) {
    if ($documentFileType != "pdf" && $documentFileType != "doc" && $documentFileType != "docx") {
      $fileErr = "Only PDF, DOC, and DOCX files are allowed.";
      $uploadOk = 0;
    }

    if ($_FILES["resume"]["size"] > 2000000) {
      $fileErr = "File size must be less than 2MB.";
      $uploadOk = 0;
    }

    if ($uploadOk == 1) {
      if (!is_dir($target_dir)) {
        mkdir($target_dir,0777, true);
      }
      if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        // success
        $file=htmlspecialchars(basename($_FILES["resume"]["name"]));
      } else {
        $fileErr = "There was an error uploading your file.";
      }
    }
  } else {
    $fileErr = "Resume upload is required.";
    $uploadOk = 0;
  }
  
}
function btn_click_test() {
  echo" Form filled successfully"; 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" enctype="multipart/form-data">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>

  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked";?>>Female
  <input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked";?>>Male
  <input type="radio" name="gender" value="other" <?php if ($gender=="other") echo "checked";?>>Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Date of Birth: <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>

  Skills:
  <input type="checkbox" name="skills[]" value="html" <?php if ( in_array("html", $skills)) echo "checked"; ?>> HTML
  <input type="checkbox" name="skills[]" value="css" <?php if (in_array("css", $skills)) echo "checked"; ?>> CSS
  <input type="checkbox" name="skills[]" value="javascript" <?php if (in_array("javascript", $skills)) echo "checked"; ?>> JavaScript
  <span class="error">* <?php echo $skillsErr;?></span>
  <br><br>

  Upload Resume:
  <input type="file" name="resume" id="resume" value="<?php echo $file;?>">
  <span class="error">* <?php echo $fileErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="submit">  
</form>

<?php
if(isset($_POST['submit']) && $uploadOk == 1) {
    btn_click_test();
  }
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $websiteErr == "" && $dobErr=="" && $genderErr == "" && $skillsErr == "" && $fileErr == "") {
  echo "<h2>Your Input:</h2>";
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Website: $website<br>";
  echo "Comment: $comment<br>";
  echo "Date of Birth: $dob<br>";
  echo "Gender: $gender<br>";
  echo "Skills: " . implode(", ", $skills) . "<br>";
  echo "Resume Uploaded: ".$file."<br>";
}
?>

</body>
</html>
