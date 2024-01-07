<?php
if (isset($_POST['submit'])){

	
	$to = "senad.bajra@gmail.com"; // this is your Email address
	$from = $_POST['email']; // this is the sender's Email address
	$subject = $_POST['subject'];
	//$subject = "FormMail";
	$name = $_POST['name'];
	
	//to receiver
		$message = 
		"Od: ".$name . 
		"<br>Naslov: ".$subject .
		"<br>Text: " . $_POST['message'];
		
		
	$message2 = "Automatska poruka DIVADIS
		<br>Hvala Vam što ste nas kontaktirali.
		
		<br>Kopija Vaše forme:
		<hr>
		<br>Naslov: ".$subject.
		"<br>Text: ".$_POST['message']; 
	
	
		$headers [] = "From: $from";
		$headers[] = 'MIME-Version: 1.0';
		$headers [] = 'Content-type: text/html; charset=iso-8859-1';
		$headers []= "Content-type: text/html";

		$headers2[] = 'MIME-Version: 1.0';
		$headers2 [] = 'Content-type: text/html; charset=iso-8859-1';
		$headers2 [] = "From: $to";
		$headers2 []= "Content-type: text/html";
	
	mail($to, $subject, $message, implode("\r\n", $headers));

	mail($from, $subject, $message2, implode("\r\n", $headers2));

	
	$msg1 = "Hvala Vam što ste nas kontaktirali!";

//header( "Location: #contact" );
}

else{
	$msg1="";
}
?>

<section id="contact" class="container mt-4 mb-4">
      <h2 class="text-center">Kontaktiere uns</h2>
      <?php echo $msg1; ?>
      <br />
      <div class="row">
        <!-- Contact Form -->
        <div class="col-md-7">
        <form action="" method="POST" role="form" class="php-email-form">
            <div class="form-group">
            <div class="form-group">
              <label for="email">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="Ihre Name"
                required
              />
              <div class="form-group">
              <label for="email">E-Mail</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Ihre E-Mail-Adresse"
                required
              />
            </div>
              <label for="subject">Titel</label>
              <input
                type="text"
                class="form-control"
                id="subject"
                name="subject"
                placeholder="Titel"
                required
              />
            </div>
          
            </div>
            <div class="form-group">
              <label for="message">Nachricht</label>
              <textarea
                class="form-control"
                id="message"
                name="message"
                rows="5"
                placeholder="Ihre Nachricht"
                required
              ></textarea>
            </div>
            <!-- Add reCAPTCHA -->
            <div
              class="g-recaptcha"
              data-sitekey="YOUR_RECAPTCHA_SITE_KEY"
            ></div>
            <br />
            <button class="btn btn-primary popup-with-move-anim" type="submit" name='submit' value="submit"  >Submit</button>
          </form>
        </div>

        <div class="col-md-5">
          <!-- Common Container with Background Image -->
          <div
            id="contact-container"
            class="contact-container"
            style="
              background: url('./images/menu_1.png') center/cover no-repeat;
            "
          >
            <!-- Card 1: Find Us -->
            <div class="col-md-11 mb-4">
              <div class="card rounded">
                <div class="card-body">
                  <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                  <h5 class="card-title">Finden Sie uns</h5>

                  <p class="card-text">
                    Entdecken Sie unseren Standort und besuchen Sie uns für ein
                    beeindruckendes kulinarisches Erlebnis.
                  </p>
                  <span style="font-weight: bold">Aarauerstrasse 39</span><br />
                  <span>5116 Schinznach Bad</span>
                </div>
              </div>
            </div>

            <!-- Card 2: Hours -->
            <div class="col-md-11 mb-4">
              <div class="card rounded">
                <div class="card-body">
                  <i class="far fa-clock fa-2x mb-2"></i>
                  <h5 class="card-title">Öffnungszeiten</h5>
                  <p class="card-text">
                    Überprüfen Sie unsere Öffnungszeiten und planen Sie Ihren
                    Besuch entsprechend.
                  </p>
                  <span style="font-weight: bold">Di - So</span><br />
                  <span>11:00 - 21:00</span>
                </div>
              </div>
            </div>

            <!-- Card 3: Call Us -->
            <div class="col-md-11 mb-4">
              <div class="card rounded">
                <div class="card-body">
                  <i class="fas fa-phone-alt fa-2x mb-2"></i>
                  <h5 class="card-title">Rufen Sie uns an</h5>
                  <p class="card-text">
                    Haben Sie eine Frage? Rufen Sie uns an. Wir sind hier, um
                    Ihnen zu helfen.
                  </p>
                  <span style="font-weight: bold">056 555 36 44</span>
                </div>
              </div>
            </div>

            <!-- Custom Card -->
          </div>
        </div>
      </div>
    </section>