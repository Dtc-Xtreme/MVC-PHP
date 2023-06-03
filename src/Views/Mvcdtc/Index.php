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
            <h5 class="card-header text-center">Structuur MVCDTC</h5>
            <div class="row g-0">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <img src="/body/images/mvcdtc_structure_framework.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="card-body">
                        <p class="card-text">
                            Het MVCDTC-project omvat een uitgebreid scala aan functionaliteiten die volledig geïntegreerd zijn in het framework. Deze functionaliteiten bieden een diepgaand inzicht in de reeds geïmplementeerde aspecten van het project. Door middel van het MVCDTC-project wordt een holistisch beeld verkregen van de verschillende componenten en modules die zijn ontwikkeld en geïmplementeerd. Het project bevat een breed scala aan functies die de efficiëntie, flexibiliteit en bruikbaarheid van het framework vergroten. Door deze functionaliteiten in één samenhangend geheel te combineren, wordt een solide basis gelegd voor verdere ontwikkeling en verbetering van het framework. <br/><br/>
                            Dit framework is ontworpen met een afgeschermd codeontwerp, wat betekent dat er geen wijzigingen door de gebruiker nodig zijn. De basiscode zal alleen veranderen via regelmatige updates. Gebruikers kunnen vertrouwen op de stabiliteit en consistentie van het framework zonder zelf codeaanpassingen te hoeven doen. Door deze aanpak kunnen gebruikers zich concentreren op het effectieve gebruik van het framework en de functionaliteiten ervan, terwijl ze gerustgesteld worden dat toekomstige updates automatisch zullen worden geïmplementeerd zonder dat dit hun werk beïnvloedt. Het afgeschermde codeontwerp zorgt voor een naadloze en probleemloze ervaring voor gebruikers, waarbij ze kunnen profiteren van eventuele verbeteringen en nieuwe features die in de updates worden geïntroduceerd.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Structuur implementatie</h5>
            <div class="row g-0">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <img src="/body/images/mvcdtc_structure_project.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="card-body">
                        <p class="card-text">
                            Op hetzelfde niveau als het MVCDTC-project bevinden zich de "public" en "src" directories, die een cruciale rol spelen bij het gebruik van het MVCDTC-framework. De "public" directory is publiekelijk toegankelijk via de webserver, terwijl de rest van de directories afgeschermd is voor externe toegang. De "public" directory wordt gebruikt voor het opslaan van bestanden zoals stylesheets, JavaScript-bestanden, afbeeldingen en meer. Bovendien wordt de "index.php" hier geplaatst, wat het startpunt is van het framework. <br/><br/>
                            Aan de andere kant bevindt zich de "src" directory, waarin je controllers en views kunt aanmaken. Deze directory biedt een gestructureerde omgeving voor het ontwikkelen van de functionele componenten van je applicatie. Hier kun je de logica van je applicatie beheren en de interactie tussen de gebruikersinterface en de gegevensbronnen regelen. <br/><br/>
                            Dankzij deze directorystructuur kunnen ontwikkelaars efficiënt werken aan het MVCDTC-framework. De "public" directory fungeert als het toegangspunt voor de applicatie vanuit de browser, terwijl de "src" directory een georganiseerde plek biedt voor het maken en beheren van de belangrijkste onderdelen van het framework. Door deze scheiding wordt een duidelijke scheiding bereikt tussen het publieke en het interne gedeelte van de applicatie, waardoor de veiligheid en modulariteit van het MVCDTC-framework worden verbeterd.
                        </p>
                    </div>
                </div>
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
                        <p class="card-text">
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
                        <p class="card-text">
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
                        <p class="card-text">
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
                        <p class="card-text">
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
                        <p class="card-text">
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
                        <p class="card-text">
                           Alle controller erven over van deze class. Als eerste wordt er gekenen naar de request welke view het wil laden. Dit gebeurt met de "CallRequestedMethod()". Alles wat nodig is voor de opbouw van de pagina wordt hier aangeroepen. <br/><br/>
                           
                        </p>
                        <h3>Verbetering</h3>
                        <p>
                            Het zou veel beter zijn om de opbouw van de pagina niet door de controller te laten beheren, maar eerder als een response terug te geven. Op deze manier kan er middleware worden toegepast voordat de pagina wordt weergegeven. Ook de keuze voor andere uitvoer dan alleen een View, zoals bijvoorbeeld JSON, zou een goede optie zijn.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Home Controller (Extention van Controller)</h5>
            <div class="row g-0">
                <div class="col-lg-5 col-md-3 col-sm-3">
                    <img src="/body/images/mvcdtc_home_controller.jpg" class="w-100 p-3 m-auto" alt="...">
                </div>
                <div class="col-lg-7 col-md-9 col-sm-9">
                    <div class="card-body">
                        <p class="card-text">
                        In de controller kunnen logica en functionaliteit worden geschreven die vervolgens gebruikt kunnen worden om bijvoorbeeld gegevens door te sturen naar een view. Dit stelt de controller in staat om de benodigde gegevens te verzamelen, deze te verwerken en ze vervolgens door te geven aan de view, zodat de juiste informatie kan worden weergegeven aan de gebruiker.
                        </p>
                        <h3>Routes / Views</h3>
                        <ul>
                            <li>Index - "/"</li>
                            <li>Reflection - "/home/reflection"</li>
                            <li>Future - "/home/future"</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card h-100 mb-3">
            <h5 class="card-header text-center">Reflectie</h5>
            <div class="row g-0">
                <div class="col-12">
                    <div class="card-body">
                        <p class="card-text text-">
                            In dit project had ik als doel om mijn programmeervaardigheden te verbeteren en een dieper inzicht te krijgen in de MVC-architectuur. Om dit te bereiken, besloot ik om vanaf het begin een MVC-framework te ontwikkelen met behulp van PHP. <br/><br/>
                            Het proces omvatte het ontwerpen en implementeren van verschillende componenten van het MVC-framework, waaronder de mapstructuur, routing, controllers en weergaven. Daarnaast was het ook mogelijk om functionaliteiten zoals dependency injection, middleware en services toe te voegen. Om dit te bereiken, heb ik verschillende bestaande frameworks onderzocht om te zien hoe deze concepten werden toegepast. Ik heb de interessante elementen geselecteerd en begon met het opstellen van de vereisten.  <br/><br/>
                            Als resultaat slaagde ik erin een functioneel MVC-framework te creëren dat de scheiding van verantwoordelijkheden mogelijk maakte en de logica, gegevens en presentatie effectief scheidde. Tijdens dit project heb ik mijn begrip van de MVC-architectuur verdiept en mijn programmeervaardigheden in PHP versterkt. Bovendien heeft dit project me bewust gemaakt van de complexiteit van het ontwikkelen van een robuust MVC-framework en heeft het me aangespoord om meer geavanceerde concepten te verkennen.  <br/><br/>
                            Het maken van een MVC-framework was een uitdagend maar waardevol leerproces. Ik besefte dat het ontwikkelen van een volledig functioneel MVC-framework veel meer omvat dan alleen de basisfunctionaliteit die ik heb geïmplementeerd. Er zijn geavanceerdere concepten en componenten zoals validatie en beveiliging die essentieel zijn in een productieklare MVC-applicatie. Ik ben tevreden met de resultaten die ik heb behaald, en ik ben vastbesloten om mijn kennis verder uit te breiden, zodat ik in de toekomst meer geavanceerde MVC-frameworks kan bouwen.  <br/><br/>
                            Als ik dit project opnieuw zou uitvoeren, zijn er verschillende aspecten die ik zou veranderen en verbeteren. Een concreet voorbeeld is dat ik de afhandeling van de response van een request zou verplaatsen naar het hoofdprogramma in plaats van dit in de controller op te bouwen. Dit zou de verantwoordelijkheden beter scheiden en de code meer modulair maken.  <br/><br/>
                            In retrospect, ik kijk met voldoening terug op een waardevolle ervaring waarin ik mijn programmeervaardigheden aanzienlijk heb verbeterd en een dieper inzicht heb verkregen in MVC-architectuur en de ontwikkeling van een MVC-framework met PHP. Ik ben verheugd om aan te kondigen dat jullie de eersten zijn die dit framework kunnen ervaren, aangezien deze website er gebruik van maakt. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>