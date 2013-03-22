 <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      #signup {
      	margin-left: 40px;
      }

    </style>
 <div class="container">
<?php echo validation_errors(); ?>
<h1><?php echo $message; ?></h1>
<?php echo form_open('auth/login',array('class' => "form-signin" )); ?>
<h2 class="form-signin-heading">Please sign in</h2>
	<label for="title">Login</label> 
	<?php
		echo form_input('users[name]', set_value('users[name]'),"id='name' class='input-block-level'", 'autofocus');
    ?>

	<label for="text">Password</label>
	<?php
		echo form_password('users[hash]', set_value('users[hash]'),"id='pass' class='input-block-level'", 'autofocus');
    ?>
	
	<input type="submit" name="submit" class="btn btn-large btn-primary" value="Sign in" /> 
	<?php echo anchor('auth/signup/', 'Sign Up!', 'id="signup" class="link-class btn btn-large"'); ?>
</form>

 </div>