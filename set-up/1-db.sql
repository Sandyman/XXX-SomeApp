DROP DATABASE IF EXISTS l7_api_db;
DROP USER IF EXISTS 'l7_api_user'@'localhost';
FLUSH PRIVILEGES;
SET storage_engine = 'InnoDB';
SET character_set_server = 'utf8mb4';
SET collation_server = 'utf8mb4_general_ci';
CREATE DATABASE l7_api_db; /*\!40100 DEFAULT CHARACTER SET utf8mb4 */
CREATE USER 'l7_api_user'@'localhost' IDENTIFIED BY 'Secret1';
GRANT ALL PRIVILEGES ON l7_api_db.* TO 'l7_api_user'@'localhost';
GRANT USAGE ON *.* TO 'l7_api_user'@'localhost';
FLUSH PRIVILEGES;
