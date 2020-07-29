    <footer class="footer">
        <div class="container">
            <a href="tel:<?php the_field('phone')?>" class="phone"><?php the_field('phone')?></a>
            <div class="footer-email">
                <a href="mailto:<?php the_field('footer-email')?><">
                <?php the_field('footer-email')?>
             </a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>