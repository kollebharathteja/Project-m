<?php
include '../includes/config.php';

$message = "";
$message_type = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    // Verify admin details
    $query = mysqli_query($con, "SELECT * FROM admins WHERE username = '$username' AND email = '$email'");
    
    if(mysqli_num_rows($query) > 0) {
        $admin = mysqli_fetch_assoc($query);
        
        // In a real application, you would send a password reset email
        // For demo purposes, we'll just show a success message
        $message = "Password reset instructions have been sent to your email address.";
        $message_type = "success";
    } else {
        $message = "Invalid username or email address.";
        $message_type = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - College Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .forgot-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            padding: 40px;
            max-width: 450px;
            width: 100%;
        }
        .forgot-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .forgot-header i {
            font-size: 3rem;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="forgot-container">
        <div class="forgot-header">
            <i class="fas fa-key"></i>
            <h3>Forgot Password</h3>
            <p class="text-muted">Reset your admin password</p>
        </div>
        
        <?php if($message): ?>
            <div class="alert alert-<?php echo $message_type; ?>">
                <i class="fas fa-<?php echo $message_type == 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i> 
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">
                <i class="fas fa-paper-plane"></i> Send Reset Instructions
            </button>
        </form>
        
        <div class="text-center mt-3">
            <a href="login.php" class="text-decoration-none">
                <i class="fas fa-arrow-left"></i> Back to Login
            </a>
        </div>
        
        <div class="text-center mt-3">
            <a href="../index.php" class="text-decoration-none">
                <i class="fas fa-home"></i> Back to Home
            </a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
