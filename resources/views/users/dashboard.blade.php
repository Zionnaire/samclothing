{{--Create an admin dashboard --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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

        @include('partials.dashboardcard')
</x-layout>



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
