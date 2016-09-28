<!DOCTYPE html>
<html lang="en">

<!-- This is the methodology page. It contains a description of draftsim's rating system -->
<head>
  <title>draftsim - MTG Draft and Sealed Simulator MTG</title>
  <?php include 'css.html'; ?>

  <!-- Meta tags for SEO -->
  <meta name="description"
        content="draftsim - Magic: the Gathering draft and sealed simulator. Pick suggestions and automatic deckbuilding.">
  <meta name="keywords"
        content="MTG", "draftsim","draft","sealed generator","magic","KLD",
                "Kaladesh", "EMN", "eldritch moon", "SOI", "OGW", "Oath",
                 "Oath of the Gatewatch", "BFZ", "Zendikar", "ORI","Magic Origins",
                 "dragons","DTK","DDF", "booster", "draft simulator">
  <meta name="author"
        content="Daniel Brooks">

  <!-- Google analytics tracking code -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-56289140-2', 'auto');
    ga('send', 'pageview');
  </script>
</head>


<body>
  <!-- Navigation buttons -->
  <?php include 'header.html'; ?>
  <br>

  <!-- Text description of methodology -->
  <div id="methodology_text"
       class="methodology"
       align="left"
       style="width:70%;margin-left: auto; margin-right:auto;">
    
    <!-- Description of card ratings -->
    <h3> Methodology </h3>
    <hr>
    Draftsim AI uses the following concepts to evaluate each card:
    <br>
    <br>
    <h4 style="display:inline"> Power:&nbsp;&nbsp;</h4>
    Each card has a base rating of 0-5
    <br>
    <br>
    <h4 style="display:inline">Color:&nbsp;&nbsp;&nbsp;</h4>
    Cards that fit into a two-color deck are given a bonus
    <br>
    <br>
    A complete list of ratings can be found
    <font link="blue">
      <a style="color:blue"
         href=https://docs.google.com/spreadsheets/d/1pB9gwVPAjQUk-zxDMMt_7eAlXlfN5aUO9BvPJJZW-LA/edit#gid=2059761505>
           here
      </a>
    </font>
    
    <!-- Description of drafting stages -->
    <br>
    <br>
    <h3> Drafting </h3>
    <hr>
    <h4>Stage 1: Speculation</h4>
    <p>At the beginning of a draft, the bots pick the highest rated card out of each pack.
       On-color cards are given a small bonus, which ranges from +0 to +.9</p>

    <br>
    <h4>Stage 2: Commitment</h4>
    <p>After the bots have taken some strong cards, they commit to drafting a two-color deck.
       A +2.0 bonus is given to on-color cards. </p>
    <br>
    <h4>Stage 3: Deck Construction</h4>
    <p> During deck construction, automatically construct a deck with the most powerful 23 cards
        in two colors and 17 lands </p>
    <br>
  </div>
  <br>
  <br>
</body>

