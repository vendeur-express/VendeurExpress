@extends('layouts.superadmin.app')
@section('titre')
   Catégorie | VENDEUR EXPRESS
@endsection
@section('contenu')

    <div>
        <livewire:afficher-categorie>
    </div>

@endsection
@section('script') 
<script>
    window.addEventListener('close-modal', event => {
        $('#categorieModal').modal('hide');
        $('#updateCategorieModal').modal('hide');
        $('#deleteCategorieModal').modal('hide');
    })
</script>
@endsection