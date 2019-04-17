<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190417130114 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE order_products (id INT AUTO_INCREMENT NOT NULL, id_order INT NOT NULL, qty INT NOT NULL, price INT NOT NULL, total INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_products_product (order_products_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_6A61EAEC7738FE2F (order_products_id), INDEX IDX_6A61EAEC4584665A (product_id), PRIMARY KEY(order_products_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, sess_user VARCHAR(32) DEFAULT NULL, id_address INT DEFAULT NULL, total INT DEFAULT NULL, order_date DATETIME DEFAULT NULL, order_state INT NOT NULL, payment_mode VARCHAR(45) DEFAULT NULL, payment_date DATETIME DEFAULT NULL, payment_state VARCHAR(2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price INT NOT NULL, image VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(255) DEFAULT NULL, username VARCHAR(255) NOT NULL, password LONGTEXT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthdate DATE NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order_products_product ADD CONSTRAINT FK_6A61EAEC7738FE2F FOREIGN KEY (order_products_id) REFERENCES order_products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_products_product ADD CONSTRAINT FK_6A61EAEC4584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE order_products_product DROP FOREIGN KEY FK_6A61EAEC7738FE2F');
        $this->addSql('ALTER TABLE order_products_product DROP FOREIGN KEY FK_6A61EAEC4584665A');
        $this->addSql('DROP TABLE order_products');
        $this->addSql('DROP TABLE order_products_product');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE user');
    }
}
