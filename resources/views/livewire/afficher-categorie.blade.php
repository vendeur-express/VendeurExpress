<div>
    @include('livewire.categorieModal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Catégorie
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#categorieModal">
                                Ajouter Catégorie
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom catégorie</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categorie as $ind=>$category)
                                    <tr>
                                        <td>{{$ind+1}}</td>
                                        <td>{{$category->label_cat}}</td>
                                        <td>{{$category->dsc_cat}}</td>
                                        {{-- {{ dd(Storage_path("app\\public\\images_categorie\\".$category->image_cat ))}} --}}
                                        <td>
                                            {{-- <img src={{$output = str_replace('\\', '/', Storage_path("public\\images_categories\\".$category->image_cat )) }}
                                            style="height:50px;width:100px"
                                            class="elevation-2"> --}}
                                            {{-- {{ dd(asset($category->image_cat)) }} --}}
                                            <img src="{{ asset("storage/images_categories/".$category->image_cat) }}"
                                            style="height:50px; width:100px"
                                            class="{{-- elevation-1 --}} img-responsive">
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateCategorieModal" wire:click="{{ editCategorie($category['id']) }}" class="btn btn-primary" >
                                                <i class="fas fa-pencil-alt"></i>
                                            </button >
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategorieModal" wire:click="deleteCategorie({{ /* $category['id'] */$category->id}})" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>




                                            {{-- <a href="{{ route('categorie.update',$category->id) }}"
                                                class="btn btn-primary" data-toggle="modal" data-target="#editcategorie">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('categorie.destroy',$category->id) }}" id="delete" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a> --}}
                                        </td>
                                    </tr>
                                   
                                @empty
                                    <tr>
                                        <td colspan="5">Aucune catégorie enregistrée</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $categorie->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script') 
<script>
    window.addEventListener('close-modal', event => {
        $('#categorieModal').modal('hide');
        $('#updateCategorieModal').modal('hide');
        $('#deleteCategorieModal').modal('hide');
    })
</script>
@endsection