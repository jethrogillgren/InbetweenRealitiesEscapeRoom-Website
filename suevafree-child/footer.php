<?php if ( !suevafree_setting('suevafree_view_footer') || suevafree_setting('suevafree_view_footer') == "on" ) : ?>
    
<!-- START SECTION TO COPY TO EC2 BLOG FOOTER.PHP -->
        <div class="module-small bg-dark" id="commonfooter">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="widget">
                  <h5 class="widget-title font-alt">Contact Us!</h5>
                  <p>Inbetween Realities is still under development, but please say hello anyway.
                  We can't wait to hear from you!</p>
                  <p>Facebook Messenger: <a href="http://fb.com/msg/InbetweenRealitiesEscapeRoom">In-between Realities</a></p>
                  <p>WhatsApp / Phone:  <a href="https://api.whatsapp.com/send?phone=447411972298"> +447411972298</a></p>
                  <p>Email:  <a href="mailto:inbetweenrealitiesescaperoom@gmail.com">Inbetween Realities</a></p>
                </div>
              </div>
              <!--<div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Social Media</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>-->
              <div class="col-sm-6">
                <div class="widget">
                  <h5 class="widget-title font-alt">Top Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="http://blog.inbetweenrealitiesescaperoom.com/welcome-to-something-new"><img src="wp-content/common-assets/images/DeerThumbnail.png" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="http://blog.inbetweenrealitiesescaperoom.com/welcome-to-something-new">Welcome to something new</a></div>
                        <div class="widget-posts-meta"><a href="http://blog.inbetweenrealitiesescaperoom.com/">Blog</a> - 6 May</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="https://www.instagram.com/p/BicsdNZnxb5/"><img src="wp-content/common-assets/images/SidePeachThumbnail.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="https://www.instagram.com/p/BicsdNZnxb5/">The Magic Butterfly Draw</a></div>
                        <div class="widget-posts-meta"><a href="https://www.instagram.com/inbetweenrealities">Instagram</a> - 6 May</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="mailto:inbetweenrealitiesescaperoom@gmail.com">Inbetween Realities</a></p>
              </div>
              <div class="col-sm-6">
                <!--<div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>-->
            </div>
          </div>
        </footer>
        <!-- END SECTION TO COPY TO EC2 BLOG FOOTER.PHP -->


<?php endif; ?>

</div>

<?php 

	if ( !suevafree_setting('suevafree_view_back_to_top') || suevafree_setting('suevafree_view_back_to_top') == "on" )
		
		echo '<div id="back-to-top" class="back-to-top"><i class="fa fa-chevron-up"></i></div>';

	wp_footer(); 
	
?>   

</body>

</html>
