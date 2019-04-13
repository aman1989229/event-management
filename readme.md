<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

## Libraries and other versions used

- -> Laravel 5.8
- -> Voyager 
- -> PHP 7.1.*
- -> Html 5, css, JavaScript, Bootstrap

## Environment Setup

- **[Download xampp](https://www.apachefriends.org/xampp-files/7.1.27/xampp-windows-x64-7.1.27-1-VC14-installer.exe)**
- **[Install Composer](https://getcomposer.org/Composer-Setup.exe)**
- **[Download Gitbash]**
- **[Open gitbash inside:]** C:\xampp\htdocs
- **[Clone Project from Gitbash]** git clone https://github.com/aman1989229/event.git
User-name:aman1989229
Password:aman123@@@
- **[Download the Database](https://drive.google.com/open?id=1f03LbB9aE3PvXGcGEIGw2YLQw7J1GpQV)**

- After downloading the project, open PHPMyAdmin from xampp
- Create database: event
- Import the database event (downloaded earlier)

## Open Project

Open command-prompt (CMD):
- > Type: cd C:\xampp\htdocs\event
- > to run the Laravel Server Type: php artisan serve
- > paste the link onto ur browser : http://127.0.0.1:8000
- > Userlogin: aman@gmail.com  or you can register by your own (Don't Login with facebook not working) 
- >Pass:: 123456

## Admin Login

http://127.0.0.1:8000/admin

- User-name: admin@admin.com
- Password: password

- After login if you see : Missing storage symlink
- We could not find a storage symlink. This could cause problems with loading media files from the browser.
- >Then click on Fix It (it will automatically fix the storage section) or Go to  C:\xampp\htdocs\event\public folder and delete "Storage" Folder inside it. Then open Command-prompt and type:
- > cd  C:\xampp\htdocs\event
- > php artisan storage:link

- Now, refresh your admin panel and click "Fix It".



## Features implemented

1. Login/Signup for user/admin.
2. Admin can add new venues or events and allow time slots.
3. User can view all Events (available and booked both).
4. Added Filter for Available Events and Reset options.
5. User can view a particular Event.
6. If the Event is available, user can Make Request to book the event.
7. If the event is booked, then user can download that event file as PDF.
8. User can view all his booked events under "Your Booking" option.
9. Events can be made Public or Private by the admin.
10. User can Contact Us for any query through Contact Us Page.


## Admin Features

1. Admin can view total Users, Posts, Events.
2. Admin can add the user, edit, sort and delete the user.
3. Admin can add, sort, delete the event.
4. Admin can view, edit and delete the requested events for booking.
5. Admin can access the database through dashboard.


## For any queries or doubts, call us @ 8726225946 or @ 8896408668