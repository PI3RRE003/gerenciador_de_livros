<h3 class="mt-3 font-semibold"><?= $livro->titulo ?></h3>
<div class="p-2 rounded border-gray-800 border-2 bg-gray-900">
    <div class="flex">
        <div class="w-1/3">Imagem</div>
        <div class="space-y-1">
            <a class="font-semibold hover:underline m-1" href="/livro?id=<?= $livro->id ?>"><?= $livro->titulo ?></a>
            <div class="text-xs italic m-1"><?= $livro->autor ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 Avaliações)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $livro->descricao ?>
    </div>
</div>