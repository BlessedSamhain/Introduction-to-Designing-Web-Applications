CREATE TABLE "book" (
                      id SERIAL PRIMARY KEY,
                      author VARCHAR(255),
                      title VARCHAR(255),
                      publisher VARCHAR(255),
                      isbn VARCHAR(15)
);

CREATE TABLE "ebook" (
                      id SERIAL PRIMARY KEY,
                      author VARCHAR(255),
                      title VARCHAR(255),
                      publisher VARCHAR(255),
                      isbn VARCHAR(15)
);

CREATE TABLE "user" (
                      id SERIAL PRIMARY KEY,
                      first_name VARCHAR(255),
                      last_name VARCHAR(255),
                      card_number VARCHAR(255),
                      email VARCHAR(20),
                      login VARCHAR(20),
                      cvc VARCHAR(20),
                      password VARCHAR(20),
                      country VARCHAR(20),
                      phonenumber VARCHAR(20)
);