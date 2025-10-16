<header class="topbar">
  <div class="logo">MiApp</div>

  <nav class="menu">
    <a href="#">Inicio</a>
    <a href="#">Productos</a>
    <a href="#">Contacto</a>
  </nav>

  <div class="user">
    <img src="https://ui-avatars.com/api/?name=Juan&background=4f46e5&color=fff" alt="Usuario">
    <span>Juan</span>
  </div>
</header>

<style>
.topbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #4f46e5; /* Azul bonito */
  color: white;
  padding: 10px 20px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  position: sticky;
  top: 0;
  z-index: 100;
}

.logo {
  font-size: 1.3rem;
  font-weight: 600;
  letter-spacing: 1px;
}

.menu {
  display: flex;
  gap: 20px;
}

.menu a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: opacity 0.2s ease;
}

.menu a:hover {
  opacity: 0.8;
}

.user {
  display: flex;
  align-items: center;
  gap: 8px;
}

.user img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: 2px solid white;
}
</style>
