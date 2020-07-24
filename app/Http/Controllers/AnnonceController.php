<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AnnoncesImport;
use App\Imports\UploadExcel;
use App\Exports\AnnoncesExport;
use App\Annonce;
use App\AnnonceArchives;
use DB;
use Carbon\Carbon;

class AnnonceController extends Controller
{
     public function ImportExport()
    {
      $table[]=0;
       return view('file-import')->with('insert_data',$table);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function Import(Request $request) 
    {
      
        $this->validate($request, [
            'file' => 'required|mimes:csv,txt'
        ]);
	    $file=$request->file;
      DB::beginTransaction();
    try {

        $data = Excel::toArray(new AnnoncesImport, $request->file);
        foreach($data as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(

            'num_baosem'         =>$row['num_baosem'],
            'date_parution_reel' =>  Carbon::createFromFormat('d/m/Y', $row['date_parution_reel'])->format('Y-m-d'),
            'code_annonceur'     =>$row['code_annonceur'],
            'code_langue'       =>$row['code_langue'],
            'code_nature'        =>$row['code_nature'],
            'id_version'         =>$row['id_version'],
            'ref_montage'        =>$row['ref_montage'],
            'num_insertion'      =>$row['num_insertion'],
            'titre'              =>$row['titre'],
            'texte'              =>$row['texte'],
            'surface_reel_bloc'       =>$row['surface_reel_bloc'],
            
        );
       }
      }
      $success = true;
    } catch (\Exception $e) {
        $success = false;
        DB::rollBack();
    }
    if ($success) {
      

      if(!empty($insert_data))
         {

           $row=$insert_data[0];
           $num=$row['num_baosem'];
           if(Annonce::where('num_baosem', $num)->exists()){
            $annonce = Annonce::where('num_baosem', $num)->first();
              DB::table('annonces')->where('num_baosem', $num)->delete();
              DB::table('annonces')->insert($insert_data);
              DB::table('Annonces')
              ->where('num_baosem', $num)
              ->update(array('encours' => $annonce->encours));
             } else {
                
                    DB::table('annonces')->insert($insert_data);
                }

             }

  
      return view('site.admin.resultat')->with('insert_data',$insert_data);
}
else return back()->withwarning('fichier incorrect');
    
}

    /**
    * @return \Illuminate\Support\Collection
    */
    public function Export() 
    {
        return Excel::download(new AnnoncesExport, 'Annonces-collection.xlsx');
    } 
     public function Archive_file() 
    {
        return view('archives');
    }  
    public function archive(Request $request) 
    {
      $this->validate($request, [
        'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
        ]);
       $data=$request->year;
       
      if(DB::table('annonces')
       ->whereYear('date_parution_reel', $data)->exists())
      {
       DB::table('annonces')
       ->whereYear('date_parution_reel', $data)
       ->update(['encours' => 0]);
       return back()->withSuccess( 'l operation a réussi' );
      }else
      return back()->withwarning( 'Cette année n est pas disponible' );
      


    
      
       }

     }
