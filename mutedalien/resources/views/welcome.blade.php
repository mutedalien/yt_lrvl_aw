@extends('layout')

@section('content')
    <p>Main page</p>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>
@endsection
