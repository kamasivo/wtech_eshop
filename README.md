Projekt na predmet Webové technológie.

Autor: Ivan Kamas, Miroslav Pavlák


Obrazky nejdu...treba ich vymazat zo zlozky storage/images. ... aj cely folder public/storage.
Vlozit obrazky zo zipka do storage/app/public/images
zadat prikaz php artisan storage:link

Obrazky pojdu.

Pre nacitanie dumpu prikaz psql -h hostname -d dbname -U username filename.dump   ---> nacita sa dump do vytvorenej databazy (prikaz staci dat do prikazoveho riadku)

V pripade novej instalacie ---> composer update v shop, ----> pridat .env ----> nastavit databazu na tu kde importujeme dump ----> obrazky vlozit do pricinka storage/app/public/images ----> php artisan storage:link -------> php artisan serve 
