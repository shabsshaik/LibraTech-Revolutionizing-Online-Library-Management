<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
<input type="text" name='name'/>
<input type="text" name='msgbody'/>
<input type="text" name='email'/>
<?php
if(isset($_POST['name'],$_POST['msgbody'],$_POST['email']))
{
$name=$_POST['name'];
$msgbody=$_POST['msgbody'];
$email=$_POST['email'];
}
require_once "phpmailer/class.phpmailer.php";
$message="
<html>
  <head>
    <meta name='viewport' content='width=device-width' />
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <title>send mail using phpmailer - Technopoints</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }
 
      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
 
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }
 
      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
 
      .body {
        background-color: #f6f6f6;
        width: 100%; }
 
      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; }
 
      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px; }
 
      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; }
 
      .wrapper {
        box-sizing: border-box;
        padding: 20px; }
 
      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }
 
      .footer {
        clear: both;
        Margin-top: 10px;
        text-align: center;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; }
 
      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }
 
      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }
 
      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }
 
      a {
        color: #3498db;
        text-decoration: underline; }
 
      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; }
 
      .btn-primary table td {
        background-color: #3498db; }
 
      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; }
 
      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; }
 
      .first {
        margin-top: 0; }
 
      .align-center {
        text-align: center; }
 
      .align-right {
        text-align: right; }
 
      .align-left {
        text-align: left; }
 
      .clear {
        clear: both; }
 
      .mt0 {
        margin-top: 0; }
 
      .mb0 {
        margin-bottom: 0; }
 
      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }
 
      .powered-by a {
        text-decoration: none; }
 
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }
 
      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}
 
      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; }
        .btn-primary table td:hover {
          background-color: #34495e !important; }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; } }
 
    </style>
  </head>
  <body>
    <table border='0' cellpadding='0' cellspacing='0' class='body' style='padding-top:2%'>
      <tr>
        <td>&nbsp;</td>
        <td class='container'>
          <div class='content'>
 
            <!-- START CENTERED WHITE CONTAINER -->
            <span class='preheader'>Message sent from tutorial on Technopoints.</span>
            <table class='main'>
 
			<tr>
                <td class='wrapper'>
                  <table border='0' cellpadding='0' cellspacing='0'>
                    <tr>
                      <td><center>
                        <p><img src='https://i2.wp.com/technopoints.co.in/wp-content/uploads/2018/01/Technopoints-logo.png?w=512&ssl=1' width='40%' height='40%'></p>
						<p style='text-shadow: 2px 2px #548BE9; font-size:30px; color:#23221E;'><b>Technopoints</b></p></center>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
			  
              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class='wrapper'>
                  <table border='0' cellpadding='0' cellspacing='0'>
                    <tr>
                      <td>
                        <p>Hi, $name</p>
                        <p>You have successfully sent email using phpmailer library.</p>
						<p>Custom Message: $msgbody</p>
                        <p>You can assign some custom url on the button below</p>
						<p> <center><a href='https://technopoints.co.in' target='_blank' style='width:80%; display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;'>Visit Technopoints</a></center></p>
                        <p>Thanks for watching the tutorial.</p>
						<p>If you are having trouble implementing this tutorial, then feel free to contact us at <a href='mailto:support@technopoints.co.in'>support@technopoints.co.in</a></p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
 
            <!-- END MAIN CONTENT AREA -->
            </table>
 
            <!-- START FOOTER -->
            <div class='footer'>
              <table border='0' cellpadding='0' cellspacing='0'>
                <tr>
                  <td class='content-block'>
                    <span class='apple-link'>Technopoints, You can put your postal address here.</span>
					<br> This is service email sent as per your request by Technopoints.
                  </td>
                </tr>
                <tr>
                  <td class='content-block powered-by'>
                    Powered by <a href='https://technopoints.co.in'>Technopoints</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->
 
          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>";
 // php mailer code starts
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // telling the class to use SMTP
 
        //$mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "auto";                 // sets the prefix to the servier
        $mail->Host = "shabanashaik2003@gmail.com";      // set your SMTP server name
        $mail->Port = 587;                   // set your SMTP server port number
 
        $mail->Username = 'shabanashaik2003@gmail.com'; //change email with yours
        $mail->Password = '8125556536';             //Enter your password here
 
        $mail->SetFrom('shabanashaik2003@gmail.com@gmail.com', 'Organization');
        $mail->AddAddress($email);
 
        $mail->Subject = trim("Email Tutorial - Technopoints");
        $mail->MsgHTML($message);
 
        try {
          $mail->send();
          $msg = "Email Sent Successfully!";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = "Something went wrong!";
          $msgType = "danger";
		  //$msg = $ex->getMessage();
        }
		
		
if ($msg <> "") { ?> 
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <center><b><?php echo $msg;?></b></center>
  </div>
  <?php } 
?>
	</body>
</html>