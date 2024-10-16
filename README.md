# Scrabble Club Management System

A simple web application built using Laravel for managing members of a Scrabble club. This application allows users to view members' scores, update contact details, and view a leaderboard of average member scores.

## Author

**Mohamed Helal**

## Table of Contents

- [Installation](#installation)
- [Setup](#setup)
- [Usage](#usage)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/MH4Helal/scrabble-club.git
   cd scrabble-club
   ```

2. **Install Composer dependencies:**

   Make sure you have [Composer](https://getcomposer.org/) installed. Then run:

   ```bash
   composer install
   ```

3. **Copy the `.env.example` file to `.env`:**

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Set up your database:**

   - Create a new database in your MySQL server (e.g., `scrabble_club`).
   - Update the `.env` file with your database connection details:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=scrabble_club
   DB_USERNAME=your_db_username
   DB_PASSWORD=your_db_password
   ```

## Setup

1. **Run migrations:**

   Create the necessary tables in the database by running:

   ```bash
   php artisan migrate
   ```

2. **Seed the database:**

   Populate the database with sample data:

   ```bash
   php artisan db:seed
   ```

## Usage

1. **Start the development server:**

   You can use Laravel's built-in development server to run your application:

   ```bash
   php artisan serve
   ```

   Your application will be available at `http://localhost:8000`.

2. **Access the application:**

   - Navigate to `http://localhost:8000/members` to view the list of members.
   - Navigate to `http://localhost:8000/leaderboard` to view the current leaderboard.
   - You can view, edit, and update member details from this page.

## Features

- View members and their scores
- Update member contact details
- View leaderboard based on average scores

## Technologies Used

- Laravel (PHP Framework)
- MySQL (Database)
- HTML/CSS (Frontend)
- Blade (Laravel's templating engine)

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue if you find any bugs or have suggestions for improvements.

## License

This project is open-source and available under the [MIT License](LICENSE).
