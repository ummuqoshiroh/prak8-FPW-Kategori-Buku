<nav>
    <ul>
        <a href="/home"><li>Home</li></a>
        <a href="/buku"><li>Buku</li></a>
        <a href="/Wadah"><li>Wadah</li></a>
    </ul>

    <nav>

    <div>
        @auth
            <span>{{ Auth::user()->username }}</span>
            <form action="/logout" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
</nav>

    </nav>