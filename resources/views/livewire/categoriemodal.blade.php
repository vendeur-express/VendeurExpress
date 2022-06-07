{{-- ajout modal --}}
<div wire:ignore.self class="modal fade" id="categorieModal" tabindex="-1" aria-labelledby="categorieModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categorieModalLabel">Ajout catégorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveCategorie">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nom Categorie</label>
                        <input type="text" wire:model="label_cat" class="form-control">
                        @error('label_cat') <span class="text-danger">{{ $status }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" wire:model="dsc_cat" class="form-control">
                        @error('dsc_cat') <span class="text-danger">{{ $status }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Image Catégorie</label>
                        <input type="file" wire:model="image_cat" class="form-control">
                        @error('image_cat') <span class="text-danger">{{ $status }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Editer Catgorie modal -->
<div wire:ignore.self class="modal fade" id="updateCategorieModal" tabindex="-1" aria-labelledby="updateCategorieModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCategorieModalLabel">Edit Categorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateCategorie">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Categorie Name</label>
                        <input type="text" wire:model="label_cat" class="form-control">
                        @error('label_cat') <span class="text-danger">{{ $status }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" wire:model="dsc_cat" class="form-control">
                        @error('dsc_cat') <span class="text-danger">{{ $status }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Image Categorie</label>
                        <input type="text" wire:model="image_cat" class="form-control">
                        @error('image_cat') <span class="text-danger">{{ $status }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Categorie Modal -->
<div wire:ignore.self class="modal fade" id="deleteCategorieModal" tabindex="-1" aria-labelledby="deleteCategorieModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategorieModalLabel">Delete Categorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategorie">
                <div class="modal-body">
                    <h4>Êtes-vous sûre de vouloir supprimer la catégorie ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Oui! supprimer</button>
                </div>
            </form>
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