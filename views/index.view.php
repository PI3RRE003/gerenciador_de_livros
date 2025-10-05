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
                            <a class="font-semibold hover:underline" href="/livro?id=<?= $livro['id'] ?>"><?= $livro['titulo'] ?></a>
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