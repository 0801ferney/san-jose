# Hogar San Jose

## Project Overview
Hogar San Jose is a web application designed for a senior home located in Fomeque, Colombia. The application allows visitors to register and provides a simple interface for managing visitor information.

## Project Structure
```
hogar-san-jose
├── public
│   ├── index.php          # Main entry point for the web application
│   ├── registro.php       # User registration page
│   └── styles.css        # Styles for the web application
├── src
│   ├── db.php            # Database connection and configuration
│   └── controllers
│       └── visitantesController.php # Logic for handling visitor actions
├── sql
│   └── san_jose.sql      # SQL commands to create the database and tables
└── README.md             # Project documentation
```

## Setup Instructions
1. **Clone the Repository**
   Clone the project repository to your local machine.

2. **Database Setup**
   - Import the `sql/san_jose.sql` file into your MySQL database to create the `san_jose` database and the `visitantes` table.
   - Update the database connection settings in `src/db.php` as needed.

3. **Web Server**
   - Ensure you have a web server (like Apache or Nginx) set up to serve the `public` directory.
   - Access the application via your web browser at `http://localhost/hogar-san-jose/public/index.php`.

## Features
- User registration for visitors.
- Database management for storing visitor information.
- Simple and clean user interface.

## Contributing
Contributions are welcome! Please feel free to submit a pull request or open an issue for any suggestions or improvements.