<!-- resources/views/partials/navbar.blade.php -->

<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-bold text-xl">Dashboard</a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('videos.index') }}" class="text-white">Goes to CMS</a></li>
            <!-- Link lainnya bisa ditambahkan -->
        </ul>
    </div>
</nav>
