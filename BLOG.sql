CREATE TABLE blog_comments (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  body text DEFAULT NULL,
  time datetime DEFAULT current_timestamp(),
  postagens_id int(10) UNSIGNED NOT NULL,
  FOREIGN KEY (postagens_id)
        REFERENCES postagens (id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE blog_postagens (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  comment text DEFAULT NULL,
  body text DEFAULT NULL,
  time datetime DEFAULT current_timestamp(),
  users_id int(10) UNSIGNED NOT NULL,
  FOREIGN KEY (users_id)
        REFERENCES users (id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE users (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  email varchar(255) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  token varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
