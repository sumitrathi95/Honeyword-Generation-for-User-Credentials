<?php
function ebcdic_to_ascii($ebcdic_hexstring /*expecting something like F0F1....*/)
    {
        //need to delcare it to avoid warning
$ebcd_ascii= null;
  // here come all the conversion
$ebcd_ascii["4A"] = "¢";
$ebcd_ascii["4B"] = ".";
$ebcd_ascii["4C"] = "<";
$ebcd_ascii["4D"] = "(";
$ebcd_ascii["4E"] = "+";
$ebcd_ascii["4F"] = "|";
$ebcd_ascii["5A"] = "!";
$ebcd_ascii["5B"] = "$";
$ebcd_ascii["5C"] = "*";
$ebcd_ascii["5D"] = ")";
$ebcd_ascii["5E"] = ";";
$ebcd_ascii["5F"] = "¬";
$ebcd_ascii["60"] = "-";
$ebcd_ascii["61"] = "/";
$ebcd_ascii["6A"] = "¦";
$ebcd_ascii["6B"] = ",";
$ebcd_ascii["6C"] = "%";
$ebcd_ascii["6D"] = "_";
$ebcd_ascii["6E"] = ">";
$ebcd_ascii["6F"] = "?";
$ebcd_ascii["79"] = "`";
$ebcd_ascii["7A"] = ":";
$ebcd_ascii["7B"] = "#";
$ebcd_ascii["7C"] = "@";
$ebcd_ascii["7D"] = "'";
$ebcd_ascii["7E"] = "=";
$ebcd_ascii["7F"] = " '' ";
$ebcd_ascii["81"] = "a";
$ebcd_ascii["82"] = "b";
$ebcd_ascii["83"] = "c";
$ebcd_ascii["84"] = "d";
$ebcd_ascii["85"] = "e";
$ebcd_ascii["86"] = "f";
$ebcd_ascii["87"] = "g";
$ebcd_ascii["88"] = "h";
$ebcd_ascii["89"] = "i";
$ebcd_ascii["91"] = "j";
$ebcd_ascii["92"] = "k";
$ebcd_ascii["93"] = "l";
$ebcd_ascii["94"] = "m";
$ebcd_ascii["95"] = "n";
$ebcd_ascii["96"] = "o";
$ebcd_ascii["97"] = "p";
$ebcd_ascii["98"] = "q";
$ebcd_ascii["99"] = "r";
$ebcd_ascii["A1"] = "~";
$ebcd_ascii["A2"] = "s";
$ebcd_ascii["A3"] = "t";
$ebcd_ascii["A4"] = "u";
$ebcd_ascii["A5"] = "v";
$ebcd_ascii["A6"] = "w";
$ebcd_ascii["A7"] = "x";
$ebcd_ascii["A8"] = "y";
$ebcd_ascii["A9"] = "z";
$ebcd_ascii["C0"] = "{";
$ebcd_ascii["C1"] = "A";
$ebcd_ascii["C2"] = "B";
$ebcd_ascii["C3"] = "C";
$ebcd_ascii["C4"] = "D";
$ebcd_ascii["C5"] = "E";
$ebcd_ascii["C6"] = "F";
$ebcd_ascii["C7"] = "G";
$ebcd_ascii["C7"] = "H";
$ebcd_ascii["C9"] = "I";
$ebcd_ascii["D0"] = "}";
$ebcd_ascii["D1"] = "J";
$ebcd_ascii["D2"] = "K";
$ebcd_ascii["D3"] = "L";
$ebcd_ascii["D4"] = "M";
$ebcd_ascii["D5"] = "N";
$ebcd_ascii["D6"] = "O";
$ebcd_ascii["D7"] = "P";
$ebcd_ascii["D8"] = "Q";
$ebcd_ascii["D9"] = "R";
$ebcd_ascii["E0"] = "\\";
$ebcd_ascii["E2"] = "S";
$ebcd_ascii["E3"] = "T";
$ebcd_ascii["E4"] = "U";
$ebcd_ascii["E5"] = "V";
$ebcd_ascii["E6"] = "W";
$ebcd_ascii["E7"] = "X";
$ebcd_ascii["E8"] = "Y";
$ebcd_ascii["E9"] = "Z";
$ebcd_ascii["F0"] = "0";
$ebcd_ascii["F1"] = "1";
$ebcd_ascii["F2"] = "2";
$ebcd_ascii["F3"] = "3";
$ebcd_ascii["F4"] = "4";
$ebcd_ascii["F5"] = "5";
$ebcd_ascii["F6"] = "6";
$ebcd_ascii["F7"] = "7";
$ebcd_ascii["F8"] = "8";
$ebcd_ascii["F9"] = "9";
$ebcd_ascii["FF"] = "E0";
    //end of conversion

    // loop until there is no more conversion.
    $asciiOut = "";    
    while(strlen($ebcdic_hexstring)>0)//F0F1F2F3F -> F1F2F3F
    {
        $thisEbcdic = substr($ebcdic_hexstring, 0, 2);//F0->F1
        //if(!is_null($ebcd_ascii[$thisEbcdic]))
        $asciiOut = $asciiOut.$ebcd_ascii[$thisEbcdic];//0->01
        $ebcdic_hexstring = substr($ebcdic_hexstring, 2);//F1F2F3F -> F2F3F
    }    

    return $asciiOut;

}

