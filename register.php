<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login -Pgae</title>
</head>
<body>
    <h1 class="font-extrabold text-center text-2xl mt-8">Login/Rgister</h1>
    <span class="flex justify-center items-center mt-8 ">
    <form action="" method="post" class="flex flex-col justify-center mt-8 bg-gray-200 p-20 gap-4 rounded-xl">
        <div  class="flex flex-col gap-2">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="charaf eddine" class="rounded-md p-2 mt-2 w-80">
        </div>
        <div  class="flex flex-col gap-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" class="rounded-md p-2 mt-2 w-80">
        </div>
        <div class="flex flex-col gap-2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder=".........." class="rounded-md p-2 mt-2 w-80">
        </div>
         <div class="flex justify-center">
                <button type="submit" class="p-2 mt-8 w-20 bg-green-500 hover:bg-green-700 text-white rounded-md font-bold">Register</button>
         </div>
         <a href="login.php" class="mt-2 text-center">Go to Login </a>

    </form>
    </span>
   
</body>
</html>