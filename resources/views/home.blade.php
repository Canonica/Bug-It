@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           <div class="panel panel-default">
               <!-- Default panel contents -->
               <div class="panel-heading">Score des équipes</div>
               <!-- Table -->
               <table class="table table-hover table-condensed table-bordered">
                   <thead>
                       <tr>
                         <th>Nom</th>
                         <th>Score</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($teams as $team)
                           <tr>
                               <td class="col-md-6">{{ $team->name }}</td>
                               <td class="col-md-6">{{ $team->score }}</td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
          <div class="text-center">
            <a class="btn btn-warning" href="{{action('AdminController@resetScore')}}">Reset les scores</a>
          </div>
        </div>
        {{ Form::open(array('route' => 'imageHandler')) }}
        <div class="col-md-12">
            <div class="container">
              <div class="row top-buffer">
                <div class="form-group">
                    @foreach($images as $image)
                        <div class="col-md-3 col-sm-4 col-xs-6">
                          <label>
                            <img src="img/app/{{$image->name}}.png" alt="..." class="img-responsive img-check img-gallery btn btn-primary"><input type="checkbox" name="images[]" id="{{$image->name}}" value="{{$image->name}}" class="hidden checkbox" autocomplete="off">
                          </label>
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container">
              <div class="row top-buffer text-center">
                <p id="number"></p>
              </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="container">
              <div class="row top-buffer text-center">
                <span class="top-buffer">
                <input type="submit" value="Valider les photos" class="btn btn-success" name="button_validate">
                </span>
                <span class="top-buffer">
                <input type="submit" value="Supprimer les photos" class="btn btn-danger" name="button_remove">
                </span>
              </div>
            </div>
        </div>
        {{Form::close()}}
    </div>
</div>
@endsection
