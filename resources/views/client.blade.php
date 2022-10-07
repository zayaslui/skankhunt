<h2>Personal Access Tokens</h2>
<form action="{{ url('/oauth/personal-access-tokens') }}" method="POST">
    <input type="text" name="name" placeholder="Nombre" />
    <input type="submit" value="Crear" />
    {{ csrf_field() }}
</form>