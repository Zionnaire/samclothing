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
            display: flex;
            flex-direction: column;
            position: fixed;
            gap: 10px;
            padding: 20px;
            left: 0;
            top: 100px;
            height: 100%;
            width: 250px;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-out;
            border: #333 1px solid;
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
<div class="container" style="flex:1 0 auto ;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:20px;">
    <h1>Welcome to the admin dashboard</h1>
    <p>Here you can manage all of the collections, users, and tags</p>
</div>


</x-layout>

<div id="menu" >
    <h2 class="text-[18px] hover:text-hover">Admin Dashboard</h2>

        <ul class="list-unstyled list-group-flush flex flex-col gap-5 justify-center bg-white text-black hover:text-bgBtn">
            <li class="text-[17px] py-2 hover:text-hover text-center border-2 rounded-2xl hover:border-2 bg-btn shadow-lg"><a href="/admins/collections">All Collections</a></li>
            <li class="text-[17px] py-2 hover:text-hover text-center border-2 rounded-2xl hover:border-2 bg-btn shadow-lg"><a href="/user">All Users</a></li>
            <li class="text-[17px] py-2 hover:text-hover text-center border-2 rounded-2xl hover:border-2 bg-btn shadow-lg"><a href="/tags">All Tags</a></li>
            <li class="text-[17px] py-2 hover:text-hover text-center border-2 rounded-2xl hover:border-2 bg-btn shadow-lg"><a href="/admins/createDesign">Upload Designs</a></li>
        </ul>
</div>

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