function ascii_to_ebcdic($ascii_hexstring /*expecting something like F0F1....*/)
    {
        //need to delcare it to avoid warning
$ascii_ebcd= null;
  // here come all the conversion
$ascii_ebcd["¢"] = "4A";
$ascii_ebcd["."] = "4B";
$ascii_ebcd["<"] = "4C";
$ascii_ebcd["("] = "4D";
$ascii_ebcd["+"] = "4E";
$ascii_ebcd["|"] = "4F";
$ascii_ebcd["!"] = "5A";
$ascii_ebcd["$"] = "5B";
$ascii_ebcd["*"] = "5C";
$ascii_ebcd[")"] = "5D";
$ascii_ebcd[""] = "5E";
$ascii_ebcd["¬"] = "5F";
$ascii_ebcd["-"] = "60";
$ascii_ebcd["/"] = "61";
$ascii_ebcd["¦"] = "6A";
$ascii_ebcd[","] = "6B";
$ascii_ebcd["%"] = "6C";
$ascii_ebcd["_"] = "6D";
$ascii_ebcd[">"] = "6E";
$ascii_ebcd["?"] = "6F";
$ascii_ebcd["`"] = "79";
$ascii_ebcd[":"] = "7A";
$ascii_ebcd["#"] = "7B";
$ascii_ebcd["@"] = "7C";
$ascii_ebcd["'"] = "7D";
$ascii_ebcd["="] = "7E";
$ascii_ebcd[" '' "] = "7F";
$ascii_ebcd["a"] = "81";
$ascii_ebcd["b"] = "82";
$ascii_ebcd["c"] = "83";
$ascii_ebcd["d"] = "84";
$ascii_ebcd["e"] = "85";
$ascii_ebcd["f"] = "86";
$ascii_ebcd["g"] = "87";
$ascii_ebcd["h"] = "88";
$ascii_ebcd["i"] = "89";
$ascii_ebcd["j"] = "91";
$ascii_ebcd["k"] = "92";
$ascii_ebcd["l"] = "93";
$ascii_ebcd["m"] = "94";
$ascii_ebcd["n"] = "95";
$ascii_ebcd["o"] = "96";
$ascii_ebcd["p"] = "97";
$ascii_ebcd["q"] = "98";
$ascii_ebcd["r"] = "99";
$ascii_ebcd["~"] = "A1";
$ascii_ebcd["s"] = "A2";
$ascii_ebcd["t"] = "A3";
$ascii_ebcd["u"] = "A4";
$ascii_ebcd["v"] = "A5";
$ascii_ebcd["w"] = "A6";
$ascii_ebcd["x"] = "A7";
$ascii_ebcd["y"] = "A8";
$ascii_ebcd["z"] = "A9";
$ascii_ebcd["{"] = "C0";
$ascii_ebcd["A"] = "C1";
$ascii_ebcd["B"] = "C2";
$ascii_ebcd["C"] = "C3";
$ascii_ebcd["D"] = "C4";
$ascii_ebcd["E"] = "C5";
$ascii_ebcd["F"] = "C6";
$ascii_ebcd["G"] = "C7";
$ascii_ebcd["H"] = "C7";
$ascii_ebcd["I"] = "C9";
$ascii_ebcd["}"] = "D0";
$ascii_ebcd["J"] = "D1";
$ascii_ebcd["K"] = "D2";
$ascii_ebcd["L"] = "D3";
$ascii_ebcd["M"] = "D4";
$ascii_ebcd["N"] = "D5";
$ascii_ebcd["O"] = "D6";
$ascii_ebcd["P"] = "D7";
$ascii_ebcd["Q"] = "D8";
$ascii_ebcd["R"] = "D9";
$ascii_ebcd["\\"] = "E0";
$ascii_ebcd["S"] = "E2";
$ascii_ebcd["T"] = "E3";
$ascii_ebcd["U"] = "E4";
$ascii_ebcd["V"] = "E5";
$ascii_ebcd["W"] = "E6";
$ascii_ebcd["X"] = "E7";
$ascii_ebcd["Y"] = "E8";
$ascii_ebcd["Z"] = "E9";
$ascii_ebcd["0"] = "F0";
$ascii_ebcd["1"] = "F1";
$ascii_ebcd["2"] = "F2";
$ascii_ebcd["3"] = "F3";
$ascii_ebcd["4"] = "F4";
$ascii_ebcd["5"] = "F5";
$ascii_ebcd["6"] = "F6";
$ascii_ebcd["7"] = "F7";
$ascii_ebcd["8"] = "F8";
$ascii_ebcd["9"] = "F9";
$ascii_ebcd["E0"] = "FF";



    // loop until there is no more conversion.
    $ebcdicOut = "";    
    while(strlen($ascii_hexstring)>0)//F0F1F2F3F -> F1F2F3F
    {
        $thisAscii = substr($ascii_hexstring, 0, 1);//F0->F1
        //if(!is_null$ascii_ebcd[$thisAscii]))
        $ebcdicOut = $ebcdicOut.$ascii_ebcd[$thisAscii];//0->01
        $ascii_hexstring = substr($ascii_hexstring, 1);//F1F2F3F -> F2F3F
    }    

    return $ebcdicOut;

}
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'final';
//$subject='hacked';
$to_email 	='sumitprathi2019@gmail.com';
$subject	='account breached';
$body		='your account was logged in using honeyword please take necessary action (Test Mail)';
$headers	='From:sumitprathi2019@gmail.com';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id,email,password1,password2,password3,password4 FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id,$email,$password1, $password2 ,$password3,$password4 );
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify(ascii_to_ebcdic($_POST['password']), ($password1))) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	}
	elseif(password_verify(ascii_to_ebcdic($_POST['password']), $password2)){
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;	
		if(mail($to_email, $subject, $body, $headers))
			echo '<h1> E-Mail sent successfully<h1>';
	else 
			echo 'failed';
		echo 'Welcome ' . $_SESSION['name'] . '!	password2';
		//header('Location: home1.php');
		
		
	}
	elseif(password_verify(ascii_to_ebcdic($_POST['password']), $password3)){
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		if(mail($email, $subject, $body, $headers))
			echo '<h1> E-Mail sent successfully<h1>';
		else 
			echo 'failed';
		echo 'Welcome ' . $_SESSION['name'] . '!	password3';
		//header('Location: home1.php');
	}
	elseif(password_verify(ascii_to_ebcdic($_POST['password']), $password4)){
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		if(mail($email, $subject, $body, $headers))
			echo '<h1> E-Mail sent successfully<h1>';
		else 
			echo 'failed';
		//echo 'Welcome ' . $_SESSION['name'] . '!	password4';
		echo 'Access Denied';
		//header('Location: home1.php');
	}
	
	else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();