{{--Create an admin dashboard --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #menu {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 250px;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-out;
        }

        #menu.active {
            transform: translateX(0);
        }

        #menuToggle {
            position: fixed;
            left: 20px;
            top: 20px;
            cursor: pointer;
            z-index: 1;
        }

        #menuToggle div {
            width: 30px;
            height: 3px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
        }

        #menuToggle.active div:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        #menuToggle.active div:nth-child(2) {
            opacity: 0;
        }

        #menuToggle.active div:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
    </style>
</head>
<body>
    <x-layout>

<div id="menu">
         <h1>Welcome to the admin dashboard</h1>
        <h2>Admin Dashboard</h2>
        <ul class="list-unstyled list-group mb-3 list-group-flush flex flex-col gap-4 justify-center items-center bg-white hover:bg-black text-black hover:text-white border-2 border-gray-200 rounded-lg w-[30%]">
            <li class="text-[18px] hover:text-hover"><a href="/collections">All Collections</a></li>
            <li class="text-[18px] hover:text-hover"><a href="/user">All Users</a></li>
            <li class="text-[18px] hover:text-hover"><a href="/tags">All Tags</a></li>
            <li class="text-[18px] hover:text-hover"><a href="/create">Upload Designs</a></li>
        </ul>
</div>
</x-layout>


<div id="menuToggle" onclick="toggleMenu()">
    <div></div>
    <div></div>
    <div></div>
</div>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        const menuToggle = document.getElementById('menuToggle');
        
        menu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    }
</script>

</body>
</html>
