<hr>

<footer>
    <p>© Externo <?= Date("Y") ?></p>
</footer>

</div> <!-- /container -->

    
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

    <script type="text/javascript">
        $('#summernote').summernote({
            placeholder: 'Escreva o conteudo do post',
            tabsize: 2,
            height: 100
        });
    </script>

<?php } ?>


</body>
</html>