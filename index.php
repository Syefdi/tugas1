<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title = 'syefdi'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <div class="header">
        <img src="download (4).jpeg" alt="Header Image" />
    </div>
    <p>selamat membaca.</p>
</header>

<body>
    <?php
    $menu = ['Home', 'Sport', 'Finance', 'Health'];
    ?>
    <div class="menu">
        <?php foreach ($menu as $item) : ?>
            <span><?php echo $item; ?></span>
        <?php endforeach; ?>
    </div>


    <div class="table">
        <table class="layout">
            <tr>

                <?php
                $sports = ["Sport1", "Sport2", "Sport3", "Sport4"];
                $archives = ["Archive1", "Archive2", "Archive3", "Archive4"];

                echo '<td class="sidebar">
                        <ul>
                            <a>Sport</a>';
                foreach ($sports as $sport) {
                    echo "<li><a>$sport</a></li>";
                }
                echo '</ul>
                        <ol>
                            <a>Archive</a>';
                foreach ($archives as $archive) {
                    echo "<li><a>$archive</a></li>";
                }
                echo '</ol>
                    </td>';
                ?>
                <td class="content">
                    <div class="post">
                        <div class="post-number">1.</div>
                        <img src="https://placehold.co/300x150" class="post-image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolorem minima numquam atque
                            distinctio a
                            quam odit, doloribus, qui beatae iure eius nam asperiores cumque voluptatibus sed libero
                            autem,
                            reprehenderit error.</p>
                    </div>
                    <div class="post">
                        <div class="post-number">2.</div>
                        <img src="https://placehold.co/300x150" class="post-image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolorem minima numquam atque
                            distinctio a
                            quam odit, doloribus, qui beatae iure eius nam asperiores cumque voluptatibus sed libero
                            autem,
                            reprehenderit error.</p>
                    </div>
                    <div class="post">
                        <div class="post-number">3.</div>
                        <img src="https://placehold.co/300x150" class="post-image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolorem minima numquam atque
                            distinctio a
                            quam odit, doloribus, qui beatae iure eius nam asperiores cumque voluptatibus sed libero
                            autem,
                            reprehenderit error.</p>
                    </div>
                    <div class="post">
                        <div class="post-number">4.</div>
                        <img src="https://placehold.co/300x150" class="post-image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolorem minima numquam atque
                            distinctio a
                            quam odit, doloribus, qui beatae iure eius nam asperiores cumque voluptatibus sed libero
                            autem,
                            reprehenderit error.</p>
                    </div>
                    <div class="post">
                        <div class="post-number">5.</div>
                        <img src="https://placehold.co/300x150" class="post-image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolorem minima numquam atque
                            distinctio a
                            quam odit, doloribus, qui beatae iure eius nam asperiores cumque voluptatibus sed libero
                            autem,
                            reprehenderit error.</p>

                </td>
                <td class="profile">
                    <h3>Tentang Saya</h3>
                    <img src="profil.jpeg" alt="Profile Picture" class="profile-image">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eus, quos! Magni earum veritatis
                        recusandae
                        blanditiis consectetur aut culpa laudantium sed. Tempora incidunt nulla labore aliquam at,
                        aliquid nam
                        aperiam error!</p>
                </td>
            </tr>
        </table>
    </div>
    <footer>
        <p><?php echo $footer_content = 'Created by syefdi @ 2024'; ?></p>
    </footer>
</body>

</html>