# **Pet Shop**

## **Descrizione:**

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
  
  - L’e-commerce vende **prodotti** per animali.
  
  - I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
  
  - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

## Steps

1. Innanzitutto è necessario immaginare la struttura gerarchica delle classi, una volta individuata si passa alla strutturazione della classe principale e poi alle classi che estendono quest'ultima

2. Una volta individuata la gerarchia strutturo la classe Product con tutti gli attributi necessari a definire un prodotto, mettendo all'interno del costruttore solo gli attributi necessari e gestisco tutti gli altri con delle funzioni getter e setter

3. Creo le classi che estendono il Product, come ad esempio Food, Games e Kennel. Queste classi avranno attributi e metodi unici

4. Importo queste classi all'interno di Product, che a sua volta sarà importato nel database, nel quale in tre array creo le istanze delle varie classi.

5. Completo la valorizzazione degli attributi delle istanze utilizzando le funzioni setter

6. All'interno del body ciclo la card

7. Nella card stampo, tramite le funzioni getter, gli argomenti delle classi