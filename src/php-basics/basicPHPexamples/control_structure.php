<html>

<head>

</head>

<body>

    <?php $score = 90; ?>

    <?php if ($score >= 90): ?>
        <strong>A</strong>
        <?php if ($score >= 95): ?>
            <strong>+</strong>
        <?php endif; ?>
    <?php elseif ($score >= 80): ?>
        <strong>B</strong>
        <?php if ($score >= 85): ?>
            <strong>+</strong>
        <?php endif; ?>
    <?php elseif ($score >= 70): ?>
        <strong>C</strong>
        <?php if ($score >= 75): ?>
            <strong>+</strong>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>