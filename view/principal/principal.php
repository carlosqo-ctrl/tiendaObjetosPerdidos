<style>
    .dash {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 18px;
        color: #12295a;
    }

    /* Tarjetas base */
    .dash-card {
        background: linear-gradient(180deg, #f9fcff, #eef6fe);
        border: 1px solid #d6e8fb;
        border-radius: 18px;
        padding: 22px 24px;
    }

    .dash-card h2 {
        margin: 0;
        font-size: 1.05rem;
        font-weight: 600;
    }

    /* Espacio para imágenes */
    .img-slot {
        position: relative;
        display: grid;
        place-items: center;
        align-content: center;
        gap: 6px;
        overflow: hidden;
        background: #e3effb;
        border: 2px dashed #b7d3f0;
        color: #6f9bc9;
        font-size: .78rem;
        text-align: center;
    }

    .img-slot svg {
        width: 28px;
        height: 28px;
        fill: none;
        stroke: currentColor;
        stroke-width: 1.6;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    /* Cuando agregues un <img>, cubre el espacio */
    .img-slot img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Banner */
    .dash-banner {
        grid-column: 1 / -1;
        display: grid;
        grid-template-columns: 1fr 1.1fr;
        align-items: stretch;
        min-height: 190px;
        overflow: hidden;
        padding: 0;
        background: linear-gradient(90deg, #dcecfc, #f4f9ff);
    }

    .banner-copy {
        padding: 34px 36px;
        align-self: center;
    }

    .banner-copy h1 {
        margin: 0 0 8px;
        font-size: 1.9rem;
    }

    .banner-copy p {
        margin: 0;
        color: #3b78b8;
        font-size: 1.05rem;
        line-height: 1.45;
    }

    .banner-image {
        border: 0;
        border-left: 2px dashed #b7d3f0;
        border-radius: 0;
    }

    /* Resumen de búsqueda */
    .dash-summary {
        grid-column: span 3;
    }

    .card-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
    }

    .period-select {
        padding: 7px 12px;
        border: 1px solid #cfe0f3;
        border-radius: 10px;
        background: #fff;
        color: #12295a;
        font-size: .82rem;
        cursor: pointer;
    }

    .bars {
        display: flex;
        gap: 10px;
        height: 200px;
    }

    .bars-axis {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-bottom: 26px;
        font-size: .78rem;
        color: #5f7aa1;
    }

    .bars-plot {
        position: relative;
        flex: 1;
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        padding-bottom: 26px;
        background:
            repeating-linear-gradient(to top, transparent 0, transparent calc(33.33% - 1px), #e1ecf8 calc(33.33% - 1px), #e1ecf8 33.33%);
        background-origin: content-box;
        background-clip: content-box;
    }

    .bar-col {
        position: relative;
        width: 11%;
        height: 100%;
        display: flex;
        align-items: flex-end;
    }

    .bar {
        width: 100%;
        border-radius: 8px 8px 0 0;
        background: #b9dbfa;
        transition: filter .2s;
    }

    .bar:hover {
        filter: brightness(.93);
    }

    .bar.b2 {
        background: #8fc3f3;
    }

    .bar.b3 {
        background: #a9bdd3;
    }

    .bar.b4 {
        background: #6aa8e0;
    }

    .bar-col span {
        position: absolute;
        bottom: -24px;
        left: 50%;
        transform: translateX(-50%);
        font-size: .78rem;
        color: #5f7aa1;
    }

    /* Categorías (dona) */
    .dash-cats {
        grid-column: span 3;
    }

    .cats-body {
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 24px;
        flex-wrap: wrap;
    }

    .donut {
        width: 170px;
        height: 170px;
        border-radius: 50%;
        background: conic-gradient(#6db6f5 0 45%,
                #4a9be0 45% 70%,
                #c9d9ea 70% 85%,
                #a9bdd3 85% 95%,
                #7aa6d6 95% 100%);
        position: relative;
        flex-shrink: 0;
    }

    .donut::after {
        content: "";
        position: absolute;
        inset: 32%;
        background: #f3f9ff;
        border-radius: 50%;
    }

    .legend {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 14px;
        min-width: 210px;
    }

    .legend li {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: .92rem;
    }

    .legend .dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .legend .pct {
        margin-left: auto;
        color: #3b5784;
    }

    /* Objetos recientes */
    .dash-recent {
        grid-column: span 4;
        padding: 18px 20px;
    }

    .see-all {
        font-size: .82rem;
        color: #2f7fd6;
        text-decoration: none;
    }

    .see-all:hover {
        text-decoration: underline;
    }

    .recent-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 12px;
    }

    .recent-item {
        background: #fff;
        border: 1px solid #dbe8f6;
        border-radius: 12px;
        overflow: hidden;
    }

    .recent-item .img-slot {
        height: 90px;
        border-width: 0 0 2px;
        border-radius: 0;
    }

    .recent-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 12px;
    }

    .recent-info strong {
        display: block;
        font-size: .85rem;
    }

    .recent-info small {
        color: #6b86aa;
        font-size: .72rem;
    }

    .go-btn {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #d6e8fb;
        color: #2f7fd6;
        display: grid;
        place-items: center;
        text-decoration: none;
        font-size: .8rem;
        flex-shrink: 0;
    }

    .go-btn:hover {
        background: #bcd9f7;
    }

    /* Perdiste algo */
    .dash-lost {
        grid-column: span 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 6px;
        background: linear-gradient(180deg, #e3f0fd, #d6e8fb);
    }

    .lost-top {
        display: flex;
        align-items: center;
        gap: 14px;
        text-align: left;
    }

    .lost-top svg {
        width: 34px;
        height: 34px;
        flex-shrink: 0;
        fill: none;
        stroke: #2f7fd6;
        stroke-width: 1.6;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .lost-top strong {
        display: block;
        font-size: 1rem;
    }

    .lost-top p {
        margin: 4px 0 0;
        font-size: .85rem;
        color: #4a79ad;
        line-height: 1.35;
    }

    .lost-btn {
        margin-top: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 13px 18px;
        border-radius: 999px;
        background: #7dbaf2;
        color: #fff;
        font-weight: 600;
        font-size: .92rem;
        text-decoration: none;
        transition: background .2s;
    }

    .lost-btn:hover {
        background: #5ea6ea;
    }

    /* Responsive */
    @media (max-width: 1100px) {

        .dash-summary,
        .dash-cats,
        .dash-recent,
        .dash-lost {
            grid-column: 1 / -1;
        }

        .recent-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 700px) {
        .dash-banner {
            grid-template-columns: 1fr;
        }

        .banner-image {
            min-height: 140px;
            border-left: 0;
            border-top: 2px dashed #b7d3f0;
        }

        .recent-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<section class="dash">

    <!-- Banner de bienvenida -->
    <div class="dash-card dash-banner">
        <div class="banner-copy">
            <h1>¡Hola, Carlos!</h1>
            <p>Aquí puedes encontrar y reportar<br>objetos perdidos en tu colegio.</p>
        </div>

        <!-- IMAGEN DEL BANNER: descomenta el <img> y pon tu ruta -->
        <div class="img-slot banner-image">
            <!-- <img src="assets/img/banner.jpg" alt="Banner"> -->
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                <path d="M21 15l-5-5L5 21"></path>
            </svg>
            <span>Imagen del banner</span>
        </div>
    </div>

    <!-- Resumen de búsqueda -->
    <div class="dash-card dash-summary">
        <div class="card-head">
            <h2>Resumen de búsqueda</h2>
            <select class="period-select" aria-label="Periodo">
                <option>Esta semana</option>
                <option>Este mes</option>
                <option>Este año</option>
            </select>
        </div>

        <div class="bars">
            <div class="bars-axis" aria-hidden="true">
                <span>6h</span><span>4h</span><span>2h</span><span>0</span>
            </div>
            <div class="bars-plot">
                <div class="bar-col">
                    <div class="bar" style="height:52%"></div><span>Lun</span>
                </div>
                <div class="bar-col">
                    <div class="bar b2" style="height:75%"></div><span>Mar</span>
                </div>
                <div class="bar-col">
                    <div class="bar b3" style="height:60%"></div><span>Mié</span>
                </div>
                <div class="bar-col">
                    <div class="bar b4" style="height:85%"></div><span>Jue</span>
                </div>
                <div class="bar-col">
                    <div class="bar" style="height:75%"></div><span>Vie</span>
                </div>
                <div class="bar-col">
                    <div class="bar b2" style="height:55%"></div><span>Sáb</span>
                </div>
                <div class="bar-col">
                    <div class="bar b4" style="height:70%"></div><span>Dom</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorías más buscadas -->
    <div class="dash-card dash-cats">
        <div class="card-head">
            <h2>Categorías más buscadas</h2>
        </div>
        <div class="cats-body">
            <div class="donut" role="img" aria-label="Gráfica de categorías"></div>
            <ul class="legend">
                <li><span class="dot" style="background:#6db6f5"></span>Ropa<span class="pct">45%</span></li>
                <li><span class="dot" style="background:#4a9be0"></span>Tecnología<span class="pct">25%</span></li>
                <li><span class="dot" style="background:#c9d9ea"></span>Útiles escolares<span class="pct">15%</span>
                </li>
                <li><span class="dot" style="background:#a9bdd3"></span>Accesorios<span class="pct">10%</span></li>
                <li><span class="dot" style="background:#7aa6d6"></span>Otros<span class="pct">5%</span></li>
            </ul>
        </div>
    </div>

    <!-- Objetos recientes -->
    <div class="dash-card dash-recent">
        <div class="card-head">
            <h2>Objetos recientes</h2>
            <a class="see-all" href="index.php?pantalla=buscar">Ver todo</a>
        </div>

        <div class="recent-grid">

            <article class="recent-item">
                <div class="img-slot">
                    <!-- <img src="uploads/morral.jpg" alt="Morral"> -->
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <path d="M21 15l-5-5L5 21"></path>
                    </svg>
                    <span>Subir imagen</span>
                </div>
                <div class="recent-info">
                    <div><strong>Morral</strong><small>hace 2 horas</small></div>
                    <a class="go-btn" href="#" aria-label="Ver Morral">›</a>
                </div>
            </article>

            <article class="recent-item">
                <div class="img-slot">
                    <!-- <img src="uploads/cuaderno.jpg" alt="Cuaderno"> -->
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <path d="M21 15l-5-5L5 21"></path>
                    </svg>
                    <span>Subir imagen</span>
                </div>
                <div class="recent-info">
                    <div><strong>Cuaderno</strong><small>hace 4 horas</small></div>
                    <a class="go-btn" href="#" aria-label="Ver Cuaderno">›</a>
                </div>
            </article>

            <article class="recent-item">
                <div class="img-slot">
                    <!-- <img src="uploads/estuche.jpg" alt="Estuche"> -->
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <path d="M21 15l-5-5L5 21"></path>
                    </svg>
                    <span>Subir imagen</span>
                </div>
                <div class="recent-info">
                    <div><strong>Estuche</strong><small>hace 8 horas</small></div>
                    <a class="go-btn" href="#" aria-label="Ver Estuche">›</a>
                </div>
            </article>

            <article class="recent-item">
                <div class="img-slot">
                    <!-- <img src="uploads/audifonos.jpg" alt="Audífonos"> -->
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <path d="M21 15l-5-5L5 21"></path>
                    </svg>
                    <span>Subir imagen</span>
                </div>
                <div class="recent-info">
                    <div><strong>Audífonos</strong><small>hace 12 horas</small></div>
                    <a class="go-btn" href="#" aria-label="Ver Audífonos">›</a>
                </div>
            </article>

            <article class="recent-item">
                <div class="img-slot">
                    <!-- <img src="uploads/termo.jpg" alt="Termo"> -->
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <path d="M21 15l-5-5L5 21"></path>
                    </svg>
                    <span>Subir imagen</span>
                </div>
                <div class="recent-info">
                    <div><strong>Termo</strong><small>hace 1 día</small></div>
                    <a class="go-btn" href="#" aria-label="Ver Termo">›</a>
                </div>
            </article>

        </div>
    </div>

    <!-- ¿Perdiste algo? -->
    <div class="dash-card dash-lost">
        <div class="lost-top">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="4" width="18" height="17" rx="2"></rect>
                <path d="M16 2v4M8 2v4M3 10h18"></path>
                <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"></path>
            </svg>
            <div>
                <strong>¿Perdiste algo?</strong>
                <p>Reporta tu objeto perdido y ayúdanos a encontrarlo.</p>
            </div>
        </div>
        <a class="lost-btn" href="index.php?pantalla=registro">Reportar objeto <span aria-hidden="true">›</span></a>
    </div>

</section>