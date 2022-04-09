<!DOCTYPE html>
<html>
<head>
    <title>OGI Gym Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script>
        function forDash(f) {
            let f_val =f.value.replace(/\D[^.]/g, "");
            f.value = f_val.slice(0, 3) + "-" + f_val.slice(3, 6) + "-" + f_val.slice(6);
        }
        function dash(){
            let inp = document.getElementById("zip");
            let string = inp.value;
            string = string.replace("-","");
            if (string.length > 5) {
                string = string.substring(0,5) + "-" + string.substring(5);
            }
            inp.value = string
        }
        function username(){
            let name = document.myform.username.value;
            let error = document.getElementById("error");
            if(name.length < 6 || name.length > 50) {
                error.innerHTML = "Please create a username at least 6-50 character long";
                return false;
            }else{error.innerHTML =""
                return true;}
        }
        function passValidation() {
            let passw = document.myform.psw.value;
            let errorpass = document.getElementById("errorpassword");
            if (!/[A-Z]/.test(passw) || !/[a-z]/.test(passw) || !/\d/.test(passw)) {
                errorpass.innerHTML = "Please Enter at least 1 capital, at least 1 lowercase, at least 1 digit, at least 1 special character!";
                return false;
            }else{errorpass.innerHTML =""}

            if (passwo.length < 8 || passw.length > 50) {
                errorpass.innerHTML = "Please create a strong password!";
                return false;
            }else{errorpass.innerHTML =""
                return true;}
        }

        function passwordCheck() {
            let psw = document.myform.pswrepeat.value;
            let passw = document.myform.psw.value;
            let errorpword = document.getElementById("errorpword");
            if (passw === psw) {
                errorpword.innerHTML = ""
                return true;
            } else {
                errorpword.innerHTML = "They do not match, please enter same password! ";
                return false;
            }
        }

        function firstNameC() {
            let frt = document.myform.fname.value;
            let errorFirstName = document.getElementById("errorFirstN");
            if(firstNameC.length < 1 || firstNameC.length > 50) {
                errorFirstName.innerHTML = "Please create a First Name at least 1-50 character long!";
                return false;
            }else{errorFirstName.innerHTML =""
                return true;}
        }
        function lastNameC() {
            let lst = document.myform.lname.value;
            let errorLastName = document.getElementById("errorLastN");
            if (lst.length < 1 || lst.length > 50) {
                errorLastName.innerHTML = "Please create a Last Name at least 1-50 character long!";
                return false;
            } else {
                errorLastName.innerHTML = ""
                return true;
            }
        }
        function addressFC() {
            let addF = document.myform.address1.value;
            let errorAF = document.getElementById("erroradd1");
            if (addF.length < 1 || addF.length > 100) {
                errorAF.innerHTML = "Please create an Address First line at least 1-100 character long!";
                return false;
            } else {
                errorAF.innerHTML = ""
                return true;
            }
        }
        function addressSC() {
            let addS = document.myform.address2.value;
            let errorSF = document.getElementById("erroradd2");
            if (addS.length < 0 || addS.length > 100) {
                errorSF.innerHTML = "Please create an Address Second Line at least 0-100 character long!";
                return false;
            } else {
                errorSF.innerHTML = ""
                return true;
            }
        }
        function cityC() {
            let city = document.myform.city.value;
            let errorC = document.getElementById("errorcy");
            if (city.length < 1 || city.length > 50) {
                errorC.innerHTML = "Please create a City Name at least 1-50 character long!";
                return false;
            } else {
                errorC.innerHTML = ""
                return true;
            }
        }
        function stateC() {
            let state = document.myform.state.value;
            let errorS = document.getElementById("errorst");
            if (state.length < 1 || state.length > 50) {
                errorS.innerHTML = "Please create a State Name at least 1-52 character long!";
                return false;
            } else {
                errorS.innerHTML = ""
                return true;
            }
        }

        function zipC() {
            let zipCode = document.myform.zip.value;
            let errorZipCode = document.getElementById("errorzip");
            if (zipCode.length < 5 || zipCode.length > 10) {
                errorZipCode.innerHTML = "Please create a zipcode at least 5-10 character long!";
                return false;
            } else {
                errorZipCode.innerHTML = ""
                return true;
            }
        }
        function phoneC() {
            let phonen = document.myform.phone.value;
            let errorP = document.getElementById("errorphone");
            if (phonen.length < 1 || phonen.length > 12) {
                errorP.innerHTML = "Please create a phone number at least 1-12 character long!";
                return false;
            } else {
                errorP.innerHTML = ""
                return true;
            }
        }
        function emailC() {
            let email = document.myform.email.value;
            let errorE = document.getElementById("erroremail");
            if (!/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
                errorE.innerHTML = "Please create an Email for example; abc@abc.com";
                return false;
            } else {
                errorE.innerHTML = ""
                return true;
            }
        }
        function genderC() {
            let genderS = document.myform.gender.value;
            let errorG = document.getElementById("errorgender");
            if (genderS.length < 1 || genderS.length > 50) {
                errorG.innerHTML = "Please create your gender 1-50 character long!";
                return false;
            } else {
                errorG.innerHTML = ""
                return true;
            }
        }
        function martialSC() {
            let martialS = document.myform.martial.value;
            let errorM = document.getElementById("errormartial");
            if (martialS.length < 1 || martialS.length > 50) {
                errorM.innerHTML = "Please create your current martial status 1-50 character long!";
                return false;
            } else {
                errorM.innerHTML = ""
                return true;
            }
        }
        function validationF() {
            if( username() && passValidation() && passwordCheck() && firstNameC() && lastNameC() && addressFC() && addressSC()
                && cityC() && stateC() && zipC() && phoneC() && emailC() && genderC()
                && martialSC())
            {
                alert("Your form submitted!")
                return true;}
            else { alert("There is wrong  information, Please check them!")
                return false;
            }

        }
    </script> -->
    <style>
        span {
            color: blue;
        }
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            font-size: x-large;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>

