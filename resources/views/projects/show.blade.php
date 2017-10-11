@extends('master')

  @section('content')
    @if ($project->completed)
      THIS PROJECT IS COMPLETED
    @endif


    <h1> {{ $project->name }} </h1>

    @if ( $project->started )
      <p class="bg-success">This project is already started...</p>

      <form method="post" action="{{ action('projectsController@finish', $project->id) }}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <input type="submit" value="Finish project" class="btn btn-success">
      </form>

    @else
      <form method="post" action="">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <input type="submit" value="Start project" class="btn btn-success">
      </form>
    @endif

    <table class="table table-striped">
      <tr>
        <th>Deadline</th>
        <td> {{ $project->deadline }} </td>
      </tr>
      <tr>
        <th>Description</th>
        <td>{{ $project->description }}</td>
      </tr>
    </table>
    <hr>
    <h3>Add task</h3>

    @if ( session('success') )
      <li> {{session('success')}} </li>
    @endif

    @if ( $errors->any() )
      @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
      @endforeach
    @endif

    <form method="post" action="{{ action('tasksController@store') }}">
      {{csrf_field()}}
      <input type="hidden" name="project_id" value="{{$project->id}}">

      <div class="form-group">
        <label for="categorie"> select categorie</label>
        <select class="form-control" name="categorie" id="categorie">
          <option value=""></option>
          @foreach($categories as $category)
            <option value="{{$category->id}}"> {{ $category->type }} </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="user">select user</label>
        <select class="form-control" name="user" id="user">
          <option value=""></option>

          @foreach($project->users as $user)
            <option value="{{$user->id}}"> {{ $user->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="title">Give your task a title</label>
        <input type="text" class="form-control" name="title" >
      </div>

      <div class="form-group">
        <label for="description">Please give some more info</label>
        <textarea name="description" class="form-control"></textarea>
      </div>
      
      <div class="form-group">
        <label for="deadline">deadline:</label>
        <input type="date" name="deadline" class="form-control">
      </div>

      <input type="submit" value="Add task" class="btn btn-info">
    </form>

    <form style="margin-top: 300px" action="{{ action('projectsController@destroy', $project->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <input type="submit" value="Delete this project" class="btn btn-danger">
    </form>

  @endsection