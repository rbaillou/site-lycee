<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Creation Article</title>

</head>

<!--Header-->

@include('menuAdminHeader')
<body>
    <br>
    <form method="post" class='container' id='form' action='/creationArticle/create' enctype="multipart/form-data">
    @csrf
        <!--Titre-->

        <div class="form-group">
          <label for="exampleInputTitre">Titre*</label>
          <input required class="form-control" name="titre"  placeholder="Titre de l'article">
        </div>

        <!--Accroche-->

        <div class="form-group">
          <label for="exampleInputAccroche">Accroche*</label>
          <textarea required class="form-control" name="accroche" rows="2" placeholder="Phrase d'accroche"></textarea>
        </div>

        <!-- Editeur de texte -->

        <div>
            <label for="exampleInputAccroche">Texte*</label>
            <textarea class="form-control" id="summary-ckeditor"></textarea>
        </div>
            
        <div class="form-group">
                <textarea class="form-control" name='texte' id="result" style="display:none;" rows="20" name="URL"></textarea>
        </div>


        <!--Choix des fichiers-->

        <div class="row">

            <div class="form-group col-md-3">
                <label for="exampleFormControlFileImage">Image principale :* </label><br>
                <input required type="file" name="image" accept="image/*">
            </div>

            <div class="form-group col-md-3">
                <label for="exampleFormControlFileImage">Image secondaire #1 : </label><br>
                <input type="file" name="image2" accept="image/*">
            </div>

            <div class="form-group col-md-3">
                <label for="exampleFormControlFileImage">Image secondaire #2 : </label><br>
                <input type="file" name="image3" accept="image/*">
            </div>

            <div class="form-group col-md-3">
                <label for="exampleFormControlFileImage">Pieces jointes : </label><br>
                <input type="file" name="filename[]" accept="file/*" multiple="multiple">
            </div>

        </div>
        <button class="btn btn-primary" id='submit' type="submit">Envoyer</button>
    </form>
    <br>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

<!--Footer-->


</html>

<script>
    CKEDITOR.replace( 'summary-ckeditor' );

    $(function () {
        $("#submit").click(function (e) {
            try {
                $('form#form').submit();
                var content = CKEDITOR.instances['summary-ckeditor'].getData();
                $("textarea#result").val(content);
                
            }
            catch (exc) {
                alert("Erreur, échec de la génération du code HTML.");
            }
        });
    });

    function traduction(){
        try {
                e.preventDefault();
                var content = CKEDITOR.instances['summary-ckeditor'].getData();
                $("textarea#result").val(content);
                alert(content);
            }
            catch (exc) {
                alert("Erreur, échec de la génération du code HTML.");
            }
    }
</script>
