public function savecategory(Request $request){
  $this->validate($request,['label_cat'=>'required|unique:categorieProduit']);
  $category=new CategorieProduit();
  $category->label_cat=$request->input('label_cat');
  $category->dsc_cat$request->input('dsc_cat');
  $category->save();
  return back()->with('status','La catégorie a été enregistrée avec succès');
}

public function edit_category($id){
  $category=CategorieProduit::find($id);
  return view('superadmin.edit_category')->with('catecory',$category);
}

public deleteCategory($id){
  $category=CategorieProduit::find($id);
  $category->delete();
  session()->flash('message','Catégorie Supprimée avec succès');
}