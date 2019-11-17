<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191117173021 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE electronic_gadget ADD room_id INT NOT NULL');
        $this->addSql('ALTER TABLE electronic_gadget ADD CONSTRAINT FK_9358E57E54177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('CREATE INDEX IDX_9358E57E54177093 ON electronic_gadget (room_id)');
        $this->addSql('ALTER TABLE household_gadget ADD room_id INT NOT NULL');
        $this->addSql('ALTER TABLE household_gadget ADD CONSTRAINT FK_9F51929F54177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('CREATE INDEX IDX_9F51929F54177093 ON household_gadget (room_id)');
        $this->addSql('ALTER TABLE light_gadget ADD room_id INT NOT NULL');
        $this->addSql('ALTER TABLE light_gadget ADD CONSTRAINT FK_538E83F354177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('CREATE INDEX IDX_538E83F354177093 ON light_gadget (room_id)');
        $this->addSql('ALTER TABLE safety_gadget ADD room_id INT NOT NULL');
        $this->addSql('ALTER TABLE safety_gadget ADD CONSTRAINT FK_F84292F554177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('CREATE INDEX IDX_F84292F554177093 ON safety_gadget (room_id)');
        $this->addSql('ALTER TABLE temperature_gadget ADD room_id INT NOT NULL');
        $this->addSql('ALTER TABLE temperature_gadget ADD CONSTRAINT FK_BF236F4954177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('CREATE INDEX IDX_BF236F4954177093 ON temperature_gadget (room_id)');
        $this->addSql('ALTER TABLE user CHANGE sistem_id sistem_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE birthday birthday DATETIME DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE electronic_gadget DROP FOREIGN KEY FK_9358E57E54177093');
        $this->addSql('DROP INDEX IDX_9358E57E54177093 ON electronic_gadget');
        $this->addSql('ALTER TABLE electronic_gadget DROP room_id');
        $this->addSql('ALTER TABLE household_gadget DROP FOREIGN KEY FK_9F51929F54177093');
        $this->addSql('DROP INDEX IDX_9F51929F54177093 ON household_gadget');
        $this->addSql('ALTER TABLE household_gadget DROP room_id');
        $this->addSql('ALTER TABLE light_gadget DROP FOREIGN KEY FK_538E83F354177093');
        $this->addSql('DROP INDEX IDX_538E83F354177093 ON light_gadget');
        $this->addSql('ALTER TABLE light_gadget DROP room_id');
        $this->addSql('ALTER TABLE safety_gadget DROP FOREIGN KEY FK_F84292F554177093');
        $this->addSql('DROP INDEX IDX_F84292F554177093 ON safety_gadget');
        $this->addSql('ALTER TABLE safety_gadget DROP room_id');
        $this->addSql('ALTER TABLE temperature_gadget DROP FOREIGN KEY FK_BF236F4954177093');
        $this->addSql('DROP INDEX IDX_BF236F4954177093 ON temperature_gadget');
        $this->addSql('ALTER TABLE temperature_gadget DROP room_id');
        $this->addSql('ALTER TABLE user CHANGE sistem_id sistem_id INT DEFAULT NULL, CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE name name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE lastname lastname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE birthday birthday DATETIME DEFAULT \'NULL\', CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
