# PHP Auth Demo

A simple, secure PHP authentication system featuring registration, login, and a protected dashboard.

## Features
- User Registration with password hashing
- Secure Login session management
- Protected Dashboard
- Logout functionality
- Clean CSS styling

## Prerequisites
- PHP 8.0+
- MySQL/MariaDB
- Apache/Nginx

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/adityashirsatrao007/php-auth-demo.git
   ```

2. Set up the database:
   - Create a database named `auth_demo`.
   - Run the SQL queries provided in `db.php` (or manually create a `users` table).

3. Configure environment:
   - Copy `.env.example` to `.env`.
   - Update your database credentials.

4. Run locally:
   ```bash
   php -S localhost:8000
   ```

## Security
- Passwords are hashed using `password_hash()`.
- Session management is implemented for protected routes.
- Basic protection against SQL injection.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
