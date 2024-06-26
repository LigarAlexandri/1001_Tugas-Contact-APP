<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1001-Tugas Contact APP</title>
  <link  rel="stylesheet" href="./output.css">
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="flex justify-center items-center h-screen" style="background-image: url('https://awsimages.detik.net.id/visual/2023/12/12/calon-presiden-capres-anies-baswedan-prabowo-subianto-dan-ganjar-pranowo-saat-debat-capres-2024-di-kantor-kpu-ri-jakarta-selas-6_169.jpeg?w=715&q=90'); background-size: cover; background-position: center;">
    <form action="<?= urlpath('login') ?>" method="POST">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md">
      <h1 class="mt-3 text-3xl block text-center font-semibold"><i class="fa-solid fa-user-large mr-5"></i>Login</h1>
      <hr class="mt-3">
      <div class="mt-3">
         <!-- Modified -->
          <label for="username" class="block text-base mb-2">Username</label>
          <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Username"> <!-- Modified -->
      </div>

      <div class="mt-3">
        <label for="Password" class="block text-base mb-2">Password</label>
        <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password"> <!-- Modified -->
      </div>

      <div class="mt-3 justify-between items-center">
        <div>
          <a href="#" class="text-red-600 font-semibold">Lupa Password?</a>
        </div>

        <div class="mt-5">
          <button id="loginButton" type="submit" class="border-2 border-green-600 bg-green-600 text-white py-1 px-5 w-full rounded-md hover:bg-transparent hover:text-green-300 font-semibold">
            <i class="fa-solid fa-right-to- bracket mr-5"></i>Login
          </button>
        </div>
      </div>
    </form> <!-- Modified -->

    <div class="mt-3">
      <button id="registerButton" class="border-2 border-blue-600 bg-blue-600 text-white py-1 px-5 w-full rounded-md hover:bg-transparent hover:text-blue-300 font-semibold">
        <i class="fa-solid fa-user-plus mr-5"></i>Belum punya akun?
      </button>
    </div>
  </div>
</div>

<script src="JS/Javascript.js"></script>

</body>
</html>
