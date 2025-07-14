
# Simple CRM - Contact Manager

A basic CRM system built with Laravel to manage contacts with features to add, view, edit, delete, and search contacts.

---

## Features

- Add new contacts (Name, Email, Phone, Company, Notes)
- View all contacts
- Edit and delete contacts
- Search contacts by name or email

---

## Requirements

- PHP 8.0 or higher
- Composer
- MySQL or MariaDB
- Web server (Apache, Nginx, or Laravel's built-in server)

---

## Setup Instructions

1. **Clone the repository**

```bash
git clone https://github.com/prabodhahdev/crm-system
cd crm-system
````

2. **Install dependencies**

```bash
composer install
```

3. **Set up environment variables**

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

Update `.env` with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. **Generate application key**

```bash
php artisan key:generate
```

5. **Import database**

Import the provided `contacts.sql` file to create tables and seed data:

```bash
mysql -u your_username -p your_database_name < database.sql
```

Alternatively, use phpMyAdmin or any database GUI to import.

6. **Run the application**

Start the development server:

```bash
php artisan serve
```

Open your browser at `http://127.0.0.1:8000`

---

## Usage

* Click **Add New** to create a new contact.
* Use the search bar to filter contacts by name or email.
* Edit or delete contacts from the list.

---

