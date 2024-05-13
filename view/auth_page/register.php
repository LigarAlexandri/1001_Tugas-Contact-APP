<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
    <div class="flex justify-center items-center h-screen" style="background-image: url('https://awsimages.detik.net.id/visual/2023/12/12/calon-presiden-capres-anies-baswedan-prabowo-subianto-dan-ganjar-pranowo-saat-debat-capres-2024-di-kantor-kpu-ri-jakarta-selas-6_169.jpeg?w=715&q=90'); background-size: cover; background-position: center;">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="mt-3 text-3xl block text-center font-semibold"><i class="fa-solid fa-user-plus mr-5"></i>Register</h1>
            <hr class="mt-3">
            <div class="mt-3">
                <label for="fullname" class="block text-base mb-2">Full Name</label>
                <input type="text" id="fullname" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Nama">
            </div>

            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Password">
            </div>

            <div class="mt-3 justify-between items-center">
                <button id="registerButton" class="border-2 border-blue-600 bg-blue-600 text-white py-1 px-5 w-full rounded-md hover:bg-transparent hover:text-blue-300 font-semibold">
                    <i class="fa-solid fa-user-plus mr-5"></i>Register
                </button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
