
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <div class="box_info">
    
                  <div class="tit">
                    <h2><?php the_field('nombre'); ?></h2>

                    <a href="http://<?php the_field('url_sitio_web'); ?>" target="_blank">
                      <svg viewBox="0 0 14 14">
                        <use xlink:href="#svg_icon_link">
                      </svg>
                    </a>
                  </div>
                  
                  <div class="des">
                    <div class="cont_info">
                      <?php the_content(); ?>
                    </div>
                    
                    <img src="<?php the_field('logo_sitio'); ?>" alt="" />
                  </div>

                </div>
                
                <h3>Metricas <span><?php the_field('fecha_de_metricas'); ?></span></h3>

                <div class="box_metrics">
                  <div class="ga">
                    
                    <div class="cont">
                      
                      <div class="view">
                        <h4>PAGES VIEWS</h4>
                        <p><?php the_field('pages_views'); ?><br><span>Mensuales</span></p>
                      </div>
                      
                      <div class="average">
                        <h4>AVG. SESSION DURATION</h4>
                        <p><?php  the_field('avg_session'); ?></p>
                      </div>
                      
                    </div>

                  </div>
                  <div class="rs">
                    <div class="cont">
                      
                      <h4>SOCIAL MEDIA</h4>

                      <div class="box_rs">
                        <svg viewBox="3 4 60 60">
                          <use xlink:href="#svg_icon_tw">
                        </svg>
                        
                        <p><?php the_field('follows_twitter'); ?><br><span>Follows</span></p>
                        
                      </div>
                      <div class="box_rs">
                        <svg viewBox="3 4 60 60">
                          <use xlink:href="#svg_icon_fb">
                        </svg>
                        
                        <p><?php the_field('likes_facebook'); ?><br><span>Likes</span></p>
                        
                      </div>
                      
                      <div class="box_rs">
                        <svg viewBox="3 4 60 60">
                          <use xlink:href="#svg_icon_ig">
                        </svg>
                        
                        <p><?php the_field('follows_instagram'); ?><br><span>Follows</span></p>
                        
                      </div>

                    </div>
                  </div>
                </div>

                <h3>zonas</h3>

                <div class="box_zone">

                    <?php echo implode('', get_field('zonas')); ?>
                </div>
                
                <h3>sitio web</h3>

                <iframe src="http://<?php the_field('url_sitio_web'); ?>" style="border:0px #FFFFFF none;" name="sitioweb" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="100%" width="100%" class="box_web"></iframe>

              </article> <?php // end article ?>