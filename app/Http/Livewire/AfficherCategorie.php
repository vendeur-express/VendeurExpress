<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class AfficherCategorie extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $label_cat,$dsc_cat,$categorie_id,$image_cat;
    public $search = '';
    protected function rules()
    {
        return [
            'label_cat' => 'required|string|min:6',
            'dsc_cat' =>'required|string',
            'image_cat' => 'required|string',
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveCategorie($request)
    {
        //
        $validatedData = $this->validate();

        Categorie::create($validatedData);

        if ($request->hasFile('image_cat')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('image_cat')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('image_cat')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('image_cat')->storeAs('public/images_categories', $fileNameToStore);
            // dd($path);
        } else {
            $fileNameToStore = 'sansimage.png';
        }
        $categorie=new Categorie();
        $categorie->label_cat=$request->input('label_cat');
        $categorie->dsc_cat=$request->input('dsc_cat');
        $categorie->image_cat=$fileNameToStore;
        $categorie->save();
        //return back()->with('status', 'la catégorie a été enregistrée avec succès');
        // Categorie::create($categorie->all());
        return redirect('categorie')->with('status','Catégorie creer avec success')->with('categorie',$categorie);
    }
    public function deleteCategorie(int $categorie_id)
    {
        $this->id = $categorie_id;
    }

    public function editCategorie(int $categorie_id)
    {
        $categorie=Categorie::find($categorie_id);
        if($categorie){
            $this->label_cat = $categorie->label_cat;
            $this->dsc_cat = $categorie->dsc_cat;
            $this->course = $categorie->course;
        }else{
            return redirect()->to('categorie');
        }
    }

    public function destroyCategorie($categorie_id)
    {
        //
        $categorie=Categorie::find($categorie_id);
        if($categorie->image_cat !='sansimage.jpg'){
            Storage::delete('public/images_categories/'.$categorie->image_cat);
        }
        session()->flash('status','Categorie Supprimée avec succès');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->label_cat = '';
        $this->dsc_cat = '';
        $this->image_cat = '';
    } 

    public function render()
    {
        $categorie=Categorie::where('label_cat','like','%'.$this->search.'%')->orderBy('id','DESC')->paginate(7);
        return view('livewire.afficher-categorie')->with('categorie', $categorie);
    }
}
