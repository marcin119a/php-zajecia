

### Model

W modelu trzymamy wszystko, co jest związane z logiką i danymi naszej aplikacji. Wszystkie obliczenia, dodawanie danych, usuwanie, sprawdzanie czy coś jest możliwe itp. Kontroler wykonuje operacje na Modelu i dostaje zrozumiałą dla siebie odpowiedź. Model zawiera też dane do wyświetlenia przez Widok


### Widok (View)

Widok to warstwa prezentacji dla użytkownika końcowego.

Tutaj mieści się cały HTML wraz z szablonami dla poszczególnych stron i ich fragmentów. Taki szablon jest gotowy na przyjęcie i wyświetlenie oczekiwanych danych. Dlatego nie może to być suchy HTML, gdyż jak wiemy, jest on statyczny i nie da rady generować się w zależności od otrzymanych danych.

Z pomocą przychodzi nam język PHP, który może w żądanych miejscach wyświetlić dynamiczny kontent.

Właściwie, by jeszcze bardziej odseparować warstwę widoków od reszty logiki w PHP, powstały liczne narzędzia.
 

### Kontroler

Kontroler jest punktem styku Twojej aplikacji z resztą świata internetu.

Klient kontaktując się z serwerem, wykonuje konkretną akcję na konkretnym kontrolerze.

Kontroler zawiera w sobie logikę i wiedzę, na temat modeli oraz widoków. Dany kontroler wie, z którego modelu ma skorzystać przy przetwarzaniu żądania oraz jaki widok ma przygotować dla zbudowania odpowiedzi.


### Zadanie:

Dopisz swojego routera, który przyjmmie imie i nazwisko i wyświetli Hello Marcin Kowalski 