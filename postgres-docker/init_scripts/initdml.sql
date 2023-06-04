-- Tabela "book"
INSERT INTO book (author, title, publisher, isbn, is_ebook, price) VALUES
('John Doe', 'The Great Adventure', 'Adventure Publications', '978-1-234567-89-0', false, 29.99),
('Jane Smith', 'Mystery Unraveled', 'Mystery Books Inc.', '978-2-345678-90-1', true, 19.99),
('David Johnson', 'Fantasy World', 'Fantasy Publishing House', '978-3-456789-01-2', false, 24.99),
('Sarah Brown', 'Romantic Dreams', 'Love Stories Ltd.', '978-4-567890-12-3', true, 14.99),
('Michael Wilson', 'Science Explorations', 'Scientific Books Co.', '978-5-678901-23-4', false, 34.99),
('Laura Davis', 'Historical Chronicles', 'History Press', '978-6-789012-34-5', true, 21.99),
('Robert Thompson', 'Thriller Nights', 'Thriller Books Unlimited', '978-7-890123-45-6', false, 27.99),
('Jessica Martin', 'Children''s Tales', 'Kids Publishers', '978-8-901234-56-7', true, 9.99),
('Andrew Wilson', 'Biography Journey', 'Biography House', '978-9-012345-67-8', false, 19.99),
('Emily Anderson', 'Poetry Collection', 'Poetry Press', '978-0-123456-78-9', true, 12.99);

-- Tabela "sale"
INSERT INTO sale (date, user_id, price) VALUES
('2023-06-01 10:30:00', 1, 29.99),
('2023-06-02 14:45:00', 2, 19.99),
('2023-06-03 09:15:00', 3, 24.99),
('2023-06-04 16:20:00', 4, 14.99),
('2023-06-05 12:00:00', 5, 34.99),
('2023-06-06 11:30:00', 6, 21.99),
('2023-06-07 15:45:00', 7, 27.99),
('2023-06-08 08:00:00', 8, 9.99),
('2023-06-09 17:30:00', 9, 19.99),
('2023-06-10 13:15:00', 10, 12.99);

-- Tabela "sale_user"
INSERT INTO sale_user (sales_id, book_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- Tabela "user"
INSERT INTO "user" (first_name, last_name, email, login, password) VALUES
('John', 'Smith', 'john.smith@example.com', 'johnsmith', 'password123'),
('Jane', 'Doe', 'jane.doe@example.com', 'janedoe', 'abc123'),
('David', 'Johnson', 'david.johnson@example.com', 'davidjohnson', 'qwerty'),
('Sarah', 'Brown', 'sarah.brown@example.com', 'sarahbrown', 'pass123'),
('Michael', 'Wilson', 'michael.wilson@example.com', 'michaelwilson', 'secret'),
('Laura', 'Davis', 'laura.davis@example.com', 'lauradavis', 'ilovebooks'),
('Robert', 'Thompson', 'robert.thompson@example.com', 'robertthompson', 'bookworm'),
('Jessica', 'Martin', 'jessica.martin@example.com', 'jessicamartin', 'hello123'),
('Andrew', 'Wilson', 'andrew.wilson@example.com', 'andrewwilson', 'welcome1'),
('Emily', 'Anderson', 'emily.anderson@example.com', 'emilyanderson', 'booksrock');