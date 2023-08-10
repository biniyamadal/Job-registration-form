<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>www.Moti Engineering PLC.com</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="container">
    <?php 
         
         include("config.php");
         if(isset($_POST['submit'])){
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $age = $_POST['age'];
            $doB = $_POST['dob'];
            $Gender = $_POST['occupation'];
            $Email = $_POST['email'];
            $Phone = $_POST['areacode'.'phone'];
            $City = $_POST['city'];
            $Resume = $_POST['upload'];
            $coverLetter = $_POST['text'];
          


         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$Email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='#'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO Applicants(firstName,lastName,Age,DoB,Gender,Email,Phone,City,Resume,coverLetter) VALUES('$firstName','$lastName','$Age','$doB', '$Gender','$Email','$Phone','$City','$Resume','$coverLetter')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='#'><button class='btn'>Go back</button>";
         

         }

         }else{
         
        ?>
    <div class="header">
      <h1 class="text-success">Moti Engineering PLC Job Application Form</h1>
    </div>
    
    <div class="formbold-main-wrapper">
    

  <div class="formbold-form-wrapper">
      
        <img src="moti2.jpg" >
        
    <form action="" method="POST">
      <div class="formbold-input-wrapp formbold-mb-3">
        <label for="firstname" class="formbold-form-label"> Name </label>

        <div>
          <input  type="text" name="firstname" id="firstname" placeholder="First name" class="formbold-form-input" required/>

          <input type="text" name="lastname" id="lastname" placeholder="Last name" class="formbold-form-input" required/>
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="age" class="formbold-form-label"> Age </label>
        <input type="text" name="age" id="age" placeholder="ex:25" class="formbold-form-input" required/>
      </div>

      <div class="formbold-mb-3">
        <label for="dob" class="formbold-form-label"> Date of Birth </label>
        <input type="date" name="dob" id="dob" class="formbold-form-input" required/>
      </div>

      <div class="formbold-mb-3">
        <label class="formbold-form-label">Gender</label>

        <select class="formbold-form-input" name="occupation" id="occupation" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          
        </select>
      </div>

      <div class="formbold-mb-3">
        <label for="email" class="formbold-form-label"> Email </label>
        <input
          type="email" name="email" id="email" placeholder="example@email.com" class="formbold-form-input" required/>
      </div>

      <div class="formbold-mb-3 formbold-input-wrapp">
        <label for="phone" class="formbold-form-label"> Phone </label>

        <div>
          <input type="text" name="areacode" id="areacode" placeholder="Area code" class="formbold-form-input formbold-w-45"/>

          <input type="tel" name="phone" id="phone" placeholder="Phone number" class="formbold-form-input" required/>
        </div>
      </div>

      <div class="formbold-input-flex">
       
        <div>
          <label for="city" class="formbold-form-label"> City </label>
          <input type="text" name="city" id="city" placeholder="ex: Addis Ababa" class="formbold-form-input"/>
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="upload" class="formbold-form-label">
          Upload Resume
        </label>
        <input type="file" name="upload"id="upload" class="formbold-form-input formbold-form-file"
        />
      </div>
      <div class="textarea">
        <label for="textarea">Cover Letter</label><br>
        <textarea class="text" name="text" placeholder="Enter cover letter" required></textarea>
      </div><br>

      <div class="formbold-checkbox-wrapper">
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">
            <input type="checkbox" id="supportCheckbox" class="formbold-input-checkbox"
            />
            <div class="formbold-checkbox-inner">
              <span class="formbold-opacity-0">
                <svg
                  width="11"
                  height="8"
                  viewBox="0 0 11 8"
                  class="formbold-stroke-current"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                    >
                  <path
                    d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.81868 0.688604Z"
                    fill="white"
                  />
                </svg>
              </span>
            </div>
          </div>
        </label>
      </div>

      <button class="formbold-btn">Submit</button>
    </form>
  </div>
  
</div>
<?php } ?>
    </div>
      
  </body>
</html>