<h1>New Membership Form</h1>
<?php include 'inputValidation.php';?>
<p><span class="error">* required field</span></p>
<div class="container">
    <form id="myform" name="myform" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <label for="username"><b>User Name</b></label>
        <input onblur="username()" type="text" placeholder="Enter User Name" name="username" id="username" value="<?php echo $username; ?>"/>
        <span class="error">* <?php echo $usernameError;?></span>
        <br>
        <label for="psw"><b>Password</b></label>
        <input onblur="passValidation()" type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php echo $psw; ?>"/>
        <span class="error">* <?php echo $pswError;?></span>
        <br>
        <label for="pswrepeat"><b>Repeat Password</b></label>
        <input onblur="passwordCheck()" type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" value="<?php echo $pswrepeat; ?>"/>
        <span class="error">* <?php echo $pswrepeatError;?></span>
        <br><br>
        <label for="first"><b>First Name</b></label>
        <input onblur="firstNameC()" type="text" placeholder="Enter First Name" name="first" id="first" value="<?php echo $first; ?>"/>
        <span class="error">* <?php echo $firstError;?></span>
        <br>
        <label for="last"><b>Last Name</b></label>
        <input onblur="lastNameC()" type="text" placeholder="Enter Last Name" name="last" id="last" value="<?php echo $last; ?>"/>
        <span class="error">* <?php echo $lastError;?></span>
        <br>
        <label for="address1"><b>Address Line 1</b></label>
        <input onblur="addressFC()" type="text" placeholder="Enter Address line 1" name="address1" id="address1" value="<?php echo $address1; ?>"/>
        <span class="error">* <?php echo $address1Error;?></span>
        <br>
        <label for="address2"><b>Address Line 2</b></label>
        <input onblur="addressSC()" type="text" placeholder="Enter Address line 2" name="address2" id="address2" value="<?php echo $address2; ?>"/>
        <span class="error">* <?php echo $address2Error;?></span>
        <br>
        <label for="city"><b>City</b></label>
        <input onblur="cityC()" type="text" placeholder="Enter City" name="city" id="city" value="<?php echo $city; ?>"/>
        <span class="error">* <?php echo $cityError;?></span>
        <br>
        <label id="state"><b>State</b></label>
        <select>
            <option value="AL">AL</option>
            <option value="AK">AK</option>
            <option value="AR">AR</option>
            <option value="AZ">AZ</option>
            <option value="CA">CA</option>
            <option value="CO">CO</option>
            <option value="CT">CT</option>
            <option value="DC">DC</option>
            <option value="DE">DE</option>
            <option value="FL">FL</option>
            <option value="GA">GA</option>
            <option value="HI">HI</option>
            <option value="IA">IA</option>
            <option value="ID">ID</option>
            <option value="IL">IL</option>
            <option value="IN">IN</option>
            <option value="KS">KS</option>
            <option value="KY">KY</option>
            <option value="LA">LA</option>
            <option value="MA">MA</option>
            <option value="MD">MD</option>
            <option value="ME">ME</option>
            <option value="MI">MI</option>
            <option value="MN">MN</option>
            <option value="MO">MO</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="NC">NC</option>
            <option value="NE">NE</option>
            <option value="NH">NH</option>
            <option value="NJ">NJ</option>
            <option value="NM">NM</option>
            <option value="NV">NV</option>
            <option value="NY">NY</option>
            <option value="ND">ND</option>
            <option value="OH">OH</option>
            <option value="OK">OK</option>
            <option value="OR">OR</option>
            <option value="PA">PA</option>
            <option value="RI">RI</option>
            <option value="SC">SC</option>
            <option value="SD">SD</option>
            <option value="TN">TN</option>
            <option value="TX">TX</option>
            <option value="UT">UT</option>
            <option value="VT">VT</option>
            <option value="VA">VA</option>
            <option value="WA">WA</option>
            <option value="WI">WI</option>
            <option value="WV">WV</option>
            <option value="WY">WY</option>
        </select>
        <span class="error">* <?php echo $stateError;?></span>
        <br><br>
        <label for="zip"><b>Zip Code</b></label>
        <input onblur="zipC()" oninput="dash()" type="text" placeholder="Enter zip code" name="zip" id="zip" value="<?php echo $zip; ?>"/>
        <span class="error">* <?php echo $zipError;?></span>
        <br>
        <label for="phone"><b>Phone Number</b></label>
        <input onblur="forDash(this)" type="text" placeholder="Enter phone number" name="phone" id="phone" value="<?php echo $phone; ?>"/>
        <span class="error">* <?php echo $phoneError;?></span>
        <br>
        <label for="email"><b>Email</b></label>
        <input onblur="emailC()" type="text" placeholder="Enter E-mail Address" name="email" id="email" rvalue="<?php echo $email; ?>"/>
        <span class="error">* <?php echo $emailError;?></span>
        <br>
        <fieldset name="gender" id="gender">
            <b>Gender</b>
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender"
                <?php if ($gender=="female"){echo "checked";} ?> value="female"/>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender"
                <?php if ($gender=="male"){echo "checked";} ?> value="male"/>
            <span class="error">* <?php echo $genderError;?></span>
            <br>
        </fieldset>

        <fieldset name="martial" id="martial" >
            <b>Martial Status</b>
            <label for="Single">Single</label>
            <input type="radio" id="single" name="martial"
                <?php if ($martial=="single"){echo "checked";} ?> value="single"/>
            <label for="married">Married</label>
            <input type="radio" id="married" name="martial"
                <?php if ($martial=="married"){echo "checked";} ?> value="married"/>
            <label for="Divorced">Divorced</label>
            <input type="radio" id="divorced" name="divorced"
                <?php if ($martial=="divorced"){echo "checked";} ?> value="divorced"/>
            <span class="error">* <?php echo $martialError;?></span>
            <br>
        </fieldset>

        <label for="dob"><b>Date of Birth</b></label>
        <input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" value="<?php echo $dob; ?>"/>
        <span class="error">* <?php echo $dobError;?></span>
        <br><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">

                   </div>

</form>
<?php if ($isValid) { ?>
<form id="hiddenform" name="hiddenform" method="POST" action="comfirmPage.php">
    <?php foreach ($_POST as $key => $value){ ?>
        <input name="<?php echo $key; ?>"
               value="<?php echo $value; ?>"
               type="hidden"/>
        <?php
    }
    ?>
    <script>
        document.createElement('form').submit.call(document.getElementById('hiddenform'));
    </script>
    <?php
    }
    ?>
</form>
</body>
</html>