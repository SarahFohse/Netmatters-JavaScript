<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Netmatters - Contact Us</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/5cbcf5da8c.js" crossorigin="anonymous"></script>
</head>
  <body id="stop-scrolling" class="">
	  <div id="close-side-menu"></div>
	  <?php include("inc/consent-message.php"); ?>
	  <?php include("inc/header.php"); ?>
    <?php include("inc/validate.php"); ?>
    
    <main>
      <hr class="full-line">
      <div class="bookmark">
        <div class="container">
          <div class="page-section">
            <a href="index.php">Home</a>
            <p>/ Our Offices</p>
          </div>
        </div>
      </div>
      <div class="page-title">
        <div class="container">
          <h3>Our Offices</h3>
        </div>
      </div>
      <div class="container offices">
        <div class="office-tab">
          <div class="office-info">
            <img src="images/london.jpg" alt="London Office">
            <div class="info-content">
              <a href="#" class="office-name">London Office</a>
              <p>Unit G6,<br>Pixel Business Center,<br>110 Brooker Road, Waltham Abbey,<br>London,<br>EN9 1JH</p>
              <a href="#" class="office-number">02045 397354</a>
              <div class="office-btn">
                <a href="#">View More</a>
              </div>
            </div>
          </div>
          <img src="images/nm-london.jpg" alt="London Office Maps">
        </div>

        <div class="office-tab">
          <div class="office-info">
            <img src="images/cambridge.jpg" alt="Cambridge Office">
            <div class="info-content">
              <a href="#" class="office-name">Cambridge Office</a>
              <p>Unit 1.31,<br>St John's Innovation Centre,<br>Cowley Road, Milton,<br>Cambridge,<br>CB4 0WS</p>
              <a href="#" class="office-number">01223 37 57 72</a>
              <div class="office-btn">
                <a href="#">View More</a>
              </div>
            </div>
          </div>
          <img src="images/nm-camb.jpg" alt="Cambridge Office Maps">
        </div>
      
        <div class="office-tab">
          <div class="office-info">
            <img src="images/wymondham.jpg" alt="Wymondham Office">
            <div class="info-content">
              <a href="#" class="office-name">Wymondham Office</a>
              <p>Unit 15,<br>Penfold Drive,<br>Gateway 11 Business Park,<br>Wymondham, Norfolk,<br>NR18 0WZ</p>
              <a href="#" class="office-number">01603 70 40 20</a>
              <div class="office-btn">
                <a href="#">View More</a>
              </div>
            </div>
          </div>
          <img src="images/nm-wym.jpg" alt="Wymondham Office Maps">
        </div>

      
        <div class="office-tab">
          <div class="office-info">
            <img src="images/yarmouth-2.jpg" alt="Great Yarmouth Office">
            <div class="info-content">
              <a href="#" class="office-name">Great Yarmouth Office</a>
              <p>Suite F23,<br>Beacon Innovation Center,<br>Beacon Park, Gorleston,<br>Great Yarmouth,<br>NR31 7RA</p>
              <a href="#" class="office-number">01493 60 32 04</a>
              <div class="office-btn">
                <a href="#">View More</a>
              </div>
            </div>
          </div>
          <img src="images/nm-yar.jpg" alt="Great Yarmouth Office Maps">
        </div>
        <div class="contact">
          <div class="email-info">
            <p class="bold">Email us on:</p>
            <a href="mailto:sarahfohse@gmail.com" class="bold">sales@netmatters.com</a>
            <p class="bold">Business hours:</p>
            <p class="bold">Monday - Friday 07:00 - 18:00</p>
            <a href="" class="bold hidden-p-btn">Out of hours IT Support <i class="fa-solid fa-chevron-down"></i></a>
            <div class="hidden-paragraphs js-hidden">
              <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
              <p class="bold">Monday - Friday 18:00 - 22:00<br>Saturday 08:00 - 16:00<br>Sunday 10:00 - 18:00</p>
              <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
            </div>

          </div>

          <div class="contact-form" id="contact-form">
            <div class="form-content">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <?php echo $phoneErr;?>
                <span class="success-message form-alert js-hidden">Your message has been sent!<i class="fa-solid fa-x"></i></span>
                <div class="input-fields">
                  <div class="name-contact name-email">
                    <label for="contact-name">Your Name </label>
                    <input type="text" id="contact-name" name="contact-name" value="<?php echo $fullName?>">
                  </div>
                  <div class="company">
                    <label for="contact-company">Company Name </label>
                    <input type="text" id="contact-company" name="contact-company" value="<?php echo $company?>">
                  </div>
                  <div class="email-contact name-email">
                    <label for="contact-email">Your Email </label>
                    <input type="email" id="contact-email" name="contact-email" value="<?php echo $contactMail?>">
                  </div>
                  <div class="number name-email">
                    <label for="contact-number" id="number-space">Your Telephone Number </label>
                    <input type="text" id="contact-number" name="contact-number" value="<?php echo $phoneNumber?>">
                  </div>
                </div>
                <div class="message-box name-email">
                  <label for="contact-message">Message</label> <br>
                  <textarea name="contact-message" id="contact-message"><?php echo $textMessage?></textarea>
                </div>
                <div class="checkbox">
                  <input type="checkbox" name="contact-checkbox" id="contact-checkbox">
                  <span class="checkmark"></span>
                  <p>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</p>
                </div>
                <div class="send">
                  <input type="submit" value="SEND ENQUIRY" name="submit_btn">
                  <p class="required">Fields Required</p>
                </div>
                
              </form>
            </div>
          </div>
        </div>


      </div>

      <?php include("inc/connect.php"); ?>

      <?php include("inc/newsletter.php"); ?>
    </main>
    
    <?php include("inc/footer.php"); ?>
		<?php include("inc/side-menu.php"); ?>
		<?php include("inc/cookie.php"); ?>
		
	<script src="javascript/main.js"></script>
  <script src="javascript/contact.js"></script>
  </body>
</html>