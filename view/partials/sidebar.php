<style>
    .sidebar {
        width: 240px;
        min-height: 100%;
        display: flex;
        flex-direction: column;
        gap: 24px;
        padding: 16px 12px;
        background: #fff;
        border: 1px solid #fff;
        border-radius: 18px;
    }

    .sidebar-nav {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .sidebar-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 14px;
        border-radius: 12px;
        color: #12295a;
        font-size: .95rem;
        font-weight: 500;
        text-decoration: none;
        transition: background .2s, color .2s;
    }

    .sidebar-link:hover {
        background: rgba(59, 141, 224, .1);
    }

    .sidebar-link.is-active {
        background: #d6e8fb;
        color: #1f6fd0;
    }

    .nav-icon {
        width: 22px;
        height: 22px;
        flex-shrink: 0;
        fill: none;
        stroke: currentColor;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    /* Tarjeta inferior */
    .sidebar-card {
        margin-top: auto;
        padding: 24px 16px 18px;
        text-align: center;
        background: #dbeafe;
        border-radius: 14px;
        color: #12295a;
    }

    .sidebar-card .card-icon {
        width: 38px;
        height: 38px;
        margin: 0 auto 10px;
        display: block;
        fill: none;
        stroke: #3b8de0;
        stroke-width: 1.6;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .sidebar-card p {
        margin: 0 0 12px;
        font-size: .9rem;
        line-height: 1.4;
    }

    .sidebar-card .card-heart {
        width: 14px;
        height: 14px;
        display: block;
        margin: 0 auto 8px;
        fill: none;
        stroke: #3b8de0;
        stroke-width: 2;
    }

    .sidebar-card small {
        font-size: .78rem;
        color: #3b8de0;
    }

    /* Responsive */
    @media (max-width: 800px) {
        .sidebar {
            width: 100%;
            min-height: auto;
        }

        .sidebar-card {
            display: none;
        }

        .sidebar-nav {
            flex-direction: row;
            flex-wrap: wrap;
        }
    }
</style>

<aside class="sidebar">
    <nav aria-label="Navegación lateral">
        <ul class="sidebar-nav">

            <li>
                <a class="sidebar-link is-active" href="index.php">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 10.5L12 3l9 7.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1z"></path>
                    </svg>
                    <span>Inicio</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=buscar">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="M20 20l-3.5-3.5"></path>
                    </svg>
                    <span>Buscar</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=mis-objetos">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9 18V5l12-2v13"></path>
                        <circle cx="6" cy="18" r="3"></circle>
                        <circle cx="18" cy="16" r="3"></circle>
                    </svg>
                    <span>Mis Objetos</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=favoritos">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z">
                        </path>
                    </svg>
                    <span>Favoritos</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=historial">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9 6h12M9 12h12M9 18h12"></path>
                        <circle cx="4.5" cy="6" r="1"></circle>
                        <circle cx="4.5" cy="12" r="1"></circle>
                        <circle cx="4.5" cy="18" r="1"></circle>
                    </svg>
                    <span>Historial</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=reportes">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="9" y="2" width="6" height="12" rx="3"></rect>
                        <path d="M5 11a7 7 0 0014 0M12 18v4"></path>
                    </svg>
                    <span>Reportes</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=estadisticas">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    <span>Estadísticas</span>
                </a>
            </li>

            <li>
                <a class="sidebar-link" href="index.php?pantalla=configuracion">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 11-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 11-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 110-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 112.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 114 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 112.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 110 4h-.09a1.65 1.65 0 00-1.51 1z">
                        </path>
                    </svg>
                    <span>Configuración</span>
                </a>
            </li>

        </ul>
    </nav>

    <!-- Tarjeta inferior -->
    <div class="sidebar-card">
        <svg class="card-icon" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M22 9L12 4 2 9l10 5 10-5z"></path>
            <path d="M6 11v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"></path>
            <path d="M22 9v6"></path>
        </svg>
        <p>Tu colegio,<br>tu comunidad,<br>nuestro compromiso.</p>
        <svg class="card-heart" viewBox="0 0 24 24" aria-hidden="true">
            <path
                d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z">
            </path>
        </svg>
        <small>San Francisco de Asís</small>
    </div>
</aside>