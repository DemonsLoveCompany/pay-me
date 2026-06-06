CREATE TABLE contract_data (
  contract_ID int AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  sign_date VARCHAR(255) NOT NULL,
  witness VARCHAR(255) NOT NULL
) ENGINE = InnoDB;

-- Bug #1 MySQL needs the parentheses values for data types VARCHAR(needed)