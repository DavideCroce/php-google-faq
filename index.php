<!-- Esercizio 

Riscrivere questa pagina del sito google:
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Realizziamo la struttura dati che ci sembra più adatta per poter poi stampare con un ciclo le domande e risposte della sezione centrale.

Consigli:

Teniamo a mente le differenze tra array associativo ed array con indici numerici
Ricordiamo che possiamo inserire tag all'interno delle stringhe di PHP, saranno convertiti in HTML quando faremo echo
Concentriamoci sulle FAQ e lasciamo per ultimo header e footer (e il loro CSS)
Lasciamo per ultimo header e footer (e il loro CSS) e concentriamoci sulle FAQ
Prima facciamo le FAQ e solo dopo header e footer.

BONUS:

Inserire le voci di menu dell'header tramite un array di PHP (i link non devono funzionare)

-->

<?php 
$questions = [
    "cgue" => [
        "title" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        "content" => "La recente <span>decisione della Corte di giustizia dell'Unione europea</span> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br/><br/><br/>

        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br/><br/><br/>
        
        Per presentare una richiesta di rimozione, compila questo <span>modulo web</span>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.<br/><br/><br/>
        
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br/><br/><br/>
        
        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
    ],
    "security" => [
        "title" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        "content" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br/><br/><br/>

        Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br/><br/><br/>
        
        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <span>Centro Google per la sicurezza online</span>.<br/><br/><br/>
        
        <span>Scopri</span> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
    ],
    "country" => [
        "title" => "Perché il mio account è associato a un paese?",
        "content" => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose: 
        <ul>
        <li>1 - La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
            <ul>
            <li>a - Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
            <li>b - Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
            </ul>
        </li>
        <li>2- La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.
           Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.</li></ul>
           <h4>Stabilire il paese associato al tuo account</h4>
           Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.<br/><br/>

           I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.<br/><br/>
        
           Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato.
           "
        ],
    "remove" => [
        "title" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        "content" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <span>contattare il webmaster</span> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <span>fai clic qui</span>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <span>visitare la nostra pagina di assistenza per avere ulteriori informazioni</span>."
    ],
    "searchkeys" => [
        "title" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        "content" => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <span>URL referrer</span>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <span>qui</span>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
    ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="img/IOS_Google_icon.png">
    <title>Domande frequenti - Privacy e Termini</title>
    <style>
        *{
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }
        ul{
            list-style-type:none;
        }
        li{
            padding: 20px 0;
        }
        .section{
            margin-bottom: 100px;
        }
        span{
            color: dodgerblue;
        }
        span:hover{
            cursor: pointer;
        }
        .top-header img{
            height: 60px;
            padding-right: 10px;
        }
        .top-header{
            font-size: 25px;
            font-weight: 400;
            font-family: 'Poppins', sans-serif;
            color: grey;
        }
        .fas{
            color: darkgrey;
            font-size: 40px;
            vertical-align: middle;
        }
        .profile-pic{
            border-radius: 50%;
            margin-left: 20px;
        }
        header{
            position: fixed;
            width: 100%;
            background-color: #fff;
            border-bottom: 2px solid grey;
            height:134px;
        }
        main{
            padding-top: 300px;
        }
        .selected{
            color: dodgerblue;
            font-weight: 500;
            border-bottom: 3px dodgerblue solid;
            padding-bottom:30px;
        }
        .else{
            font-size: 12px;
        }
        .fa-globe{
            font-size: 15px;
            color: black;
        }
        footer{
            height: 50px;
            background-color: #c0cfca;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <header>
        <div class="top-header d-flex justify-content-between pt-3">
            <p class="m-0 ps-3"><img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Google-Logo-650x366.png" alt="">Privacy e termini</p>
            <p class="profile m-0 pe-3"><i class="fas fa-th"></i><img class="profile-pic" src="img/Spider-Man_Square.png" alt=""></p>
        </div>
        <div class="bottom-header">
            <nav class="col-7 m-0">
                <div class="container">
                    <div class="row justify-content-around text-center">
                        <div class="col-2">Introduzione</div>
                        <div class="col-2">Norme sulla privacy</div>
                        <div class="col-2">Termini di servizio</div>
                        <div class="col-2">Tecnologie</div>
                        <div class="col-2"><p class="selected">Domande Frequenti</p></div>
                    </div>
                </div>
            </nav>
        </div>
        <br>
    </header>
    <main>
        <div class="container main">
            <div class="row">
                <?php foreach($questions as $question) : ?>
                    <div class="col-12 section">
                        <h1 class="mb-5"><?php echo $question ['title']?></h1>
                        <p><?php echo $question ['content']?></p>
                    </div>
                <? endforeach ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-5 else">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">Google </div>
                            <div class="col-3">Tutto su Google</div>
                            <div class="col-3">Privacy</div>
                            <div class="col-3">Termini</div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <i class="fas fa-globe"></i>
                    <select name="language" id="">
                        <option value="">Italian</option>
                        <option value="">English</option>
                        <option value="">Spanish</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>