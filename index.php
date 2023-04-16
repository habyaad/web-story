<!DOCTYPE html>
<html>
  <head>
    <title>Ade Omotosho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAY1BMVEUAAAD////5+fk5OTnx8fFISEgwMDAWFhY8PDz19fVSUlIlJSUoKCj8/PwYGBgtLS0fHx8PDw/JyckICAi1tbWAgIBXV1fW1tbq6uqfn5+8vLzf399tbW2ZmZl6enpkZGSKioqhDu08AAACZklEQVRoge2Y63LqIBCAAUGCCQhesR6Pff+nLLCJJo1tTaDOmTn7/fGSmXwsLOwmhCAIgiAIgiAIgiAIgiD/AW656OO21WKEK6u0+92ZK9ZHiSVlI1YFpYeTFHQEC94x5bx/jpQZwV7sPRzDzbh8sVfu0s2CV+lIt4p9rx5QxCs8BMEtWUdsd6Hn5Yu6R7MtoP3bTR63n670vXUB04ALfcrb/Jr2pd52kn3rbQLrF3gPoD2u2nz2nHP2+94aMnlDFrS3fx96i+bVG0RLSPWjV/TLQpVXF66wtvYJb9Hz6pzuIch0r8jRQi6fyAzvMsebwuXp69d5pUQ11uocLazuXobz1oppXpXjhWROPQWUnkderQSMqaqbO1mbit+GD9oHXhbXF9a+2P693qxKMc00ZT7U3/BJiZQmFDpJaGy1oL/yDXFGlvBebsG2U828EUopTYmRxpCtjV7FxCLqfbM11pQou5uUmCxGm2xKxX4jDEMTaZwlLnp1ilcr5mtnw2AKwCGbbbMOeRJyRzEe4g0BgteZe7zgNbUj103kkOPVMdx43knn4v7VzNs4z4yGlXQ2uENehYBjvEyH9ZVS9rf8TNZpH3aV/ue6kOrge8qI9xyvGIz8OS+cmP5zWzKJ1Qwv1JF9jnaO91atX+mtCTT3OqsETvca0GbO8nTvEbS7TO1Ub8smVzvPm5lTc71v+do53ksB7Xde9uj5l56zqsEz3gGtV58KvcKZ5GW7qoz1eS8VS3UqZg3euID+7m37nOG7K37e7W2J5uaOSw9Y3S94J9f+2bEsa0QQBEEQBEEQBEEQBEH+UT4Azowe46AyuSUAAAAASUVORK5CYII=" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <?php
    include_once 'components/nav_bar.php';
    $links = [
        ['url' => '#', 'label' => 'Home'],
        ['url' => 'pages/story.php', 'label' => 'My Story'],
        ['url' => 'pages/lecturers.php', 'label' => 'My Lecturers'],
    ];
    navbar($links);
    ?>
    <main>
        <section class="hero">
            <div class="hero-content">
              <h1>I am <br> Ade Omotosho</h1>
              <p>A student of computer science, I am passionate about learning cybersecurity, which involves protecting computer systems, networks, and sensitive data from unauthorized access, theft, or damage.</p>
              <a href="pages/story.php" class="btn">Learn More</a>
            </div>
          </section>

<section class="about">
  <div class="container">
    <h2>About Me</h2>
    <div class="row">
      <div class="col-md-6">
        <img src="images/profile_image.jpeg" alt="Your Name">
      </div>
      <div class="col-md-6">
        <p>Welcome to my kingdom, i control this space. First of all, before proceeding my preceding procedure!....I'd like to symbolize my symbolical symbolity.
            </p>
        <p>I go by the name Ade Omotosho, Habyaad is my nick.I have been a tech enthusiast since a very young age, I got into the hardware world since 5 and the software world much later. I am a lover of STEM and currently building my career in it. You want to know more? Grab a cup of coffee and keep scrolling!</p>

        <p>I have picked interest in critical thinking and learning, Rome was not built in a day, i make vast research per day and i've been able to learn a ton of different skills. I would learn more and i think i'd still do a little of philosophy.</p>
        <a href="tel:09099637474" class="btn">Call Me</a>
      </div>
    </div>
  </div>
</section>
    </main>
    <?php include_once 'components/footer.php'; ?>
  </body>
</html>