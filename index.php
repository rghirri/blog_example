<?php require 'articles.php'; ?>

<?php require 'includes/header.php'; ?>

<h2>Administration</h2>

<p><a href="new_article.php">New article</a></p>

<?php if (empty($articles)): ?>
<p>No articles found.</p>
<?php else: ?>

<table>
 <thead>
  <tr>
   <th>Title</th>
  </tr>
 </thead>
 <tbody>
  <?php foreach ($articles as $article): ?>
  <tr>
   <td>
    <?= htmlspecialchars($article['title']) ?>
   </td>
  </tr>
  <?php endforeach; ?>
 </tbody>
</table>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>