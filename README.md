# About Joblister
Joblister is made with laravel 8 and vue js. <br/>
Having user,author,admin role and permissions <br/>
Live : [Click Me](http://joblister-laravel-8.herokuapp.com) <br/>

<br />
>Installation at the bottom 
<br />

<br />
## Screenshots of this app

<p>
    
### Home Page
<a href="https://i.ibb.co/FJytDVn/Screenshot-61.png"><img src="https://i.ibb.co/FJytDVn/Screenshot-61.png" target="_blank" alt="Capture" border="0" /></a>
<br />

### Vuejs Spa Job finder
<a href="https://i.ibb.co/sJwZw8x/Screenshot-66.png"><img src="https://i.ibb.co/sJwZw8x/Screenshot-66.png" target="_blank" alt="Screenshot-23"
border="0" /></a>
<br />

### Post Description panel
<a href="https://i.ibb.co/gMTxxj2/Screenshot-69.png"><img src="https://i.ibb.co/gMTxxj2/Screenshot-69.png" target="_blank" alt="Screenshot-9"
border="0" /></a>
<br />

### Author Dashboard
<a href="https://i.ibb.co/C6JKQ1h/Screenshot-78.png"><img src="https://i.ibb.co/C6JKQ1h/Screenshot-78.png" alt="Screenshot-46" border="0" /></a>
<br />

### Admin Dashboard
<a href="https://i.ibb.co/mD4961P/Screenshot-79.png"><img src="https://i.ibb.co/mD4961P/Screenshot-79.png" alt="Screenshot-46" border="0" /></a>
<br />

</p>

## Installations

<br />
## If you receive and error while installation below::

> run composer update instead of composer install
> also run php artisan key:generate

## 1. Clone the repository

> https://github.com/nishangupta/joblister-laravel-8.git

<br />

## 2. Set the basic config

> Edit example.env to .env <br />
> Put your db username and password here with DB_DATABASE=job_lister. <br />
> ''' <br />

    DB_CONNECTION=mysql <br />
    DB_HOST=127.0.0.1 <br />
    DB_PORT=3306 <br />
    DB_DATABASE=job_lister <br /> !important
    DB_USERNAME=root <br />
    DB_PASSWORD= <br />

'''
<br />

## 3. Install Dependencies

> ~composer install <br />
> ~npm install <br />
> ~npm run dev
> <br />

## 4. Migrate Database

> ~php artisan migrate:fresh <br />
> ~php artisan db:seed <br /> > <br />

## 5. Serve application

> ~php artisan serve <br />

