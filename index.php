<?php session_start(); ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="<?php __DIR__?>./public/images/favicon-32x32.png">
  <link rel="stylesheet" href="<?php __DIR__?>./public/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Poppins:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
  <title>Landing Page</title>

</head>
<body>

  <header class="hero">
    <nav class="hero__nav container">
      <figure class="hero__logo">
        <img src="<?php __DIR__?>./public/images/logo.svg" alt="Huddle" class="hero__huddle">
      </figure>

      <a href="#" class="hero__cta">Try it free</a>
    </nav>



    <section class="hero__main container">
      <div class="hero__texts">
        <h1 class="hero__title">Build The Community Your  Fans Will Love</h1>
        <p class="hero__paragraph">  Huddle re-imagines the way we build communities. You have a voice, but so does
          your audience. Create connections with your users as you engage in genuine discussion.</p>

        <a href="#" class="cta">Get Started For Free</a>
      </div>

      <figure class="hero__picture">
        <img src="<?php __DIR__?>./public/images/screen-mockups.svg" class="hero__img" alt="">
      </figure>

      <div class="hero__numbers">
        <div class="hero__item">
          <img src="<?php __DIR__?>./public/images/icon-communities.svg" class="hero__icon" alt="icon-communities">

          <h3 class="hero__number">1.4k+</h3>
          <p class="hero__community">Communities Formed</p>
        </div>

        <div class="hero__item">
          <img src="<?php __DIR__?>./public/images/icon-messages.svg" class="hero__icon" alt="icon-messages">

          <h3 class="hero__number">2.7m+</h3>
          <p class="hero__community">Messages Sent</p>
        </div>
      </div>
    </section>

    <div class="wave wave__bottom"></div>

  </header>



  <main class="main">
    <section class="section">
      <div class="section__container container">
        <figure class="section__picture">
          <img src="<?php __DIR__?>./public/images/illustration-grow-together.svg" alt="" class="section__img">
        </figure>

        <div class="section__texts">
          <h2 class="subtitle">Grow Together</h2>
          <p class="section__paragraph">Generate meaningful discussions with your audience and build a strong, loyal community.
            Think of the insightful conversations you miss out on with a feedback form.</p>
        </div>

      </div>
    </section>


    <section class="section section__white">
      <div class="section__container container section__container__inverse">
        <figure class="section__picture">
          <img src="<?php __DIR__?>./public/images/illustration-flowing-conversation.svg" alt="" class="section__img">
        </figure>

        <div class="section__texts">
          <h2 class="subtitle">Flowing Conversations</h2>
          <p class="section__paragraph">You wouldn't paginate a conversation in real life, so why do it online? Our threads have
            just-in-time loading for a more natural flow.</p>
        </div>

      </div>

      <div class="wave wave__top"></div>
      <div class="wave wave__bottom"></div>
    </section>


    <section class="section">
      <div class="section__container container">
        <figure class="section__picture">
          <img src="<?php __DIR__?>./public/images/illustration-your-users.svg" alt="" class="section__img">
        </figure>

        <div class="section__texts">
          <h2 class="subtitle">Your Users</h2>
          <p class="section__paragraph">It takes no time at all to integrate Huddle with your app's authentication solution. This means,
            once signed in to your app, your users can start chatting immediately.</p>
        </div>

      </div>
    </section>


    <section class="question">
      <div class="question__texts container">
        <h2 class="subtitle">Ready To Build Your Community?</h2>
        <a href="#" class="cta">Get Started For Free</a>
      </div>

      <div class="wave wave__top"></div>
      <div class="wave wave__bottom"></div>
    </section>
  </main>


  <footer class="footer">
    <div class="footer__container container">
      <section class="footer__newsletter">
        <h2 class="footer__title">Newsletter</h2>
        <p class="footer__paragraph">To recieve tips on how to grow your community, sign up to our weekly newsletter. We’ll never
          send you spam or pass on your email address.</p>

      <form class="footer__form" action = "<?php __DIR__?>./backend/registro.php" method="POST">

        <input type="text" name="name" class="footer__input" placeholder="Enter your Name" required>

        <input type="text" name="lastname" class="footer__input" placeholder="Enter your Last Name" required>

        <input type="email" name="email" class="footer__input" placeholder="Enter your Email" required>

        <p class="footer__leyend">I agree with the <a href="#" class="footer__cta__terms">Terms and Conditions.</a></p>

        <input type="submit" class="footer__cta" value="Subscribe">

        <div>
          <?php echo isset($_SESSION["registro_exitoso"]) ? "<div class='footer__acept'>".$_SESSION["registro_exitoso"].'</div>':""; ?>
          <?php echo isset($_SESSION["error_name"]) ? "<div class='footer__alert'>".$_SESSION["error_name"].'</div>':""; ?>
          <?php echo isset($_SESSION["error_lastname"]) ? "<div class='footer__alert'>".$_SESSION["error_lastname"].'</div>':""; ?>
          <?php echo isset($_SESSION["error_email"]) ? "<div class='footer__alert'>".$_SESSION["error_email"].'</div>':""; ?>
        </div>

      </form>
      </section>


      <footer class="footer__content">
        <img src="<?php __DIR__?>./public/images/logo_white.PNG" alt="logoWhite" class="footer__logo">
        <p class="footer__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla quam, hendrerit lacinia
          vestibulum a, ultrices quis sem.</p>

      <div class="footer__contac">
        <img src="<?php __DIR__?>./public/images/icon-phone.svg" alt="phone" class="footer__img">
      </div>

      <div class="footer__contac footer__contac__email">
        <img src="<?php __DIR__?>./public/images/icon-email.svg" alt="phone" class="footer__img">
      </div>

      <div class="footer__social">
        <a href="#" class="footer__link">
          <img src="<?php __DIR__?>./public/images/fb.svg" alt="Facebook" class="footer__icon">
        </a>

        <a href="#" class="footer__link">
          <img src="<?php __DIR__?>./public/images/ins.svg" alt="Instagram" class="footer__icon">
        </a>

        <a href="#" class="footer__link">
          <img src="<?php __DIR__?>./public/images/twt.svg" alt="Twitter" class="footer__icon">
        </a>
      </div>

      </footer>
    </div>
  </footer>
</body>
</html>

<?php unset($_SESSION["registro_exitoso"]);
unset($_SESSION["error_name"]);
unset($_SESSION["error_lastname"]);
unset($_SESSION["error_email"]);?>