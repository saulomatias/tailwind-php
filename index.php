<?php
$titulo = 'Início';
$nome = 'Estagiário';
include 'partials/header.php';
?>

<h1 class="text-3xl font-bold mb-4">Olá, <?= $nome ?>!</h1>

<div class="bg-white rounded-lg shadow p-6">
  <p class="mb-4">Se este card está branco, com sombra e o botão azul, o Tailwind está funcionando.</p>
  <button class="bg-marca hover:bg-blue-700 text-white px-4 py-2 rounded">Clique aqui</button>
</div>

<?php include 'partials/footer.php'; ?>
