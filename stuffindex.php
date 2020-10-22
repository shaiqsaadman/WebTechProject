<!DOCTYPE html>
<html>
<body>
    
<div>
    <?php
    if(isset($_POST ['create']))
    {
        echo 'Form Submitted, Thank you!';
    }
    
    ?>
</div>
    
<div>
   
    <form action="result.php" method='post' enctype="multipart/form-data">
         <fieldset>


    <h1>New Employee Registration Form</h1>

    <table style="width:50%">
        
            <p>Please fill up this form below:</p>
            
            <tr>
                <td><label for="firstname">First Name:</label></td>
                <td><input type="text" id="firstname" placeholder = "First Name" required></td>
            </tr>

            <tr>
                <td><label for="lastname">Last Name:</label></td>
                <td><input type="text" id="lastname" placeholder = "Last Name" required></td>
            </tr>
        
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" id="email" placeholder = "Email" required></td>            
            </tr>
        
            <tr>
                <td><label for="phonenumber">Phone Number</label></td>
                <td><input type="text" id="phonenumber" placeholder = "Phone Number" required></td>
            </tr>

            <tr>
                <td><label for="username">User Name:</label></td>
                <td><input type="text" id="username" placeholder = "Username" required></td>            
            </tr>

            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" placeholder = "Password" required></td>
            </tr>

            <tr>
                <td><label for="password">Confirm Password:</label></td>
                <td><input type="password" id="password" placeholder = "Confirm password" required></td>
            </tr>

     </table>
            
            <br>
                <label for="gender">Gender:</label><br>
        <br>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
  
        <br>
        <br>
        <br>
            
            <div>
                <label for="date">Date of Birth:</label>
                <input type="date" name="date" id= "date" min="2000-31-12"><br>
            </div>
            <br>
            <div>
                Marital Status:
                
                    <label for="Single">Single</label>
                    <input type="checkbox" name="Single" id="Single">
                
                 
                    <label for="married">Married</label>
                    <input type="checkbox" name="Married" id="married">
               
                    <label for="unstated">Unstated</label>
                    <input type="checkbox" name="unstated" id="unstated">
            </div>
            
             <br>
             <br>

             <div>
                
                
                <label for="nationality">Nationality:</label>
                <select  name="nationality" id="nationality">
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Canada">Canada</option>
                    <option value="Denmark">Denmark</option>

                </select>
            </div>
            <br>
            <br>
            <div>
                <label for="file">Profile Picture</label>
                <input type="file" id="file" name="file">
            </div>
        
        <br>
                <input type="submit" value="Register">
                <input type="reset">
        </fieldset>

    
    </form>

</div>

</body>

</html>

    