<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191117180836 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE electronic_gadget CHANGE gadget_group_id gadget_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE household_gadget ADD timer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE household_gadget ADD CONSTRAINT FK_9F51929FEE98D9B9 FOREIGN KEY (timer_id) REFERENCES household_gadget_timer (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9F51929FEE98D9B9 ON household_gadget (timer_id)');
        $this->addSql('ALTER TABLE light_gadget CHANGE color_id color_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temperature_gadget ADD timer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temperature_gadget ADD CONSTRAINT FK_BF236F49EE98D9B9 FOREIGN KEY (timer_id) REFERENCES temperature_timer (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BF236F49EE98D9B9 ON temperature_gadget (timer_id)');
        $this->addSql('ALTER TABLE user CHANGE sistem_id sistem_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE birthday birthday DATETIME DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE electronic_gadget CHANGE gadget_group_id gadget_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE household_gadget DROP FOREIGN KEY FK_9F51929FEE98D9B9');
        $this->addSql('DROP INDEX UNIQ_9F51929FEE98D9B9 ON household_gadget');
        $this->addSql('ALTER TABLE household_gadget DROP timer_id');
        $this->addSql('ALTER TABLE light_gadget CHANGE color_id color_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temperature_gadget DROP FOREIGN KEY FK_BF236F49EE98D9B9');
        $this->addSql('DROP INDEX UNIQ_BF236F49EE98D9B9 ON temperature_gadget');
        $this->addSql('ALTER TABLE temperature_gadget DROP timer_id');
        $this->addSql('ALTER TABLE user CHANGE sistem_id sistem_id INT DEFAULT NULL, CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE name name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE lastname lastname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE birthday birthday DATETIME DEFAULT \'NULL\', CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
