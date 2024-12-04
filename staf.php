<?php
include('connection.php');
$sql= "SELECT * FROM staf";
$result_staf= $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<body class="bg-gray-100">
    <header class="flex">
        <nav class="bg-gray-900 h-[100vh] text-white w-40 flex flex-col text-center gap-8 fixed " style="z-index:100;">
            <div class="text-2xl font-bold py-6 ">
                <img src="./assets/youcode.png" alt="">
            </div>
            <ul class="flex flex-col gap-6 font-bold mt-10 px-2">
                <li >
                     <a href="home.php" class=" hover:border hover:border-blue-600 py-2 rounded flex items-center justify-around ">Dashboard</a>
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
                <h1 class="text-2xl  underline mb-2 opacity-50 "> Members</h1>
            <div class="flex justify-end gap-4 p-4">
                <select name="" id="" class="bg-gray-300 p-2 rounded">
                    <option value="">Filter par</option>
                    <option value="Group">par Group</option>
                    <option value="date_recrute">par date_recrute</option>
                    <option value="date_Birth">par date_Birth</option>
                </select>
                <button class="border-2 border-blue-600 hover:bg-blue-600 p-2 rounded" id="new_staf">Add New Staf</button>
            </div>
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
                    if ($result_staf) {
                        while ($row = $result_staf->fetch_assoc()) {
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
            <section class="form_staf fixed hidden top-20  left-1/2  bg-gray-900 text-white p-8 rounded-lg shadow-lg z-50">
    <form action="" method="post" class="space-y-6">
        <div class="flex flex-col space-y-2">
            <label for="fullname" class="text-sm font-medium">Full Name</label>
            <input 
                type="text" 
                id="fullname" 
                name="fullname" 
                class="w-full px-4 py-2 rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
        </div>

        <div class="flex flex-col space-y-2">
            <label for="Tell" class="text-sm font-medium">Phone</label>
            <input 
                type="text" 
                id="Tell" 
                name="Tell" 
                class="w-full px-4 py-2 rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
        </div>

        <div class="flex flex-col space-y-2">
            <label for="date_naissence" class="text-sm font-medium">Date of Birth</label>
            <input 
                type="date" 
                id="date_naissence" 
                name="date_naissence" 
                class="w-full px-4 py-2 rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
        </div>

        <div class="flex flex-col space-y-2">
            <label for="groupe" class="text-sm font-medium">Group</label>
            <input 
                type="text" 
                id="groupe" 
                name="groupe" 
                class="w-full px-4 py-2 rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
        </div>

        <div class="flex flex-col space-y-2">
            <label for="date_recrut" class="text-sm font-medium">Date Recruited</label>
            <input 
                type="date" 
                id="date_recrut" 
                name="date_recrut" 
                class="w-full px-4 py-2 rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
        </div>

        <div class="flex justify-between items-center space-x-4 mt-4">
            <button 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded transition duration-200">
                Save
            </button>
            <button 
                type="button" 
                class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded transition duration-200">
                Close
            </button>
        </div>
    </form>
</section>

        </div>
    </header>


    <script>
        document.getElementById("new_staf").addEventListener("click", function() {
            document.querySelector(".form_staf").classList.toggle("hidden")
        })
    </script>
</body>
</html>