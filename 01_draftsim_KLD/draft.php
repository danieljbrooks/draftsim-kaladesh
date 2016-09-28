<!DOCTYPE html>
<html lang="en">
<!-- This is the page for draft and sealed. -->
<!-- It contains objects for packs, decks, collections, buttons and basic lands -->

<head>
  <!-- Page title -->
  <title> draftsim - MTG Draft and Sealed Simulator </title>
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
  <!-- Include cardlists -->
  <script src="BFZ.js"></script>
  <script src="OGW.js"></script>
  <script src="SOI.js"></script>
  <script src="SOI_flip.js"></script>
  <script src="EMN.js"></script>
  <script src="KLD.js"></script>
  <script src="KLD_inventions.js"></script>
  <script src="EMN_flip.js"></script>
  <script src="DTK.js"></script>
  <script src="FRF.js"></script>
  <script src="FRF_lands.js"></script>
  <script src="ORI.js"></script>
  <script src="LANDS.js"></script>
  <script src="drafting.js"></script>


  <!-- Page content begins here -->
  <?php include 'header.html'; ?>
  <br>
  <div>

  
  <!-- Pack cards stored here -->
  <div id="pack_box" 
       class="during_draft" >
         <my_p id="pack_images"
               class="display">
         </my_p>
  </div> 
  <hr style="height:1px; visibility:hidden;"/>


  <!-- Buttons panel is located here -->  
  <ul id="commands" class="commands">
    
    <!-- Suggestions button -->
    <li id= " during_draft"
        class="during_draft"
        style="display:none;"
        onclick=toggle_suggestions()>
          Suggestions
    </li>
 
    <!-- View bots button -->
    <li id = "bot_decks_button"
        class = "after_draft"
        style="display:none"
        onclick=toggle_bot_deck_visibility()>
          View Bots
    </li>
 
    <!-- Build deck button -->
    <li id = "build_deck"
        class = "after_draft"
        style="display:none"
        onclick=autobuild(0,draft.players[0].in_color);Print_collection();>
          Autobuild
    </li>

    <!-- Sort collection button -->
    <li id = "sort_button"
        class = "after_draft"
        style="display:none"
        onclick=sort_by_rating(0)>
          Sort Pool
    </li>
  </ul>

  <!-- The pack text container contains images and text -->
  <br>
  <br>
  <div id="pack_text_container"
       class="display"
       align="middle"
       style="display:none;min-height:0px;">
         <table id="pack_text" 
                class="display"
                align="middle">
         </table>
  </div>
  <br>

  <!-- Cards in collection are represented with images -->
  <div id="collection_container" class="display">
         <p id="collection_img" class="display"></p>
  </div>

  <!-- Sort deck button. Sort modes toggles when clicked -->
  <ul id="sort_deck"
      class="commands"
      style="display:none;">
        <br>
        <li id="color_sort"
            style="display:inline"
            onclick="sort_collection=1;Print_collection();";>
              Color Sort
        </li> 
        <br>
        <br>
  </ul>

  <!-- This box contains basic lands -->
  <div id="lands" class="after_draft" style="display:none">
    <p>Basic lands:</p>
    <img src=Images/ORI/Plains.jpg  onclick="addLand(0, 0); Print_collection();">
    <img src=Images/ORI/Island.jpg onclick="addLand(0, 1); Print_collection();">
    <img src=Images/ORI/Swamp.jpg onclick="addLand(0, 2); Print_collection();">
    <img src=Images/ORI/Mountain.jpg onclick="addLand(0, 3); Print_collection();">
    <img src=Images/ORI/Forest.jpg onclick="addLand(0, 4); Print_collection();">
    <br>
  </div>

  <!-- This box contains the player's deck -->
  <div id="deck_container" class="display">
    <p id="deck_title"> </p>
    <p id="deck_img" class="display"> </p>
    <p id="basic_land_img" class="display"> </p>
    <p id="deck_text" class="display" style="display:none"> </p><br><br>
  </div>

  <!-- This box contains bot decks -->
  <div id="bot_collection_container" class="bot_decks" style:"display:none">
    <p id="bot_collection_img" class="display"> </p>
  </div>

  <!-- This section can be used for testing javascript -->
  <my_p id="debug"></my_p>
  <my_p id="debug2"> </my_p>
  <my_p id="debug3"> </my_p>

</body>
</html>


