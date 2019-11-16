<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191116165238 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE electronic_gadget (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, origin_country VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, is_on TINYINT(1) NOT NULL, batery_level INT NOT NULL, manufacturer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gadget_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE household_gadget (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, manufacturer VARCHAR(255) NOT NULL, is_on TINYINT(1) NOT NULL, model VARCHAR(255) NOT NULL, origin_country VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE household_gadget_timer (id INT AUTO_INCREMENT NOT NULL, time TIME NOT NULL, date DATETIME NOT NULL, repeat_again TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temperature_gadget (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, manufacturer VARCHAR(255) NOT NULL, is_on TINYINT(1) NOT NULL, origin VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temperature_timer (id INT AUTO_INCREMENT NOT NULL, time TIME NOT NULL, date DATETIME NOT NULL, repeat_again TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE birthday birthday DATETIME DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE electronic_gadget');
        $this->addSql('DROP TABLE gadget_group');
        $this->addSql('DROP TABLE household_gadget');
        $this->addSql('DROP TABLE household_gadget_timer');
        $this->addSql('DROP TABLE temperature_gadget');
        $this->addSql('DROP TABLE temperature_timer');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE name name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE lastname lastname VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE birthday birthday DATETIME DEFAULT \'NULL\', CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
