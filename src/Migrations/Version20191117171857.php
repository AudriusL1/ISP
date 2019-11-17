<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191117171857 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE electronic_gadget ADD sistem_id INT NOT NULL');
        $this->addSql('ALTER TABLE electronic_gadget ADD CONSTRAINT FK_9358E57EAC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_9358E57EAC2E1E8E ON electronic_gadget (sistem_id)');
        $this->addSql('ALTER TABLE household_gadget ADD sistem_id INT NOT NULL');
        $this->addSql('ALTER TABLE household_gadget ADD CONSTRAINT FK_9F51929FAC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_9F51929FAC2E1E8E ON household_gadget (sistem_id)');
        $this->addSql('ALTER TABLE light_gadget ADD sistem_id INT NOT NULL');
        $this->addSql('ALTER TABLE light_gadget ADD CONSTRAINT FK_538E83F3AC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_538E83F3AC2E1E8E ON light_gadget (sistem_id)');
        $this->addSql('ALTER TABLE room ADD sistem_id INT NOT NULL');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BAC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_729F519BAC2E1E8E ON room (sistem_id)');
        $this->addSql('ALTER TABLE safety_gadget ADD sistem_id INT NOT NULL');
        $this->addSql('ALTER TABLE safety_gadget ADD CONSTRAINT FK_F84292F5AC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_F84292F5AC2E1E8E ON safety_gadget (sistem_id)');
        $this->addSql('ALTER TABLE temperature_gadget ADD sistem_id INT NOT NULL');
        $this->addSql('ALTER TABLE temperature_gadget ADD CONSTRAINT FK_BF236F49AC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_BF236F49AC2E1E8E ON temperature_gadget (sistem_id)');
        $this->addSql('ALTER TABLE user ADD sistem_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE birthday birthday DATETIME DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649AC2E1E8E FOREIGN KEY (sistem_id) REFERENCES sistem (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649AC2E1E8E ON user (sistem_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE electronic_gadget DROP FOREIGN KEY FK_9358E57EAC2E1E8E');
        $this->addSql('DROP INDEX IDX_9358E57EAC2E1E8E ON electronic_gadget');
        $this->addSql('ALTER TABLE electronic_gadget DROP sistem_id');
        $this->addSql('ALTER TABLE household_gadget DROP FOREIGN KEY FK_9F51929FAC2E1E8E');
        $this->addSql('DROP INDEX IDX_9F51929FAC2E1E8E ON household_gadget');
        $this->addSql('ALTER TABLE household_gadget DROP sistem_id');
        $this->addSql('ALTER TABLE light_gadget DROP FOREIGN KEY FK_538E83F3AC2E1E8E');
        $this->addSql('DROP INDEX IDX_538E83F3AC2E1E8E ON light_gadget');
        $this->addSql('ALTER TABLE light_gadget DROP sistem_id');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519BAC2E1E8E');
        $this->addSql('DROP INDEX IDX_729F519BAC2E1E8E ON room');
        $this->addSql('ALTER TABLE room DROP sistem_id');
        $this->addSql('ALTER TABLE safety_gadget DROP FOREIGN KEY FK_F84292F5AC2E1E8E');
        $this->addSql('DROP INDEX IDX_F84292F5AC2E1E8E ON safety_gadget');
        $this->addSql('ALTER TABLE safety_gadget DROP sistem_id');
        $this->addSql('ALTER TABLE temperature_gadget DROP FOREIGN KEY FK_BF236F49AC2E1E8E');
        $this->addSql('DROP INDEX IDX_BF236F49AC2E1E8E ON temperature_gadget');
        $this->addSql('ALTER TABLE temperature_gadget DROP sistem_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649AC2E1E8E');
        $this->addSql('DROP INDEX IDX_8D93D649AC2E1E8E ON user');
        $this->addSql('ALTER TABLE user DROP sistem_id, CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE name name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE lastname lastname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE birthday birthday DATETIME DEFAULT \'NULL\', CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
