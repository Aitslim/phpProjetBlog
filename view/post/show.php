<div class="card border-dark mb-3">
    <div class="card-header"><?= htmlspecialchars($post['user']) . ', le ' . date_format(date_create(htmlspecialchars($post['date'])), 'd/m/y H:i:s') ?></div>
    <div class="card-body">
        <h4 class="card-title"><?= htmlspecialchars($post['title']) ?></h4>
        <p class="card-text"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    </div>
</div>
<p><a href="?page=post.home">Retour à la liste des articles</a></p>