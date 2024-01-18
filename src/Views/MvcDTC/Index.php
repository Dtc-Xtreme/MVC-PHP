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
                            Dit is de indexpagina die extern toegankelijk is. Elke inkomende request en response wordt via een .htaccess-bestand naar deze pagina gestuurd. Hiermee wordt de routing van het verkeer naar de juiste locatie beheerd.                        </p>
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
                            Op deze plek komen alle componenten samen om verwerkt te worden, zoals requests, services, middleware en routes. Het biedt de mogelijkheid om services en middleware al dan niet bij het opstarten van de app te instantiëren, afhankelijk van de configuratievoorkeuren. Hier worden alle vereiste elementen geïntegreerd en gestructureerd om een goed functionerende en aanpasbare applicatie te creëren.                        </p>
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
                            De Services-klasse fungeert als een Singleton waarin alle services worden toegevoegd tijdens het opstarten van de applicatie en indien nodig geïnstantieerd kunnen worden. Deze services worden vervolgens gebruikt door de DPI (Dependency Injection) om de benodigde functionaliteit te leveren.                        </p>
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
                            In deze klasse wordt gebruikgemaakt van <a href="https://www.php.net/manual/en/intro.reflection.php" target="_blank">reflection</a> om te achterhalen welke functie welke parameters nodig heeft, zodat deze correct kunnen worden geïnjecteerd. De services die zijn toegevoegd in de Startup-klasse kunnen hier worden gebruikt. Reflectie speelt een cruciale rol bij het dynamisch analyseren en aanpassen van de structuur van de applicatie op basis van de vereisten van elke functie. Dit stelt de applicatie in staat om flexibel en adaptief te zijn bij het leveren van de juiste services waar dat nodig is.
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
                            De Request bevat alle benodigde informatie voor de routing, zoals de router, view en parameters. Het zorgt voor het schoonmaken van de opgevraagde URL naar een geldig verzoek en het extraheren van de controller- en viewnaam. Deze worden automatisch geïnstantieerd door de MVCApplication, waardoor de juiste controller en view worden geladen op basis van de request. Dit proces zorgt voor een naadloze afhandeling van de routing en het dynamisch renderen van de juiste content op basis van de ontvangen request.                        </p>
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
                            Wanneer er een request wordt ontvangen, wordt deze door de router geleid om te controleren of er een geldige router en bijbehorende view zijn voor deze route. Als beide aanwezig zijn, wordt de controller geïnstantieerd met de benodigde afhankelijkheden via Dependency Injection. Als er echter geen geldige router of view wordt gevonden, wordt er een "Page Not Found" weergegeven, waardoor de gebruiker op de hoogte wordt gebracht dat de opgevraagde pagina niet beschikbaar is.                        </p>
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
                            Alle controllers erven van deze klasse. In de eerste plaats wordt de request geanalyseerd om te bepalen welke view geladen moet worden, dit gebeurt met behulp van de "CallRequestedMethod()". Hier worden alle benodigde stappen uitgevoerd voor het opbouwen van de pagina. Alle vereiste functionaliteiten en componenten worden hier aangeroepen en verwerkt om de gewenste weergave van de pagina te realiseren.                           
                        </p>
                        <h3>Verbetering</h3>
                        <p>
                            Een betere aanpak zou zijn om de verantwoordelijkheid voor de opbouw van de pagina niet bij de controller te leggen, maar eerder als een response terug te geven. Hierdoor kan er middleware worden toegepast voordat de pagina wordt weergegeven, wat flexibiliteit en aanpassingsmogelijkheden biedt. Bovendien kan er zo ook gekozen worden voor andere outputformaten dan alleen een View, zoals bijvoorbeeld JSON. Deze aanpak maakt het mogelijk om meer diverse en dynamische mogelijkheden te implementeren in de verwerking en presentatie van de pagina.                        </p>
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
                            De controller biedt de mogelijkheid om logica en functionaliteit te implementeren die kunnen worden gebruikt om gegevens naar een view door te sturen. Hiermee kan de controller de benodigde gegevens verzamelen, verwerken en doorgeven aan de view, zodat de juiste informatie aan de gebruiker kan worden getoond. Dit stelt de controller in staat om een brug te vormen tussen de verschillende componenten van de applicatie, waarbij de benodigde gegevens worden verzameld en gemanipuleerd voordat ze worden doorgegeven aan de view voor weergave.                        </p>
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