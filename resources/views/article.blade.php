<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
@include('header')
<body>
    <br>
    <div id="filtre">
    <br>
    <h1 class="display-4">&nbsp;Filtrer les articles</h1>
    <div class="col-md-9 col-md-push-1 ">

        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <select id="btnChoix" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <option>Categorie</option>
                                <option>Username</option>
                                <option>Email</option>
                                <option>Student Code</option>
                            </select>
                        </div>

                        <input type="hidden" name="search_param" value="all">
                        <input type="text" id="search" class="form-control" name="x" placeholder="Search term..." id="search_param">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

    <br>

    <div class="grid-container"  id="article">
        @foreach ($articles as $article)
        <div class="card" style="width: 100%; height: 400px;">
            <img class="card-img-top" src="/img/300x200.jpg" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title" >{{$article->titre}}</h5>
              <p class="card-text" style="font-size: 15px;">{{$article->accroche}}</p>
              <a href="#" class="btn btn-primary">Consulter</a>
            </div>
          </div>
        @endforeach
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
@include('footer')
</html>

<style>
.grid-container {
  display: grid;
  grid-template-columns: 19% 19% 19% 19% 19%;
  grid-gap: 1%;
  background-color: #ffffff;
  padding: 10px;
}

#filtre{
    border-color: black;
    border-radius: 5px;
    border-style: solid;
    width: 30%;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  font-size: 30px;
}

#btnChoix{
    border-color: black;
}
#search_param{
    border-color: black;
}
</style>

<script>
    $(document).ready(function(){
           $('#search').keyup(function(){
                search_table($(this).val());
           });



           function search_table(value){
                $('#article div').each(function(){
                     var found = 'false';
                     $(this).each(function(){
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                          {
                               found = 'true';
                          }
                     });
                     if(found == 'true')
                     {
                          $(this).show();
                     }
                     else
                     {
                          $(this).hide();
                     }
                });
           }
      });
</script>
