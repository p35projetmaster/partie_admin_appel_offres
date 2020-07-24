@extends('site.admin.home')

@section('corp')

   

<form action="{{ route('file-import')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-12 col-12">	</div>
            <div class="col-lg-8 col-12">
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" required onchange="triggerValidation(this)">
                    <label class="custom-file-label" for="customFile">Choisir une annonce</label>
                </div></div>
            </div>
            <div class="col-lg-4 col-12">
           <button class="btn btn-primary">Import Annonce</button>
       </div>
   </div>
        </form>
       


        <form action="{{ route('fileimport') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-12 col-12">	</div>
            <div class="col-lg-8 col-12">
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choisir annonceur</label>
                </div></div>
            </div>
            <div class="col-lg-4 col-12">
           <button class="btn btn-primary">Import Annonceur</button>
       </div>
   </div>
   
        </form>
   
   @if( Session::has( 'success' ))
     {{ Session::get( 'success' ) }}
@elseif( Session::has( 'warning' ))
     {{ Session::get( 'warning' ) }} <!-- here to 'withWarning()' -->
@endif      

@endsection
<script type="text/javascript">
  var regex = new RegExp("(.*?)\.(csv)$");

function triggerValidation(el) {
  if (!(regex.test(el.value.toLowerCase()))) {
    el.value = '';
    alert('Inserer un Fichier csv');
  }
}
var content;
// First I want to read the file
fs.readFile('./local.csv', function read(err, data) {
    if (err) {
        throw err;
    }
    content = data;
    processFile();          // Or put the next step in a function and invoke it
});



</script>
