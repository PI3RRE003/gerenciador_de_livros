<?php

require 'dados.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Book Wise</title>
</head>

<body class="bg-gray-950 text-gray-100">
    <header class="bg-gray-900">
        <nav class="mx-auto max-w-screen-lg  flex justify-between  py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="" class="text-indigo-500 hover:underline">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <form class="w-full flex space-x-2 mt-6">
            <input type="text" class="border-gray-800 border-2 rounded-md bg-gray-900 text-sm focus:outline-none px-2 py-2 mt-2" placeholder="Pesquisar">
            <button type="submit">🔎</button>
        </form>

        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 ">

            <?php foreach ($livros as $livro): ?>
                <div class="p-2 rounded border-gray-800 border-2 bg-gray-900">
                    <div class="flex">
                        <div class="w-1/3">Imagem</div>
                        <div class="space-y-1">
                            <a class="font-semibold hover:underline" href="/livro.php?id=<?= $livro['id'] ?>"><?= $livro['titulo'] ?></a>
                            <div class="text-xs italic"><? $livro['autor'] ?></div>
                            <div class="text-xs italic">⭐⭐⭐ (3 Avaliações)</div>
                        </div>
                    </div>
                    <div class="text-sm mt-2">
                        <?= $livro['descricao'] ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </section>
    </main>
</body>

</html>