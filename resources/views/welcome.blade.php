@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Welcome to the To-Do Application</h1>

    <section>
        <h2 class="section-title">Technologies Used</h2>
        <ul>
            <li><strong>Laravel:</strong> Backend framework for handling routing, models, and controllers.</li>
            <li><strong>MySQL:</strong> Database used to store tasks and related data.</li>
            <li><strong>Blade:</strong> Templating engine for building dynamic views.</li>
            <li><strong>Bootstrap:</strong> Frontend framework for styling and responsive design.</li>
        </ul>
    </section>

    <section>
        <h2 class="section-title">Application Features</h2>
        <ul>
            <li>Create, edit, and delete tasks efficiently.</li>
            <li>Mark tasks as complete or incomplete.</li>
            <li>Filter tasks by status (completed, pending).</li>
            <li>Responsive design for use on both desktop and mobile devices.</li>
        </ul>
    </section>

    <section>
        <h2 class="section-title">How the Application is Organized</h2>
        <ul>
            <li><strong>Controllers:</strong> Handle the business logic and interact with models.</li>
            <li><strong>Models:</strong> Represent the data structure (e.g., `Task` model).</li>
            <li><strong>Views:</strong> Blade templates for displaying the content to the user.</li>
            <li><strong>Routes:</strong> Define the endpoints for application navigation.</li>
        </ul>
    </section>
</div>
@endsection