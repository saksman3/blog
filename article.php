<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posts</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/article.css">
  </head>
  <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sakhile Sibuyi</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Posts <span class="sr-only">(current)</span></a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="active"><a href="archive.php">Archive</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Logout</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container">
         <div class="row">
           <div class="col-md-3 profile">
             <aside class="">
               <img src="img/cat.jpg" alt="cat image" class="img-circle">
               <h4>Sakhile Sibuyi</h4>
               <p>Technical Specialist @IBM.</p>
               <a class="twitter-follow-button"
                   href="https://twitter.com/sakhilesibuyi"
                   data-show-count="true">
                   Follow @sakhilesibuyi
               </a>
               <hr>
               <p>Share.</p>
               <ul class="clearfix">
                 <li><img src="img/social_icons/twitter.png" alt="twitter icon"></li>
                 <li><img src="img/social_icons/facebook.png" alt="facebook icon"></li>
                 <li><img src="img/social_icons/linkedin.png" alt=" linkedin icon"></li>
                 <li><img src="img/social_icons/googleplus.png" alt="googleplus icon"></li>
                 <li><img src="img/social_icons/email.png" alt="email icon"></li>
               </ul>
             </aside>
           </div>
           <div class="col-md-8">
             <article class="">
               <h1>lorem ipsuma take kshbhi8n okjlid. </h1>
               <div class="lead">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </div>
             </article>
             <div id="comments">
               <h2>Comments</h2>
               <div class="row">
                 <div class="col-md-11">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <footer><small><b>Sakhile Sibuyi </b>Commented on: data and time.</small></footer>
                  <hr>
                 </div>
                 <div class=" comment-num col-md-1">01</div>
               </div>
             </div>
             <form class="" action="index.html" method="post">
               <h3>Have your say!</h3>
               <p>
                  <label class="sr-only">Message.</label>
                  <textarea name="message"id="message" class="form-control" placeholder="Message" required autocomplete="false"></textarea>
                </p>
                <p>
                  <label class="sr-only">Full Name</label>
                   <input type="text" class="form-control"name="name" placeholder="Full name">
                </p>
                <p>
                  <label class="sr-only">Email Address</label>
                   <input type="email" class="form-control"name="email" placeholder="email address">
                </p>
                <p>
                   <input type="submit" class="btn btn-primary" value="Send">
                </p>
             </form>

           </div>
         </div>
      </div>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
    </script>
  </body>
</html>
