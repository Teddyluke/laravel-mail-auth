
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2>
                    {{ $user -> name }}: {{$action}}
                  </h2>
                </div>

                <div class="card-body">
                  <div class="infobox">
                    <h4>Titolo: </h4> {{$book -> title}}
                  </div>

                  <div class="infobox">
                    <h4>Autore: </h4> {{$book -> author}}
                  </div>
                  <div class="infobox">
                    <h4>Casa Editrice: </h4> {{$book -> editor}}
                  </div>
                  <div class="infobox">
                    <h4>ISBN: </h4> {{$book -> isbn}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
