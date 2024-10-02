<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikipedia Search Results</title>
</head>
<body>
    <h1>Wikipedia Search Results</h1>
    <?php if (!empty($results)): ?>
        <ul>
        <?php foreach ($results as $result): ?>
            <li>
                <a href="https://en.wikipedia.org/wiki/<?php echo urlencode($result['title']); ?>" target="_blank">
                    <?php echo htmlspecialchars($result['title']); ?>
                </a>
                <p><?php echo htmlspecialchars($result['snippet']); ?>...</p>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>
    <a href="/">Go Back</a>
</body>
</html>
