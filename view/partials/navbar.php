<style>
    .site-header {
        padding: 12px 16px;
        background: #fff;
        border-bottom: 1px solid #fff;
    }

    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        padding: 10px 24px;
        background: linear-gradient(90deg, #eaf4ff, #f7fbff 50%, #eaf4ff);
        border: 1px solid #d6e8fb;
        border-radius: 18px;
    }

    /* Brand */
    .brand {
        display: flex;
        align-items: center;
        gap: 14px;
        text-decoration: none;
        color: #12295a;
        flex-shrink: 0;
    }

    .brand-logo {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        overflow: hidden;
        background: #dbeafe;
        display: grid;
        place-items: center;
    }

    .brand-logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .brand-copy {
        display: flex;
        flex-direction: column;
        line-height: 1.25;
    }

    .brand-copy strong {
        font-size: 1.05rem;
        letter-spacing: .02em;
    }

    .brand-copy span {
        font-size: .8rem;
        color: #2b3f6b;
    }

    /* Buscador */
    .search {
        position: relative;
        flex: 1;
        max-width: 460px;
    }

    .search input[type="search"] {
        width: 100%;
        padding: 11px 16px 11px 44px;
        border: 1px solid #d3e3f5;
        border-radius: 999px;
        background: rgba(255, 255, 255, .7);
        font-size: .9rem;
        outline: none;
    }

    .search input[type="search"]:focus {
        border-color: #6aa8f0;
        box-shadow: 0 0 0 3px rgba(106, 168, 240, .2);
    }

    .search-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        width: 18px;
        height: 18px;
    }

    /* Iconos SVG */
    .topbar svg {
        fill: none;
        stroke: #12295a;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    /* Acciones */
    .topbar-actions {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .icon-btn {
        background: none;
        border: 0;
        padding: 6px;
        cursor: pointer;
        border-radius: 50%;
    }

    .icon-btn:hover {
        background: rgba(18, 41, 90, .08);
    }

    .icon-btn svg {
        width: 22px;
        height: 22px;
        display: block;
    }

    .divider {
        width: 1px;
        height: 30px;
        background: #cfdcec;
    }

    /* Menú de usuario */
    .user-menu {
        position: relative;
    }

    .user-toggle {
        display: flex;
        align-items: center;
        gap: 10px;
        background: none;
        border: 0;
        cursor: pointer;
        color: #12295a;
        font-size: .95rem;
        padding: 4px 6px;
        border-radius: 999px;
    }

    .user-toggle:hover {
        background: rgba(18, 41, 90, .06);
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #3b8de0;
        display: grid;
        place-items: center;
    }

    .avatar svg {
        width: 22px;
        height: 22px;
        stroke: #fff;
        fill: #fff;
    }

    .chevron {
        width: 16px;
        height: 16px;
        transition: transform .2s;
    }

    .user-toggle[aria-expanded="true"] .chevron {
        transform: rotate(180deg);
    }

    .dropdown {
        position: absolute;
        right: 0;
        top: calc(100% + 10px);
        min-width: 180px;
        margin: 0;
        padding: 6px;
        list-style: none;
        background: #fff;
        border: 1px solid #d6e8fb;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(18, 41, 90, .15);
        z-index: 100;
    }

    .dropdown[hidden] {
        display: none;
    }

    .dropdown a {
        display: block;
        padding: 10px 14px;
        border-radius: 8px;
        color: #12295a;
        text-decoration: none;
        font-size: .92rem;
    }

    .dropdown a:hover {
        background: #eef5fd;
    }

    /* Responsive */
    @media (max-width: 800px) {

        .brand-copy span,
        .user-name {
            display: none;
        }

        .topbar {
            gap: 12px;
            padding: 10px 14px;
        }
    }

    @media (max-width: 560px) {
        .search {
            display: none;
        }
    }
</style>

<header class="site-header">
    <nav class="topbar" aria-label="Navegación principal">

        <!-- Logo + títulos -->
        <a class="brand" href="index.php">
            <span class="brand-logo">
                <img src="../web/assets/img/logo.png" alt="Logo Colegio San Francisco de Asís">
            </span>
            <span class="brand-copy">
                <strong>OBJETOS PERDIDOS</strong>
                <span>COLEGIO SAN FRANCISCO DE ASÍS</span>
            </span>
        </a>

        <!-- Buscador -->
        <form class="search" action="index.php" method="get" role="search">
            <input type="hidden" name="pantalla" value="buscar">
            <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="11" cy="11" r="7"></circle>
                <path d="M20 20l-3.5-3.5"></path>
            </svg>
            <input type="search" name="q" placeholder="Buscar objetos, categorías, fecha..." aria-label="Buscar">
        </form>

        <!-- Acciones -->
        <div class="topbar-actions">
            <button class="icon-btn" type="button" aria-label="Notificaciones">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.7 21a2 2 0 01-3.4 0"></path>
                </svg>
            </button>

            <span class="divider" aria-hidden="true"></span>

            <!-- Menú de usuario -->
            <div class="user-menu">
                <button class="user-toggle" type="button" id="userToggle" aria-haspopup="true" aria-expanded="false"
                    aria-controls="userDropdown">
                    <span class="avatar" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"></path>
                        </svg>
                    </span>
                    <span class="user-name">Cuenta</span>
                    <svg class="chevron" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>

                <ul class="dropdown" id="userDropdown" hidden>
                    <li><a href="index.php?pantalla=login">Iniciar sesión</a></li>
                    <li><a href="index.php?pantalla=registro">Registrarse</a></li>
                </ul>
            </div>
        </div>

    </nav>
</header>

<script>
    const toggle = document.getElementById('userToggle');
    const dropdown = document.getElementById('userDropdown');

    function setOpen(open) {
        toggle.setAttribute('aria-expanded', open);
        dropdown.hidden = !open;
    }

    toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        setOpen(dropdown.hidden);
    });

    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) setOpen(false);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') setOpen(false);
    });
</script>