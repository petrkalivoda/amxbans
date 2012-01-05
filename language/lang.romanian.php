// Author Notes:
// This file has been translated from English to Romanian by OptimuS, StormZone & Dorin2oo7 from www.amxbans.de.

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8
define("_LOCALE","ro_RO"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS","Sec.");
define("_NOACCESS","Nu ești autorizat sã vezi aceastã paginã!");
define("_LOADTIME","Paginã generatã în");
define("_BANSINDB","Banuri în Baza de date");
define("_BY","de");
define("_OR","sau");
define("_ON","pornit");
define("_OFF","oprit");
define("_YES","da");
define("_NO","nu");
define("_OWN","propiu");
define("_CLEAR","Reset");
define("_OPENSTEAMCOMSITE","Viziteazã pagina Steam a comunitãții");
define("_ADMINAREA","Zona adminilor");
define("_NOSITE","Pagina nu este disponibilã!");
define("_DELETE","Șterge");
define("_ADD","Adaugã");
define("_EDIT","Editeazã");
define("_DEFAULTLANG","Limba implicitã");
define("_OTHER","alții");
define("_VIEWIP","aratã IP");
define("_LEVEL","Nivel");
define("_DETAILS","aratã detalii");
define("_SYSTEMSETTINGS","Sistem");
define("_VIEWSETTINGS","Vizionare");
define("_COMMENTSETTINGS","Comentarii");
define("_FILESETTINGS","Fișiere");
define("_BANLISTSETTINGS","Listã Banuri");
define("_CONFIGURATION","Configurații");
define("_REPAIR","Reparã");
define("_AUTO","Automat");
define("_TEST","Test");
//user menu
define("_HOME","Pagina Principalã");
define("_BANLIST","Listã Banuri");
define("_SEARCH","Cautã");
define("_SERVER","Server");
//info amxaccess
define("_INFO_ACCESS","Informații acces");
define("_ACCESSFLAGS","Flag-uri acces");
define("_ACCESSPERMS","Permisiuni acces");
define("_ACCESS_FLAGS","a - Imunitate (nu poate primii kick / ban etc.)<br />b - Slot Rezervat (poate folosii Slot Rezervat)<br />c - Comanda amx_kick<br />d - Comenzile amx_ban și amx_unban<br />e - Comenzile amx_slay și amx_slap<br />f - Comanda amx_map<br />g - Comanda amx_cvar (nu sunt valabile toate CVAR-urile)<br />h - Comanda amx_cfg<br />i - Comanda amx_chat și alte comenzi pentru Chat<br />j - Comanda amx_vote și alte comenzi pentru Votare<br />k - Acces la cvar-ul sv_password (prin comanda amx_cvar)<br />l - Acces la comanda amx_rcon și la cvar-ul rcon_password (prin comanda amx_cvar)<br />m - Personalizate Nivel A (pentru alte Pluginuri)<br />n - Personalizate Nivel B<br />o - Personalizate Nivel C<br />p - Personalizate Nivel D<br />q - Personalizate Nivel E<br />r - Personalizate Nivel F<br />s - Personalizate Nivel G<br />t - Personalizate Nivel H<br />u - Acces la Meniu<br />z - Utilizator (nu este Admin)");
define("_FLAG_FLAGS","a - dã kick jucãtorului dacã Parola este greșitã<br />b - Clan Tag<br />c - acela este SteamID<br />d - acela este IP<br />e - fãrã Parolã (necesar doar SteamID / IP)<br />k - Nume sau Tag (Caractere Sensibile!).");
define("_ADDADMINTOSERVERS","Adaugã Admin La Server");
define("_WITHSTATICBANTIME","cu Timp de Ban Static");
//main header
define("_LOGGED","Autentificat ca");
define("_NOTLOGGED","Neconectat");
define("_LOGOUT","Delogare");
define("_LOGIN","Autentificare");
define("_MENU","Meniu");
//ban list
define("_DATE","Data");
define("_PLAYER","Jucãtor");
define("_ADMIN","Admin");
define("_REASON","Motiv");
define("_LENGHT","Duratã");
define("_SITE","Pagina");
define("_BANS","Banuri");
define("_BL_COMMENTS","Comentarii");
define("_BL_FILES","Fișiere");
define("_BL_KICKS","Kick-uri");
define("_TO","la");
define("_YEAR","An");
define("_YEARS","Ani");
define("_MONTH","Lunã");
define("_MONTHS","Luni");
define("_WEEK","Sãptãmânã");
define("_WEEKS","Saptamani");
define("_DAY","Zi");
define("_DAYS","Zile");
define("_HOUR","Ora");
define("_HOURS","Ore");
define("_MIN","Minut");
define("_MINS","Minute");
define("_OF","oprit");
define("_REMAINING","rãmase");
//ban list details
define("_PERMANENT","Permanent");
define("_BANDETAILS","Detalii Ban");
define("_STEAMID","SteamID");
define("_STEAMCOMID","ID Comunitate Steam");
define("_NOTAVAILABLE","Neaccesibil");
define("_NOSTEAMID","fãrã SteamID");
define("_STEAMID&IP","SteamID și/sau IP");
define("_HIDDEN","ascuns");
define("_INVOKED","Invocat pe");
define("_BANLENGHT","Durata Banului");
define("_EXPIRES","Expirã pe");
define("_NOTAPPLICABLE","Neaplicabil");
define("_ALREADYEXP","deja a expirat");
define("_IP","Adresã de IP");
define("_BANTYPE","Tipul Banului");
define("_BANBY","Banat de");
define("_BANON","Banat pe ");
define("_FILE_TOBIG","Fișierul este prea mare");
define("_FILE_TYPENOTALLOWED","Tipul fișierului nu este permis");
define("_FROM","de la");
define("_DOWNLOAD","Descãrcare");
define("_DOWNLOADS","Descãrcãri");
define("_FILE","Fișier");
define("_NEWFILE","Fișier nou");
define("_COMMENT","Comentariu");
define("_COMMENTS","Comentarii");
define("_NEWCOMMENT","Comentariu nou");
define("_NOCOMMENTS","Fãrã comentarii");
define("_BACK","înapoi");
define("_TIP_EDIT","Editeazã");
define("_TIP_DEL","Șterge");
define("_TIP_DOWNLOAD","Descarcã");
define("_TIP_BACK","Înapoi");
define("_TIP_SENDMAIL","Trimite email");
define("_EMAIL","E-Mail");
define("_FILEUPLOAD","Încarcã fișier");
define("_UPLOAD","Încarcã");
define("_ENTRYEDIT","Editeazã intrarea");
define("_EDITBAN","Editeazã banul");
define("_TOTALEXPBANS","Total banuri expirate");
define("_EDITCOMMENT","Editeazã comentariu");
define("_ADDCOMMENT","Adaugã comentariu");
define("_NOFILES","Fãrã fișiere");
define("_BANDETAILSEDITS","Schimbãri în trecut");
define("_EDITREASON","Motivul editãrii");
define("_UNBANPLAYER","Scoate ban");
define("_UNBANNED","Ban scos");
define("_BANHISTORY","Istorie banuri");
//Login
define("_USERNAME","Nume Utilizator");
define("_PASSWORD","Parolã");
define("_REMEMBERME","Memoreazã");
define("_LOGINBLOCKED","Conectare Blocatã!");
define("_LOGINFAILEDPW","Verificã Parolã!");
define("_LOGINFAILED","Conectare Eșuata!");
define("_LOGINTRY","Încearcã");
define("_SEC","Secundã");
define("_SECS","Secunde");
//admins amxx
define("_AMXADMINSETTINGS","AMX Mod X Administrate Admini");
define("_NAME","Nume");
define("_NICKNAME","Nick");
define("_MANAGEAMXADMINS","Admini AMX Mod X");
define("_ADDAMXADMINS","Adaugã Admini AMX Mod X");
define("_ACCESS","Acces");
define("_FLAGS","Flag-uri");
define("_SETTINGS","Setãri");
define("_SAVE","Salveazã");
define("_EVER","Infinit");
define("_SHOWINADMINLIST","Vizibil în Lista cu Admini");
define("_ADMINVALIDITY","valabilitate");
define("_ADMINEXPIRATION","valabil pânã la");
define("_CREATED","Creat");
define("_EXTENDWITH","se extinde");
define("_STEAMIDIPNAME","SteamID / IP / Nume");
//server
define("_SERVERSETTINGS","Setãri server");
define("_MOD","Mod");
define("_RCONPW","Parolã RCON");
define("_DEL","Șterge");
define("_MOTDURL","URL motd");
define("_MOTDDELAY","Întârziere motd");
define("_SERVERMENU","Meniu server");
define("_REASONSSET","Seteazã motiv ban");
define("_HOSTNAME","Nume server");
define("_VERSION","Versiune");
define("_LASTSEEN","Ultima activitate");
define("_TIMEZONEFIXX","Alege fus orar");
define("_SERVERRCON","Trimite Comenzi Server (RCON)");
define("_RCON_RELOADADMINS","Reîncarcã Admini");
define("_RCON_RESTARTMAP","Reîncarcã Hartã/Pluginuri");
define("_RCON_STATUS","Statut Comandã");
define("_RCON_PLUGINS","Afișeazã listã Plugin+uri AMXX");
define("_RCON_MODULES","Afișeazã listã Module AMXX");
define("_RCON_METALIST","Afișeazã listã Meta");
define("_RCON_PREDEFINED","Predefinit");
define("_RCON_USERDEFINED","Definit de utilizator");
define("_RCON_SEND","Trimite");
define("_RCON_SERVERRESPONSE","Rãspuns de la Server:");
define("_RCON_MAPRESTARTED","Harta va fi reînceputã (Comandã: restart).");
define("_RCON_TIMEDOUT","Nici un rãspuns de la Server!");
define("_RCON_CMDDENIED","Aceastã comandã RCON este interzisã!");
//server admins
define("_SERVERADMINSETTINGS","Setãri Admin Server");
define("_ADMINS","Admini");
define("_ACTIV","activ");
define("_CUSTOMFLAGS","flaag+uri personalizate");
define("_STATICBANTIME","Timp de ban static");
define("_EDITADMINS","Editeazã Admini");
define("_SPECIALS","Specialitãți Server");
//reasons
define("_REASONSSETTINGS","Administrarea motivului de ban");
define("_REASONSSETS","Seturi motiv ban");
define("_NEWREASON","Motiv Nou");
define("_SAVESET","Salveazã Set");
define("_EDITSET","Editeazã Set");
define("_REASONS","Motive");
//settings
define("_SITESETTINGS","Administrare Site");
define("_BANNER","Banner");
define("_BANNERURL","URL Banner");
define("_DESIGN","Temã");
define("_BANSPERPAGE","Banuri per paginã");
define("_NEWSET","Set nou");
define("_COOKIENAME","Nume Cookie");
define("_STARTPAGE","Paginã de start");
define("_SHOWCOMMENTSCOUNT","Aratã numãrul de comentarii");
define("_SHOWFILESCOUNT","Aratã numarul de fișiere");
define("_SHOWKICKCOUNT","Aratã numarul de Kick-uri");
define("_FILE_USERUPLOADALLOWED","Utilizatorii au permisiunea sã încarce fișiere");
define("_MAXFILESIZE","Dimensiune maximã fișier");
define("_FILE_ALLOWEDTYPES","Extensii acceptate");
define("_COMMENTUSERALLOWEDWRITE","Utilizatorii au permisiunea sã scrie comentarii");
define("_USECAPTURE","Utilizeazã Captcha");
define("_AUTOPRUNE","Tãiere automatã BdD");
define("_USECOMMENTSYSTEM","Utilizeazã sistem comentarii");
define("_USEFILESYSTEM","Utilizeazã Sistem Fișiere");
define("_AUTOPRUNE_MAXOFFENCES","Maxim de banuri expirate înainte de ban permanent");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Motiv ban pentru maxim de banuri expirate");
define("_MUSTBEON","trebuie sã fie activatã!");
//admin list
define("_ADMINSINCE","Admin din");
define("_ADMINTO","Admin pânã în");
define("_UNLIMITED","infinit");
//admins web
define("_WEBADMINADD","Adaugã Admin Web");
define("_WEBADMINSSETTINGS","Administrare Admin Web");
define("_WEBADMINS","Admini Web");
define("_LASTLOGIN","ultima autentificare");
define("_PASSWORD2","Re-scrie parolã");
define("_WADMINADDEDFAILED","Adãugare eșuata. Existã valori dublate?");
define("_NEVER","niciodatã");
define("_YOURPASSWORD","Din motive de securitate, veți fi deconectat dupã schimbarea parolei personale!");
define("_ENTERPASSWORD","Introduceți noua parolã:");
define("_NEWPASSWORD","Schimbã parola");
define("_PASSWORDCHANGED","Parola a fost schimbatã!");
define("_PASSWORDCHANGEDFAILED","Schimbarea parolei a eșuat!");
define("_EMAILSENT","Un email a fost trimis la adresa menționatã.");
//search
define("_SEARCHRESULT","Rezultat cãutare");
define("_SEARCHWITH","Cautã cu");
define("_SEARCHFOR","Cautã pentru");
define("_PLAYERSWITH","Jucãtori cu");
define("_MOREBANSHIS","sau mai multe banuri în istorie");
define("_ACTIVEBANS","Banuri active");
define("_EXPIREDBANS","Banuri expirate");
//Admin list
define("_ADMLIST","Lsitã Admini");
//captcha
define("_SCODE","Cod de siguranțã:");
define("_SCODEENTER","Introduceți codul de siguranțã:");
//update
define("_WEBVERSIONINFO","Informații versiune site");
define("_PLUGINVERSIONINFO","Informații versiune Plugin");
define("_VERSION_CURRENT","Actual");
define("_VERSION_RELEASE","Ultima versiune");
define("_VERSION_BETA","Ultima versiune Beta");
define("_LASTCHANGELOG","Registru modificãri"); 
define("_WEB","Site");
define("_YOURWEB","Site-ul dvs");
define("_PLUGIN","AMX Mod X Plugin");
define("_UPDATE_RECOMMENDED","Actualizare recomandatã!");
define("_UPDATE_NOTNEEDED","Actualizare nerecomandatã");
define("_WEBUPDATE_RECOMMENDED","Actualizare Web recomandatã!");
define("_PLUGINUPDATE_RECOMMENDED","Actualizare Plugin AMX Mod X recomandatã!");
//admin menu
define("_MENUHOME","Admin Acasã");
define("_MENUMAINSERVER","Server");
define("_MENUMAINWEB","Site");
define("_MENUMAINOTHER","alții");
define("_MENUMAINMODULE","Modul");
define("_MENUSERVER","Server");
define("_MENUAMXADMINS","Admini AMX");
define("_MENUSERVERADMINS","Adaugã Admini AMX");
define("_MENUREASONS","Motive Ban");
define("_MENUWEBCONFIG","Setãri");
define("_MENUUSERLEVEL","Nivel utilizator");
define("_MENUWEBADMINS","Admini web");
define("_MENUUSERMENU","Meniu utilizator");
define("_MENUMODULE","Modul");
define("_MENUUPDATE","Actualizare");
define("_MENUINFO","Informații sistem");
define("_MENULOGS","Regiștrii");
//admin user menu
define("_USERMENU","Meniu utilizator");
define("_USERMENUSETTINGS","Setãri meniu utilizator");
define("_MENULOGGEDIN","Utilizator conectat");
define("_MENULOGGEDOUT","Utilizator deconectat");
define("_POSITION","Poziție");
define("_LANGKEY1","Tastã Limba 1");
define("_LANGKEY2","Tastã Limba 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Meniu utilizator nou");
//admin module
define("_MODULSETTINGS","Administrare Modul");
define("_MODULSETTINGS2","Setãri Modul");
define("_NAMELANGKEY","Tastã limbi pentru Meniu");
define("_INDEXSITE","Paginã Index");
define("_ADMINSITE","Paginã Admin");
define("_TEMPLATE","Șablon");
//admin info
define("_SERVERINFO","Informații Server");
define("_SERVERSETUP","Setãri Server");
define("_PHPMODULES","Modul PHP");
define("_OTHERFUNCTIONS","alte funcții");
define("_STATISTIK","Statistici");
define("_CLEARCACHE","Golește paginã Cache");
define("_DBSIZE","Mãrime Bazã de Date");
define("_DBOPTIMIZE","Optimizeazã Bazã de Date");
define("_OPTIMIZE","Optimizeazã");
define("_PRUNEDB","Tãiere Banuri");
define("_PRUNE","Tãiere");
define("_DBPRUNED","Banuri tãiate");
//user level
define("_ADMINLEVELSETTINGS","Administrare Nivel Admin Web");
define("_AMXADMINS","Admini AMX");
define("_WEBSETTINGS","Setãri Web");
define("_LEVELVIEW","Afișeazã");
define("_LEVELUNBAN","Unban");
define("_LEVELIMPORT","Importã");
define("_LEVELEXPORT","Exportã");
define("_PERM","Nivele Utilizator");
define("_DBPRUNE","Taie BdD");
define("_SERVEREDIT","Editeazã Server");
define("_NEWLEVEL","Nivel nou");
define("_YOURLEVEL","Nivelul dvs:");
//admin logs
define("_LOGS","Regiștrii Site");
define("_FILTER","Filtru");
define("_ALL","toate jurnalele");
define("_OLDERTHEN","Regiștrii mai vechi de");
define("_GO","Pornește");
define("_ACTION","Acțiune");
define("_ACTIONLOGS","Acțiuni Efectuate");
define("_REMARKS","Descriere");
define("_USER","Utilizator");
//add ban
define("_ADDBAN","Adaugã Ban");
define("_NEWBAN","Adaugã Ban Nou");
define("_NOBANNAME","Nici un nume introdus!");
define("_ACTIVBANEXISTS","Existã deja un ban activ!");
//messages
define("_BANADDSUCCESS","Ban adãugat cu succes");
define("_BANEDITED","Ban salvat");
define("_AMXADMINSAVESUCCESS","Admin AMX Mod X salvat cu succes");
define("_AMXADMINDELETED","Admin AMX Mod X șters");
define("_AMXADMINADDED","Admin AMX Mod X adãugat");
define("_NONAME","Numele lipsește!");
define("_NOFLAGS","Flag-urile lipsesc!");
define("_NOSTEAM","Nu a fost introdus nici un SteamID!");
define("_NOVALIDTIME","Timp valabilitate lipsã!");
define("_REASONSETADDED","Configurație motiv adãugatã");
define("_REASONSETDELETED","Configurație motiv ștearsã");
define("_REASONSSETSAVED","Configurație motiv salvatã");
define("_REASONADDED","Motiv adãugat");
define("_REASONDELETED","Motiv șters");
define("_REASONSAVED","Motiv salvat");
define("_SADMINSAVED","Admin Server salvat");
define("_SERVERSAVED","Setãri Server salvate");
define("_SERVERDELETED","Server șters");
define("_CACHEDELETED","Cache Site golit");
define("_LOGDELETED","Înregistrãri șterse");
define("_MODULSAVED","Setãri modul salvate");
define("_CONFIGSAVED","Setãri salvate");
define("_LEVELADDED","Nivel creat");
define("_LEVELDELFAILED","Eroare:<br /><br />Admin(i) web cu acest nivel încã existã!<br />Nivelul nu poate fi șters.");
define("_LEVELDELETED","Nivel șters");
define("_LEVELSAVED","Nivel salvat");
define("_USERMENUDELETED","Meniu utilizator șters");
define("_USERMENUADDED","Meniu utilizator adãugat");
define("_USERMENUPOSSAVED","Poziție Meniu Utilizator salvatã");
define("_USERMENUSAVED","Meniu Utilizator salvat");
define("_WADMINSAVED","Admin Web salvat");
define("_WADMINDELETED","Admin Web șters");
define("_WADMINADDED","Admin Web adãugat");
define("_COMDELETED","Comentariu șters");
define("_COMADDED","Comentariu adãugat");
define("_COMEDITED","Comentariu editat");
define("_WRONGCAPTCHA","Cod de Siguranțã Greșit!");
define("_FILEDELFAILED","Fișierul nu poate fi șters!");
define("_FILENOTFOUND","Fișierul nu a fost gãsit!");
define("_ERROR","Eroare");
define("_FILEEDITED","Intrare salvatã");
define("_FILENOFILE","Nici un fișier!");
define("_FILETYPENOTALLOWED","Tipul fișierului nu este acceptat!");
define("_FILETOBIG","Fișierul este prea mare!");
define("_FILEUPLOADFAIL","Eroare încãrcare!");
define("_FILEUPLOADSUCCESS","Încãrcare fișier reușitã");
define("_FILENOTAVAILABLE","Fișier inexistent!");
define("_FILEDELSUCCESS","Fișier șters cu succes");
define("_NOREQUIREDFIELDS","Câmpurile necesare lipsesc!");
define("_DBOPTIMIZED","Baza de Date optimizatã");
//live viewer
define("_SELECTSERVER","Alege Server");
define("_ADDHLSW","Adaugã la HLSW");
define("_CONNECT","Conecteazã");
define("_NUMBER","#");
define("_FRAGS","Fraguri");
define("_ONLINE","Timp");
define("_ADDRESS","Adresã");
define("_MAP","Hartã");
define("_NEXTMAP","urmãtoarea hartã");
define("_TIMELEFT","Timp rãmas");
define("_TIMELIMIT","Timp limitã");
define("_FRIENDLYFIRE","Friendly fire");
define("_GAMETYPE","Joc");
define("_ANTICHEAT","Unelte Anticheat");
define("_ADDONS","Addon-uri");
define("_PROTOCOL","Protocol");
define("_NOPLAYERS","Lipsã Jucatori");
define("_PLAYERCONNECTING","Jucãtorul se conecteazã...");
define("_SERVEROFFLINE","Server indisponibil");
define("_REFRESH","Reîmprospateazã");
define("_NOTIMELIMIT","fãrã timp limitã");
//live ban
define("_ADDBANONLINE","Adaugã Ban Online");
define("_BANSETTINGS","Setãri Ban / Kick");
define("_SHOW","Afișeazã");
define("_USERID","ID Utilizator");
define("_STATUSNAME","Nume statut");
define("_BOT","Bot");
define("_PLAYER","Jucãtor");
define("_HLTV","HLTV");
define("_UNKNOWN","necunoscut");
define("_BAN","Ban");
define("_KICK","Kick");
define("_WRONGRCON","Parolã RCON greșitã!");
define("_PLAYERKICKED","Jucãtorul a primit kick!");
define("_ADDBANSUCCESSKICK","Ban adãugat. Jucãtorul va primi kick!");
define("_BANANDKICK","kick jucãtor dupã ban");
define("_BANPLAYER","Ești sigur cã vrei sã banezi acest jucãtor?");
define("_KICKPLAYER","Ești sigur cã vrei sã dai kick acestui jucãtor?");
//title
define("_TITLEADMIN","Repartizare Admin");
define("_TITLEADMINLIST","Listã Admin");
define("_TITLEBANLIST","Banlist");
define("_TITLELOGIN","Login");
define("_TITLESEARCH","Cãutare");
define("_TITLEVIEW","Status Server Live");
define("_TITLEBANDETAIL","Detalii");
define("_TITLEBANADD","Adaugã Ban");
define("_TITLEBANADDONLINE","Adaugã Ban Online");
define("_TITLEAMXADMINS","Admini AMX Mod X");
define("_TITLEREASONS","Motiv Ban");
define("_TITLESERVERADMINS","Admini Server");
define("_TITLESERVER","Server");
define("_TITLEINFO","Informații");
define("_TITLELOGS","Regiștrii");
define("_TITLEMODULE","Modul");
define("_TITLEUPDATE","Verrificã versiune");
define("_TITLEUSERLEVEL","Nivel utilizator");
define("_TITLESITE","Setãri Paginã");
define("_TITLEUSERMENU","Meniu utilizator");
define("_TITLEWEBADMIN","Admin Web");
//value check
define("_NOUSERNAME","Nici un utilizator nu a fost introdus!");
define("_NOPASSWORD","Nici o parolã nu a fost introdusã!");
define("_ACCESSINVALID","Acces nepermis!");
define("_FLAGSBCDMISSING","Steagul trebuia sã fie B, C sau D!");
define("_NONICKNAME","Nici un Nick nu a fost introdus!");
define("_NOTAG","Nici un Tag-Clan / Nume nu a fost introdus!");
define("_EMAILINVALID","Adresã email incorectã!");
define("_STEAMIDINVALID","SteamID incorect!");
define("_IPINVALID","Adresã IP incorectã!");
define("_FLAGSINVALID","Flaag-uri incorecte!");
define("_USERNAMETOSHORT","Nume prea scurt!");
define("_USERNAMETOLONG","Nume prea lung!");
define("_NICKNAMETOSHORT","Nick prea scurt!");
define("_NICKNAMETOLONG","Nick prea lung!");
define("_PASSWORDTOSHORT","Parolã prea scurtã!");
define("_PASSWORDTOLONG","Parolã prea lungã!");
define("_NOREASONSET","Nici un motiv nume introdus!");
define("_REASONSETTOSHORT","Nume grup motiv prea scurt!");
define("_REASONSETTOLONG","Nume grup motiv prea lung!");
define("_NOREASON","Nici un motiv Ban introdus!");
define("_REASONTOSHORT","Motiv Ban prea scurt!");
define("_REASONTOLONG","Motiv Ban prea lung!");
define("_PASSWORDNOTMATCH","Parolele introduse nu coincid!");
define("_NOCOMMENT","Nici un comentariu introdus!");
define("_NOEDITREASON","Nu s-a introdus motivul editării!");
define("_COMMENTTOSHORT","Comentariu prea scurt!");
define("_COMMENTTOLONG","Comentariu prea lung!");
define("_STEAMTOLONG","SteamID prea lung!");
define("_STEAMTOSHORT","SteamID prea scurt!");
define("_NOIP","Nici un IP introdus!");
define("_IPTOLONG","IP prea lung!");
define("_IPTOSHORT","IP prea scurt!");
//alerts
define("_SAVEEDIT","Salvezi schimbãrile?");
define("_DELBAN","Ești sigur cã vrei sã ștergi acest ban?");
define("_DELDEMO","Ești sigur cã vrei sã ștergi acest fișier?");
define("_DELCOMMENT","Ești sigur cã vrei sã ștergi acest comentariu?");
define("_DELADMIN","Ești sigur cã vrei sã ștergi acest Admin?");
define("_DELLEVEL","Ești sigur cã vrei sã ștergi acest nivel?");
define("_DELLOGSALL","Ești sigur cã vrei sã ștergi toate înregistrãrile?");
define("_DELLOGS","Ești sigur cã vrei sã ștergi aceste înregistrãri?");
define("_SAVESETTINGS","Salvezi setãrile și aplici?");
define("_DATALOSS","Informația NU poate fi recuperatã!");
define("_DELSERVER","Ești sigur cã vrei sã ștergi acest server?");
//motd
define("_NOEXPIREDBANS","Lipsã Banuri Expirate");
define("_YOUAREBANNED","Ai fost banat!!");
//new design related
define("_OS", "OS");
define("_VAC", "VAC");
define("_VAC_ALT", "Anti-Cheat Valve");
define("_NA", "Indisponibil");
define("_STATS", "Statistici");
define("_PERM_BANS", "Banuri Permanente");
define("_TEMP_BANS", "Banuri Temporare");
define("_ACTIVE_SERVERS", "Servere Active");
define("_LATEST_BAN", "Ultimele Banuri");
define("_LATEST_KICKS", "Ultimele Kick-uri");
define("_BROWSE_ALL", "Rãsfoiește tot");
define("_POWERED_BY", "Susținut de");
define("_DESIGN_BY", "Tema creatã de");
define("_NO_BANS", "Nu existã banuri în baza de date");
define("_FIRST_PAGE", "Prima Paginã");
define("_LAST_PAGE", "Ultima Paginã");
define("_PREVIOUS_PAGE", "Pagina Precedentã");
define("_NEXT_PAGE", "Pagina Urmãtoare");
define("_PICK_DATE", "Alege o datã");
define("_WEB_VERSION", "Versiune Site");
define("_WEBSERVER", "Server Web");
define("_MODULES", "Module");
define("_MIN_OR", "minute sau");
define("_SIZE", "Mãrime");
define("_UPD_CONNECT_ERROR", "Nu s-a putut stabili nici o conexiune spre serverul actualizat!"); 
define("_UPD_DB_ERROR", "Baza de date necesarã actualizãrii nu a putut fi gãsitã.");
define("_UPD_SELECT_ERROR", "Baza de date necesarã actualizãrii nu poate fi selectatã.");
define("_ADMINID", "SteamID-ul Adminului");
define("_TRACKBACK", "Trackback");  
define("_SETUP_EXISTS", "<b>Alerta de Securitate!</b><br />setup.php inca ramane in directorul AMXBans.<br /><br />Puteti inca accesa Panoul de Control, dar va recomandam sa stergeti fisierul! ");
?>