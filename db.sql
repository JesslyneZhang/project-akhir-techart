CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin','user') NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE rooms (
  id INT AUTO_INCREMENT PRIMARY KEY,
  room_type VARCHAR(100),
  price INT,
  description TEXT
);

INSERT INTO rooms (room_type, price, description) VALUES
('Deluxe Ocean', 750000, 'Ocean view deluxe'),
('Superior Garden', 500000, 'Garden view'),
('Executive Suite', 1200000, 'Luxury executive'),
('Presidential Suite', 2500000, 'Top class suite');

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  booking_code VARCHAR(20),
  user_id INT,

  first_name VARCHAR(100),
  last_name VARCHAR(100),
  email VARCHAR(100),

  room_type VARCHAR(100),
  guests INT,

  arrival_date DATE,
  check_out DATE,
  nights INT,

  pickup ENUM('Free Pickup','No Pickup'),

  room_price INT,
  tax INT,
  total_price INT,

  status ENUM('pending','paid') DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  booking_id INT,
  payment_method VARCHAR(50) DEFAULT 'Credit Card',
  last_card_number VARCHAR(4),
  total INT,
  status ENUM('pending','success') DEFAULT 'pending',
  payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
