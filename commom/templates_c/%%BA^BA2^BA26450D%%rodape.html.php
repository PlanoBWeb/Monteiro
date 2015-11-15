<?php /* Smarty version 2.6.12, created on 2015-11-13 12:04:42
         compiled from admin/rodape.html */ ?>
    <script>window.jQuery || document.write('<script src="commom/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="commom/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php echo '
    <script type="text/javascript">

        $(\'.ativa-select-acoes\').click(function(e) {
            e.preventDefault();
            var bloco_acoes = $(this).next( ".select-acoes" ).slideToggle(\'slow\')
            .siblings(\'.tgl:visible\').slideToggle(\'fast\');
        });
        
        $(document).mouseup(function (e){
            var bloco_acoes = $( ".select-acoes" );
            if( !bloco_acoes.is(e.target) && bloco_acoes.has(e.target).length === 0){
                $( bloco_acoes ).hide();
            }
        });
        
    </script>
'; ?>