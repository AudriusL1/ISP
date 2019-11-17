<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191117180141 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE alert ADD gadget_id INT NOT NULL');
        $this->addSql('ALTER TABLE alert ADD CONSTRAINT FK_17FD46C184CDDC26 FOREIGN KEY (gadget_id) REFERENCES safety_gadget (id)');
        $this->addSql('CREATE INDEX IDX_17FD46C184CDDC26 ON alert (gadget_id)');
        $this->addSql('ALTER TABLE electronic_gadget ADD gadget_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE electronic_gadget ADD CONSTRAINT FK_9358E57E6502851F FOREIGN KEY (gadget_group_id) REFERENCES gadget_group (id)');
        $this->addSql('CREATE INDEX IDX_9358E57E6502851F ON electronic_gadget (gadget_group_id)');
        $this->addSql('ALTER TABLE light_gadget ADD color_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE light_gadget ADD CONSTRAINT FK_538E83F37ADA1FB5 FOREIGN KEY (color_id) REFERENCES light_gadget_color (id)');
        $this->addSql('CREATE INDEX IDX_538E83F37ADA1FB5 ON light_gadget (color_id)');
        $this->addSql('ALTER TABLE user CHANGE sistem_id sistem_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE birthday birthday DATETIME DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE alert DROP FOREIGN KEY FK_17FD46C184CDDC26');
        $this->addSql('DROP INDEX IDX_17FD46C184CDDC26 ON alert');
        $this->addSql('ALTER TABLE alert DROP gadget_id');
        $this->addSql('ALTER TABLE electronic_gadget DROP FOREIGN KEY FK_9358E57E6502851F');
        $this->addSql('DROP INDEX IDX_9358E57E6502851F ON electronic_gadget');
        $this->addSql('ALTER TABLE electronic_gadget DROP gadget_group_id');
        $this->addSql('ALTER TABLE light_gadget DROP FOREIGN KEY FK_538E83F37ADA1FB5');
        $this->addSql('DROP INDEX IDX_538E83F37ADA1FB5 ON light_gadget');
        $this->addSql('ALTER TABLE light_gadget DROP color_id');
        $this->addSql('ALTER TABLE user CHANGE sistem_id sistem_id INT DEFAULT NULL, CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE name name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE lastname lastname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE birthday birthday DATETIME DEFAULT \'NULL\', CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
