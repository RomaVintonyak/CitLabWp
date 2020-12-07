<?php get_header();?>
<main>
        <!--team block-->
        <section id="teamBlock" class="team">
          <div class="team__row">
            <div class="team__coll team__coll--l">
              <div class="team__coll--img">
                <img src="<?php echo bloginfo('template_url')?>/asets/img/team/l_q.svg" alt="figure" class="img">
              </div>
              <p>
                <?php the_field('team__description')?>
              </p>
            </div><!--/.team__coll-->
            <div class="team__coll team__coll--r">
              <div class="team__coll--img">
                <img src="<?php echo bloginfo('template_url')?>/asets/img/team/r_q.svg" alt="figure" class="img">
              </div>
              <h3><?php the_field('team__title')?></h3>
            </div><!--/.team__coll-->
          </div><!--/.team__row-->
        </section><!--/.team-->
        <!--post work block-->
        <section id="post" class="post__block">
            <?php
              $featured_posts = get_field('post__block');
              if( $featured_posts ): ?>
                  <div class="post__row">
                  <?php foreach( $featured_posts as $post ): 
                      setup_postdata($post); ?>
                      <div class="post__coll">
                        <div class="post__coll--title">
                          <img src="<?php the_field('post_img')?>" alt="post icon">
                          <h3><?php the_title(); ?></h3>
                        </div>
                        <h6><?php the_field('post_name')?></h6>
                        <hr>
                        <div class="drop__down" id="postDropdowm">
                          <div class="drop__down--header">
                            <div class="header__close">
                              <h5><?php the_field('header_close')?></h5>
                              <span>&rightarrow;</span>
                            </div>
                            <div class="header__open">
                              <h5><?php the_field('header_open')?></h5>
                              <span>&leftarrow;</span>
                            </div>
                          </div>
                          <div class="drop__down--list">
                          <?php 
                              $terms = get_field('user_worker');
                              if( $terms ): ?>
                                  <?php foreach( $terms as $term ): ?>
                                      <p>&ndash;<?php echo esc_html( $term->name ); ?></p>
                                  <?php endforeach; ?>
                              <?php endif; ?>
                          </div>
                        </div>
                      </div>
                  <?php endforeach; ?>
                  </div>
                  <?php 
                  wp_reset_postdata(); ?>
              <?php endif; ?>
        </section><!--/.post__block-->
      </main>
    </body>
  </html>	

