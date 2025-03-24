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
<body class="bg-gray-700">
    <header class="h-10 bg-black text-white text-center">
        <h1 class="text-xl">Dischi PHP</h1>
    </header>
    
    <main class="flex justify-center">
        <div class="grid grid-cols-3 gap-4 max-w-5xl">
            <?php
            foreach($dischi as $disco){
                
            ?>
            <div class="bg-gray-500 h-50 text-white rounded-md mt-10">
                <div class="flex flex-col items-center text-center">
                    <img class="" src="<?php ?>" alt="img">
                    <div><?php echo $disco->titolo;?></div>
                    <div><?php echo $disco->artista; ?></div>
                    <div><?php echo $disco->anno; ?></div>
                </div>
            </div>
            <?php
            }

            ?>
        </div>
    </main>
    
</body>
</html>