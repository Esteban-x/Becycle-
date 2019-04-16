<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190416151753 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders CHANGE sess_user sess_user VARCHAR(32) DEFAULT NULL, CHANGE id_address id_address INT DEFAULT NULL, CHANGE total total INT DEFAULT NULL, CHANGE order_date order_date DATETIME DEFAULT NULL, CHANGE payment_mode payment_mode VARCHAR(45) DEFAULT NULL, CHANGE payment_date payment_date DATETIME DEFAULT NULL, CHANGE payment_state payment_state VARCHAR(2) DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD tag_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADBAD26311 ON product (tag_id)');
        $this->addSql('ALTER TABLE user CHANGE fullname fullname VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBAD26311');
        $this->addSql('DROP TABLE tag');
        $this->addSql('ALTER TABLE orders CHANGE sess_user sess_user VARCHAR(32) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE id_address id_address INT DEFAULT NULL, CHANGE total total INT DEFAULT NULL, CHANGE order_date order_date DATETIME DEFAULT \'NULL\', CHANGE payment_mode payment_mode VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE payment_date payment_date DATETIME DEFAULT \'NULL\', CHANGE payment_state payment_state VARCHAR(2) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX IDX_D34A04ADBAD26311 ON product');
        $this->addSql('ALTER TABLE product DROP tag_id, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE fullname fullname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
