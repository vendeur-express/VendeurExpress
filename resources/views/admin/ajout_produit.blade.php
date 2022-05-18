@extends('layouts.admin.app')
@section('titre')
    AJOUT PRODUIT | VENDEUR EXPRESS
@endsection
@section('contenu')

<br/>
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="card card-secondary">
            {{-- card header --}}
            <div class="card-header text-center">
              <h3 class="card-title">Ajouter un produit</h3>
            </div>
            {{-- End Card header --}}
            {{-- card body --}}
            <div class="card-body"> 
              <Form class="container" enctype="multipart/form-data" name="form-produit">
                  {{-- row  1--}}
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="inputName">Nom produit</label>
                      <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                     <label for="prix">Prix (F CFA)</label>
                     <input id="prix" type="number"class="form-control" rows="4"/>
                   </div>
                    <div class="form-group">
                      <label for="inputDescription">Description</label>
                      <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="selectcategorie"> Catérogies produit</label>
                      <div class="row">
                        <div id="categorie"></div>
                      </div>
                    </div>
                    <div class="form-group">
                     <label for="inputStatus">Pays</label>
                     <select id="inputStatus" class="form-control custom-select">
                       <option selected disabled>Sélectionnez un pays</option>
                       <option>Burkina Faso</option>
                       <option>Mali</option>
                       <option>Benin</option>
                     </select>
                   </div>
                  </div>
                  {{-- end col 1 --}}
                  {{-- col 2 --}}
                <div class="col-md-4">
                  <div class="panel-heading">
                    <label>Images produit</label>
                  </div>

                  <div class="panel-body">
                    <form action="url" enctype="multipart/form-data">
                      <div class="input-images"></div>
                    </form>
                      <div>
                        <button class="btn btn-info" id="submit-all">Téléchargez</button>
                      </div>
                    </div>
                  
                  </div>
                </div>
                {{-- end col 2 --}}
              </div>
              {{-- end row 1 --}}
              
              </Form>
                
              
            </div>
        </div>
      </div>

    </section>
</div>
<script>
  var options = [
  {text: "Arabic", selected: true,     disabled: false,  hidden: false},
  {text: "Belarusian", selected: true,    disabled: true,   hidden: true},
  {text: "Chinese",  selected: true,     disabled: false,  hidden: false},
  {text: "Dutch", selected: true, disabled: false,  hidden: false},
  {text: "English",  selected: false, disabled: false,  hidden: false},
  {text: "French", selected: false, disabled: false,  hidden: false},
  {text: "Greek", selected: false, disabled: false,  hidden: false},
  {text: "Hindi", selected: false, disabled: false,  hidden: false},
  {text: "Italian", selected: false, disabled: false,  hidden: false}
  ];

var $multiSelects = $("#categorie");
$('.multiSelects').bsMultiSelect({
  options:options, 
      getDisabled: function(){return false },
      getIsOptionDisabled: function(o){ return o.disabled },
      getIsOptionHidden: function(o){ return o.hidden }
})

</script>
<script>
  let preloaded = [
  {id: 1, src: 'https://picsum.photos/500/500?random=1'},
  {id: 2, src: 'https://picsum.photos/500/500?random=2'},
  {id: 3, src: 'https://picsum.photos/500/500?random=3'},
  {id: 4, src: 'https://picsum.photos/500/500?random=4'},
  {id: 5, src: 'https://picsum.photos/500/500?random=5'},
  {id: 6, src: 'https://picsum.photos/500/500?random=6'},
];

$('.input-images').imageUploader({
  preloaded:preloaded,
  extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
  mimes: ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'],
  maxSize: undefined,
  maxFiles: undefined,
});	
   
// $( document ).ready(function() {
//   alert("Hello");
// });
</script>

@endsection