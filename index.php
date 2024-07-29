<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
require_once $document_root . "/includes/all_includes.php";

$android_link = $settings_instance->setting('android_link');
$ios_link = $settings_instance->setting('ios_link');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?=$_SESSION['webpath']; ?>/" target="_self">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="shortcut icon" href="img/kiraLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src="https://kit.fontawesome.com/c6614d5790.js" crossorigin="anonymous"></script>
    <title>KiraPay </title>
</head>
<body>
    <header class="header">
        <!-- <a href="<?=$whatsappLink;?>" class="float" target="_blank">
          <i class="fa-brands fa-whatsapp my-float"></i>
        </a> -->
        <nav>
          <a href="#hero"><img src="img/kiraLogo.png" alt="logo" class="logo"></a>
          
          <ul class="nav-list">
            <li class="nav-item"><a href="//<?=SITE;?>/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="//<?=SITE;?>/#service" class="nav-link">Our Services</a></li>
            <li class="nav-item"><a href="//<?=SITE;?>/#testimonial" class="nav-link">Testimonials</a></li>
            <li class="nav-item"><a href="//<?=SITE;?>/#faq" class="nav-link">FAQs</a></li>
          </ul>
          <div class="button">
            <a href="/v/login" class="link">Login</a>
            <a href="/v/register" class="link active">Sign Up</a>
          </div>
          <div class="openMenu"><i class="fa fa-bars"></i></div>
          <ul class="menu-list">
            <li><a href="//<?=SITE;?>/#service" class="linkk">Services</a></li>
            <li><a href="//<?=SITE;?>/#price" class="linkk">Pricing</a></li>
            <li><a href="//<?=SITE;?>/#about" class="linkk">About us</a></li>
            <li><a href="//<?=SITE;?>/#faq" class="linkk">FAQ</a></li>
            <a href="/v/login" class="login">Login</a>
            <a href="/v/register" class="login act">Register</a>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            </div>
          </ul>
        </nav>


        <div class="hero" id="home">
          <div class="hero-text">
            <h1  data-aos="fade-up">Welcome To
              KIRAPAY !!!!!</h1>
            <!-- <img src="img/Vector.png" alt=""> -->
            <p  data-aos="fade-up" data-aos-delay="400">We are a registered telecommunications company that offers services such as; Data bundle & Airtime top-up. Also we can offer other services, such as Bills, Cable & Subscription.</p>
            <div class="button hero-cta">
              <!-- <a href="/v/login" style="background-color: white;" class="link">Login</a> -->
              <!-- <a href="/v/register" class="herobtn link active">Get Started</a> -->
            </div>
            <!-- <a href="/v/register" class="hero-btn"  data-aos="fade-up" data-aos-delay="600">Get Started Now</a> -->
          </div>
          <img src="img/image 2.png" alt="#" class="hero-img" data-aos="fade-left" data-aos-delay="400">
        </div>

        <img class="bg-wave" src="img/wave-shap.svg.png" alt="">
      </header>

      <section id="service">
        <div>
          <p class="orange tag-text"> Our Services</p>
          <h2 class="head-h2" data-aos="fade-down">WHAT WE OFFER </h2>
        </div>
        
        <div class="service-container">
          <div class="service">
            <img src="img/s1.svg" alt="layer">
            <div class="service-textbox">
                <h3>Data Bundles</h3>
                <p>Buy Data for all networks (MTN, GLO, AIRTEL, 9MOBILE) at the cheapest rate ever. Data works with all internet enabled devices
                  (Android, iphone, Computers, Modems, Routers, Mifi,…)</p>
                <button class="btn btn-brand">Buy Now</button>
            </div>
          </div>
          <div class="service">
            <img src="img/s2.svg" alt="trello">
            <div class="service-textbox">
                <h3>Cable TV/Electricity Bills Payment</h3>
                <p>Instantly recharge your Gotv, Dstv, Startimes, e.t.c. Recharge Now Pay your Postpaid and Prepaid electricity bill. Effortless, Faster, Reliable and Convenient. Pay Now
                </p>

                <button class="btn btn-brand">Buy Now</button>
            </div>
          </div>
          <div class="service">
            <img src="img/s3.svg" alt="trello">
            <div class="service-textbox">
                <h3>Airtime Topup</h3>
                <p>You can recharge yourself and also your friends. Huge discounts await you. Recharge Now 

                </p>
                <button class="btn btn-brand">Buy Now</button>
            </div>
          </div>
          <div class="service">
            <img src="img/s4.svg" alt="trello">
            <div class="service-textbox">
                <h3>Exam Cards</h3>
                <p>Buy WAEC, NECO, UTME, NABTEB e.t.c examination scratch cards.  Available to you at a cheaper and a more convenient option. 

                </p>
                <button class="btn btn-brand">Buy Now</button>
            </div>
          </div>
        </div>

      </section>

      <section id="about" class="section-padding">
        <div class="container">
          <div class="row  align-items-center" id="both">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="50">
                <img src="img/image 1.png" alt="" class="oval">
            </div>
           <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
             <h1 class="step">How To Recharge, Pay Bills &<br> Subscribe Data</h1>
              <div class="d-flex mt-3 mb-2">
                <div class="iconboxs me-4">
                  <h3>1</h3>
               </div>
               <div class="down">
                 <p>Login to your Dashboard</p>
               </div>
             </div>
             <div class="d-flex mt-3 mb-2">
               <div class="iconboxs me-4">
                 <h3>2</h3>
               </div>
             <div class="down">
               <p>Select the service you want to use.</p>
             </div>
             </div>
             <div class="d-flex mt-3 mb-2">
               <div class="iconboxs me-4">
                 <h3>3</h3>
               </div>
               <div class="down">
                  <p>Enter your information.</p>
               </div>
             </div>
             <div class="d-flex mt-3 mb-2">
               <div class="iconboxs me-4">
                 <h3>4</h3>
               </div>
               <div class="down">
                  <p>Enter the amount you want to pay or the amount of airtime or data you want to subscribe to.</p>
               </div>
             </div>
             <div class="d-flex mt-3 mb-2">
               <div class="iconboxs me-4">
                 <h3>5</h3>
               </div>
               <div class="down">
                  <p>Click "Pay" or "Recharge".</p>
               </div>
             </div>
             <div class="d-flex mt-3 mb-2">
               <div class="iconboxs me-4">
                 <h3>6</h3>
               </div>
               <div class="down">
                  <p>Viola! Congratulations…Transaction successful</p>
               </div>
             </div>

            <a href="/v/register" class="btn btn-brand me-2 rounded-pill">Download App</a>
           </div>
           <div class="col-lg-6 mt-2" data-aos="fade-right" data-aos-delay="50">
            <img src="images/Group 1000003944.png" alt="" class="pic">
           </div>
          </div>
        </div>
      </section>

      <section id="testimonial">
        <div class="data">
          <div>
            <p class="orange tag-text">Testimonials</p>
            <h2 class="head-h2" data-aos="fade-down">WHAT OUR CUSTOMERS SAY</h2>
          </div>

          <div class="testimonial-container">
            <div class="testimonial-tab">
              <div class="test-head">

                <div>
                  <h3>Umar Ibrahim</h3>
                  <p>Best platform for reselling of vtu service i have ever seen. Thumbs up for them for their great services , I recommend this platform it's fast.</p>
                </div>
              </div>
            </div>
            <div class="testimonial-tab">
              <div class="test-head">
                <div>
                  <h3>Yusuf Hammed</h3>
                  <p>Best platform for reselling of vtu service i have ever seen. Thumbs up for them for their great services , I recommend this platform it's fast.</p>
                </div>
              </div>
            </div>
            <div class="testimonial-tab">
              <div class="test-head">

                <div>
                  <h3>Musa Umar</h3>
                  <p>I love the quick response to issues.
                    We might just get along well. So far
                    so good. There's no star here but I
                    give ⭐⭐⭐</p>
                </div>
              </div>
            </div>
            <div class="testimonial-tab">
              <div class="test-head">

                <div>
                  <h3>Musa Umar</h3>
                  <p>I love the quick response to issues.
                    We might just get along well. So far
                    so good. There's no star here but I
                    give ⭐⭐⭐</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section id="price">
        <div class="data">
          <div>
            <p class="orange tag-text">Data Pricing</p>
            <h2 class="head-h2" data-aos="fade-down">DIFFERENT BUNDLES TO SUIT YOUR CHOICE</h2>
          </div>
          <div class="data-box">
            <div class="data-plan">
              <img src="img/mtn-data.png">
              <h4>MTN DATA</h4>
              <ul>
                <li>500MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("data_share_500mb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>1.00GB</li>
                <li>
  
                  &#8358;
                  <?= $website_instance->pricing_data("data_share_1gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>2.00GB</li>
                <li>
  
                  &#8358;
                  <?= $website_instance->pricing_data("data_share_2gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>3.00GB</li>
                <li>
  
                  &#8358;
                  <?= $website_instance->pricing_data("data_share_3gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>5.00GB</li>
                <li>
  
                  &#8358;
                  <?= $website_instance->pricing_data("data_share_5gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>10.0GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("data_share_10gb");?>
                </li>
                <li>60days</li>
              </ul>
              <a href="/v/register">Get Started</a>
            </div>
            <div class="data-plan">
              <img src="img/glo-data.png">
              <h4>GLO DATA</h4>
              <ul>
                <li>200MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_200mb_14days");?>
  
                </li>
                <li>14days</li>
              </ul>
              <ul>
                <li>500MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_500mb_14days");?>
  
                </li>
                <li>14days</li>
              </ul>
              <ul>
                <li>500MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_500mb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>1.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_1gb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>2.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_2gb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>3.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_3gb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>5.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_5gb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>10GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("glo_cg_10gb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <a href="/v/register">Get Started</a>
            </div>
            <div class="data-plan">
              <img src="img/airtel-data.png">
              <h4>AIRTEL DATA</h4>
              <ul>
                <li>100MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("airtel_100mb_7days");?>
  
                </li>
                <li>7days</li>
              </ul>
              <ul>
                <li>300MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("airtel_300mb_7days");?>
                </li>
                <li>7days</li>
              </ul>
              <ul>
                <li>500MB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("airtel_500mb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
  
              <ul>
                <li>1.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("airtel_1gb_30days");?>
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>2.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("airtel_2gb_30days");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>5.00GB</li>
                <li> &#8358;
                  <?= $website_instance->pricing_data("airtel_5gb_30days");?>
                </li>
  
                <li>30days</li>
              </ul>
              <ul>
                <li>10GB</li>
                <li>&#8358;
                  <?= $website_instance->pricing_data("airtel_10gb_30days");?>
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>15.0GB</li>
                <li>&#8358;
                  <?= $website_instance->pricing_data("airtel_15gb_30days");?>
                </li>
                <li>30days</li>
              </ul>
              <a href="/v/register">Get Started</a>
            </div>
            <div class="data-plan">
              <img src="img/mobile-data.png">
              <h4>9MOBILE DATA</h4>
              <ul>
                <li>1.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_1gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>1.5GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_1_5gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>2GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_2gb");?>
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>2.5GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_2_5gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>3GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_3gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>4.5GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_4_5gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>5.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_5gb");?>
  
                </li>
                <li>30days</li>
              </ul>
              <ul>
                <li>6.00GB</li>
                <li>
                  &#8358;
                  <?= $website_instance->pricing_data("9mobile_sme_6gb");?>
  
                </li>
                <li>30days</li>
              </ul>
  
              <a href="/v/register">Get Started</a>
            </div>
          </div>
        </div>
      </section>


      <section id="contact">
        <h2 class="head-h3" data-aos="fade-down">Contact Us</h2>

        <div class="contact-box">
          <div class="contact-desc">
            <p style="color: #D0D0DD; font-size: 14px; ">Our well trained customer support agents are always available 24/7 to help you resolve any issue.</p>

              <div class="cont-tab">
                <img src="img/Iconphone.svg" alt="">
                <div class="cont-desc">
                  <p>Telephone</p>
                  <p class="aii">08061155907</p>
                </div>
              </div>
              <div class="cont-tab">
                <img src="img/Iconmail.svg" alt="">
                <div class="cont-desc">
                  <p>Email</p>
                  <p class="aii">support@kirapay.ng</p>
                </div>
              </div>
              <div class="cont-tab">
                <img src="img/Iconloc.svg" alt="">
                <div class="cont-desc">
                  <p>Address</p>
                  <p class="aii">19 NZEKA STREET Ezenei, Asaba, Delta state</p>
                </div>
              </div>
          </div>

          <div class="contact-form">
            <form action="">
              <input placeholder="Name" type="text" required>
              <input placeholder="Email" type="email" required>
  
              <textarea name="" id="">Subject</textarea>
  
              <button type="submit">Send Message</button>
            </form>
          </div>
        </div>

      </section>
      
    <section id="faq">
      <div class="faq-container">
        <div>
          <p class="orange tag-text">Faq</p>
          <h2 class="head-h2" data-aos="fade-down">GET ANSWERS TO YOUR QUESTIONS</h2>
        </div>
        
        <div class="faq-content-container">
          <div class="faq-content">
            <h1>Which button between SIGN UP and LOGIN will I click to get started?</h1>
            <p>Kindly click on Sign up to GET STARTED and login button to access your dashboard after activating your account.</p>
          </div>
          <div class="faq-content">
            <h1>How do I know if my account is activated and I can make a purchase?</h1>
            <p>Once you can access your dashboard, you have successfully registered. (Welcome On Board)</p>
          </div>
          <div class="faq-content">
            <h1>What if I encounter an issue while registering, how do I get it sorted out?</h1>
            <p>Our Customer Care Support Team is 24/7 available to attend to you, kindly contact us.</p>
          </div>
          <div class="faq-content">
            <h1>How secure is my transaction history and can I access them anytime??</h1>
            <p> Absolutely 100 percent secure! You can access your transaction history anytime, any day.</p>
          </div>
          <div class="faq-content">
            <h1>How do I buy airtime, data or pay my bills?</h1>
            <p>        After you register, activate your account, you will be able to access your dashboard and locate SERVICES to purchase what you need.</p>
          </div>
          <div class="faq-content">
            <h1>How will I check if the transaction is successful?</h1>
            <p>The response will be SUCCESSFUL and you will also receive instant activation.</p>
          </div>


        </div>

      </div>
    </section>

    <footer>
      <img src="img/kiraLogo.png" alt="logo" class="logo">
      <div class="footer-box"  data-aos="fade-up" data-aos-delay="150">
        
        <div class="footer-about">
          <p>Kirapay stands out with affordable pricing, extensive and limitless services for airtime recharge, data subscription, bills payment, and result checking. Our commitment is to provide the best in the business. Make the switch to Kirapay today!</p>
            <div class="play">
              <a target="_blank" href="<?=$android_link;?>"><img src="img/play.png"></a>
              <a target="_blank" href="<?=$ios_link;?>"><img src="img/app.png"></a>
             </div>
        </div>
        <ul>
          <h3>Our Services</h3>
          <li><a href="//<?=SITE;?>/#service">Airtime & Data</a></li>
          <li><a href="//<?=SITE;?>/#service">Internet Bills</a></li>
          <li><a href="//<?=SITE;?>/#service">Education</a></li>
          <li><a href="//<?=SITE;?>/#service">Cable Bills</a></li>
        </ul>
        <ul>
          <h3>Company</h3>
          <li><a href="//<?=SITE;?>/#about">How it works</a></li>
          <li><a href="//<?=SITE;?>/#price">Pricing</a></li>
          <li><a href="//<?=SITE;?>/#testimony">Testimonials</a></li>
        </ul>
        <ul>
          <h3>Policies</h3>
          <li><a href="//<?=SITE;?>/#faq">FAQs</a></li>
          <li><a href="//<?=SITE;?>/#faq">Privacy Policy</a></li>
          <!-- <li><a href="#testimony">Testimonials</a></li> -->
        </ul>

      </div>
      <div class="copy">
        <p>Copyright @ <span style="font-weight: bold;">Synachsub@gmail.com</span>. All Rights Reserved.</p>
        <div class="copy-icon">
          <a href="<?= $website_details['twitter'];?>" class="icon-link"><i class="fa-brands fa-twitter icon"></i></a>
          <a href="<?= $website_details['facebook'];?>" class="icon-link"><i
              class="fa-brands fa-facebook-f icon"></i></a>
          <a href="<?= $website_details['instagram'];?>" class="icon-link"><i
              class="fa-brands fa-instagram icon"></i></a>
        </div>
      </div>
    </footer>
      <script src="index.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="main.js"></script>
    </body>
</body>
</html>
