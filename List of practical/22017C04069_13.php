<html>
    <head>
        <title>Registration Form</title>
        <style>
        body{ background-color:#c4cfa9; margin: 5 30px; } h1 { text-align:center; font-size:60px; background-color:#872ac9; color:#e9c914 } form { background-color:#eedcc1; border-radius: 15px; font-size:18px; padding: 0% 10% 4% 10% ; } .button { cursor: pointer; border-radius: 15px; background-color: #f08b2c; font-size: 20px; padding: 6px; } fieldset { border-radius: 15px; } span { padding-left: 6% } </style>
    </head>
    <body>
        <h1><ins>Registration Form</ins></h1>
        <div style="margin: 5% 12% 0% 12%;">
            <form>
                <b><br>
                    <p style="color: red;">Required Field are denoted by '*' .</p>
                    <br><fieldset>
                        <legend>Personal Details</legend>
                        <div>
                        <br> First Name * : <input type="text" name="fname" id="fname" placeholder="Enter your First Name" required=""><span> Last Name * : </span><input type="text" name="lname" id="lname" placeholder="Enter your Last Name" required="">
                        <br><br> Date of Birth (DOB) * : <input type="date" name="dob" id="dob" placeholder="Enter your Birth Date" required=""><span> Age * : </span><input type="number" name="age" id="age" placeholder="Enter your Age" max="100" required="">
                        <br><br> Gender *: Male <input type="radio" name="gender" id="male" required=""> Female <input type="radio" name="gender" id="female" required=""> Others <input type="radio" name="gender" id="other" required="">
                    </div>
                    </fieldset>
                    <br><fieldset>
                        <legend>Contact Information</legend>
                        <br>Phone No. * : <input type="Phone" name="" id="Phone" placeholder="Enter your Phone No." pattern="[0-9]{10}" required=""><span> E-mail ID * : </span><input type="email" name="email" id="email" placeholder="Enter your Email Address" required="">
                    </fieldset>
                    <br><fieldset>
                        <legend>Address Details</legend>
                        <br>Address * : <input type="text" name="address" id="address" placeholder="Enter your Address" required=""><span> State * : </span><input type="text" name="state" id="state" placeholder="state" required="">
                        <br><br> City * : <input type="text" name="city" id="city" placeholder="City" required=""><span> Pincode * : </span><input type="number" name="pincode" id="pincode" placeholder="pincode" pattern="[0-9]{6}" required="">
                    </fieldset>
                    <br><fieldset>
                        <legend>Login Detail</legend>
                        <br> User-Name * : <input type="text" name="username" id="username" required="">
                        <br><br>Password * : <input type="password" name="password" id="password" required="">
                    </fieldset><br>
                    <input class="button" type="submit" value="Submit">
                    <input class="button" type="reset" value="Reset">
                    <br><br></b>
            </form>
        </div>
</body>
</html>