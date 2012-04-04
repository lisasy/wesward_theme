		<?php 
	//If the form is submitted
	if(isset($_POST['submitted'])) {
	
		//Check to see if the honeypot captcha field was filled in
		if(trim($_POST['checking']) !== '') {
			$captchaError = true;
		} else {
		
			//Check to make sure that the name field is not empty
			if(trim($_POST['contactName']) === '') {
				$nameError = 'You forgot to enter your name.';
				$hasError = true;
			} else {
				$name = trim($_POST['contactName']);
			}
			
			//Check to make sure sure that a valid email address is submitted
			if(trim($_POST['email']) === '')  {
				$emailError = 'You forgot to enter your email address.';
				$hasError = true;
			} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
				$emailError = 'You entered an invalid email address.';
				$hasError = true;
			} else {
				$email = trim($_POST['email']);
			}
				
			//Check to make sure comments were entered	
			if(trim($_POST['comments']) === '') {
				$commentError = 'You forgot to enter your comments.';
				$hasError = true;
			} else {
				if(function_exists('stripslashes')) {
					$comments = stripslashes(trim($_POST['comments']));
				} else {
					$comments = trim($_POST['comments']);
				}
			}

	 //If there is no error, send the email
	 if(!isset($hasError)) {
	 
	 		$emailTo = 'contact@wesward.org';
			$subject = 'Suggestion Form '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed Wesward';
				$headers = 'From: Wesward <contact@wesward.org>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/contact-form.js"></script>
	
	<?php 
	//If the email was sent, show a thank you message
	//Otherwise show form
	if(isset($emailSent) && $emailSent == true) { ?>
	
		<h1 class="h1">Thanks, <?=$name; ?></h1>
		<p>Your email was successfully sent. We will be in touch soon.</p>
	
	<?php } else { ?>
	
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

	<?php if(isset($hasError) || isset($captchaError)) { ?>
		<p>There was an error submitting the form.</p>
		<?php } ?>

<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
<ol class="forms">

			<div class="input-section">
				<label>
					<span>Name:</span>
					<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</label>
			</div>
			
			<div class="input-section">
				<label>
					<span>Email (required):</span>
					<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</label>
			</div>
			
			<div class="input-section">
				<label>
					<span>Comments/Questions:</span>
					<textarea name="comments" id="commentsText"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
					<?php if($commentError != '') { ?>
						<span class="error"><?=$commentError;?></span> 
					<?php } ?>
				</label
			</div>
			
			<div class="input-section">
				<label><span>Send a copy of this email to yourself</span>
					<input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />
					
				</label>
			</div>
			
			<div class="input-section">
				<input type="hidden" class="button" name="submitted" id="submitted" value="true" /><button type="submit">Submit Form!</button>
			</div>	
			
			</ol>
</form>

	<?php endwhile; ?>
	<?php endif; ?>
	<?php } ?>