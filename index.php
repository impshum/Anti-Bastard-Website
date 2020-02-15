<?php
include 'assets/php/controls.php';
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="theme-color" content="#000">
  <meta name="robots" content="index, nofollow">

  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/ani.css">
  <link rel="stylesheet" href="assets/css/aos.css">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://anti-bastard.co.uk">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="https://anti-bastard.co.uk/assets/img/fb.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@<?php echo $twitter_handle; ?>">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:creator" content="@<?php echo $twitter_handle; ?>">
  <meta name="twitter:image" content="https://anti-bastard.co.uk/assets/img/logo.jpg">

  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MusicGroup",
    "name": "Anti-Bastard",
    "url": "https://anti-bastard.co.uk",
    "logo": "https://anti-bastard.co.uk/assets/img/logo.jpg",
    "sameAs": [
      "https://facebook.com/antibastarduk",
      "https://twitter.com/AntiBastard12",
      "https://www.instagram.com/anti_bastard",
      "https://anti-bastard.bandcamp.com"
    ]
  }
  </script>
</head>

<body>

  <nav class="navbar is-fixed-top is-black" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="./">
        <h1 class="is-size-3 title has-text-white fadeIn delay-0">#!</h1>
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navvi">
        <span class="has-text-white" aria-hidden="true"></span>
        <span class="has-text-white" aria-hidden="true"></span>
        <span class="has-text-white" aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu">
      <div class="navbar-end is-hidden-touch">
        <a class="navbar-item is-size-4 kitty slideInDown delay-7">Kittens</a>
        <a href="#home" class="navbar-item is-size-4 slideInDown delay-1">Home</a>
        <a href="#one" class="navbar-item is-size-4 slideInDown delay-2">Band</a>
        <a href="#two" class="navbar-item is-size-4 slideInDown delay-3">Music</a>
        <a href="#three" class="navbar-item is-size-4 slideInDown delay-4">Stuff</a>
        <a href="#four" class="navbar-item is-size-4 slideInDown delay-5">Gigs</a>
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'wanker') {
          echo '<a href="cms" class="navbar-item is-size-4 slideInDown delay-6">Admin</a>';
        }
         ?>
      </div>
      <div class="navbar-end is-hidden-desktop has-text-centered">
        <a href="#home" class="navbar-item is-size-4">Home</a>
        <a href="#one" class="navbar-item is-size-4">Band</a>
        <a href="#two" class="navbar-item is-size-4">Music</a>
        <a href="#three" class="navbar-item is-size-4">Stuff</a>
        <a href="#four" class="navbar-item is-size-4">Gigs</a>
      </div>
    </div>
  </nav>

  <section id="home" class="hero is-fullheight is-hero1">
    <div class="hero-body">
      <div class="container">
        <div class="content upp has-text-centered">
          <h1 class="has-text-white title fadeIn delay-1 font"><?php echo $title; ?></h1>
          <h2 class="has-text-light fonty fadeIn delay-2"><?php echo $description; ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section id="one" class="hero is-medium is-black">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-3">
            <img class="is-band" src="assets/img/band/1.jpg" data-aos="fade-up" data-aos-delay="0">
            <h4 class="is-size-4" data-aos="zoom-in" data-aos-delay="100">Jonny - Guitar/Vocals</h4>
          </div>
          <div class="column is-3">
            <img class="is-band" src="assets/img/band/2.jpg" data-aos="fade-up" data-aos-delay="100">
            <h4 class="is-size-4" data-aos="zoom-in" data-aos-delay="200">Dougy - Guitar/Vocals</h4>
          </div>
          <div class="column is-3">
            <img class="is-band" src="assets/img/band/3.jpg" data-aos="fade-up" data-aos-delay="200">
            <h4 class="is-size-4" data-aos="zoom-in" data-aos-delay="300">Tom - Bass</h4>
          </div>
          <div class="column is-3">
            <img class="is-band fil" src="assets/img/band/4.jpg" data-aos="fade-up" data-aos-delay="300">
            <h4 class="is-size-4" data-aos="zoom-in" data-aos-delay="400">Fil - Drums/Vocals</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="two" class="hero is-fullheight is-hero2">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-3" data-aos="zoom-in" data-aos-delay="0">
            <img src="assets/img/albums/1.jpg" data-aos="zoom-in" data-aos-delay="100">
            <iframe loading="lazy" style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=4225174488/size=large/bgcol=333333/linkcol=ffffff/tracklist=false/artwork=none/transparent=true/" seamless></iframe>
          </div>
          <div class="column is-3" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/albums/2.jpg" data-aos="zoom-in" data-aos-delay="200">
            <iframe loading="lazy" style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=123797590/size=large/bgcol=333333/linkcol=ffffff/tracklist=false/artwork=none/transparent=true/" seamless></iframe>
          </div>
          <div class="column is-3" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/albums/3.jpg" data-aos="zoom-in" data-aos-delay="300">
            <iframe loading="lazy" style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=4268376672/size=large/bgcol=333333/linkcol=ffffff/tracklist=false/artwork=none/transparent=true/" seamless></iframe>
          </div>
          <div class="column is-3" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/albums/4.jpg" data-aos="zoom-in" data-aos-delay="400">
            <iframe loading="lazy" style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=892654374/size=large/bgcol=333333/linkcol=ffffff/tracklist=false/artwork=none/transparent=true/" seamless></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="three" class="hero is-medium is-black">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-centered">
          <div class="column is-8-desktop">
            <div class="content" data-aos="fade-in">
              <p class="is-size-4">And LO! So it came to pass, for it is written in times of yore. On the Seventh day He rested, and on the Six-Hundred-And-Sixty-Sixth day God created ANTI-BASTARD!</p>
              <p class="is-size-5">ANTI-BASTARD is a unique musical stew, far greater than the sum of its parts. A D-Beat-Crust-Metal supergroup, drawn together from the four corners of the Tyne (and Norway). One of them even has a driving licence.
                One-third of 'Sawn-Off' and two-thirty-ninths of 'Hellbastard'; ANTI-BASTARD is an elite unit of highly experienced sesh musicians, armed with really loud amps and a total disregard for the conventions of harmony and melody. They sound
                kind of like Venom having an awkward shite.</p>

              <p class="is-size-5">Fast bits, slow bits and as little melody as we can get away with. Radge as fuck heavy riff-punk.</p>
              <p class="is-size-5">ANTI-BASTARD will worm it's way into the hearts of the nation like a deadly parasite, draining your very soul of its vital lifesblood.</p>
              <p class="is-size-3">Take heed mortals!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="four" class="hero is-medium is-hero3">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-multiline">
          <div class="column is-v-centered">
            <div id="new_gigs" class="content has-text-white">
              <h3 data-aos="fade-up" class="has-text-white is-size-3-desktop">Upcoming Gigs</h3>
              <br>
              <?php get_new_gigs($all_gigs); ?>
              <br>
              <a class="old_gigs">view past gigs</a>
            </div>
            <div id="old_gigs" class="content has-text-white">
              <h3 data-aos="fade-up" class="has-text-white is-size-3-desktop">Past Gigs</h3>
              <br>
              <?php get_old_gigs($all_gigs); ?>
              <br>
              <a class="new_gigs">view future gigs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer has-background-black">
    <div class="container">
      <div class="content has-text-centered has-text-white pt-1">
        <div class="social">
          <a href="<?php echo $facebook; ?>" target="_blank"><i class="fk fab fa-2x fa-facebook"></i></a>
          <a href="<?php echo $instagram; ?>" target="_blank"><i class="im fab fa-2x fa-instagram"></i></a>
          <a href="<?php echo $twitter; ?>" target="_blank"><i class="tr fab fa-2x fa-twitter"></i></a>
          <a href="<?php echo $bandcamp; ?>" target="_blank"><i class="bp fab fa-2x fa-bandcamp"></i></a>
        </div>
        Made by <a href="https://recycledrobot.co.uk" target="_blank">Recycled Robot</a> with a keyboard
      </div>
    </div>
  </footer>


  <script src="assets/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>

</html>
