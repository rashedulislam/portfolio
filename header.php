<!DOCTYPE html>
<html lang="en"> 


<head>
<!--   <title><?php// bloginfo( 'name' ); echo ' | '; wp_title('');   ?></title> -->
     <title><?php bloginfo( 'name' ) . ' : ';echo ' | ';  bloginfo( 'description' );  ?></title>   
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevCard Bootstrap 4 Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    

    

    

  <?php wp_head(); ?>  


</head> 

<body class="dark-mode">
    
    <header class="header text-center">     
        <div class="force-overflow">
            <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Md Sami</a></h1>
            
            <nav class="navbar navbar-expand-lg navbar-dark" >
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navigation" class="collapse navbar-collapse flex-column" >
                    <div class="profile-section pt-3 pt-lg-0">
                        <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.png" alt="image" >            
                        
                        <div class="bio mb-3">Hi, my name is Md Sami and I'm a Tech Enthusiast & Tech Entrepreneur ,Welcome to my personal website!</div><!--//bio-->
                        <ul class="social-list list-inline py-2 mx-auto">
                            <li class="list-inline-item"><a href="https://fb.me/eng.mdsami" target="_blank"><i class="fab fa-facebook fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/mdsami5" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="https://linkedin.com/in/mdsami55" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="https://github.com/mdsami" target="_blank"><i class="fab fa-github-alt fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="https://hub.docker.com/u/mdsami" target="_blank"><i class="fab fa-docker fa-fw"></i></a></li>
                            
                        </ul><!--//social-list-->
                        <hr> 
                    </div><!--//profile-section-->
                    
                    <ul class="navbar-nav flex-column text-left">
                        <li class="nav-item active">
                            <a class="nav-link" href="/"><i class="fas fa-user fa-fw mr-2"></i>About Me<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/portfolio"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="/resume"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services"><i class="fas fa-briefcase fa-fw mr-2"></i>Services &amp; Pricing</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/contact"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact</a>
                        </li>
              <!--           <li class="nav-item">
                            <a class="nav-link" href="/project"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>My Projects</a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cogs fa-fw mr-2"></i>More Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="project.html">Project Page</a>
                                <a class="dropdown-item" href="blog-home.html">Blog Home 1</a>
                                <a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a>
                                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                            </div>
                        </li> -->
                    </ul>
                    
                    <div class="my-2">
                        <a class="btn btn-primary" href="mailto:hello@mdsami.me?Subject=Hello%20again" target="_top"><i class="fas fa-paper-plane mr-2"></i>Say Hello</a>
                    </div>
                    
    
        
                    
                </div>
            </nav>
        </div><!--//force-overflow-->
    </header>
    