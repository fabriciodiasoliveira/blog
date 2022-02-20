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

CREATE TABLE failed_jobs (
  id bigint(20) PRIMARY KEY AUTO_INCREMENT UNSIGNED NOT NULL,
  connection text COLLATE utf8mb4_unicode_ci NOT NULL,
  queue text COLLATE utf8mb4_unicode_ci NOT NULL,
  payload longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  exception longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  failed_at timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE migrations (
  id int(10) PRIMARY KEY AUTO_INCREMENT UNSIGNED NOT NULL,
  migration varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE password_resets (
  email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  token varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE users (
  id bigint(20) PRIMARY KEY AUTO_INCREMENT UNSIGNED NOT NULL,
  name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(255) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  email_verified_at timestamp NULL DEFAULT NULL,
  password varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  remember_token varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
