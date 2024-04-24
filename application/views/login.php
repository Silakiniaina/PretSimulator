
<div class="login-container">
    <h2>Login</h2>
    <p style="color:green"><?php 
        if(isset($success)){
            echo $success;
        }
    ?></p>
    <form action="<?php echo base_url('authentificationController/authentification'); ?>" method="POST" class="login-form">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <?php if(isset($error)){ ?>
            <p class="error"><?php echo $error ; ?></p>
        <?php } ?>
    </form>
    <p>Don't have an account? <a href="<?php echo base_url('inscriptionController'); ?>">Sign up</a></p>
</div>
