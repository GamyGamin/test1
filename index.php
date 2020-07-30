<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>Portfolio Homepage</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper active-nav-link">
          <a href="index.php">Home</a>
        </div>
        
        <div class="nav-link-wrapper">
          <a href="Kollywood.php">Kollywood Movies</a>
        </div>
        
        <div class="nav-link-wrapper">
          <a href="Sinhala.php">සිංහල Movies </a>
        </div>
      </div>

      <div class="right-side">
        <div class="brand">
          JORDAN HUDGENS
        </div>
      </div>
    </div>

    <center><font size="12px"> Top Movies</font></center>
    <div class="content-wrapper">
      <div class="portfolio-items-wrapper">

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio1.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/quip.png" alt="">
            </div>

            <div class="subtitle"><b><a href="https:google.com">Download Now!!!</a></b></div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio2.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/devcamp.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio3.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/eventbrite.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio4.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/shop-hacker.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio5.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/crondose.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio6.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/dailysmarty.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio7.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/dashtrack.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio8.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/devtrunk.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio9.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/edutechional.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio10.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/ministry-safe.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio11.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/open-devos.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio12.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/toastability.png" alt="">
            </div>

            <div class="subtitle">Download Now!!!.</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

  portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.add('image-blur');
    });

    portfolioItem.addEventListener('mouseout', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.remove('image-blur');
    });
  });

</script>

</html>
