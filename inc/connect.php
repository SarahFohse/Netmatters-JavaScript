<?php

  if (isset($_POST['submit_btn'])) {
    $fullName = test_input($_POST['contact-name']);
    $company = test_input($_POST['contact-company']);
    $contactMail = test_input($_POST['contact-email']);
    $phoneNumber = test_input($_POST['contact-number']);
    $textMessage = test_input($_POST['contact-message']);
    $subscribed = isset($_POST['contact-checkbox']) ? 1 : 0;
    $redirUrl = $_SERVER['REQUEST_URI'] . "?submitted" . "#contact-form";

    if ($validated == 4) {
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "netmatters_assessment";
  
  
      $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
  
  
  
      if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
      }  
  
  
      
  
  
      $sql = "INSERT INTO contact_information (fullName,company,contactMail,phoneNumber,textMessage,subscribed) 
            VALUES (?, ?, ?, ?, ?, ?)";
  
      $stmt = mysqli_stmt_init($conn);
  
      if ( ! mysqli_stmt_prepare($stmt, $sql)) {
      
          die(mysqli_error($conn));
      }
  
      mysqli_stmt_bind_param($stmt, "sssssi",
                            $fullName,
                            $company,
                            $contactMail,
                            $phoneNumber,
                            $textMessage,
                            $subscribed);
  
      mysqli_stmt_execute($stmt);

      header( "Location: {$redirUrl}", true, 303);
      exit();
    } else {
      echo "<script>window.addEventListener('load', () => {document.getElementById('contact-form').scrollIntoView();})</script>";
    }
  }
?>








