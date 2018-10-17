<?php
     // Message Vars
     $msg = '';
     $msgClass = '';

     // Check For Submit
     if(filter_has_var(INPUT_POST, 'submit')){
          // Get Form Data
          $name = htmlspecialchars($_POST['name']);
          $email = htmlspecialchars($_POST['email']);
          $message = htmlspecialchars($_POST['message']);

          // Check Required Fields
          if(!empty($email) && !empty($name) && !empty($message)){
               // Passed
               // Check Email
               if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                    // Failed
                    $msg = 'Please use a valid email';
                    $msgClass = 'formFail';
               } else{
                    // Passed
                    $toEmail = 'stacalkas_nomen@outlook.com';
                    $subject = 'Contact Request From ' .$name;
                    $body = '<h2>Contact Request</h2>
                         <h4>Name</h4><p>'.$name.'</p>
                         <h4>Email</h4><p>'.$email.'</p>
                         <h4>Message</h4><p>'.$message.'</p>
                    ';

                    // Email Headers
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

                    // Additional Headers
                    $headers .= "From: " .$name. "<".$email.">". "\r\n";

                    if(mail($toEmail, $subject, $body, $headers)){
                         // Email Sent
                         $msg = 'Your email has been sent';
                         $msgClass = 'formSuccess';

                         // Clear Input Fields on mail send
                         $name = '';
                         $email = '';
                         $message = '';
                    } else{
                         $msg = 'Your email was not sent';
                         $msgClass = 'formFail';
                    }
               }
          } else{
               // Failed
               $msg = 'Please fill in all fields';
               $msgClass = 'formFail';
          }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=0">    
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="description" content="Britt is interested in video game level design because it incorprates a little bit of everything that goes into making a game.">
	<meta name="keywords" content="Britt, Scott, Britt Scott, brittscott, bscott, brittlscott, bls, artist, 3d, 3d artist, art, environment, envrionmental artist, level, designer, level designer, game, development, developer, game developer, game development, game dev">
     <link rel="shortcut icon" href="images/logos/favicon.ico">
     <!-- Font Awesome 5 CSS -->
     <link rel="stylesheet" href="css/fontawesome.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/main.css">

     <title>Contact</title>
</head>
<body>
     <header>
          <nav>
               <ul class="main-menu">
                    <li class="nav-title">Britt Scott</li>
                    <li class="nav-logo">         
                         <i class="rj rj-bs-grid"></i>
                         <i class="rj rj-bs-block"></i>
                         <i class="rj rj-bs-text"></i>
                         <i class="rj rj-bs-outline"></i>
                    </li>
                    <li><a class="menu-About" href="index.html">About</a></li>
                    <li><a class="menu-Blog" href="blog.html">Blog</a></li>
                    <li><a class="menu-Videos" href="videos.html">Videos</a></li>
                    <li><a class="menu-Images" href="images.html">Images</a></li>
                    <li><a class="menu-Contact" href="contact.php">Contact</a></li>
                    <li class="menu-Extras">
                         <a href="#">Extras <i class="fas fa-caret-down"></i> </a>
                         <div class="dropdown-content">
                              <a class="menu-Books" href="books.html">Books</a>
                              <a class="menu-Comics" href="comics.html">Comics</a>
                              <a class="menu-Games" href="games.html">Games</a>
                              <a class="menu-Models" href="models.html">Models</a>
                              <a class="menu-MoviesTV" href="moviesTV.html">Movies &amp; TV</a>
                              <a class="menu-Quotes" href="quotes.html">Quotes</a>
                              <a class="menu-Toys" href="toys.html">Toys</a>
                         </div>
                    </li>
               </ul>
               <div class="mobile-menu">
                    <a class="mobile-btn" href="#"><span class="fas fa-bars"></span></a>
                    <div class="mobile-dropdown-content">
                         <a href="index.html" class="menu-About">About</a>
                         <a href="blog.html" class="menu-Blog">Blog</a>
                         <a href="videos.html" class="menu-Videos">Videos</a>
                         <a href="images.html" class="menu-Images">Images</a>
                         <a href="contact.php" class="menu-Contact">Contact</a>
                    </div>
               </div>
          </nav>
     </header> <!-- END Header -->

     <main>
          <div class="page-announce">
               <h1><span class="fas fa-envelope"></span> Contact <span class="fas fa-envelope"></span></h1>
          </div>
          <section class="page-contact">
               <div class="social">
                    <h3>Britt Scott</h3>
                    <ul>
                         <li><i class="fab fa-youtube"></i> Youtube</li>
                         <li><i class="fab fa-facebook"></i> Facebook</li>
                    </ul>
               </div>
               <form class="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">     
                    <p>
                         <label for="name">Name:</label>
                         <input type="text" name="name" placeholder="Enter Your Name" title="Enter Your Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
                    </p>
                    <p>
                         <label for="email">Email:</label>
                         <input type="email" name="email" placeholder="Enter Your Email Address" title="Enter Your Email Address" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
                    </p>
                    <p>
                         <label for="message">Message:</label>
                         <textarea name="message" placeholder="Enter Your Message Here..." title="Enter Your Message Here..." rows="5" required><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </p>
                    <p>
                         <button id="submit" type="submit" name="submit">Submit</button>
                    </p>
                    <?php if($msg != ''): ?>
                         <div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <?php endif; ?>
               </form>  
          </section>     
     </main> <!-- END Main Container -->

     <!-- To Top Button -->
     <a class="to-top" href="#"><span class="fas fa-arrow-circle-up"></span> Top </a>

     <footer>
          <ul>
               <li><span>Britt Scott</span> &copy; <cite>2008 - <cite class="dynYearElement">0000</cite></cite></li>
               <li><span class="last-mod">Last Modified: <cite class="last-Mod-Element"></cite></span></li>
               <li><b class="fas fa-desktop"></b><b class="fas fa-tablet-alt"></b><b class="fas fa-mobile-alt"></b></li>
          </ul>
     </footer> <!--END Footer -->

     <!-- JS -->
     <script src="js/bs-javascript.js"></script>
     <script>
          menuContact.classList.add('menu-highlight');// Desktop Menu Highlight
     </script>
    
</body>
</html>