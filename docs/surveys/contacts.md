---
title: Create Contacts
description: Gestione Contatti
extends: _layouts.documentation
section: content
---

# Creazione Customers {#create-customers}

Tramite il tasto contatti/partecipanti è possibile gestire i contatti  
![lista contatti](https://quaeris-tv.github.io/doc_quaeris/assets/images/index_contacts.png "lista contatti")  

Per aggiungere nuovi contatti bisogna importarli cliccando il tasto **Import** che si trova in alto a destra della pagina di modifica del survey  
![bottone import](https://quaeris-tv.github.io/doc_quaeris/assets/images/import_button.png "bottone import")  

Cliccando, si visualizzerà un modal dove sarà possibile caricare il dataset xls dei contatti da inserire
![modal import](https://quaeris-tv.github.io/doc_quaeris/assets/images/modal_import.png "modal import")  

a questo punto bisognerà abbinare ogni singolo attributo, creati con limesurvey, alle colonne degli xls, anche se vuote. Le colonne dell’xls dovranno essere tante quanti sono gli attributi di limesurvey.  
![modal import 2](https://quaeris-tv.github.io/doc_quaeris/assets/images/modal_import2.png "modal import 2")   
Gli attributi sono informazioni riferite al singolo contatto. Vengono creati durante la creazione di un survey attraverso il software limesurvey.
Differenti sono i token, codici alfanumerici che abbinano un contatto, memorizzato nella tabella contatti, al suo set di risposte date, registrate nella tabella delle risposte.

**NB: durante la creazione degli attributi tramite il software limesurvey, bisognerà settare sempre come attribute_3 il numero di cellulare.**