<?php 

$phoneErrHtml = "<span class=\"phone-error form-alert\">The telephone format is incorrect.<i class=\"fa-solid fa-x\"></i></span>";
$emailErrHtml = "<span class=\"phone-error form-alert\">The email format is incorrect.<i class=\"fa-solid fa-x\"></i></span>";
$phoneErr = "";
$emailErr = "";
$validated = 0;

$fullName = "";
$company = "";
$contactMail = "";
$phoneNumber = "";
$textMessage = "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit_btn'])) {
    $fullName = test_input($_POST['contact-name']);
    $contactMail = test_input($_POST['contact-email']);
    $phoneNumber = test_input($_POST['contact-number']);
    $textMessage = test_input($_POST['contact-message']);
    $subscribed = isset($_POST['contact-checkbox']) ? 1 : 0;

    if ($fullName == "") {
        echo "<style>#contact-name{border-color:red}</style>";
    } else {
        $validated++;
    }

    if ($contactMail == "" || !preg_match('/^(\w|-|\.)+@([\w-]+\.)+[\w-]{2,4}$/', $contactMail)) {
        $emailErr = $emailErrHtml;
        echo "<style>#contact-email{border-color:red}</style>";
    } else {
        $validated++;
    }

    $phoneLength = strlen($phoneNumber);

    if ($phoneNumber == "") {
        echo "<style>#contact-number{border-color:red}</style>";
    } else if (preg_match('/[a-zA-Z]/', $phoneNumber) || $phoneLength < 11 || $phoneLength > 14) {
        $phoneErr = $phoneErrHtml;
        echo "<style>#contact-number{border-color:red}</style>";
    } else if (!preg_match('/[a-zA-Z]/', $phoneNumber)) {
        $phoneNumber = filter_var($phoneNumber, FILTER_SANITIZE_NUMBER_INT);
        if (!preg_match('/(0|[+]){1}[0-9]{10,12}/x', $phoneNumber)) {
            $phoneErr = $phoneErrHtml;
            echo "<style>#contact-number{border-color:red}</style>";
        } else {
            $validated++;
        }
    } else {
        $validated++;
    }

    if ($textMessage == "") {
        echo "<style>#contact-message{border-color:red}</style>";
    } else {
        $validated++;
    }

    if ($subscribed == 0) {
        echo "<script>
        window.addEventListener('load', () => {
            const formCheckbox = document.querySelector('#contact-form input[type=checkbox]');
            formCheckbox.checked = false;
        })
      
        </script>";
    } else {
        echo "<script>
        window.addEventListener('load', () => {
            const formCheckbox = document.querySelector('#contact-form input[type=checkbox]');
            formCheckbox.checked = true;
        })
      
        </script>";
    }
}

?>