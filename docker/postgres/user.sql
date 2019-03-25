DROP TABLE IF EXISTS users CASCADE;
CREATE TABLE users (
   id                SERIAL PRIMARY KEY,
   login             VARCHAR(64),
   display_name      VARCHAR(64),
   UNIQUE(login)
);
