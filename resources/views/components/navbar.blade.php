<nav class="fixed w-full bg-white shadow z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <div class="text-xl font-bold text-pink-600">
            Marketingo
        </div>

        <!-- Desktop -->
        <div class="hidden md:flex space-x-6 items-center">
            <a href="/" class="hover:text-pink-600">Welcome</a>

            <a href="/dashboard" class="hover:text-pink-600">
                Dashboard
            </a>

            <a href="#services" class="hover:text-pink-600">Services</a>
            <a href="#about" class="hover:text-pink-600">About</a>
            <a href="#projects" class="hover:text-pink-600">Projects</a>
            <a href="#contact" class="hover:text-pink-600">Contact</a>
        </div>

        <!-- Mobile Button -->
        <button id="menuBtn" class="md:hidden text-2xl">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-3 bg-white">

        <a href="/" class="block hover:text-pink-600">
            Welcome
        </a>

        <a href="/dashboard" class="block hover:text-pink-600">
            Dashboard
        </a>

        <a href="#services" class="block hover:text-pink-600">
            Services
        </a>

        <a href="#about" class="block hover:text-pink-600">
            About
        </a>

        <a href="#projects" class="block hover:text-pink-600">
            Projects
        </a>

        <a href="#contact" class="block hover:text-pink-600">
            Contact
        </a>

    </div>
</nav>

<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>