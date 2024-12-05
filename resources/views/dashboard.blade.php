<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Dashboard Content -->
        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">Welcome to the CMS Dashboard</h1>
            <p class="mb-4">Here you can manage your content, including videos, and view statistics.</p>

            <!-- Daftar Video -->
            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-3">Latest Videos</h2>
                @foreach ($videos as $video)
                    <div class="video mb-6 p-4 border rounded-lg shadow-sm bg-white">
                        <h3 class="text-lg font-semibold">{{ $video->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $video->description }}</p>
                        
                        <!-- Embedded Video from YouTube -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
