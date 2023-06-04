CREATE TABLE "book" (
                      id SERIAL PRIMARY KEY,
                      author VARCHAR(255),
                      title VARCHAR(255),
                      publisher VARCHAR(255),
                      isbn VARCHAR(15),
                      is_ebook BOOLEAN,
                      price REAL
);

CREATE TABLE "sales" (
                      id SERIAL PRIMARY KEY,
                      date DATETIME NOT NULL,
                      user_id INTEGER,
                      price REAL NOT NULL
);

CREATE TABLE "sales_user" (
                      id SERIAL PRIMARY KEY,
                      sales_id INTEGER,
                      book_id INTEGER
);

CREATE TABLE "user" (
                      id SERIAL PRIMARY KEY,
                      first_name VARCHAR(255),
                      last_name VARCHAR(255),
                      email VARCHAR(255),
                      login VARCHAR(255),
                      password VARCHAR(255)
);



ALTER TABLE sales ADD FOREIGN KEY (id) REFERENCES sales_user (sales_id);

ALTER TABLE book ADD FOREIGN KEY (id) REFERENCES sales_user (book_id);

ALTER TABLE user ADD FOREIGN KEY (id) REFERENCES sales (user_id);
