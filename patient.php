<?php
$xml=simplexml_load_file("newPatientXML.xml") or die("Error: Cannot create object");
foreach ($xml ->patients as $patient ) {
			
		
		echo "<img src=' " . $patient -> img . " ' width='100 px' height= '150 px'/> <br/>";
		echo " Patient ID: " . $patient -> filecode . "<br>";
		echo " Firstname: " . $patient -> firstname  . "<br>"; 
		echo " Lastname: " . $patient -> lastname  . "<br>";
		echo " Date of birth: " . $patient -> dob  . "<br>";
		echo " Gender: " . $patient -> gender  . "<br>";
		echo " Street:  " . $patient-> address -> street  . "<br>";
		echo " City: " . $patient-> address -> city . "<br>";
		echo " Cell: " . $patient ->  phone -> cell . "<br>";
		echo " Home: " . $patient ->  phone -> home . "<br>";
		echo " Work: " . $patient ->  phone -> work . "<br>";
		echo " Email: " . $patient ->  email . "<br>";
		echo " Medical History: " . $patient ->  medicalhistory . "<br>";
		echo " Allergy: " . $patient ->  allergies . "<br>";
		echo " Blood group: " . $patient ->  bloodgroup . "<br>";
		echo " Marital Status: " . $patient ->  maritalstatus . "<br>";
		echo " Occupation: " . $patient ->  occupation . "<br>";
		echo "<br>";
		echo "" . $patient ->  spousename . "<br>";
		echo " Spouse firstname: " . $patient ->  spousenamem -> firstname . "<br>";
		echo " Spouse lastname: " . $patient ->  spousenamem -> lastname . "<br>";
		echo "<br>";
		echo "" . $patient ->  Employer . "<br>";
		echo " Firstname: " . $patient ->  employ -> firstname  . "<br>";
		echo " Lastname: " . $patient -> employ -> lastname . "<br>";
		echo " Cell: " . $patient ->  employ ->  phone -> cell . "<br>";
		echo " Home: " . $patient ->  employ ->  phone -> home . "<br>";
		echo " Work: " . $patient ->  employ ->  phone -> work . "<br>";
		echo " Street: " . $patient ->  employ ->  address -> street . "<br>";
		echo " City: " . $patient ->  employ ->  address -> city . "<br>";
		echo "<br>";
		echo "" . $patient ->  emergency . "<br>";
		echo " Firstname: " . $patient ->  emergence ->  firstname . "<br>";
		echo " Lastname: " . $patient ->  emergence ->  lastname . "<br>";
		echo " Street: " . $patient ->  emergence ->  address -> street . "<br>";
		echo " City: " . $patient ->  emergence ->  address -> city . "<br>";
		echo " Cell: " . $patient ->  emergence -> phone -> cell  . "<br>";
		echo " Home: " . $patient ->  emergence ->  phone -> home . "<br>";
		echo " Work: " . $patient ->  emergence ->  phone -> work . "<br>";
		echo " Email: " . $patient ->  emergence ->  email . "<br>";
		echo "<br>============================== <br>";
		}
?>
