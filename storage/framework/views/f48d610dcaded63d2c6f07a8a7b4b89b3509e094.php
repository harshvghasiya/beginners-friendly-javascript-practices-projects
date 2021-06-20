
<div class="top-bar top-bar-dark">
  <div class="container">
    <div class="top-bar-contact">
      <?php if(isset($setting) && !empty($setting->mobile)): ?>
      <div class="contact-item">
       <a href="tel:+91<?php echo e($setting->email); ?>"><?php echo e($setting->mobile); ?></a>
     </div>
     <?php endif; ?>
     <?php if(isset($setting) && !empty($setting->email)): ?>
     <div class="contact-item">
      <a href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
    </div>
    <?php endif; ?>
    <?php if(isset($setting) && !empty($setting->second_email)): ?>
    <div class="contact-item">
      <a href="mailto:<?php echo e($setting->second_email); ?>"><?php echo e($setting->second_email); ?></a>
    </div>
    <?php endif; ?>
  </div>
  <div class="login-block">
    <img src="<?php echo e(UPLOAD_AND_DOWNLOAD_URL()); ?>public/front/img/signin_dark.png" class="sign-in">
    <a href="#">Sign in</a>
  </div>

  <?php if(isset($socialMediaContent) && !$socialMediaContent->isEmpty()): ?>
  <div class="follow_us">
    <span>Follow us:</span>
    <div class="socials">
      <?php $__currentLoopData = $socialMediaContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a  href="<?php echo e($v->url); ?>" class="social__item">
        <img src="<?php echo e($v->getSocialMediaImageUrl()); ?>" alt="<?php echo e($v->title); ?>">
      </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <?php endif; ?> 
  <a href="#" class="top-bar-close" id="top-bar-close-js">
    <span></span><span></span>
  </a>
</div>
</div>
<header class="header" id="site-header">
  <div class="container">
    <div class="header-content-wrapper">
      <a href="#" id="top-bar-js" class="top-bar-link">TOPBAR</a>
      <div class="logo">
        <a href="<?php echo e(route('front.home')); ?>" class="full-block-link"></a>
        <img src="<?php echo e($setting->getSettingLogoImageUrl()); ?>" alt="<?php echo e(trans('lang_data.app_name')); ?>"  class="img-fluid logo_img">
      </div>
      <nav id="primary-menu" class="primary-menu">
        <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
          <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
            <svg width="1000px" height="1000px">
              <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
              <path id="pathE" d="M 300 500 L 700 500"></path>
              <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
            </svg>
          </span>
        </a>
        <ul class="primary-menu-menu">
           <?php      
           if (\Request::route()->getName() == 'front.home') {
              $homePageActiveClass = 'active';  
            }else{
              $homePageActiveClass ='';
            }
          ?>
          <li class="menu-item-has-children <?php echo e($homePageActiveClass); ?>">
            <a href="<?php echo e(route('front.home')); ?>">Home</a>
          </li>
          <?php if(isset($headerSectionLink) && !$headerSectionLink->isEmpty()): ?>
            <?php $__currentLoopData = $headerSectionLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php 
                if (\Request::route()->getName() == 'front.cms.details' && \Request::segment(1) == $v->slug) {
                  $cmsActiveClass = 'class=active'; 
                }else{
                  $cmsActiveClass ='';
                }
              ?>
              
                  <?php if(!$v->parent->isEmpty()): ?>
                      <li <?php echo e($cmsActiveClass); ?>><a href="<?php echo e(route('front.cms.details',$v->slug)); ?>"><?php echo e($v->name); ?></a>
                        <ul class="dropdown">
                          <?php $__currentLoopData = $v->parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="hover-ver2">
                            <a href="<?php echo e(route('front.cms.details',$value->slug)); ?>">
                              <?php echo e($value->name); ?>

                            </a>
                          </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </li>
                    <?php else: ?>
                       <li <?php echo e($cmsActiveClass); ?>><a href="<?php echo e(route('front.cms.details',$v->slug)); ?>"><?php echo e($v->name); ?></a></li>
                  <?php endif; ?>             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </ul>
      </nav>
     
      <ul class="nav-add">
        <li class="search search_main">
          <a href="#" class="js-open-search">
            <i class="seoicon-loupe"></i>
          </a>
        </li>
      </ul>
      <div class="user-menu open-overlay">
        <a href="#" class="user-menu-content  js-open-aside">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </div>
  </div>
</header>
<!-- ... End Header -->
<!-- Right-menu -->
<div class="mCustomScrollbar" data-mcs-theme="dark">

  <div class="popup right-menu">

    <div class="right-menu-wrap">

      <div class="user-menu-close js-close-aside">
        <a href="#" class="user-menu-content  js-clode-aside">
          <span></span>
          <span></span>
        </a>
      </div>

      <div class="logo">
        <a href="<?php echo e(route('front.home')); ?>" class="full-block-link"></a>
        <img src="<?php echo e($setting->getSettingLogoImageUrl()); ?>" class="logo_img" alt="Softtechover">

      </div>

      <p class="text">Top Indian Web Design and Development Services Company
      </p>

    </div>

    <div class="widget login">

      <h4 class="login-title">Sign In to Your Account</h4>
      <input class="email input-standard-grey" placeholder="Username or Email" type="text">
      <input class="password input-standard-grey" placeholder="Password" type="password">
      <div class="login-btn-wrap">

        <div class="btn btn-medium btn--dark btn-hover-shadow">
          <span class="text">login now</span>
          <span class="semicircle"></span>
        </div>

        <div class="remember-wrap">

          <div class="checkbox">
            <input id="remember" type="checkbox" name="remember" value="remember">
            <label for="remember">Remember Me</label>
          </div>

        </div>

      </div>

      <div class="helped">Lost your password?</div>
      <div class="helped">Register Now</div>

    </div>


    <div class="widget contacts">

      <h4 class="contacts-title">Get In Touch</h4>

      <div class="contacts-item">
        <img src="<?php echo e(UPLOAD_AND_DOWNLOAD_URL()); ?>public/front/img/contact4.png" alt="phone">
        <div class="content">
          <a href="tel:+91<?php echo e($setting->mobile); ?>" class="title"><?php echo e($setting->mobile); ?></a>
          <p class="sub-title">Mon-Fri 9am-6pm</p>
        </div>
      </div>

      <div class="contacts-item">
        <img src="<?php echo e(UPLOAD_AND_DOWNLOAD_URL()); ?>public/front/img/contact5.png" alt="phone">
        <div class="content">
          <a href="mailto:<?php echo e($setting->email); ?>" class="title"><?php echo e($setting->email); ?></a>
          <a href="mailto:<?php echo e($setting->second_email); ?>" class="sub-title"><?php echo e($setting->second_email); ?></a>
          
        </div>
      </div>

      <div class="contacts-item">
        <img src="<?php echo e(UPLOAD_AND_DOWNLOAD_URL()); ?>public/front/img/contact6.png" alt="phone">
        <div class="content">
          <a href="#" class="title"><?php echo e($setting->second_address); ?></a>
        </div>
      </div>

    </div>

  </div>

</div>

<!-- ... End Right-menu --><?php /**PATH C:\laragon\www\newlaunch\resources\views/layouts/header.blade.php ENDPATH**/ ?>