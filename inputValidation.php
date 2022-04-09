<?php
    $usernameError = $stateError = $dobError = $emailError = $zipError = $phoneError = $genderError = $martialError = $pswError = $pswrepeatError = $firstError = $lastError = $address1Error = $address2Error = $cityError = "";
    $username = $state = $dob = $email = $zip = $phone = $gender = $martial = $psw = $pswrepeat = $first = $last = $address1 =  $address2 = $city = "" ;
    $isValid = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;

        $username = clean_input($_POST["username"]);
        if (empty ($username)) {
            $usernameError = "Username is required";
            $isValid = false;
        } else{
            if(strlen($username) < 6 || strlen($username) > 50) {
                $usernameError = "Please create a username at least 6-50 character long";
                $isValid = false;
            }
        }

        $psw = $_POST["psw"];
        if (empty ($psw)) {
            $pswError = "Please create a strong password!";
            $isValid = false;
        } elseif(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/", $psw)) {
            $pswError = "Please Enter 1 capital, 1 lowercase, 1 digit, 1 special character!";
            $isValid = false;
        } else{
            if(strlen($psw) < 8 || strlen($psw) > 50) {
                $pswError = "Please create a strong password!";
                $isValid = false;
            }
        }
        $pswrepeat = $_POST["pswrepeat"];
        if (empty ($pswrepeat)) {
            $pswrepeatError = "They do not match, please enter same password!";
            $isValid = false;
        } elseif(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/", $pswrepeat)) {
            $pswrepeatError = "Please Enter 1 capital, 1 lowercase, 1 digit, 1 special character";
            $isValid = false;
        } else{
            if($psw != $pswrepeat) {
                $pswrepeatError = "They do not match, please enter same password!";
                $isValid = false;
            }
        }

        $first = clean_input($_POST["first"]);
        if (empty ($first)) {
            $firstError = "First name is required!";
            $isValid = false;
        } elseif(!preg_match("/^[a-zA-z]+$/", $first)) {
            $firstError = "Please create a First Name at least 1-50 character long(only letters)!";
            $isValid = false;
        } else{
            if(strlen($first) < 1 || strlen($first) > 50) {
                $firstError = "Please create a First Name at least 1-50 character long!";
                $isValid = false;
            }
        }

        $last = clean_input($_POST["last"]);
        if (empty ($last)) {
            $lastError = "Last name is required";
            $isValid = false;
        } elseif(!preg_match("/^[a-zA-z]+$/", $last)) {
            $lastError = "Please create a Last Name at least 1-50 character long(only letters)!";
            $isValid = false;
        } else{
            if(strlen($last) < 1 || strlen($last) > 50) {
                $lastError = "Please create a Last Name at least 1-50 character long!";
                $isValid = false;
            }
        }

        $address1 = clean_input($_POST["address1"]);
        if (empty ($address1)) {
            $address1Error = "Address is required";
            $isValid = false;
        } else{
            if(strlen($address1) < 1 || strlen($address1) > 100) {
                $address1Error = "Please create an Address First line at least 1-100 character long!";
                $isValid = false;
            }
        }

        $address2 = clean_input($_POST["address2"]);
        if(strlen($address2) > 100) {
            $address2Error = "Please create an Address Second line at least 1-100 character long!";
            $isValid = false;
        }

        $city = clean_input($_POST["city"]);
        if (empty ($city)) {
            $cityError = "Address is required";
            $isValid = false;
        } else{
            if(strlen($city) < 1 || strlen($city) > 50) {
                $cityError = "Please create a City Name at least 1-50 character long!";
                $isValid = false;
            }
        }

        $zip = clean_input($_POST["zip"]);
        if (empty ($zip)) {
            $zipError = "zip is required";
            $isValid = false;
        } else{
            if(strlen($zip) < 5 || strlen($zip) > 10) {
                $zipError = "Please create a zipcode at least 5-10 character long!";
                $isValid = false;
            }
        }

        $phone = clean_input($_POST["phone"]);
        if (empty ($phone)) {
            $phoneError = "Phone number is required";
            $isValid = false;
        } else{
            if(strlen($phone) < 1 || strlen($phone) > 12) {
                $phoneError = "Please create a phone number at least 1-12 character long!";
                $isValid = false;
            }
        }

        $state = $_POST["state"];
        if(isset($_POST["state"]) && $_POST["state"] == '0') {
            $stateError = "Please select a country.";
        }else{
            if(strlen($state) > 52) {
                $stateError = "Please create a State Name at least 1-52 character long!";
                $isValid = false;
            }
        }


        $dob = $_POST["dob"];
        if(isset($_POST["dob"]) && $_POST["dob"] == '0') {
            $dobError = "Please select your date of birth!";
        }

        $email = clean_input($_POST["email"]);
        if (empty ($email)) {
            $emailError = "Email name is required";
            $isValid = false;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email!";
                $isValid = false;
            }
        }

        if (isset($_POST["gender"])){
            $gender = clean_input($_POST["gender"]);
            if (empty ($_POST["gender"])) {
                $genderError = "Gender is required";
                $isValid = false; }
        }
        else {
            $genderError = "Gender is required";
            $isValid = false;
        }

        if (isset($_POST["martial"])){
            $martial = clean_input($_POST["martial"]);
            if (empty ($_POST["martial"])) {
                $martialError = "Martial Status is required";
                $isValid = false; }
        }
        else {
            $martialError = "Martial Status is required";
            $isValid = false;
        }

    }

        function clean_input ($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>