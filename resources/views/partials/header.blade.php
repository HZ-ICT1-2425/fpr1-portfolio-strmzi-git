<nav class="navbar">
    <ul class="nav">
        <li class="{{ request()->is('/') ? 'active' : '' }} nav-item">
            <a href="/">Home</a>
        </li>
        <li class="{{ request()->is('profile') ? 'active' : '' }} nav-item">
            <a href="/profile">Profile</a>
        </li>
        <li class="{{ request()->is('blog') ? 'active' : '' }} nav-item">
            <a href="/blog">Blog</a>
        </li>
        <li class="{{ request()->is('dashboard') ? 'active' : '' }} nav-item">
            <a href="/dashboard">Dashboard</a>
        </li>
        <li class="{{ request()->is('faq') ? 'active' : '' }} nav-item">
            <a href="/faq">FAQ</a>
        </li>
    </ul>
</nav>
