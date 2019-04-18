<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190417145923 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE order_products_product');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F8179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE order_products ADD id_order_id INT NOT NULL, CHANGE id_order id_products_id INT NOT NULL');
        $this->addSql('ALTER TABLE order_products ADD CONSTRAINT FK_5242B8EB74984C5E FOREIGN KEY (id_products_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE order_products ADD CONSTRAINT FK_5242B8EBDD4481AD FOREIGN KEY (id_order_id) REFERENCES orders (id)');
        $this->addSql('CREATE INDEX IDX_5242B8EB74984C5E ON order_products (id_products_id)');
        $this->addSql('CREATE INDEX IDX_5242B8EBDD4481AD ON order_products (id_order_id)');
        $this->addSql('ALTER TABLE orders ADD id_user_id INT DEFAULT NULL, ADD id_adress_id INT DEFAULT NULL, DROP id_user, DROP id_address, CHANGE sess_user sess_user VARCHAR(32) DEFAULT NULL, CHANGE total total INT DEFAULT NULL, CHANGE order_date order_date DATETIME DEFAULT NULL, CHANGE payment_mode payment_mode VARCHAR(45) DEFAULT NULL, CHANGE payment_date payment_date DATETIME DEFAULT NULL, CHANGE payment_state payment_state VARCHAR(2) DEFAULT NULL');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE4B3458B FOREIGN KEY (id_adress_id) REFERENCES address (id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE79F37AE5 ON orders (id_user_id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE4B3458B ON orders (id_adress_id)');
        $this->addSql('ALTER TABLE product ADD category_id INT DEFAULT NULL, ADD tag_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD12469DE2 ON product (category_id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADBAD26311 ON product (tag_id)');
        $this->addSql('ALTER TABLE user CHANGE fullname fullname VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBAD26311');
        $this->addSql('CREATE TABLE order_products_product (order_products_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_6A61EAEC4584665A (product_id), INDEX IDX_6A61EAEC7738FE2F (order_products_id), PRIMARY KEY(order_products_id, product_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE order_products_product ADD CONSTRAINT FK_6A61EAEC4584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_products_product ADD CONSTRAINT FK_6A61EAEC7738FE2F FOREIGN KEY (order_products_id) REFERENCES order_products (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE tag');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F8179F37AE5');
        $this->addSql('ALTER TABLE order_products DROP FOREIGN KEY FK_5242B8EB74984C5E');
        $this->addSql('ALTER TABLE order_products DROP FOREIGN KEY FK_5242B8EBDD4481AD');
        $this->addSql('DROP INDEX IDX_5242B8EB74984C5E ON order_products');
        $this->addSql('DROP INDEX IDX_5242B8EBDD4481AD ON order_products');
        $this->addSql('ALTER TABLE order_products ADD id_order INT NOT NULL, DROP id_products_id, DROP id_order_id');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE79F37AE5');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE4B3458B');
        $this->addSql('DROP INDEX IDX_E52FFDEE79F37AE5 ON orders');
        $this->addSql('DROP INDEX IDX_E52FFDEE4B3458B ON orders');
        $this->addSql('ALTER TABLE orders ADD id_user INT NOT NULL, ADD id_address INT DEFAULT NULL, DROP id_user_id, DROP id_adress_id, CHANGE sess_user sess_user VARCHAR(32) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE total total INT DEFAULT NULL, CHANGE order_date order_date DATETIME DEFAULT \'NULL\', CHANGE payment_mode payment_mode VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE payment_date payment_date DATETIME DEFAULT \'NULL\', CHANGE payment_state payment_state VARCHAR(2) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX IDX_D34A04AD12469DE2 ON product');
        $this->addSql('DROP INDEX IDX_D34A04ADBAD26311 ON product');
        $this->addSql('ALTER TABLE product DROP category_id, DROP tag_id');
        $this->addSql('ALTER TABLE user CHANGE fullname fullname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
