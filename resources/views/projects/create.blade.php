<h1>Create new project</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="/projects">
    {{csrf_field()}}
    <div>
        <input type="text" name="name" placeholder="enter project title">
    </div>
    <div>
        <textarea rows="10" type="text" name="description"> please enter a description </textarea>
    </div>
    <div>
        <label for="">deadline date</label>
        <input type="date" name="deadline" placeholder="enter deadline">
    </div>

    <input type="submit" value="Store Project">
</form>