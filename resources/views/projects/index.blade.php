@foreach($projects as $project)
    <h3>{{$project->id}}. {{$project->name}}</h3>
    <p> {{ $project->description }} </p>
@endforeach
