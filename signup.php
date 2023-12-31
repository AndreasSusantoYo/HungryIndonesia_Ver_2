<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - HungryIndonesia</title>
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
        <button onclick="window.location.href='HomePage.html'">
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
        <div
          id="dropdown1"
          class="z-70 absolute top-0 right-0 hidden divide-y divide-gray-100 rounded-l-3xl shadow w-60 dark:bg-gray-700 pl-10"
          style="
            background-color: #5f5d2d;
            height: 265px;
            position: absolute;
            top: -100px;
          "
        >
          <ul class="text-2xl font-semibold" style="color: #fffae5">
            <li class="flex items-center">
              <div class="w-0 h-full border-amber-500 hover:w-4"></div>
              <p
                class="hover:translate-x-[20%] transition duration-150 ease-in text-amber-500"
                href=""
              >
                Login
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
              <p
                class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              >
                Search Resto
              </p>
            </li>
            <li>
              <p
                class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              >
                About Us
              </p>
            </li>
            <li>
              <p
                class="hover:translate-x-[20%] transition duration-150 ease-in mt-4"
              >
                FAQ
              </p>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="ml-10 mt-10">
      <a href="HomePageIn.html" class="w-8 h-8 inline-block"
        ><img src="images/back.png" alt="" class="w-8"
      /></a>
    </div>

    <div class="mx-auto w-1/3 text-center">
      <!-- Your h1 heading -->
      <div class="mb-4">
        <h1 class="font-sans font-bold text-[#5f5d2d] text-2xl">
          HungryIndonesia
        </h1>
      </div>

      <!-- Button Group -->
      <div class="flex justify-center">
        <!-- Login Button -->
        <button
          class="w-1/2 border-2 px-20 py-2 rounded-l-3xl border-r-0 text-[#5F5D2D] font-bold hover:bg-[#c9c8ae] shadow-inner"
          onclick="window.location.href='login.php'"
        >
          Log In
        </button>

        <!-- Signup Button -->
        <button
          class="w-1/2 border-2 px-20 py-2 rounded-r-3xl border-l-0 text-[#5F5D2D] bg-[#5f5d2d] text-[#fff] font-bold shadow-inner"
        >
          Sign Up
        </button>
      </div>
      <div>
      <form action="signup.php" method="post">
        <input
            type="text"
            name="fullName"
            class="w-full rounded-3xl mt-4 px-12 shadow-inner"
            placeholder="Full Name"
            required
        />
        <input
            type="email"
            name="email"
            class="w-full rounded-3xl mt-4 px-12 shadow-inner"
            placeholder="Email"
            required
        />
        <input
            type="password"
            name="password"
            class="w-full rounded-3xl mt-4 px-12 shadow-inner"
            placeholder="Password"
            required
        />
        <input
            type="password"
            name="confirmPassword"
            class="w-full rounded-3xl mt-4 px-12 shadow-inner"
            placeholder="Confirm Password"
            required
        />
        <input
            type="submit"
            value="Continue"
            name="submit"
            class="w-full bg-[#5F5D2D] text-white font-bold rounded-3xl mt-3 py-3 hover:bg-[#c9c8ae]"
        >
      </form>
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
    <?php
    session_start();
    include("connection.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullName = mysqli_real_escape_string($koneksi, $_POST['fullName']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $password = mysqli_real_escape_string($koneksi, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($koneksi, $_POST['confirmPassword']);

        if ($password === $confirmPassword) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO user_info (fullname, email, password) VALUES ('$fullName', '$email', '$password')";
            $result = mysqli_query($koneksi, $query);
            if ($result) {
                $_SESSION['fullname'] = $fullName;
                $_SESSION['id'] = mysqli_insert_id($koneksi); 
                echo "<script>window.location.href = 'login.php';</script>";
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            echo "Password and Confirm Password do not match";
        }
    
        mysqli_close($koneksi);
    } else {
        echo "Invalid request";
        exit();
    }
    ?>
  </body>
</html>