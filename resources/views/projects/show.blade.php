@extends('master')

  @section('content')

    <h1> {{ $project->name }} </h1>

    @if ( $project->started )
      <p class="bg-success">This project is already started...</p>
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

    <form action="{{ action('projectsController@destroy', $project->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <input type="submit" value="Delete this project" class="btn btn-danger">
    </form>

  @endsection