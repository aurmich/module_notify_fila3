---
title: Question Charts
description: Domande del questionario
extends: _layouts.documentation
section: content
---

# Domande del questionario {#question-charts}

Per accedere all’elenco delle domande di un questionario, si può arrivare scrollando verso il basso della pagina di modifica di un survey  
![Lista Domande](https://quaeris-tv.github.io/doc_quaeris/assets/images/index_question_charts.png "lista domande")

## Creazione

Per creare una domanda, che poi verrà visualizzata nel pdf, utilizzare bottone in alto a destra **Nuovo**, che mostrerà un modal dove si dovranno impostare i vari settaggi per la creazione di un grafico sul pdf  
![Crea Domanda](https://quaeris-tv.github.io/doc_quaeris/assets/images/save_question_chart.png "crea domanda")  
    • **domande**: selezionare la domanda interessata che si vuole visualizzare col grafico  
    • **group_name**: stringa relativa al gruppo a cui fa parte la domanda in questione. Se inserita, nel pdf, prima della pagina col grafico relativa alla domanda, verrà creata una pagina che avrà come titolo la stringa inserita.  
    • **answer_value**: utilizzato per le tipologie di domande con risposta si/no, selezionare l’opzione “positiva” alla domanda  
    • **answer_value_txt/answer_value_no_txt**: stringhe che verranno visualizzate come legende nel grafico a ciambella  
    • **data_type**: alcune domande “da 1 a 10” hanno una undicesima opzione tipo “non so/non saprei” con un codice stringa abbinato. In questi casi bisogna settare l’opzione data_type con il valore “da zero a dieci” per escludere dal risultato finale tutte le risposte “non so/non saprei”  
    • **take**: generalmente si imposta a -3, per avere solo gli ultimi 3 raggruppamenti temporali per i grafici a barre verticali  
    • **pos**: numero della posizione nell’indice dei grafici. A volte può capitare, di voler modificare l’ordine delle domande/grafici nel pdf  
    • **show_on_pdf**: se settato, la domanda che si sta impostando verrà visualizzata nel pdf.  
    • **min/max**: valore minimo e massimo delle asse Y per i grafici a barre verticali. Per i grafici relativi alla media l’impostazione massima è sempre 10, per gli altri grafici varia in base ai risultati

![Altre Impostazioni](https://quaeris-tv.github.io/doc_quaeris/assets/images/save_question_chart2.png "altre impostazioni") 
altre impostazioni:  
    • **Type**: tipo di grafico che si vuole visualizzare, l’elenco è costituito da grafici singoli e grafici mixed (cioè costituiti da un mix di 3 grafici singoli)  
    • **group_by/sort_by**: raggruppamento temporale dei dati  

**NB: quando si crea un nuovo survey tramite il software limesurvey, ricordarsi di settare l’impostazione che memorizza la data delle risposte, altrimenti non si potranno fare raggruppamenti temporali dei risultati.**  

• **width/height**: altezza e larghezza del grafico sul pdf, generalmente 700x400 se si tratta di un singolo grafico e non di un mixed chart (che hanno già larghezza e altezza settata)  
• **show_box**: se selezionato e il grafico utilizzato/selezionato è singolo, verrà visualizzato un box come cornice, generalmente questo settaggio è sempre non selezionato  
• **font_family/font_style**: famiglia e stile dei testi visualizzati nel grafico, generalmente si lascia sempre FF_ARIAL e FS_BOLD  
• **font_size**: dimensione del carattere dei testi visualizzati nei grafici  
• **list_color**: lista di colori utilizzati nei grafici  
• **trasparency**: trasparenza del colore  
• **y_grace**: se necessario, per il grafico a barre orizzontali, è possibile “appiattire/accorciare/schiacciare” il grafico lungo a linea orizzontale  
• **yaxis_hide**: generalmente sempre selezionato, non visualizza la griglia dell’asse y, lasciano uno sfondo vuoto  
• **x_label_angle**: generalmente sempre a 0 per i grafici a barre orizzontali, aumentando il numero “inclinano” i testi delle label dei grafici  
• **x_label_margin**: generalmente si lascia 10 di default, per il grafico a barre orizzontali, determina il margine/distanza tra le label e il grafico  
• **plot_perc_width**: generalmente si lascia di default 90, determina lo spessore delle barre dei grafici a barre orizzontali e verticali o in quello del grafico a ciambella  
• **plot_value_show**: se non selezionato, non visualizza i dati nelle barre  
• **plot_value_pos**: determina la posizione della visualizzazione dei dati nei grafici a barre, se dentro le barre o all’apice  

Per verificare che tutte le impostazioni siano andate a buon fine, è possibile generare il singolo grafico dall’elenco delle domande, attraverso il bottone **regenerate**
![Lista Domande](https://quaeris-tv.github.io/doc_quaeris/assets/images/index_question_charts.png "lista domande")  
esso visualizzerà un grafico tipo questo
![Grafico Singolo](https://quaeris-tv.github.io/doc_quaeris/assets/images/single_chart.png "grafico singolo")  