<div class="row my-3">
    <h1>MVCDTC</h1>
</div>

<div class="row g-4">
    <div class="col-lg-10 col-md-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">MVC Framework for PHP</h5>
            <div class="row g-0">
                <div class="card-body">
                    <p class="card-text">Ik was zeer geïnteresseerd in het begrijpen van de werking van een MVC-framework, dus besloot ik er zelf een vanaf nul te maken. Omdat PHP iets minder strikt is, koos ik ervoor om het in PHP te doen. De belangrijkste componenten van een MVC-framework zijn de controllers en views. Daarom gaan we ook een router implementeren die aan de hand van een routingtabel kan bepalen waar de aanvraag naartoe moet, en we zullen ook een conventie bedenken voor normale routing. Daarnaast hebben we Dependency Injection (DI) voorzien voor de controllers, evenals voor middleware en services. Het framework is nog niet volledig ontwikkeld en wordt niet aanbevolen voor gebruik in productieomgevingen.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Github</h5>
            <div class="row g-0 text-center">
                <a href="https://github.com/Dtc-Xtreme/MVCDTC" target="_blank">
                    <img src="/body/github.svg" class="w-100 p-3 rounded-circle" alt="...">
                    Link
                </a>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Startup</h5>
            <div class="row g-0">
                <div class="col-lg-5 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_startup.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-7 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text">
                            Dit is je index pagina die toegangkelijk is van buitenaf. En elke request/retouring word terug naar deze pagina gestuurd met behulp van een .htacces file.
                        </p>
                        <h3>.htacces</h3>
                        <p class="ps-3">
                            <code>
                                RewriteEngine On<br>
                                RewriteCond %{REQUEST_FILENAME} !-f<br>
                                RewriteCond %{REQUEST_FILENAME} !-d<br>
                                RewriteRule . /index.php [L]
                            </code>
                        </p>

                        <h3>Toevoegen</h3>
                        <ul>
                            <li>Routes</li>
                            <li>Middleware</li>
                            <li>Services (DPI)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">MVCApplication</h5>
            <div class="row g-0">
                <div class="col-lg-7 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_app.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           Hier komt alles samen om verwerkt te worden. Zoals Requesten, Services, Middleware en Routes. Hier kan je ook kiezen als services of Middleware geinstanceerd moeten worden bij het opstarten van de app.
                        </p>
                        <h3>Functions</h3>
                        <ul>
                            <li>AddRoute (toevoegen van routes)</li>
                            <li>AddMiddleware (toevoegen van een Middleware)</li>
                            <li>ApplyMiddleware (instancieren van alle Middleware)</li>
                            <li>BuildPlatform (starten van de applicatie)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Services</h5>
            <div class="row g-0">
                <div class="col-lg-7 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_services.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           Services is een Singleton class waar alle servives toegevoegd worden tijdens het opstarten alsook geinstancieerd kunnen worden indien nodig. Deze services worden gebruikt door de DPI.
                        </p>
                        <h3>Functions</h3>
                        <ul>
                            <li>AddService (toevoegen van een service)</li>
                            <li>AddServiceInstanciated (toevoegen en instancieren van een service)</li>
                            <li>AddServiceAndInstanciate (toevoegen en instancieren van een service die zelfs services nodig heeft)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">DPI (Dependency Injection)</h5>
            <div class="row g-0">
                <div class="col-lg-5 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_dpi.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-7 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           In deze class wordt gebruik gemaakt van <a href="https://www.php.net/manual/en/intro.reflection.php" target="_blank">reflection</a>. Dit is nodig om te kijken wat er een functie van parameter gevraagd worden zodat deze geinjecteerd kunnen worden. De services die toegevoegd worden in de Startup kunnen hier gebruikt worden.
                        </p>
                        <h3>Functions</h3>
                        <ul>
                            <li>LoadDependency</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Request</h5>
            <div class="row g-0">
                <div class="col-lg-9 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_request.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-3 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           De Request bevat alle informatie die nodig is voor routing. Zoals de router, view en parameters. Hier wordt de requested url opgeschoont naar een valid request. Alsook het extracten van de controller en view naam. Deze wordt automatisch geinstancieerd door de MVCApplication.
                        </p>
                        <h3>Functions</h3>
                        <ul>
                            <li>CreateSectionList (het opschonen van de request en de nodige variable opvullen)</li>
                            <li>getOriginalRequest (orginele request opvragen)</li>
                            <li>getRequest (de opgeschoonde request opvragen)</li>
                            <li>getRequestArray (de opgeschoonde reuest als een array opvragen)</li>
                            <li>getController</li>
                            <li>setController</li>
                            <li>getView</li>
                            <li>setView</li>
                            <li>AddExtention (url params toevoegen)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Router</h5>
            <div class="row g-0">
                <div class="col-lg-9 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_router.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-3 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           Als er een request is wordt deze door de router gestuurd om te controleren als er voor een router aanwezig is voor deze route alsook een view. Als beide in orde zijn word de controller geinstancieerd met de nodige DPI. Zoniet wordt er een "Page Not Found" getoond.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Controller (BASE)</h5>
            <div class="row g-0">
                <div class="col-lg-7 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_controller_base.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           Alle controller erven over van deze class. Als eerste wordt er gekenen naar de request welke view het wil laden. Dit gebeurt met de "CallRequestedMethod()". Alles wat nodig is voor de opbouw van de pagina wordt hier aangeroepen.
                        </p>
                        <h3>Functions</h3>
                        <ul>
                            <li>LoadDependency</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">MVCDTC Controller (EXTENTION)</h5>
            <div class="row g-0">
                <div class="col-lg-5 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_controller_extention.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-7 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text text-">
                           In deze class wordt gebruik gemaakt van <a href="https://www.php.net/manual/en/intro.reflection.php" target="_blank">reflection</a>. Dit is nodig om te kijken wat er een functie van parameter gevraagd worden zodat deze geinjecteerd kunnen worden. De services die toegevoegd worden in de Startup kunnen hier gebruikt worden.
                        </p>
                        <h3>Functions</h3>
                        <ul>
                            <li>LoadDependency</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>