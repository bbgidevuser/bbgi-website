<?php $n= mysql_query("select * from team where id=1");
$o = mysql_fetch_array($n);
?>
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <!--<h2>Meet the Team</h2>-->
                <h2><?php echo $o['header']; ?></h2>
                <!--<p>We are nothing without our team. These individuals go above and beyond to ensure that our events and public image are what it is</p>-->
                <p><?php echo $o['main_description']; ?></p>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <!--<img class="img-responsive" src="img/770x860/04.jpg" alt="Team Image">-->
                        <img class="img-responsive" src="img/770x860/<?php echo $o['image']; ?>" alt="Team Image">
                    </div>
                </div>
                <!--<h4><a href="#">Deonisia Brito</a> <span class="text-uppercase margin-l-20">Social Media Manager</span></h4>-->
                <h4><a href="#"><?php echo $o['name']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $o['title']; ?></span></h4>
                <!--<p>Deonisia looks after all our social media platforms including our Facebook, Twitter, LinkedIn and Instagram pages</p>-->
                <p><?php echo $o['description']; ?></p>
                <p><?php echo $o['description-one']; ?></p>
                <i class="fa fa-facebook"></i>
                <!--<a class="link" href="#">Read More</a>-->
            </div>
            <!-- End Team -->

            <!-- Team -->
            <?php $p= mysql_query("select * from team where id=2");
            $q = mysql_fetch_array($p);
            ?>
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <!--<img class="img-responsive" src="img/770x860/05.jpg" alt="Team Image">-->
                        <img class="img-responsive" src="img/770x860/<?php echo $q['image']; ?>" alt="Team Image">
                    </div>
                </div>
                <!--<h4><a href="#">James Millner</a> <span class="text-uppercase margin-l-20">Lead Developer</span></h4>-->
                <h4><a href="#"><?php echo $q['name']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $q['title']; ?></span></h4>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                <p><?php echo $q['description']; ?></p>
                <p><?php echo $q['description-one']; ?></p>
                <p><?php echo $q['description-two']; ?></p>
                <!--<a class="link" href="#">Read More</a>-->
            </div>
            <!-- End Team -->

            <!-- Team -->
            <?php $r= mysql_query("select * from team where id=3");
            $s = mysql_fetch_array($r);
            ?>
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <!--<img class="img-responsive" src="img/770x860/06.jpg" alt="Team Image">-->
                        <img class="img-responsive" src="img/770x860/<?php echo $s['image']; ?>" alt="Team Image">
                    </div>
                </div>
                <h4><a href="#"><?php echo $s['name']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $s['title']; ?></span></h4>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                <p><?php echo $s['description']; ?></p>
                <p><?php echo $s['description-one']; ?></p>
                <p><?php echo $s['description-two']; ?></p>
                <p><?php echo $s['description-three']; ?></p>
                <!--<a class="link" href="#">Read More</a>-->
            </div>
            <!-- End Team -->
        </div>
        <!--// end row -->
        <!-- Team -->
                 <?php $t= mysql_query("select * from team where id=4");
                 $u = mysql_fetch_array($t);
         ?>
        <div class="row">
        <div class="col-sm-4 sm-margin-b-50">
            <div class="bg-color-white margin-b-20">
              <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                <!--<img class="img-responsive" src="img/770x860/04.jpg" alt="Team Image">-->
                <img class="img-responsive" src="img/770x860/<?php echo $u['image']; ?>" alt="Team Image">
              </div>
            </div>
            <!--<h4><a href="#">Deonisia Brito</a> <span class="text-uppercase margin-l-20">Social Media Manager</span></h4>-->
            <h4><a href="#"><?php echo $u['name']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $u['title']; ?></span></h4>
            <!--<p>Deonisia looks after all our social media platforms including our Facebook, Twitter, LinkedIn and Instagram pages</p>-->
            <p><?php echo $u['description']; ?></p>
            <p><?php echo $u['description-one']; ?></p>
            <p><?php echo $u['description-two']; ?></p>
            <p><?php echo $u['description-three']; ?></p>
            <i class="fa fa-facebook"></i>
            <!--<a class="link" href="#">Read More</a>-->
          </div>

          <div class="col-sm-4 sm-margin-b-50">
            <div class="bg-color-white margin-b-20">
              <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                <img class="img-responsive" src="img/770x860/08.jpg" alt="Team Image">
              </div>
            </div>
            <h4><a href="#">Happy Tshirana</a> <span class="text-uppercase margin-l-20">Marketing</span></h4>

            <p>Happy is an accomplished Senior Leader with a with proven record of delivery, business development and leadership in the ICT space across both public and private sector client segments. </p>

            <p>He is highly skilled, successful and a well-rounded business professional with a proven track record of managing successful accounts and relationships in the ICT market space. </p>

            <p>He built his career within the Dimension Data Group and has earned a respected name for himself in the market for his professional work and excellence after having joined the organization as an Engineer in 2008. </p>

            <p>Happy found his niche in Engineering and ICT Sales and has held many important roles, including Services Delivery Manager, Account Manager and recently as a Cross Go-To-Market Client Manager for Public and Private Sector enterprise business.</p>

            <i class="fa fa-facebook"></i>
            <!--<a class="link" href="#">Read More</a>-->
          </div>

        </div>
    </div>
</div>
