<?php
    function navbar($links){
        echo '<header>
            <nav>
            <div class="company-name">
                <a href="#">Habyaad</a>
            </div>
            <ul class="nav-links">';
            foreach ($links as $link) {
                echo "<li><a href=' ${link['url']} '> ${link['label']} </a></li>";             
             }
           echo' </ul>
        </nav>
    </header>';
    }
?>