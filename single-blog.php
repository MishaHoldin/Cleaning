<?php get_header(); ?>

  <div class="container content">
    <div class="bloginer__banner">
      <h1 class="bloginer__title"><?php the_title(); ?></h1>
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
      <p class="bloginer__text"><?php the_content(); ?></p>
			</div>
      <?php
      ?>
      <div class="bloginer__more swiper blogInerSwiper">
          <h2 class="bloginer__title--last">Related Articles</h2>
          <div class="bloginer__content swiper-wrapper">
            <div class="bloginer__items swiper-slide">
              <img class="bloginer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img.png"" alt="">
              <h2 class="bloginer__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
              <p class="bloginer__text">In interdum ultricies nunc, sit amet consequat elit cursus vel. Fusce venenatis, lorem ac imperdiet hendrerit.</p>
            </div>
            
            <div class="bloginer__items swiper-slide">
              <img class="bloginer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img.png"" alt="">
              <h2 class="bloginer__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
              <p class="bloginer__text">In interdum ultricies nunc, sit amet consequat elit cursus vel. Fusce venenatis, lorem ac imperdiet hendrerit.</p>
            </div>
            <div class="bloginer__items swiper-slide">
              <img class="bloginer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img.png"" alt="">
              <h2 class="bloginer__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
              <p class="bloginer__text">In interdum ultricies nunc, sit amet consequat elit cursus vel. Fusce venenatis, lorem ac imperdiet hendrerit.</p>
            </div>
          </div>
        </div>
    </div>
    </div>
  <style>
    .content p {
      font-family: 'Sora';
      font-style: normal;
      font-weight: 400;
      font-size: 15px;
      line-height: 19px;
      text-align: justify;
    }
    .content h1 {
      font-family: 'Sora';
      font-style: normal;
      font-weight: 600;
      font-size: 48px;
      line-height: 60px;
      color: #1E1E23;
    }
    .content img {
      width: 100%;
      margin-bottom: 30px;
    }
    .content h2 {
      font-family: 'Sora';
      font-style: normal;
      font-weight: 600;
      font-size: 34px;
      line-height: 43px;
      color: #1E1E23;
      margin: 30px 0 15px 0;
    }
    .content h3 {
      font-family: 'Sora';
      font-style: normal;
      font-weight: 600;
      font-size: 28px;
      line-height: 35px;
      color: #1E1E23;
      margin: 30px 0 15px 0;
    }
    	.breadcrumbs__current{
				font-size: 26px;
			}
			.blog__title {
				margin-bottom: 10px;
			}
			.breadcrumbs{
				margin-bottom: 20px;
			}
			.breadcrumbs__link{
				font-size: 26px;
			}
			.breadcrumbs__separator{
				font-size: 24px;
			}
      .blogInerSwiper{
        overflow: hidden;
        margin-bottom: 80px;
      }
      .bloginer__subtitle{
        font-family: 'Sora';
        font-style: normal;
        font-weight: 600;
        font-size: 28px;
        line-height: 35px;
        color: #1E1E23;
        margin: 0 !important; 
      }
  </style>

<?php get_footer(); ?>