---
title: Create tokens
description: Creazione Tokens
extends: _layouts.documentation
section: content
---

# Creazione Tokens {#create-tokens}

Prima di poter creare i token a tutti i contatti bisogna fare un primo test su un singolo contatto.  
Per effettuare questo test, selezionare il primo contatto importato e cliccare sul tasto **Genera Token**  
![Primo token](https://quaeris-tv.github.io/doc_quaeris/assets/images/create_first_token.png "primo token") 

questo perché bisognerà generare un errore di sistema voluto, in quanto in questo preciso momento verrà creato un nuovo file nel progetto, che sarà la “fotografia” del survey interessato con tutti gli attributi. Quando l’errore verrà visualizzato, tornare indietro con la pagina e riprovare.  

**NB**: l’errore genererà un nuovo file nel progetto, che è una fotografia del survey con gli attributi in quel momento, ciò significa che in un secondo momento, dopo la generazione di questo file, se su limesurvey vengono modificati gli attributi di un partecipante, bisognerà modificare a mano il file generato, entrando nel codice.
Consiglio: se possibile, decidere a priori quali sono gli attributi del survey, prima di iniziare a generare i token.
Questa è la prima operazione che va ad aggiornare il database di limesurvey.  

Dopo aver fatto questa prima prova, è possibile generare i token, selezionando tutti i contatti cliccando sull’apposito tasto e dare conferma  
![Conferma creazione token](https://quaeris-tv.github.io/doc_quaeris/assets/images/confirm_create_token.png "conferma creazione token")  
In base al numero di contatti, il tempo di creazione dei token può variare, in quanto le operazioni di creazione token verranno messi in coda.
Questa operazione creerà nuovi record partecipanti nel software limesurvey.  
**Suggerimento**: controllare che si siano creati tutti controllando l’ultimo record, dell’ultima pagina dell’indice dei contatti, che il campo “token” sia stato valorizzato, prima di inviare inviti.