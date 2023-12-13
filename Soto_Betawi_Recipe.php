<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'hungry_indonesia');

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$recipeId = $_GET['id'];

$sql = "SELECT * FROM recipe_data WHERE id = $recipeId";

$result = mysqli_query($koneksi, $sql);

if (!$result) {
    die("Error in SQL query: " . mysqli_error($koneksi));
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $historyText = $row['history'];
    $description = $row['description'];
    $cookingIngredients = $row['cooking_ingredients'];
    $alternativeIngredients = $row['alternative_ingredients'];
    $instructions = $row['instructions'];
} else {
    $historyText = "Data not found";
    $description = "";
    $cookingIngredients = "";
    $alternativeIngredients = "";
    $instructions = "";
}

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipe</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="tailwind.config.js"></script>
  </head>
  <body class="bg-[#FFFAE5]">
    <nav
      class="flex sticky top-0 justify-between z-50"
      style="background-color: #5f5d2d"
    >
      <div
        class="flex justify-start text-2xl mt-7 ml-24 mb-7 font-semibold"
        style="color: #fffae5"
      >
        <button onclick="window.location.href='HomePageIn.html'">
          HungryIndonesia
        </button>
      </div>
      <div>
        <button
          id="dropdownDefaultButton"
          data-dropdown-toggle="dropdown1"
          class="flex justify-end mt-7 mr-24 mb-7"
        >
          <img class="w-10" src="images/menu.png" alt="menu" />
        </button>
        <!--             <div id="dropdown1" 
            class="hidden divide-y divide-gray-100 rounded-l-3xl shadow w-[250px] dark:bg-gray-700
            pl-10 transition-none"
            style="background-color: #5F5D2D; height: 265px; position: absolute; top: -100px;">
                <ul class="text-[22px] font-semibold"
                style="color: #FFFAE5;">
                <li class="flex items-center hover:w-1 hover:h-6 hover:bg-amber-500" role="group">
                    <div class="w-[1px] h-[1px] bg-[#5F5D2D] "></div>
                    <button class="hover:translate-x-[20%] transition duration-150 ease-in 
                    text-amber-500" 
                    href="">Login</button>
                </li>
                <li class="flex items-center mt-3 hover:w-1 hover:h-6 hover:bg-amber-500" role="group">
                    <div class="w-[1px] h-[1px] bg-[#5F5D2D] "></div>
                    <button class="hover:translate-x-[20%] transition duration-150 ease-in" 
                    onclick="window.location.href='Search_Recipe.html';">Search Recipe</button>
                </li>
                <li class="flex items-center hover:w-1 hover:h-6 hover:bg-amber-500" role="group">
                    <div class="w-[1px] h-[1px] bg-[#5F5D2D] "></div>
                    <button class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
                    onclick="window.location.href='Search_Recipe.html';"
                    >Search Resto</button>
                </li>
                <li class="flex items-center hover:w-1 hover:h-6 hover:bg-amber-500" role="group">
                    <div class="w-[1px] h-[1px] bg-[#5F5D2D] "></div>
                    <button class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
                    onclick="window.location.href='Search_Recipe.html';"
                    >About Us</button>
                </li>
                <li class="flex items-center hover:w-1 hover:h-6 hover:bg-amber-500" role="group">
                    <div class="w-[1px] h-[1px] bg-[#5F5D2D] "></div>
                    <button class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
                    onclick="window.location.href='Search_Recipe.html';"
                    >FAQ</button>
                </li>
                </ul>
            </div> -->
        <div
          id="dropdown1"
          class="z-70 absolute top-0 right-0 hidden divide-y divide-gray-100 rounded-l-3xl shadow w-60 
          h-[450px] dark:bg-gray-700 pl-10"
          style="
            background-color: #5f5d2d;
            
            position: absolute;
            top: -100px;
          "
        >
          <ul class="text-2xl font-semibold" style="color: #fffae5">
            <li class="flex items-center">
              <div class="w-0 h-full border-amber-500 hover:w-4"></div>
                <p class="hover:translate-x-[20%] transition duration-150 ease-in"
                onclick="window.location.href='Search_Recipe.html';">
                  Name
                </p>
            </li>
            <li>
              <button
                class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
                onclick="window.location.href='Search_Recipe.html';"
              >
                Search Recipe
              </button>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='';">
                Search Resto
              </p>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='AboutUs.html';">
                About Us
              </p>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='Faq.html';">
                FAQ
              </p>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='';">
                My Review
              </p>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='';">
                Recent Recipe
              </p>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='MyCooklist.html';">
                Cooklist
              </p>
            </li>
            <li>
              <p class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              onclick="window.location.href='HomePageLand.html';">
                Log Out
              </p>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="ml-10 mt-10 flex justify-between">
      <div class="flex">
        <div>
          <a href="HomePageIn.html" class="w-8 h-8 inline-block"
            ><img src="images/back.png" alt="" class="w-8"
          /></a>
        </div>
        <div class="inline-block ml-3">
          <h1 class="font-bold text-4xl text-[#5f5d2d]">Soto Betawi</h1>
          <h4 class="text-[#5F5D2D] font-semibold">Food Origin: DKI JAKARTA</h4>
          <h2 class="text-[#5F5D2D] font-bold text-xl">
            Recipe Approved by Soto Betawi H. Mamat
          </h2>
        </div>
      </div>
      <div class="mr-10">
        <div
          class="flex gap-2 border-2 rounded-3xl py-2 px-3 border-[#ddd9c7] shadow-inner"
        >
          <img src="images/full-star.png" alt="" class="w-5 h-5" />
          <img src="images/full-star.png" alt="" class="w-5 h-5" />
          <img src="images/full-star.png" alt="" class="w-5 h-5" />
          <img src="images/full-star.png" alt="" class="w-5 h-5" />
          <img src="images/half-star.png" alt="" class="w-5 h-5" />
          <span class="text-[#5F5D2D] font-bold">4.5 / 5</span>
        </div>
      </div>
    </div>

    <div class="flex justify-center mt-5 gap-5 m-14">
      <img src="images/SotoBetawiRCP.png" alt="" class="h-[27rem] w-[42rem]" />
      <div>
        <div class="bg-[#c9c8ae] ml-5 p-5 rounded-3xl text-lg mb-5 w-10/12">
          <p class="font-semibold text-justify">
              <?php echo $historyText; ?>
          </p>
        </div>
        <!-- Tampilkan data description -->
        <div class="bg-[#c9c8ae] ml-5 p-5 rounded-3xl w-7/12 text-lg">
        <?php
          // Gantilah isi div sesuai dengan data description dari database
          $descriptionLines = explode("\n", $description);
          echo '<ul>';
          foreach ($descriptionLines as $line) {
              echo '<li class="font-semibold">' . $line . '</li>';
          }
          echo '</ul>';
        ?>
        </div>
      
      </div>
    </div>

    <div class="flex justify-center gap-5">
      <div class="w-[45%]">
        <div class="bg-[#FFF] rounded-3xl border-1 p-5 h-fit">
          <h1 class="ml-5 mb-5 text-[#5F5D2D] text-2xl font-bold">
            Cooking Ingredients
          </h1>
          <ul class="ml-10 list-disc">
            <li class="font-semibold text-lg">For the Broth:</li>
            <ul class="list-disc ml-5 mb-5">
              <li class="font-semibold text-lg">
                250 grams of beef, thinly sliced
              </li>
              <li class="font-semibold text-lg">
                250 grams of beef tripe and lung, thinly sliced
              </li>
              <li class="font-semibold text-lg">2 liters of water</li>
              <li class="font-semibold text-lg">
                2 stalks of lemongrass, smashed
              </li>
              <li class="font-semibold text-lg">4 kaffir lime leaves</li>
              <li class="font-semibold text-lg">3 bay leaves</li>
              <li class="font-semibold text-lg">
                1 turmeric leaf (or 1/2 teaspoon ground turmeric)
              </li>
              <li class="font-semibold text-lg">2 teaspoons salt</li>
              <li class="font-semibold text-lg">1 teaspoon sugar</li>
              <li class="font-semibold text-lg">400 ml thick coconut milk</li>
            </ul>
            <li class="font-semibold text-lg">For the Spice Paste:</li>
            <ul class="list-disc ml-5 mb-5">
              <li class="font-semibold text-lg">4 shallots</li>
              <li class="font-semibold text-lg">3 cloves of garlic</li>
              <li class="font-semibold text-lg">4 candlenuts</li>
              <li class="font-semibold text-lg">1-inch piece of galangal</li>
              <li class="font-semibold text-lg">1-inch piece of turmeric</li>
              <li class="font-semibold text-lg">
                2 red chillies (adjust to your preferred spice level)
              </li>
            </ul>
            <li class="font-semibold text-lg">Toppings:</li>
            <ul class="list-disc ml-5">
              <li class="font-semibold text-lg">
                250 grams of rice vermicelli noodles, cooked and drained
              </li>
              <li class="font-semibold text-lg">2 hard-boiled eggs, sliced</li>
              <li class="font-semibold text-lg">Fried Shallots</li>
              <li class="font-semibold text-lg">Chopped Scallions</li>
              <li class="font-semibold text-lg">Lime Wedges</li>
              <li class="font-semibold text-lg">Emping (crispy crackers)</li>
            </ul>
          </ul>
        </div>
        <div class="bg-[#FFF] rounded-3xl border-1 p-5 h-fit mt-5">
          <h1 class="ml-5 mb-5 text-[#5F5D2D] text-2xl font-bold">
            Alternative Ingredients
          </h1>
          <ul class="list-disc ml-10">
            <li class="font-semibold text-lg">
              400 ml milk for 400 ml thick coconut milk substitute
            </li>
            <li class="font-semibold text-lg">
              250 grams of beef if you want to omit 250 grams beef tripe and
              lung.
            </li>
          </ul>
        </div>
      </div>
      <div class="w-[45%] grid">
        <div class="bg-[#fff] rounded-3xl border-1 p-5 h-fit">
          <h1 class="ml-5 mb-5 text-[#5F5D2D] text-2xl font-bold">
            Instructions
          </h1>
          <ol class="list-decimal ml-10">
            <li class="font-semibold text-lg">
              Prepare the Spice Paste: Grind all the spice paste ingredients in
              a food processor or mortar and pestle until you have a smooth
              paste.
            </li>
            <li class="font-semibold text-lg">
              Make the Broth: In a large pot, bring 2 liters of water to a boil.
              Add the sliced beef and simmer until it turns color. Remove and
              discard any scum that forms on the surface.
            </li>
            <li class="font-semibold text-lg">
              Add the Spice Paste: Add the spice paste to the pot and stir well.
              Continue to simmer for about 30 minutes.
            </li>
            <li class="font-semibold text-lg">
              Add Aromatics: Add lemongrass, kaffir lime leaves, bay leaves,
              turmeric leaf (or ground turmeric), salt, and sugar. Simmer for
              another 30 minutes or until the beef is tender.
            </li>
            <li class="font-semibold text-lg">
              Finish with Coconut Milk: Pour in the thick coconut milk and
              simmer for an additional 10 minutes, stirring occasionally. Adjust
              the seasoning with more salt and sugar if needed.
            </li>
            <li class="font-semibold text-lg">
              Serve: To serve, place a portion of cooked rice vermicelli noodles
              in a bowl, ladle the hot Soto Betawi broth over the noodles, and
              top with slices of hard-boiled egg. Garnish with fried shallots,
              chopped scallions, and a squeeze of lime juice. Serve with kerupuk
              on the side.
            </li>
          </ol>
        </div>
        <button
          class="self-end justify-self-end rounded-3xl border-1 bg-[#5f5d2d] py-3 px-5 font-bold text-[#FFF] text-lg hover:bg-[#c9c8ae] hover:text-[#5F5D2D]"
        >
          Add to cooklist
        </button>
      </div>
    </div>
    <footer>
      <div
        class="flex justify-center items-cente mt-[75px] mb-12 ml-5 text-amber-500 text-2xl font-bold"
      >
        <p>Uncover Tasty Treasures, One Recipe and Restaurant at a Time</p>
      </div>
      <hr class="border-t-1 border-gray-500" />
      <div class="flex justify-between mt-5 mb-5">
        <div class="ml-16">
          <p class="text-2xl font-semibold text-[#5F5D2D]">Company</p>
          <ul class="text-lg text-[#C9C8AE] font-normal">
            <li>
              <button>About us</button>
            </li>
            <li>
              <button>FAQ</button>
            </li>
          </ul>
        </div>
        <div class="ml-32">
          <p class="text-2xl font-semibold text-[#5F5D2D]">Products</p>
          <ul class="text-lg text-[#C9C8AE] font-normal">
            <li>
              <button>Indonesian Recipe</button>
            </li>
            <li>
              <button>Indonesian Restaurant</button>
            </li>
          </ul>
        </div>
        <div class="mr-[445px]">
          <p class="text-2xl font-semibold text-[#5F5D2D]">Support</p>
          <ul class="text-lg text-[#C9C8AE] font-normal">
            <li>Help</li>
            <li>Terms</li>
            <li>Privacy</li>
          </ul>
        </div>
      </div>
      <hr class="border-t-1 border-gray-500" />
      <div class="flex flex-col ml-2 mt-12 mb-16">
        <div class="flex self-center">
          <img
            class="w-6 h-6 self-center"
            src="images/Instagram.png"
            alt="Instagram"
          />
          <img
            class="h-5 mx-3 self-center"
            src="images/Facebook.png"
            alt="Facebook"
          />
          <img
            class="w-6 h-5 self-center"
            src="images/Twitter.png"
            alt="Twitter"
          />
        </div>
        <p class="self-center mt-2 text-lg text-[#5F5D2D]">
          <strong>@ 2023 HungryIndonesia. All Right Reserved.</strong>
        </p>
      </div>
    </footer>
  </body>
</html>
