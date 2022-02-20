CREATE TABLE blog_comments (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  body text DEFAULT NULL,
  time datetime DEFAULT current_timestamp(),
  postagens_id int(10) UNSIGNED,
  FOREIGN KEY (postagens_id)
        REFERENCES postagens (id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE blog_postagens (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  comment text DEFAULT NULL,
  body text DEFAULT NULL,
  time datetime DEFAULT current_timestamp(),
  users_id int(10) UNSIGNED,
  FOREIGN KEY (users_id)
        REFERENCES users (id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE failed_jobs (
  id bigint(20) PRIMARY KEY AUTO_INCREMENT,
  connection text,
  queue text,
  payload longtext,
  exception longtext,
  failed_at timestamp DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE migrations (
  id int(10) PRIMARY KEY AUTO_INCREMENT,
  migration varchar(255),
  batch int(11)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE password_resets (
  email varchar(255),
  token varchar(255),
  created_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE users (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name varchar(255),
  email varchar(255) NOT NULL UNIQUE,
  email_verified_at timestamp NULL DEFAULT NULL,
  password varchar(255),
  remember_token varchar(100) COLLATE DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
