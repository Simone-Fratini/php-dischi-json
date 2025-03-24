<?php
require_once('./function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-800">
    <header class="h-16 bg-black text-white flex items-center justify-center shadow-lg sticky top-0 z-50">
        <h1 class="text-2xl font-bold">Dischi PHP</h1>
        
    </header>
    
    <main class="container mx-auto px-4 py-8">
        <div class="mb-8 bg-gray-900 p-6 rounded-lg shadow-lg">
            <form action="./server.php" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-gray-300 text-sm font-medium">Titolo</label>
                    <input type="text" name="title" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md border border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
                </div>
                
                <div class="space-y-2">
                    <label class="block text-gray-300 text-sm font-medium">Artista</label>
                    <input type="text" name="artist" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md border border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
                </div>
                
                <div class="space-y-2">
                    <label class="block text-gray-300 text-sm font-medium">Anno</label>
                    <input type="text" name="year" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md border border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
                </div>
                
                <div class="space-y-2">
                    <label class="block text-gray-300 text-sm font-medium">Genere</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="rock" class="form-radio text-blue-500 focus:ring-blue-500 h-4 w-4 bg-gray-800 border-gray-700">
                            <span class="ml-2 text-gray-300">Rock Progressivo</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="Hard Rock" class="form-radio text-blue-500 focus:ring-blue-500 h-4 w-4 bg-gray-800 border-gray-700">
                            <span class="ml-2 text-gray-300">Hard Rock</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="pop" class="form-radio text-blue-500 focus:ring-blue-500 h-4 w-4 bg-gray-800 border-gray-700">
                            <span class="ml-2 text-gray-300">Pop</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="Grunge" class="form-radio text-blue-500 focus:ring-blue-500 h-4 w-4 bg-gray-800 border-gray-700">
                            <span class="ml-2 text-gray-300">Grunge</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="Hip Hop" class="form-radio text-blue-500 focus:ring-blue-500 h-4 w-4 bg-gray-800 border-gray-700">
                            <span class="ml-2 text-gray-300">Hip Hop</span>
                        </label>
                    </div>
                </div>

                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                        Aggiungi Discso
                    </button>
                </div>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            foreach($dischi as $disco){
            ?>
            <div class="bg-gray-900 rounded-lg shadow-xl hover:transform hover:scale-105 transition-all duration-300">
                <div class="flex flex-col items-center text-center p-4">
                    <img class="w-48 h-48 object-cover rounded-lg shadow-md" src="<?php echo $disco->cover; ?>" alt="<?php echo $disco->titolo; ?>">
                    <div class="font-bold uppercase text-white text-lg mt-4"><?php echo $disco->titolo;?></div>
                    <div class="text-gray-300 mt-2"><?php echo $disco->artista; ?></div>
                    <div class="text-gray-400 text-sm"><?php echo $disco->anno; ?></div>
                    <div class="mt-4 mb-2"><?php echo genereBadge($disco->genere); ?></div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>
</html>