<?php
  require'db/dbcon.php';
  require'checksession.php';
  $qry = "SELECT postId,post,postHeading,postDate,tagName FROM posttag join posts using(postId) join tags using(tagId)";
  $rows = array();
  if($result=$dbcon->query($qry))
  {

    if($result->num_rows)
    {
      while($row=$result->fetch_object())
      {
        $rows[]=$row;
      }
      $result->free();
    }
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posts</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/posts.css">
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
              <li><a href="archive.php">Archive</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container">
         <div class="row">
           <div class="col-md-3 col-xs-12 col-sm-12 profile">
             <aside>
               <img src="img/cat.jpg" alt="cat image" class="img-circle profile-image">
               <div class="profile-content">
                     <h4>Sakhile Sibuyi</h4>
                     <p>Technical Specialist @IBM.</p>
                     <a class="twitter-follow-button"
                         href="https://twitter.com/sakhilesibuyi"
                         data-show-count="true">
                         Follow @sakhilesibuyi
                     </a>
               </div>
               <hr class="hidden-xs hidden-sm">

               <div class="social_icons">
                <p>Share.</p>
                 <ul class="clearfix">
                   <li><img src="img/social_icons/twitter.png" alt="twitter icon"></li>
                   <li><img src="img/social_icons/facebook.png" alt="facebook icon"></li>
                   <li><img src="img/social_icons/linkedin.png" alt=" linkedin icon"></li>
                   <li><img src="img/social_icons/googleplus.png" alt="googleplus icon"></li>
                   <li><img src="img/social_icons/email.png" alt="email icon"></li>
                 </ul>
               </div>
             </aside>
           </div>
           <div class="col-md-8">
             <?php if(!count($rows))
                  {
                    echo '<script>alert("No posts as yet!");</script>';
                  }else
                    {
              ?>
                         <article>
                           <?php
                                foreach($rows as $r){?>

                                    <header><h2><?php echo $r->postHeading; ?></h2></header>
                                      <footer><small>Posted on : <?php echo $r->postDate; ?></small></footer>
                                      <div class="lead">
                                      <?php echo $r->post; ?>          <a href="article.php"> Read more..</a>
                                      </div>
                                      <footer>
                                          <span class="label label-default"><?php echo $r->tagName; ?></span>
                                          <!--span class="label label-default">Study</span-->
                                      </footer>
                                      <hr>
                            <?php } ?>
                         </article>

                         <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                          </nav>

            <?php


               }


             ?>
           </div>
         </div>
      </div>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
    </script>
  </body>
</html>
