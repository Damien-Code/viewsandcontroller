<?php
require './views/layout/head.php';
?>

<!-- Start Main -->
<main>
    <aside class="sidebar-l">
        <h2>Menu</h2>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </aside>
    <section id="myContent" class="content">
        <h1>Main Content</h1>
        <p>This is where the main content goes.</p>
    </section>
    <aside class="sidebar-r">
        <h2>Events List</h2>
        <ul>
            <li>Event 1</li>
            <li>Event 2</li>
            <li>Event 3</li>
        </ul>
    </aside>
</main>
<!-- End main -->

<!-- Start Footer -->
<?php
require './views/layout/foot.php';
?>
