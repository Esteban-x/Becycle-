<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190423100700 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE orders CHANGE id_user_id id_user_id INT DEFAULT NULL, CHANGE id_adress_id id_adress_id INT DEFAULT NULL, CHANGE sess_user sess_user VARCHAR(32) DEFAULT NULL, CHANGE total total INT DEFAULT NULL, CHANGE order_date order_date DATETIME DEFAULT NULL, CHANGE payment_mode payment_mode VARCHAR(45) DEFAULT NULL, CHANGE payment_date payment_date DATETIME DEFAULT NULL, CHANGE payment_state payment_state VARCHAR(2) DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE category_id category_id INT DEFAULT NULL, CHANGE tag_id tag_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE fullname fullname VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category DROP type');
        $this->addSql('ALTER TABLE orders CHANGE id_user_id id_user_id INT DEFAULT NULL, CHANGE id_adress_id id_adress_id INT DEFAULT NULL, CHANGE sess_user sess_user VARCHAR(32) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE total total INT DEFAULT NULL, CHANGE order_date order_date DATETIME DEFAULT \'NULL\', CHANGE payment_mode payment_mode VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE payment_date payment_date DATETIME DEFAULT \'NULL\', CHANGE payment_state payment_state VARCHAR(2) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE product CHANGE category_id category_id INT DEFAULT NULL, CHANGE tag_id tag_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE fullname fullname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
