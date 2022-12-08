<h1>Welcome!</h1>
<p> Hello,
    <?php echo $name ?>!
</p>

<ul>
    <?php
    foreach ($skills as $skill) {
        echo '<li>' . $skill . '</li>';
    }
    ?>
</ul>