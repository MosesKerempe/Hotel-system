
# Hotel Management System

This project is a basic hotel management system built with PHP and MySQL. It allows users to check available rooms, make bookings, and process payments. It is designed to demonstrate CRUD (Create, Read, Update, Delete) operations and database interactions in a hotel management context.

---

## Features

1. **Check Available Rooms**: Displays a list of rooms available for booking.
2. **Book a Room**: Allows users to book a room by entering their details.
3. **Payment Processing**: Users can confirm their bookings and make payments.
4. **Admin Dashboard**: Manage rooms, bookings, and payments (if applicable).

---

## Prerequisites

- A web server (e.g., Apache) with PHP installed.
- MySQL database.
- A tool to manage MySQL databases (e.g., phpMyAdmin or MySQL Workbench).

---

## Installation

1. Clone this repository or download the files:

   ```bash
   git clone https://github.com/MosesKerempe/hotel-management-system.git
   ```

2. Move the files to your web server directory (e.g., `htdocs` for XAMPP).

3. Import the database:
   - Open your MySQL database management tool.
   - Create a new database (e.g., `hotel_system`).
   - Import the `hotel_system.sql` file located in the project folder.

4. Update the database configuration:
   - Open the `db.php` file.
   - Update the database connection details:

     ```php
     $servername = "localhost";
     $username = "root";
     $password = "your_password";
     $dbname = "hotel_system";
     ```

5. Start your web server and navigate to the project in your browser (e.g., `http://localhost/hotel-management-system`).

---

## File Structure

```
/hotel-management-system
|-- index.php         # Homepage for checking available rooms
|-- book.php          # Form to book a room
|-- pay.php           # Payment processing page
|-- admin/            # Admin dashboard folder (optional)
|-- db.php            # Database connection file
|-- style.css         # Optional styles for the application
|-- hotel_system.sql  # SQL file to set up the database
```

---

## Usage

1. **Check Available Rooms**:
   - Navigate to `index.php` to view a list of rooms currently available for booking.

2. **Book a Room**:
   - Click the "Book Now" button next to an available room.
   - Fill out the booking form and submit your details.

3. **Make a Payment**:
   - After booking, proceed to `pay.php` to complete the payment process.

4. **Admin Dashboard **:
   - Navigate to the `admin/` directory for managing rooms, bookings, and payments.

---

## Screenshots

- **Homepage (Check Available Rooms)**
  Displays all available rooms with options to book.

- **Booking Form**
  A simple form to collect customer details for room bookings.

- **Payment Page**
  Allows users to confirm bookings and process payments.

---

## Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue if you find a bug or have a suggestion.

---

## License

This project is open-source and available under the [MIT License].

---

## Contact

If you have any questions or need support, please contact:
- **Email**: musakerempe422@gmail.com
- **GitHub**: [MosesKerempe](https://github.com/MosesKerempe)

---

Enjoy building with this hotel management system! :rocket:

