
<aside class="sidebar big">
  <nav class="side-nav">
    <a class="side-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
      <span class="sq-icon">▦</span> Dashboard
    </a>
    <a class="side-link" href="#">
      <span class="sq-icon">🧾</span> Request Certificate
    </a>
  </nav>
  <div class="side-footer">
    <a class="side-link danger" href="#"><span class="sq-icon">⟵</span> Log out</a>
  </div>
</aside>
