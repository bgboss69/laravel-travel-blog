# Korea Travel Blog with Laravel

This repository contains a web application for a Korea travel blog built using Laravel. The application allows users to read travel articles, create accounts, and leave comments on articles.

## Features

- User authentication and authorization using Laravel Breeze
- CRUD functionality for managing travel articles
- Comment system for users to interact with articles
- Responsive design for mobile and desktop devices

## Installation

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/yourusername/korea-travel-blog.git
   ```

2. Navigate to the project directory:

   ```
   cd korea-travel-blog
   ```

3. Install Composer dependencies:

   ```
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure the database settings:

   ```
   cp .env.example .env
   ```

5. Generate the application key:

   ```
   php artisan key:generate
   ```

6. Migrate the database:

   ```
   php artisan migrate
   ```

7. Install NPM dependencies:

   ```
   npm install
   ```

8. Compile assets:

   ```
   npm run dev
   ```

9. Serve the application:

   ```
   php artisan serve
   ```

10. Access the application in your web browser at `http://localhost:8000`.

## Usage

1. Register for an account on the application.
2. Browse the list of articles on the home page.
3. Click on an article to view its details.
4. Leave comments on articles to interact with other users.
5. Logged-in users can create, edit, and delete their own articles.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes. Be sure to follow the [contributing guidelines](CONTRIBUTING.md).

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Enjoy exploring Korea through our travel blog! If you encounter any issues or have suggestions for improvement, please open an issue on GitHub. Thank you for your interest and contribution!
