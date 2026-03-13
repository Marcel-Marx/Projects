<!DOCTYPE html>
<html>
<ul>
    @forelse($logins as $login)
    <li>
        {{$login->login}}
        {{$login->password}}
    </li>
    @empty
    <li>Noch keine Daten</li>
    @endforelse
</ul>
</html>
