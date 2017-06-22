=============== PHP ===============
Requirements - XAMPP Control Panel
=============== PHP ===============

1) Start Apache
2) Copy the folder Patient to  Xampp > htdocs 
3) Open a browser 
4) Paste this on the URL http://localhost/Patient/
	i)  For PatientXML.xml
	        - Copy this http://localhost/Patient/patient.php
		- Paste it in the Browser URL
	ii)  For newPatientXML.xml
		- Open Patient.php on sublime text
		- Change the second lin of code

		   $xml=simplexml_load_file("NewPatientXML.xml") or die("Error: Cannot create object");		
	        
		 - Copy this http://localhost/Patient/patient.php
		 - Paste it in the Browser URL