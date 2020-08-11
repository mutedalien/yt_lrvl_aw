<p>create</p>
<form method="post" action="/projects">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" value="" placeholder="title">
    </div>
    <div>
        <textarea type="text" name="description" value="" placeholder="description" ></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
