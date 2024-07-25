# Book Library API

## Installation

1. Clone the repository:
```bash
git clone <repository_url>
cd book-library

composer install

cp .env.example .env
php artisan key:generate

php artisan migrate

php artisan serve

API Endpoints
GET /api/books - Get all books
POST /api/books - Create a new book
GET /api/books/{book} - Get a single book
PATCH /api/books/{book} - Update a book
DELETE /api/books/{book} - Delete a book

Running Tests
php artisan test
