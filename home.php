<?php

include('connection.php');

$sql = "
    SELECT mat, fullname, email, Tell, date_naissence, groupe, date_recrut FROM staf
    UNION
    SELECT id, fullname, email, Tell, date_naissence, NULL AS groupe, NULL AS date_recrut FROM stagaire
";
$result = $connect->query($sql);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    <header class="flex">
        <nav class="bg-gray-900 h-[100vh] text-white w-40 flex flex-col text-center gap-8 fixed " style="z-index:100;">
            <div class="text-2xl font-bold py-6 ">
                <img src="./assets/youcode.png" alt="">
            </div>
            <ul class="flex flex-col gap-6 font-bold mt-10 px-2">
                <li >
                     <a href="#"class=" hover:border hover:border-blue-600 py-2 rounded flex items-center justify-around ">Dashboard</a>
               </li>
               <li>
                     <a href="staf.php"class=" hover:border hover:border-blue-600 py-2 rounded flex items-center justify-around  ">
                     <svg class="flex-shrink-0 w-5 h-5  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                        Staff
                    </a>
               </li>
               <li>
                     <a href="#" class=" hover:border hover:border-blue-600 py-2 rounded flex items-center justify-around  ">
                     <svg class="w-5 h-5  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                     Intern</a>
               </li>
               <li class=" border border-red-600 py-2 rounded flex items-center justify-around   mb-20 hover:bg-red-600 py-2 rounded">
               <a href="login.php" class="flex items-center gap-4">Logout
               <svg class="flex-shrink-0 w-5 h-5  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               </a>
               </li>
                
            </ul>
        </nav>
        <div class="flex flex-col w-full">
            <div class="flex justify-between items-center bg-gray-800 p-4 fixed right-0 top-0 left-0 z-50">
                <form action="" method="POST" class="flex flex-row-reverse items-center md:ml-40 hidden md:block gap-4 text-white">
                    <label for="search">Search</label>
                    <input type="text" placeholder="Enter your search" id="search" name="search" class="w-80 h-10 rounded text-gray-900">
                </form>
                <a href=""><img src="./assets/logo.png" alt="logo" class="w-14 h-14 left-0"></a>
            </div>
         
            <main class="text-black p-4 ml-40 mt-20">
            <h1 class="text-2xl opacity-50 underline mb-2">Statistique </h1>
            <section class="flex  justify-center gap-8 mb-4 items-center">
                <div class="w-80 h-20 bg-red-300 rounded flex flex-col items-center  justify-center">
                   
                </div>
                <div class="w-80 h-20 bg-blue-300 rounded flex flex-col items-center  justify-center">

                </div>
                <div class="w-80 h-20 bg-green-300 rounded flex flex-col items-center  justify-center">

                </div>
            </section>
                <h1 class="text-2xl  underline mb-2 opacity-50 "> Members</h1>
            <table class="min-w-full bg-white   rounded-xl shadow-md  ">
                <thead class="bg-gray-800 text-white rounded-xl ">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold">ID</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Full Name</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Email</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Phone</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Date of Birth</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Group</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Date Recruited</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='hover:bg-gray-100'>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['mat'] . "</td>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['fullname'] . "</td>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['email'] . "</td>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['Tell'] . "</td>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['date_naissence'] . "</td>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['groupe'] . "</td>";
                            echo "<td class='py-3 px-6 text-sm'>" . $row['date_recrut'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center py-3 px-6 text-sm text-gray-600'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
          </table>
            </main>
        </div>
    </header>

    <script>
        // window.location.href = "home.php";
    </script>
</body>
</html>
