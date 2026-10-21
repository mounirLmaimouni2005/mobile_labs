<h1>Liste des categories</h1>

<ul>
    @foreach ($categories as $category )
       <li>{{ $category->name }}</li>
    @endforeach
</ul>