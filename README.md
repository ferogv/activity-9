# activity-9

## Project name
Activity 9 — Authentication and Security Demo (Laravel 7)

## Project description
Small Laravel 7 application to demonstrate authentication, protected routes and basic security concepts:
- Public landing page (`/`) for guests.
- Protected dashboard (`/dashboard`) for authenticated users.
- Navbar updates depending on auth state (Login/Register for guests; Dashboard and Logout for users).

## How to run (local)
1. Clone the repository:
   ```bash
   git clone https://github.com/<tu-usuario>/activity-9.git
   cd activity-9
   ```
2. Install PHP dependencies
    ```bash
    composer install
    ```
3. Install JS dependencies and compile assets:
    ```bash
    npm install
    npm run dev
    ```
4. Configure .env (DB and MAIL if needed), then:
    ```bash
    php artisan key:generate
    php artisan migrate
    ```
5. Serve
    ```bash
    php artisan serve
    ```
    