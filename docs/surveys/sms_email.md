---
title: Create sms/email
description: Gestione Sms ed Email
extends: _layouts.documentation
section: content
---

# Sms e Email/Inviti {#create-sms-email}

Prima di inviare qualsiasi invito, bisogna creare il testo da inviare.
Per raggiungere l'elenco degli inviti, nella parte inferiore della pagina di modifica del survey, cliccare su **Notify Themes**
![indice inviti](https://quaeris-tv.github.io/doc_quaeris/assets/images/index_notify_themes.png "indice inviti")  

dove si potrà creare (attraverso l’apposito tasto **Nuovo** in alto a destra)
oppure modificare un invito già esistente attraverso il bottoncino con **l’icona della matita/Modifica**  
che aprirà un modal dove inserire tutti i parametri necessari per creare un invito  
![creazione invito](https://quaeris-tv.github.io/doc_quaeris/assets/images/create_notify_theme.png "creazione invito")  

qui si potranno scegliere:  
    • **lang**: la lingua utilizzata per l’invito, generalmente sempre in italiano  
    • **type**: il tipo di invito, ci sono varie opzioni, ma scegliere sms o email  
    • **post type**: selezionare survey_pdf  
    • **post id**: lasciare vuoto, verrà valorizzato in automatico al salvataggio  
    • **subject**: soggetto dell invito  
    • **from**: mittente  
    • **from email**: email mittente (in caso si stia creando una email, di solito sempre survey@quaerisofficina.it)  
    • **logo src**: inserire il logo che verrà visualizzato nella email  
    • **logo width/logo height**: larghezza/altezza in pixel dell'immagine logo caricata  
    • **body**: corpo del messaggio, utilizzato quando si vuole gestire un sms  
    • **body_html**: corpo della email, utilizzato quando si vuole gestire un email  
    • **theme**: scegliere l’opzione empty  


**NOTA BENE**:  
- per creare l'url del questionario scrivere:  
   **https://url_del_software_limesurvey/##survey_id##?token=##token##&lang=##lang##**  
- per creare l'url per non ricevere altri inviti:  
   **https://url_del_software_limesurvey/optout/tokens/##survey_id##?token=##token##&langcode=##lang##**  
- se si crea un sms, il campo from deve avere massimo **11 caratteri**  
- per inserire il logo, scrivere **##logo##** nel punto interessato del body html  