CREATE TABLE "book" (
                      "id" SERIAL PRIMARY KEY,
                      "author" VARCHAR(255),
                      "title" VARCHAR(255),
                      "publisher" VARCHAR(255),
                      "isbn" VARCHAR(17),
                      "is_ebook" BOOLEAN,
                      "price" REAL
);

CREATE TABLE "sale" (
                      "id" SERIAL PRIMARY KEY,
                      "date" date NOT NULL,
                      "user_id" INTEGER,
                      "price" REAL NOT NULL
);

CREATE TABLE "sale_book" (
                      "id" SERIAL PRIMARY KEY,
                      "sale_id" INTEGER,
                      "book_id" INTEGER
);

CREATE TABLE "user" (
                      "id" SERIAL PRIMARY KEY,
                      "first_name" VARCHAR(255),
                      "last_name" VARCHAR(255),
                      "email" VARCHAR(255),
                      "login" VARCHAR(255),
                      "password" VARCHAR(255)
);



ALTER TABLE "sale_book" ADD FOREIGN KEY ("sale_id") REFERENCES "sale" ("id");
ALTER TABLE "sale_book" ADD FOREIGN KEY ("book_id") REFERENCES "book" ("id");
ALTER TABLE "sale" ADD FOREIGN KEY ("user_id") REFERENCES "user" ("id");
