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
        </div>
    </div>
</div>
