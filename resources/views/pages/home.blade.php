@extends('master')

  @section('title')
    home
  @endsection

  @section('content')
    <header>
      <h1>{{ config('app.name', 'Laravel') }}</h1>
    </header>
    <div class="main-content">
        <div class="projects">
          <h2>Laatste projecten</h2>
          <ul class="list-group">
            @foreach($projects as $project)
              <li class="list-group-item">
                <a href="{{ action('projectsController@show', $project->id) }}"> {{ $project->name }} </a>
              </li>
            @endforeach
          </ul>
        </div>
    </div>
  @endsection