<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# Laravel" 
"# test" 




peto predavanjeee

VEZE IMEDJU TABELA
Pravimo country tabelu

komanda php artisan make:model Country -a
ova komanda pravi model model, migraciju, factory, controller i seeder

tabela country da ima name i to je to, nakon toga dodati u tabelu cities kolonu country_id

dodavanje stranog kljuca!!!!
$table->foreignId('imeKoloneuTojTabeli')->constrainted('imeTabele')

posto cemo morat da brisemo sve podatke, moramo postavit da se prvo pokrece kreiranje tabele countries

--nakon toga treba napravit factory za drzave, nek za pocetak bude samo 10 drzava, i onda treba promijenit seeder i factory za gradove, tj dodati da se upisuju i countryID-evi
za country moze isto rand izmedju 1 i 10 jer cemo toliko drzava napraviti

nakon toga treba dodat i prikaz drzave na index i ostalim viewima

u modelu City napraviti metod koji ce vracati kojoj drzavi pripada grad

u modelu drzave napravimo metod cities u kom upisemo return $this->hasMany(City::class)

a u modelu city pisemo metod country u kom vracamo $this->belongsTo(Country::Class) u oba slucaja se radi o modelima 

27:15


prikazati nakon toga drzavu kojoj pripada u tabeli

mozemo vidjeti koji su gradovi u nekoj drzavi tako sto nadjemo tu drzavu npr find(1) koju smjestimo u promjenljivu i onda samo $country->cities i to je to

napravit da se drzava prikazuje u tabeli i da ima link koji vodi na detalje o drzavi, znaci treba napraviti i rute za drzave 
--napravi resource rute za countries

--napravit onda i country controller 
--napraviti i view za drzave, to napraviti u novom folderu

u viewu za prikaz detalja drzave napraviti naslov sa imenom i ispod tabelu sa svim gradovima te drzave


nakon toga kreirat model Contact
--php artisan make:model Contact -a

pravimo tabelu contact sa kolonama 
-name
last name
cityID

i to je to
kreirati factories za lazne podatke kontakata, cityID uzimamo ono rand

pravimo viewe za kontakte i novi contacts folder u view

za kontakta prikazujemo grad, drzavu, detalje edit i brisanje

odraditi ove metode za kontakte i gradove tj povezati strane kljuceve kako treba u modelima

odraditi i upload slike za kontakta, u tabeli dodajemo kolonu broj telefona i profie_image koji je string

unutar public foldera mozemo cuvati neke bezveze slike vezano za aplikaciju tipa logo i tako neke pozadine,

--slike za korisnike tj kontakte cuvamo u Storage->app i tu pravimo folder za slike 
---- php artisan storage:link OVA KOMANDA PRAVI NEKI LINK KA STORAGE-U DJE TREBAJU DA SE CUVAJU SLIKE, TJ UNUTAR PUBLIC FOLDERA KREIRA FOLDER u kom ce da idu slike

na unos kontakta treba imat select listu za gradove i file za unos slike, da bi FORMA MOGLA DA RADI SA FAJLOVIMA TREBA POSTAVITI UNUTAR FORME enctype="multipart/form-data"

CUVANJE FAJLOVA
CONFIG/FILESYSTEMS KORISTIMO PUBLIC UMJESTO LOCAL, TO RADIMO TAKO DA U ENV  POSTAVIMO FILESYSTEM_DRIVER=public


CUVANJE SLIKE TJ FAJLA
--$image_path = $request->file('nazivInputaGdjeJeFajl')->store('imeFoldera')

i u tu promjenljivu imamo putanju do tog fajla, naravno slika je sacuvana u tom folderu unutar store ->app foldera

u promjenljivu imamo tu putanju i tu putanju cuvamo u bazu za sliku

prikaz slike u src pisemo {{ asset($contact->profile_image) asset metod kreira putanju do public foldera



1:23

