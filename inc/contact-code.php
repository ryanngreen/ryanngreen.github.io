<div id="slider" style="right:-500px;">
  <div id="header">
    <div class="arrow-box">
      <h1 onclick="slideIn()"><span>X</span></h1>
    </div>
    <h1>Let's Get In Touch</h1>
    <p>Have any questions? Have a project you need some help with? Let me know! </p>

    <?php require_once('js/PHPMailer/class.phpmailer.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $message = trim($_POST['message']);

      $body = "Name : " . $name . "<br>";
      $body = $body . "Email : " . $email . "<br>";
      $body = $body . "Message : " . $message;

      foreach($_POST as $value) {
        if (stripos($value,'Content-Type:') !== FALSE) {
          echo "There was a problem with the information you entered.";
          exit;
        }
      }

      $mail = new PHPMailer(true);
    //  $mail->IsSMTP();
    //  $mail->SMTPAuth = true;
    //  $mail->Host = "smtp.sendgrid.net";
    //  $mail->Port = 587;
    //  $mail->Username = "rgreen";
    //  $mail->Password = "shabam12";

      $address = "green.ryann@gmail.com";
      $mail->AddAddress($address, "Ryann Green");
      $mail->SetFrom($email, $name);

      $mail->From = $email;
      $mail->FromName = $name;

      $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

      $mail->Subject = 'Website Submission | ' . $name;
      $mail->MsgHTML($body);
      $mail->Body    = $body;

      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else { ?>
        <p class="postmessage">Thanks for the email! I&rsquo;ll be in touch shortly.</p>
      <?php } }; ?>
    <form id="contactForm" method="post" action="">
      <input name="name" type="text" placeholder="Your Name">
      <input name="email" type="text" placeholder="Your Email">
      <textarea name="message" placeholder="Message"></textarea>
      <input id="submit" type="submit" value="Send" class="submit btn btn-primary">
    </form>
  </div>
</div>
