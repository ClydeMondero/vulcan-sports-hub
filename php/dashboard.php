<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>DASHBOARD</title>
</head>
<body>
    <div class="dashboard-content">
        <div class="logo">
            <img src="..\assets\imgs\Vulcan Logo.png" alt="">
            <span>VULCAN</span>
        </div>
        <hr class="line">
        <div class="admin-tools">
            <div class="admin-tools-label">
                <p>Seller Tools</p>
            </div>
            <a href="dashboard-page.php" style="text-decoration:none;"><div class="dashboard-features">
                <i class="fa-brands fa-dashcube"></i>
                <span class="">DASHBOARD</span>
            </div></a>
            <a href="add-items.php" style="text-decoration:none;"><div class="dashboard-features">
                <i class="fa-solid fa-boxes-stacked"></i>
                <span class="">PRODUCTS</span>
            </div></a>
            <a href="seller-account.php" style="text-decoration:none;"><div class="dashboard-features">
                <i class="fa-solid fa-sitemap"></i>
                <span class="">ACCOUNTS</span>
            </div></a>
            <a href="sales.php" style="text-decoration:none;"><div class="dashboard-features">
               <i class="fa-solid fa-list-check"></i>
               <span class="">SALES</span>
            </div></a>
        </div>      
        <div class="sign-out">
            <p><?php echo $_SESSION['username'] ?></p>      
            <div class="line"></div>      
            <a href="logout.php" style="text-decoration:none;"><span>SIGN OUT </span><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
</body>
</html>