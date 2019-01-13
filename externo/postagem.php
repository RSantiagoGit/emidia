<?php include_once('includes/header.php'); ?>

<h2>Novo Post</h2>
<hr>
<?php if (isset($_SESSION['status'])) { ?>
    <div class="row">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Post criado com sucesso!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php }
unset($_SESSION['status']);
?>

<div class="row">
    <div class="col-6">
        <form method="post" action="core.php/addpost">
            <div class="form-group">
                <label for="iptTitulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="iptTitulo"
                       aria-describedby="emailHelp"
                       placeholder="Insira o titulo do Post"  required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Conteudo</label>
                <textarea id="summernote" name="editordata"  required></textarea>
            </div>

            <div class="form-group">
                <label for="selectStt">Status do Post</label>
                <select class="form-control" id="selectStt" name="status" >
                    <option value="draft">Rascunho</option>
                    <option value="publish">Publico</option>
                </select>
            </div>
            <div class="form-group">
                <label for="selectComm">Permitir Comentários</label>
                <select class="form-control" id="selectComm" name="comment">
                    <option value="closed">Não</option>
                    <option value="open">Sim</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-publish">Salvar Post</button>
        </form>
    </div>
</div>
<script>

    $('#summernote').keyup(function () {
        console.log(this.html());
    });

    //    $('.btn-publish').click(function () {
    //
    //
    //
    //
    //        var u = window.location.href.replace("postagem.php", "core.php/addpost");
    //        var o = {
    //            titulo: $("#iptTitulo").val(),
    //            conteudo: $('.note-editable').html(),
    //            status: $('#selectStt').val(),
    //            comentarios: $('#selectComm').val()
    //        };
    //
    //        $.post(u, {params : o}, function( data ) {
    //            alert( "Data Loaded: " + data );
    //        });
    //
    ////        $.ajax({
    ////            type: 'POST',
    ////            dataType: 'json',
    ////            //contentType:"application/json; charset=utf-8",
    ////            url: u,
    ////            async: true,
    ////            data: o,
    ////            success: function (data) {
    ////                alert("Post inserido com sucesso!");
    ////            },
    ////            error: function (data) {
    ////                alert("Erro ao salvar post, tente novamente!");
    ////            }
    ////        });
    //
    //    });

</script>
<?php include_once('includes/footer.php'); ?>
