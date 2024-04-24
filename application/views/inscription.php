<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="<?php echo base_url('inscriptionController/inscription'); ?>" method="POST" class="signup-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
            <?php if(isset($error)){ ?>
                <p class="error"><?php echo $error ; ?></p>
            <?php } ?>
            <p>Already have an account ? <a href="<?php echo base_url('authentificationController'); ?>">Sign in</a></p>
        </form>
    </div>
</body>
</html>
