# Laravel To-Do Application

A To-Do application built with Laravel to manage tasks efficiently.

<img src="https://raw.githubusercontent.com/pouyashahrdami/Task-Manager/refs/heads/main/public/git-logo.png" width="400" alt="Laravel Logo">
## Features

- Add, edit, and delete tasks.
- Mark tasks as complete or incomplete.
- Filter tasks by status.
- Responsive design with Bootstrap.

* * *

## Requirements

- PHP >= 8.1
- Composer
- MySQL
- Laravel 10

* * *

## Installation

1. **Clone the Repository**

```
git clone https://github.com/pouyashahrdami/Task-Manager.git
cd laravel-todo-app
```
2. **Install Dependencies**

```
composer install
```
3. **Environment Configuration**
    - Copy the `.env.example` file to `.env`:

```
cp .env.example .env
```
    - Update the `.env` file with your MySQL credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_app 
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

4. **Generate Application Key**

```
php artisan key:generate
```
5. **Run Migrations** Create the database in MySQL, then run migrations to set up the tables:

```
php artisan migrate
```
6. **Start the Application**

```
php artisan serve
```

The application will be accessible at `http://127.0.0.1:8000`.

* * *

## Usage

1. **Access the Application** Open a browser and go to `http://127.0.0.1:8000`.
2. **Features**
    - Use the **Tasks** section to create, view, edit, and delete tasks.
    - Use the **About** section to learn more about the application.
    - Contact the admin using the **Contact** section.

  

## File Locations for the Front Page

- **Blade Templates:**
    - The main front page is located at `resources/views/index.blade.php`.
    - Shared layout files are located in `resources/views/layouts/app.blade.php`.
    - Header and footer files are located in `resources/views/partials/`:
        - `header.blade.php` for the navigation menu.
        - `footer.blade.php` for the footer content.
    - task front pages is located at `resources/tasks/index.blade.php`.
    - task edit pages is located at `resources/tasks/edit.blade.php`.
    - task create pages is located at `resources/tasks/create.blade.php`.

## Contact

For further questions, Please Reach out to me .