    
@extends('site.admin.home')

@section('corp')

   

      @if(count($insert_data) > 1)
 @foreach($insert_data as $data)
 <table class="table table-bordered">
            <thead>
            <tr>
                <td>num_baosem</td>
                <td>date_parution_reel</td>
                <td>code_annonceur</td>
                <td>ref_montage</td>
                <td>num_insertion</td>
                <td>titre</td>
               
            </tr>
            </thead>
            
            @foreach($insert_data as $data)
                <tr>
                    <td>{{$data['num_baosem']}}</td>
                    <td>{{$data['date_parution_reel']}}</td>
                    <td>{{$data['code_annonceur']}}</td>
                    <td>{{$data['ref_montage']}}</td>
                    <td>{{$data['num_insertion']}}</td>
                    <td>{{$data['titre']}}</td>
                    

                </tr>
            @endforeach
        </table>

 @endforeach
 @endif
 @endsection        